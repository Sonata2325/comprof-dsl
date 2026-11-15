<section id="beranda" class="relative overflow-hidden border-b border-slate-200 bg-slate-50">
    {{-- pola grid halus --}}
    <div class="pointer-events-none absolute inset-0 opacity-60 [background-image:linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] [background-size:56px_56px] [mask-image:radial-gradient(ellipse_at_top_left,black_30%,transparent_75%)]" aria-hidden="true"></div>

    <div class="container-page relative grid items-center gap-14 py-20 sm:py-24 lg:grid-cols-12 lg:py-28">
        <div class="lg:col-span-7">
            <p class="inline-flex items-center gap-2 rounded-full border border-navy-200 bg-white px-3 py-1 text-xs font-medium text-navy-700">
                <span class="size-1.5 rounded-full bg-navy-600"></span>
                PPJK • Export • Import • Trucking • Freight Forwarding
            </p>

            <h1 class="mt-6 text-sm font-semibold tracking-[0.2em] text-navy-600 uppercase">
                {{ config('company.name') }}
            </h1>
            <p class="mt-3 text-4xl leading-[1.1] font-bold tracking-tight text-navy-950 sm:text-5xl lg:text-6xl">
                Moving Cargo.<br>
                <span class="text-navy-600">Connecting Business.</span>
            </p>
            <p class="mt-6 max-w-xl text-lg leading-relaxed text-slate-600">
                {{ config('company.subheadline') }}
            </p>

            <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                <a href="#layanan" class="btn btn-primary px-6 py-3">
                    Lihat Layanan Kami
                    <x-icon name="arrow-right" class="size-4" />
                </a>
                <a href="#alur" class="btn btn-outline px-6 py-3">Alur Ekspor & Impor</a>
            </div>
        </div>

        {{-- Akses cepat portal KMS --}}
        <aside class="lg:col-span-5" aria-labelledby="quick-access-title">
            <div class="card p-6 shadow-xl shadow-navy-900/5 sm:p-7">
                <div class="flex items-center justify-between">
                    <h2 id="quick-access-title" class="text-sm font-semibold text-navy-950">Akses Cepat Portal Internal</h2>
                    <span class="rounded-full bg-navy-50 px-2.5 py-0.5 text-[11px] font-medium text-navy-700">Knowledge Management</span>
                </div>
                <p class="mt-1.5 text-sm text-slate-500">Khusus karyawan PT. Danatrans Service Logistics.</p>

                <div class="mt-6 space-y-3">
                    <a href="{{ route('kms.kodifikasi') }}" class="group flex items-start gap-4 rounded-xl border border-slate-200 p-4 transition hover:border-navy-300 hover:bg-navy-50/60">
                        <span class="icon-box"><x-icon name="book" /></span>
                        <span class="flex-1">
                            <span class="block font-semibold text-navy-950">Portal Pengetahuan</span>
                            <span class="block text-xs font-medium text-navy-600">KMS Kodifikasi</span>
                            <span class="mt-1.5 block text-sm text-slate-500">Repositori SOP, artikel pengetahuan, dan glosarium.</span>
                        </span>
                        <x-icon name="arrow-right" class="mt-1 size-4 text-slate-400 transition group-hover:translate-x-0.5 group-hover:text-navy-700" />
                    </a>
                    <a href="{{ route('kms.personalisasi') }}" class="group flex items-start gap-4 rounded-xl border border-slate-200 p-4 transition hover:border-navy-300 hover:bg-navy-50/60">
                        <span class="icon-box"><x-icon name="clipboard" /></span>
                        <span class="flex-1">
                            <span class="block font-semibold text-navy-950">Portal Penugasan</span>
                            <span class="block text-xs font-medium text-navy-600">KMS Personalisasi</span>
                            <span class="mt-1.5 block text-sm text-slate-500">Penugasan kerja, kanban progres, dan diskusi tugas.</span>
                        </span>
                        <x-icon name="arrow-right" class="mt-1 size-4 text-slate-400 transition group-hover:translate-x-0.5 group-hover:text-navy-700" />
                    </a>
                </div>

                <a href="{{ route('login') }}" class="mt-5 flex items-center justify-center gap-2 rounded-lg bg-slate-100 py-2.5 text-sm font-medium text-navy-900 transition hover:bg-slate-200">
                    <x-icon name="lock" class="size-4" />
                    Login Sistem
                </a>
            </div>
        </aside>
    </div>
</section>
