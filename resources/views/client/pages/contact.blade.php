@extends('client.layout.master')
@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('contact_title', $locale))
@section('content')



<!--Page Title-->
<section class="page-title">
    <div class="cws-image-bg" style="background-image: url('{{ asset('assets/images/background/37.jpg') }}')">
        <div class="cws-overlay-bg"></div>
    </div>

    <div class="auto-container">
        <h1>{{ Translation::getValue('contact_title', $locale) }}</h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home',['locale' => $locale]) }}">
                    {{ Translation::getValue('breadcrumb_home', $locale) }}
                </a>
            </li>
            <li>{{ Translation::getValue('contact_title', $locale) }}</li>
        </ul>
    </div>
</section>
<!--End Page Title-->



<!-- Features Section Six  -->
<section class="features-section-six">
    <div class="background-layers">
        <div class="cws-image-bg"></div>
    </div>

    <div class="auto-container">
        <div class="row">

            <div class="feature-block-nine col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="icon {{ $settings->contact_orders_icon }}"></span>
                    </div>
                    <h4>{{ Translation::getValue('contact_orders', app()->getLocale()) }}</h4>
                </div>
            </div>

            <div class="feature-block-nine col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="icon {{ $settings->contact_project_icon }}"></span>
                    </div>
                    <h4>{{ Translation::getValue('contact_project', app()->getLocale()) }}</h4>
                </div>
            </div>

            <div class="feature-block-nine col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="icon {{ $settings->contact_support_icon }}"></span>
                    </div>
                    <h4>{{ Translation::getValue('contact_support', app()->getLocale()) }}</h4>
                </div>
            </div>

            <div class="feature-block-nine col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="icon {{ $settings->contact_partner_icon }}"></span>
                    </div>
                    <h4>{{ Translation::getValue('contact_partner', app()->getLocale()) }}</h4>
                </div>
            </div>


        </div>
    </div>
</section>
<!--End Features Section Six -->



<!-- Contact Map Section -->
<section class="contact-map-section">

    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg">
            <div class="cws-triangle-overlay"></div>
        </div>
    </div>

    <!-- XRİTƏ (DOĞRU YER) -->
    <div class="map-outer">
        {!! $settings->map_iframe !!}
    </div>

    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 offset-6">
                <div class="inner-column">

                    <div class="sec-title">
                        <h2>{{ Translation::getValue('contact_how_to_reach', $locale) }}</h2>

                        <div class="text">
                            {{ Translation::getValue('contact_reach_desc', $locale) }}
                        </div>
                    </div>

                    <h4>{{ Translation::getValue('our_company', $locale) }}</h4>

                    <div class="contact-info row">

                        <div class="contact-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner">
                                <span class="icon fa fa-map-signs"></span>
                                <h5>{{ Translation::getValue('contact_address', $locale) }}</h5>
                                <p>{{ $settings->address }}</p>
                            </div>
                        </div>

                        <div class="contact-block col-lg-6 col-md-6 col-sm-12">
                            <div class="inner">
                                <span class="icon fa fa-phone"></span>
                                <h5>{{ Translation::getValue('contact_details', $locale) }}</h5>
                                <a href="https://wa.me/{{ $settings->phone }}" target="_blank"><p>{{ $settings->phone }}</p></a> 
                                <a href="mailto:{{ $settings->email }}"><p>{{ $settings->email }}</p></a>
                                <a href="mailto:{{ $settings->support_email }}"><p>{{ $settings->support_email }}</p></a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<!-- End Contact Map Section -->



<!-- Contact Form Section -->
@include('components.callback')
<!-- End Contact Form Section -->

@endsection