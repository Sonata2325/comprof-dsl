<footer id="kontak" class="bg-navy-950 text-navy-200">
    <div class="container-page grid gap-12 py-16 md:grid-cols-12">
        <div class="md:col-span-5">
            <x-logo light />
            <p class="mt-5 max-w-sm text-sm leading-relaxed text-navy-300">
                {{ config('company.name') }} — {{ config('company.subheadline') }}
            </p>
            <p class="mt-6 text-sm font-medium text-white">{{ config('company.tagline') }}</p>
        </div>

        <div class="md:col-span-4">
            <h2 class="text-sm font-semibold text-white">Kontak & Lokasi</h2>
            <div class="mt-4 flex gap-3 text-sm leading-relaxed">
                <x-icon name="map-pin" class="mt-0.5 size-5 shrink-0 text-navy-400" />
                <address class="not-italic">{{ config('company.address') }}</address>
            </div>
            <p class="mt-5 text-sm">
                @foreach (config('company.fields') as $field)
                    <span class="text-white">{{ $field }}</span>@if (! $loop->last)<span class="mx-1.5 text-navy-500">•</span>@endif
                @endforeach
            </p>
        </div>

        <div class="md:col-span-3">
            <h2 class="text-sm font-semibold text-white">Portal Internal</h2>
            <ul class="mt-4 space-y-2.5 text-sm">
                <li><a href="{{ route('kms.kodifikasi') }}" class="hover:text-white">Portal Pengetahuan (KMS Kodifikasi)</a></li>
                <li><a href="{{ route('kms.personalisasi') }}" class="hover:text-white">Portal Penugasan (KMS Personalisasi)</a></li>
                <li><a href="{{ route('login') }}" class="hover:text-white">Login Sistem</a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-white/10">
        <div class="container-page flex flex-col gap-2 py-6 text-xs text-navy-400 sm:flex-row sm:items-center sm:justify-between">
            <p>&copy; {{ date('Y') }} {{ config('company.name') }}. Seluruh hak cipta dilindungi.</p>
            <p>Semarang, Jawa Tengah — Indonesia</p>
        </div>
    </div>
</footer>
