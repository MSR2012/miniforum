@extends('layout.layout')

@section('title')
    <title>Dashboard</title>
@endsection

@section('stylesheet')

@endsection

@section('content')

    @include('layout.header_desktop')

    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">

        @yield('content_body')

        @include('layout.copyright')
    </div>
@endsection

@section('script')

@endsection