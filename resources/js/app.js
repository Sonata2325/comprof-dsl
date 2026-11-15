/* ------------------------------------------------------------------
 * Menu mobile
 * ------------------------------------------------------------------ */
const menuToggle = document.querySelector('[data-menu-toggle]');
const mobileMenu = document.getElementById('mobile-menu');

if (menuToggle && mobileMenu) {
    const setMenu = (open) => {
        mobileMenu.classList.toggle('hidden', !open);
        menuToggle.setAttribute('aria-expanded', String(open));
        menuToggle.querySelector('[data-menu-open]')?.classList.toggle('hidden', open);
        menuToggle.querySelector('[data-menu-close]')?.classList.toggle('hidden', !open);
    };

    menuToggle.addEventListener('click', () => setMenu(mobileMenu.classList.contains('hidden')));
    mobileMenu.querySelectorAll('[data-menu-link]').forEach((link) => link.addEventListener('click', () => setMenu(false)));
    window.matchMedia('(min-width: 1024px)').addEventListener('change', (e) => e.matches && setMenu(false));
}

/* ------------------------------------------------------------------
 * Tab alur layanan (Ekspor / Impor) — pola ARIA tabs
 * ------------------------------------------------------------------ */
document.querySelectorAll('[data-tabs]').forEach((tablist) => {
    const tabs = [...tablist.querySelectorAll('[role="tab"]')];

    const activate = (tab) => {
        tabs.forEach((t) => {
            const selected = t === tab;
            t.setAttribute('aria-selected', String(selected));
            t.tabIndex = selected ? 0 : -1;
            document.getElementById(t.getAttribute('aria-controls'))?.classList.toggle('hidden', !selected);
        });
    };

    tabs.forEach((tab, i) => {
        tab.addEventListener('click', () => activate(tab));
        tab.addEventListener('keydown', (e) => {
            if (e.key !== 'ArrowRight' && e.key !== 'ArrowLeft') return;
            const next = tabs[(i + (e.key === 'ArrowRight' ? 1 : -1) + tabs.length) % tabs.length];
            activate(next);
            next.focus();
        });
    });
});
