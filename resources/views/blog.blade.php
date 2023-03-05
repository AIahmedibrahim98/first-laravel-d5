@extends('master')
@section('title', 'Blog Page')
@section('content')
    <p>
        <h1 class="text-center">{{ $title }}</h1>
        {{ $post }}
    </p>
@endsection
