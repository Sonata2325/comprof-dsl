@extends('layouts.app')

@section('title', 'Portal KMS Personalisasi')

@section('content')
    <x-placeholder-page
        title="Portal KMS Personalisasi - Dalam Pengembangan"
        module="Portal Penugasan · Strategi Personalisasi"
        icon="clipboard"
        :features="['Penugasan Kerja', 'Kanban Progres', 'Diskusi Tugas']"
    />
@endsection
