@extends('base.base')

@section('title', 'Home')

@section('content')
    @include('components.navbar.navbar')
    <section class="profile">
        @include('components.head')
        
        
    </section>

    @include('components.footer')
@endsection

@push('script')
@endpush
