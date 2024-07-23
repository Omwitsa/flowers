@extends('shared.master')

@section('content')
    @include('shared.header')
    @if(auth()->user()->role === 'Admin')
        @include('shared.admin-sidebar')
    @elseif(auth()->user()->role === 'Foreign')
        @include('shared.foreign-sidebar')
    @else
        @include('shared.local-sidebar')
    @endif

    {{ $slot }}
@stop
