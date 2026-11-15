@php($org = config('company.organization'))

<section id="organisasi" class="section">
    <div class="container-page">
        <div class="mx-auto max-w-2xl text-center">
            <p class="eyebrow">Struktur Organisasi</p>
            <h2 class="section-title">Tim & Divisi Danatrans</h2>
            <p class="section-lead mx-auto">Struktur yang ringkas dengan pembagian tanggung jawab yang jelas di setiap divisi.</p>
        </div>

        {{-- Pimpinan --}}
        <div class="mt-14 flex flex-col items-center">
            @foreach (['director', 'manager'] as $level)
                <div class="w-full max-w-xs rounded-2xl {{ $level === 'director' ? 'bg-navy-900 text-white' : 'border border-navy-200 bg-navy-50' }} px-6 py-5 text-center">
                    <p class="text-xs font-semibold tracking-[0.16em] uppercase {{ $level === 'director' ? 'text-navy-300' : 'text-navy-600' }}">{{ $org[$level]['role'] }}</p>
                    <p class="mt-1.5 text-lg font-semibold {{ $level === 'director' ? 'text-white' : 'text-navy-950' }}">{{ $org[$level]['name'] }}</p>
                </div>
                <span class="h-8 w-px bg-navy-200" aria-hidden="true"></span>
            @endforeach
        </div>

        {{-- Divisi --}}
        <div class="relative">
            <span class="absolute top-0 right-[10%] left-[10%] hidden h-px bg-navy-200 lg:block" aria-hidden="true"></span>

            <ul class="grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
                @foreach ($org['divisions'] as $division)
                    <li class="flex flex-col">
                        <span class="mx-auto hidden h-6 w-px bg-navy-200 lg:block" aria-hidden="true"></span>
                        <article class="card flex flex-1 flex-col p-5">
                            <div class="flex items-center gap-3">
                                <span class="icon-box size-9"><x-icon :name="$division['icon']" class="size-4.5" /></span>
                                <h3 class="text-sm font-semibold leading-snug text-navy-950">{{ $division['name'] }}</h3>
                            </div>

                            <dl class="mt-5 mb-5 space-y-3 text-sm">
                                <div>
                                    <dt class="text-xs text-slate-500">Kepala Divisi</dt>
                                    <dd class="mt-0.5 font-medium text-navy-900">{{ $division['head'] }}</dd>
                                </div>
                                @if (count($division['staff']))
                                    <div>
                                        <dt class="text-xs text-slate-500">Operasional</dt>
                                        <dd class="mt-1.5 flex flex-wrap gap-1.5">
                                            @foreach ($division['staff'] as $staff)
                                                <span class="rounded-md bg-slate-100 px-2 py-0.5 text-xs font-medium text-slate-700">{{ $staff }}</span>
                                            @endforeach
                                        </dd>
                                    </div>
                                @endif
                            </dl>

                            <p class="mt-auto border-t border-slate-100 pt-4 text-xs leading-relaxed text-slate-600">
                                <span class="font-semibold text-slate-700">Tugas utama:</span> {{ $division['duty'] }}
                            </p>
                        </article>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- Unit pendukung --}}
        <div class="mt-4 flex flex-col gap-4 rounded-2xl border border-dashed border-navy-300 bg-navy-50/50 p-5 sm:flex-row sm:items-center">
            <div class="flex items-center gap-3 sm:w-72 sm:shrink-0">
                <span class="icon-box size-9 bg-white"><x-icon :name="$org['support']['icon']" class="size-4.5" /></span>
                <div>
                    <h3 class="text-sm font-semibold text-navy-950">{{ $org['support']['name'] }}</h3>
                    <p class="text-xs text-navy-600">{{ $org['support']['note'] }}</p>
                </div>
            </div>
            <p class="text-sm leading-relaxed text-slate-600">
                <span class="font-semibold text-slate-700">Tugas utama:</span> {{ $org['support']['duty'] }}
            </p>
        </div>
    </div>
</section>
