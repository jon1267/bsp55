@extends('layouts.master')

@section('navigation')
    {!! $navigation !!} {{-- было @include('site.navigation')--}}
@endsection


@section('content')
    {!! $content !!}
    @include('site.request_quote')
@endsection

@section('footer')
    {!! $footer !!} {{--@include('site.footer')--}}
@endsection