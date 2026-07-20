@extends('layouts.app')

@section('content')
    @include('landing.components.hero')
    @include('landing.components.energy-strip')
    @include('landing.components.experience')
    @include('landing.components.gallery')
    @include('landing.components.about')
    @include('landing.components.countdown')
    @include('landing.components.location')
@endsection
