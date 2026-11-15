@extends('layouts.app')

@section('content')
    @include('company-profile.sections.hero')
    @include('company-profile.sections.overview')
    @include('company-profile.sections.vision')
    @include('company-profile.sections.services')
    @include('company-profile.sections.flow')
    @include('company-profile.sections.organization')
@endsection
