@extends('shared.master')

@section('content')
    @include('shared.header')
    @if(!auth()->check())
        <script>window.location = "/logout";</script>
    @elseif(auth()->user()->role === 'Admin')
        @include('shared.admin-sidebar')
    @elseif(auth()->user()->role === 'Foreign')
        @include('shared.foreign-sidebar')
    @else
        @include('shared.local-sidebar')
    @endif

    {{ $slot }}
@stop
