<section id="visi-misi" class="section border-y border-slate-200 bg-slate-50">
    <div class="container-page">
        <div class="max-w-3xl">
            <p class="eyebrow">Visi, Misi & Nilai Layanan</p>
            <h2 class="section-title">Arah dan komitmen kami</h2>
        </div>

        {{-- Visi --}}
        <figure class="mt-12 rounded-2xl bg-navy-900 p-8 text-white sm:p-10">
            <figcaption class="flex items-center gap-2 text-xs font-semibold tracking-[0.18em] text-navy-300 uppercase">
                <x-icon name="eye" class="size-4" /> Visi
            </figcaption>
            <blockquote class="mt-4 max-w-4xl text-xl leading-relaxed font-medium sm:text-2xl">
                “{{ config('company.vision') }}”
            </blockquote>
        </figure>

        {{-- Misi --}}
        <div class="mt-14">
            <h3 class="flex items-center gap-2 text-lg font-semibold text-navy-950">
                <x-icon name="flag" class="size-5 text-navy-600" /> Misi Utama
            </h3>
            <ol class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach (config('company.missions') as $mission)
                    <li class="card p-6">
                        <span class="text-sm font-semibold text-navy-400 tabular-nums">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        <p class="mt-3 font-semibold text-navy-950">{{ $mission['title'] }}</p>
                        <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $mission['desc'] }}</p>
                    </li>
                @endforeach
            </ol>
        </div>

        {{-- Nilai layanan --}}
        <div class="mt-14">
            <h3 class="text-lg font-semibold text-navy-950">Why Danatrans</h3>
            <p class="mt-1 text-sm text-slate-500">Empat nilai layanan yang kami pegang dalam setiap shipment.</p>
            <div class="mt-6 grid gap-px overflow-hidden rounded-2xl border border-slate-200 bg-slate-200 sm:grid-cols-2 lg:grid-cols-4">
                @foreach (config('company.values') as $value)
                    <div class="bg-white p-6">
                        <span class="icon-box"><x-icon :name="$value['icon']" /></span>
                        <p class="mt-5 font-semibold text-navy-950">{{ $value['title'] }}</p>
                        <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $value['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
