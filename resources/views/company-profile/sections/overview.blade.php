<section id="tentang" class="section">
    <div class="container-page grid gap-12 lg:grid-cols-12">
        <div class="lg:col-span-5">
            <p class="eyebrow">Tentang Kami</p>
            <h2 class="section-title">Mitra logistik ekspor-impor dari Semarang</h2>
        </div>

        <div class="lg:col-span-7">
            <div class="space-y-5 text-base leading-relaxed text-slate-600 sm:text-lg">
                @foreach (config('company.overview') as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>

            <ul class="mt-10 grid grid-cols-2 gap-3 sm:grid-cols-4">
                @foreach (config('company.highlights') as $item)
                    <li class="rounded-xl border border-slate-200 p-4">
                        <x-icon :name="$item['icon']" class="size-5 text-navy-600" />
                        <p class="mt-3 text-sm font-medium text-navy-950">{{ $item['label'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
