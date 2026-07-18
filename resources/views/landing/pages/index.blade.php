@extends('layouts.app')

@section('content')
    @include('landing.components.hero')
    @include('landing.components.about')
    @include('landing.components.experience')
    @include('landing.components.performers')
    @include('landing.components.tickets')
    @include('landing.components.gallery')
    @include('landing.components.sponsors')
@endsection
