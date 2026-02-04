@extends('client.layout.master')

@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('partnership_title', $locale))

@section('content')


<!-- Page Title -->
<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{ asset('assets/images/background/37.jpg') }})">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <h1>{{ Translation::getValue('partnership', $locale) }}</h1>
        <ul class="page-breadcrumb">
            <li><a href="{{ url('/') }}">{{ Translation::getValue('home', $locale) }}</a></li>
            <li>{{ Translation::getValue('partnership', $locale) }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="portfolio-single-images">

                    @foreach([1,2,3] as $i)
                    @php $image = 'image_'.$i; @endphp
                    @if($page->$image)
                    <figure class="image">
                        <a href="{{ asset('storage/'.$page->$image) }}" class="lightbox-image" data-fancybox="single-img">
                            <img src="{{ asset('storage/'.$page->$image) }}" alt="">
                        </a>
                    </figure>
                    @endif
                    @endforeach

                </div>
            </div>

            <!-- Sidebar Side -->
            <div class="sidebar-side sticky-container col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar theiaStickySidebar portfolio-single-sidebar">
                    <div class="sticky-sidebar">

                        {{-- Sidebar Title --}}
                        @if($page->sidebar_title)
                        <h3>{{ $page->sidebar_title }}</h3>
                        @endif

                        {{-- Category --}}
                        @if($page->category)
                        <span class="cat">{{ $page->category }}</span>
                        @endif

                        {{-- Intro Text --}}
                        @if($page->intro_text)
                        <p>
                            <strong>{{ $page->intro_text }}</strong>
                        </p>
                        @endif
                        {{-- Description Text --}}
                        @if($page->description_text)
                        <div class="text">
                            {!! $page->description_text !!}
                        </div>
                        @endif


                        {{-- Collaboration Types --}}
                        @if($page->collaboration_types_localized->isNotEmpty())
                        <h5 class="mt-4">
                            {{ Translation::getValue('collaboration_forms', app()->getLocale()) }}
                        </h5>
                        <ul class="list-style-three">
                            @foreach($page->collaboration_types_localized as $value)
                            <li>{{ $value }}</li>
                            @endforeach
                        </ul>
                        @endif

                        {{-- Principles --}}
                        @if($page->principles_localized->isNotEmpty())
                        <h5 class="mt-4">
                            {{ Translation::getValue('partnership_principles', app()->getLocale()) }}
                        </h5>
                        <ul class="list-style-three">
                            @foreach($page->principles_localized as $value)
                            <li>{{ $value }}</li>
                            @endforeach
                        </ul>
                        @endif


                        {{-- CTA Button --}}
                        @if($page->cta_button_link)
                        <a href="{{ url($page->cta_button_link) }}"
                            class="theme-btn btn-style-one mt-4">
                            {{ Translation::getValue('contact_partnership_team', app()->getLocale()) }}
                        </a>
                        @endif

                    </div>
                </aside>
            </div>

        </div>
    </div>
</div>
<!-- End Sidebar Page Container -->

@endsection