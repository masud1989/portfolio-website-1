@extends('layout.app')
@section('title')
    Home
@endsection
@section('content')
    @include('components.homeBanner')
    @include('components.homeService')
@endsection
