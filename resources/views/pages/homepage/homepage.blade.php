@extends('base.base')

@section('title', 'Home')

@section('content')
    @include('components.navbar.navbar')
    <section class="homepage">
        {{-- User --}}
        @include('pages.homepage.info')

        {{-- Admin --}}
    </section>

    @include('components.footer')
@endsection

@push('script')
@endpush
