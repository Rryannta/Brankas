@extends('base.base')

@section('title', 'Home')

@section('content')
    @include('components.navbar.navbar')
    <section class="homepage">
        @include('components.head')
        {{-- User --}}
        @include('pages.homepage.info')
        @include('pages.homepage.history')

        {{-- Admin --}}
    </section>

    @include('components.footer')
@endsection

@push('script')
@endpush
