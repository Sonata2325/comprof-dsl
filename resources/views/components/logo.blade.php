@props(['light' => false])

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-2.5']) }}>
    <span class="flex size-9 items-center justify-center rounded-lg {{ $light ? 'bg-white text-navy-900' : 'bg-navy-900 text-white' }}">
        <svg class="size-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M4 6h9a6 6 0 0 1 0 12H4" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" />
            <path d="M8 10h4.5a2 2 0 0 1 0 4H8" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" opacity=".55" />
        </svg>
    </span>
    <span class="flex flex-col leading-none">
        <span class="text-[15px] font-bold tracking-tight {{ $light ? 'text-white' : 'text-navy-950' }}">DANATRANS</span>
        <span class="mt-1 text-[10px] font-medium tracking-[0.16em] {{ $light ? 'text-navy-200' : 'text-slate-500' }}">SERVICE LOGISTICS</span>
    </span>
</span>
