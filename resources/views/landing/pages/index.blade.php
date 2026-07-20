@extends('layouts.app')

@section('content')
    @include('landing.components.hero')
    @include('landing.components.energy-strip')
    @include('landing.components.about')
    @include('landing.components.experience')
    @include('landing.components.gallery')
    @include('landing.components.countdown')
    @include('landing.components.tickets')
    @include('landing.components.location')
    @include('landing.components.newsletter')
@endsection
