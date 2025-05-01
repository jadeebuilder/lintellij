@extends('frontend.layouts.app')

@section('content')
    @include('frontend.partials._showcase')
    @include('frontend.partials._infinitscroll')
    @include('frontend.partials._welcome')
    @include('frontend.partials._skewticker')
    @include('frontend.partials._whatwedo')
    @include('frontend.partials._creative')
    @include('frontend.partials._ticker')
    @include('frontend.partials._faq1')

    <div class="overflow-hidden">
        @include('frontend.partials._pricing')
        @include('frontend.partials._faq2')
    </div>

    @include('frontend.partials._newsletter')
    @include('frontend.partials._blog')
@endsection 