@extends('layouts.master')


@section('navigation')
    {!! $navigation !!} {{-- было @include('site.navigation')--}}
@endsection

@section('content')
    {!! $slider !!}
    {!! $homes !!}
    {!! $special !!}
    {!! $testimonials !!}
    {!! $bottoms !!}
    @include('site.just_status')
    @include('site.media_section')
@endsection



@section('footer')
    {!! $footer !!} {{--@include('site.footer')--}}
@endsection