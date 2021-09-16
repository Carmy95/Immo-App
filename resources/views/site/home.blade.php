@extends('layouts.sites.master')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/responsive.css') }}">
@endsection
@section('content')

    @include('site.homes.slider')

    @include('site.homes.bien')

    @include('site.homes.promo')

    @include('site.homes.about')


@endsection
