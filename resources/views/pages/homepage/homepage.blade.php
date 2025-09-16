@extends('base.base')

@section('title', 'Home')

@section('content')
    @include('components.navbar.navbar')
    <section class="homepage">
        @include('components.head')
        {{-- User --}}
        @include('pages.homepage.info')

        {{-- Admin --}}
        @include('pages.homepage.pemasukan')


        {{-- all --}}
        @include('pages.homepage.history')
    </section>

    @include('components.footer')
@endsection

@push('script')
@endpush
