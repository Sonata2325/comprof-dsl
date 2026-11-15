@php
    $home = route('home');
    $navLinks = [
        ['href' => $home.'#tentang', 'label' => 'Tentang'],
        ['href' => $home.'#visi-misi', 'label' => 'Visi & Misi'],
        ['href' => $home.'#layanan', 'label' => 'Layanan'],
        ['href' => $home.'#alur', 'label' => 'Alur Layanan'],
        ['href' => $home.'#organisasi', 'label' => 'Organisasi'],
        ['href' => $home.'#kontak', 'label' => 'Kontak'],
    ];
    $portals = [
        ['route' => 'kms.kodifikasi', 'icon' => 'book', 'label' => 'Portal Pengetahuan', 'sub' => 'KMS Kodifikasi'],
        ['route' => 'kms.personalisasi', 'icon' => 'clipboard', 'label' => 'Portal Penugasan', 'sub' => 'KMS Personalisasi'],
    ];
@endphp

<header class="sticky top-0 z-50">
    {{-- Bar utilitas: akses portal internal KMS --}}
    <div class="hidden bg-navy-950 text-navy-100 md:block">
        <div class="container-page flex h-10 items-center justify-between text-xs">
            <p class="flex items-center gap-2 text-navy-300">
                <x-icon name="map-pin" class="size-4" />
                Semarang, Jawa Tengah — PPJK & International Freight Forwarding
            </p>
            <nav class="flex items-center gap-1" aria-label="Portal internal">
                <span class="mr-2 text-navy-400">Portal Internal:</span>
                @foreach ($portals as $p)
                    <a href="{{ route($p['route']) }}"
                       class="inline-flex items-center gap-1.5 rounded-md px-2.5 py-1 font-medium transition hover:bg-white/10 hover:text-white {{ request()->routeIs($p['route']) ? 'bg-white/10 text-white' : '' }}">
                        <x-icon :name="$p['icon']" class="size-3.5" />
                        {{ $p['label'] }} <span class="text-navy-400">({{ $p['sub'] }})</span>
                    </a>
                @endforeach
            </nav>
        </div>
    </div>

    {{-- Navigasi utama --}}
    <div class="border-b border-slate-200/80 bg-white/90 backdrop-blur-md">
        <div class="container-page flex h-16 items-center justify-between gap-6">
            <a href="{{ $home }}" aria-label="{{ config('company.name') }} — Beranda">
                <x-logo />
            </a>

            <nav class="hidden items-center gap-1 lg:flex" aria-label="Navigasi utama">
                @foreach ($navLinks as $link)
                    <a href="{{ $link['href'] }}" class="rounded-md px-3 py-2 text-sm font-medium text-slate-600 transition hover:bg-slate-100 hover:text-navy-900">
                        {{ $link['label'] }}
                    </a>
                @endforeach
            </nav>

            <div class="flex items-center gap-2">
                <a href="{{ route('login') }}" class="btn btn-primary hidden sm:inline-flex">
                    <x-icon name="lock" class="size-4" />
                    Login Sistem
                </a>
                <button type="button" data-menu-toggle aria-controls="mobile-menu" aria-expanded="false"
                        class="inline-flex size-10 items-center justify-center rounded-lg border border-slate-200 text-navy-900 lg:hidden">
                    <span class="sr-only">Buka menu</span>
                    <x-icon name="menu" class="size-5" data-menu-open />
                    <x-icon name="x" class="hidden size-5" data-menu-close />
                </button>
            </div>
        </div>

        {{-- Menu mobile --}}
        <div id="mobile-menu" class="hidden border-t border-slate-200 bg-white lg:hidden">
            <div class="container-page space-y-6 py-5">
                <nav class="grid grid-cols-2 gap-1" aria-label="Navigasi mobile">
                    @foreach ($navLinks as $link)
                        <a href="{{ $link['href'] }}" data-menu-link class="rounded-md px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100">
                            {{ $link['label'] }}
                        </a>
                    @endforeach
                </nav>
                <div class="space-y-2">
                    <p class="eyebrow">Portal Internal</p>
                    @foreach ($portals as $p)
                        <a href="{{ route($p['route']) }}" class="flex items-center gap-3 rounded-xl border border-slate-200 p-3 hover:border-navy-300 hover:bg-navy-50">
                            <span class="icon-box size-9"><x-icon :name="$p['icon']" class="size-4.5" /></span>
                            <span class="text-sm">
                                <span class="block font-semibold text-navy-950">{{ $p['label'] }}</span>
                                <span class="block text-slate-500">{{ $p['sub'] }}</span>
                            </span>
                        </a>
                    @endforeach
                </div>
                <a href="{{ route('login') }}" class="btn btn-primary w-full sm:hidden">
                    <x-icon name="lock" class="size-4" />
                    Login Sistem
                </a>
            </div>
        </div>
    </div>
</header>
