@php
    $title = 'About';
@endphp
@extends('layouts.fontend')
@section('main_content')

<div class="container">
    {!! $about->content !!}
</div>

@endsection
