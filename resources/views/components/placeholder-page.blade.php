@props(['title', 'module', 'icon' => 'wrench', 'features' => []])

<section class="relative overflow-hidden bg-slate-50">
    <div class="pointer-events-none absolute inset-0 opacity-60 [background-image:linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] [background-size:56px_56px] [mask-image:radial-gradient(ellipse_at_center,black_20%,transparent_70%)]" aria-hidden="true"></div>

    <div class="container-page relative flex min-h-[70vh] flex-col items-center justify-center py-24 text-center">
        <span class="icon-box size-14 rounded-2xl bg-white"><x-icon :name="$icon" class="size-7" /></span>

        <p class="mt-8 eyebrow">{{ $module }}</p>
        <h1 class="mt-3 text-3xl font-bold tracking-tight text-navy-950 sm:text-4xl">{{ $title }}</h1>

        <p class="mt-4 inline-flex items-center gap-2 rounded-full border border-amber-200 bg-amber-50 px-3 py-1 text-sm font-medium text-amber-800">
            <span class="size-1.5 rounded-full bg-amber-500"></span>
            Dalam Pengembangan
        </p>

        @if (count($features))
            <ul class="mt-10 flex flex-wrap justify-center gap-2">
                @foreach ($features as $feature)
                    <li class="rounded-lg border border-slate-200 bg-white px-3.5 py-2 text-sm text-slate-600">{{ $feature }}</li>
                @endforeach
            </ul>
        @endif

        {{ $slot }}

        <a href="{{ route('home') }}" class="btn btn-outline mt-10">
            <x-icon name="arrow-left" class="size-4" />
            Kembali ke Beranda
        </a>
    </div>
</section>
