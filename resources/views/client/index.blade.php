{{-- resources/views/home.blade.php --}}
@extends('client.layouts.app')

@section('title', 'QuickDials – Find Local Businesses & Services')
@section('description', 'Search across 0.9 Crore+ businesses, doctors, plumbers, hotels and services near you.')

@section('content')

{{-- ─────────────────────────────────────────
    HERO SECTION
───────────────────────────────────────── --}}

 @include('client.components.homePage.hero-section')

{{-- ─────────────────────────────────────────
    CATEGORY GRID (placeholder — wire to your component)
───────────────────────────────────────── --}}

 @include('client.components.homePage.category-grid')


 @include('client.components.homePage.service-cards')
 @include('client.components.homePage.repair-services')
 @include('client.components.homePage.wedding-planning')
 @include('client.components.homePage.featured-businesses')
 @include('client.components.homePage.blog-service')
 @include('client.components.homePage.stats-banner')
 @include('client.components.homePage.country-flags')




@endsection

