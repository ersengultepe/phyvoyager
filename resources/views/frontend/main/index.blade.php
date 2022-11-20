@extends('layouts.app')
@section('content')
    <div role="main" class="main">
        @include('frontend.main.slides')

        @include('frontend.main.whoweare')
        <hr>

        @include('frontend.main.explore')

        @include('frontend.main.brands')

        @include('frontend.main.blogs')
    </div>
    @endsection