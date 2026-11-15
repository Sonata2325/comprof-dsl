<section id="alur" class="section border-y border-slate-200 bg-slate-50">
    <div class="container-page">
        <div class="flex flex-col justify-between gap-8 lg:flex-row lg:items-end">
            <div>
                <p class="eyebrow">Alur Layanan</p>
                <h2 class="section-title">Proses ekspor & impor yang terukur</h2>
                <p class="section-lead">Setiap shipment melewati tahapan yang jelas sehingga status pengiriman mudah dipantau.</p>
            </div>

            <div class="inline-flex self-start rounded-xl bg-slate-200/70 p-1 lg:self-auto" role="tablist" aria-label="Pilih alur layanan" data-tabs>
                @foreach (config('company.flows') as $key => $flow)
                    <button type="button" role="tab" id="tab-{{ $key }}" aria-controls="panel-{{ $key }}"
                            aria-selected="{{ $loop->first ? 'true' : 'false' }}" tabindex="{{ $loop->first ? '0' : '-1' }}"
                            class="flow-tab flex items-center gap-2 rounded-lg px-4 py-2 text-sm font-semibold text-slate-600 transition hover:text-navy-900">
                        <x-icon :name="$key === 'ekspor' ? 'arrow-up-right' : 'arrow-down-left'" class="size-4" />
                        {{ $flow['label'] }}
                    </button>
                @endforeach
            </div>
        </div>

        @foreach (config('company.flows') as $key => $flow)
            <div id="panel-{{ $key }}" role="tabpanel" aria-labelledby="tab-{{ $key }}" tabindex="0"
                 class="mt-12 {{ $loop->first ? '' : 'hidden' }}" data-tab-panel>
                <ol class="relative grid gap-0 lg:grid-cols-6 lg:gap-4">
                    {{-- garis penghubung (desktop) --}}
                    <span class="absolute top-5 right-[8.33%] left-[8.33%] hidden h-px bg-navy-200 lg:block" aria-hidden="true"></span>

                    @foreach ($flow['steps'] as $step)
                        <li class="relative flex gap-5 pb-8 last:pb-0 lg:flex-col lg:items-center lg:gap-0 lg:pb-0 lg:text-center">
                            {{-- garis penghubung (mobile) --}}
                            @unless ($loop->last)
                                <span class="absolute top-10 bottom-0 left-5 w-px bg-navy-200 lg:hidden" aria-hidden="true"></span>
                            @endunless

                            <span class="relative z-10 flex size-10 shrink-0 items-center justify-center rounded-full bg-navy-800 text-sm font-semibold text-white ring-4 ring-slate-50 tabular-nums">
                                {{ $loop->iteration }}
                            </span>
                            <div class="pt-1.5 lg:mt-5 lg:pt-0">
                                <p class="text-xs font-medium text-navy-500">Tahap {{ $loop->iteration }}</p>
                                <h3 class="mt-1 font-semibold text-navy-950">{{ $step['title'] }}</h3>
                                <p class="mt-1.5 text-sm leading-relaxed text-slate-600">{{ $step['desc'] }}</p>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        @endforeach
    </div>
</section>
