<section id="layanan" class="section">
    <div class="container-page">
        <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">
            <div>
                <p class="eyebrow">Layanan Utama</p>
                <h2 class="section-title">Solusi logistik end-to-end</h2>
                <p class="section-lead">Dari pengurusan dokumen hingga pengantaran cargo, setiap layanan saling terhubung dalam satu koordinasi.</p>
            </div>
        </div>

        <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @foreach (config('company.services') as $service)
                <article class="card group p-7 transition hover:-translate-y-0.5 hover:border-navy-300 hover:shadow-lg hover:shadow-navy-900/5">
                    <div class="flex items-start justify-between">
                        <span class="icon-box transition group-hover:bg-navy-800 group-hover:text-white group-hover:ring-navy-800">
                            <x-icon :name="$service['icon']" />
                        </span>
                        <span class="text-xs font-semibold text-slate-300 tabular-nums">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                    </div>
                    <h3 class="mt-6 text-lg font-semibold text-navy-950">{{ $service['title'] }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-slate-600">{{ $service['desc'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
