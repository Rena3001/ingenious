@extends('client.layout.master')

@section('page_title', __('Cooperation and Partnership'))

@section('content')
@php
$locale = app()->getLocale();
use App\Models\Translation;
@endphp

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

                        <h3>{{ $page->sidebar_title }}</h3>

                        @if($page->category)
                        <span class="cat">{{ $page->category }}</span>
                        @endif

                        @if($page->intro_text)
                        <p><strong>{{ $page->intro_text }}</strong></p>
                        @endif

                        @if($page->description_text)
                        <div class="text">
                            {!! nl2br(e($page->description_text)) !!}
                        </div>
                        @endif

                        @if(!empty($page->collaboration_types))
                        <h5 style="margin-top:20px;">
                            {{ Translation::getValue('collaboration_forms', $locale) }}
                        </h5>
                        <ul class="list-style-three">
                            @foreach($page->collaboration_types as $item)
                            <li>{{ $item['value'] }}</li>
                            @endforeach
                        </ul>
                        @endif

                        @if(!empty($page->principles))
                        <h5 style="margin-top:20px;">
                            {{ Translation::getValue('partnership_principles', $locale) }}
                        </h5>
                        <ul class="list-style-three">
                            @foreach($page->principles as $item)
                            <li>{{ $item['value'] }}</li>
                            @endforeach
                        </ul>
                        @endif

                        @if($page->cta_button_link)
                        <a href="{{ url($page->cta_button_link) }}"
                            class="theme-btn btn-style-one"
                            style="margin-top:25px;">
                            {{ Translation::getValue('contact_partnership_team', $locale) }}
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