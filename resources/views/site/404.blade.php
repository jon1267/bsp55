@extends('layouts.master')

@section('navigation')
    {!! $navigation !!}     {{-- @include('site.navigation') --}}
@endsection

@section('content')
    {!! $content !!}        {{--@include('site.404_content')--}}
    @include('site.request_quote')
@endsection

@section('footer')
    {!! $footer !!}         {{-- @include('errors.404_footer') --}}
@endsection