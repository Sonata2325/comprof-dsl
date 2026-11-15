@extends('layouts.app')

@section('title', 'Portal KMS Kodifikasi')

@section('content')
    <x-placeholder-page
        title="Portal KMS Kodifikasi - Dalam Pengembangan"
        module="Portal Pengetahuan · Strategi Kodifikasi"
        icon="book"
        :features="['Repositori SOP', 'Artikel Pengetahuan', 'Glosarium']"
    />
@endsection
