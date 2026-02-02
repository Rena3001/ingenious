@extends('client.layout.master')
@section('page_title', __('Contact Us'))
@section('content')

@php
use App\Models\Translation;
$locale = app()->getLocale();
@endphp

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
                                <p>{{ $settings->phone }}</p>
                                <p>{{ $settings->email }}</p>
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
<section class="contact-form-section">
    <div class="background-layers">
        <div class="cws-image-bg"></div>
        <div class="cws-triangle-overlay top-left"></div>
        <div class="cws-triangle-overlay top-right"></div>
    </div>

    <div class="auto-container">
        <div class="row">

            <!-- Left text -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title light">
                        <h2>{{ Translation::getValue('contact_title', $locale) }}</h2>
                        <div class="text">
                            {{ Translation::getValue('contact_description', $locale) }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Form -->
            <div class="form-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="default-form contact-form-two">

                        <form action="{{ route('contact.submit', ['locale' => $locale]) }}" method="POST">

                            @csrf

                            <div class="form-group mb-0">
                                @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                @if(session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                            </div>

                            {{-- Full Name --}}
                            <div class="form-group">
                                <label>{{ Translation::getValue('contact_name', $locale) }}</label>
                                <input type="text" name="username" required>
                                @error('username')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Entity Type --}}
                            <div class="form-group">
                                <label>{{ Translation::getValue('contact_entity_type', $locale) }}</label>
                                <select name="entity_type" required>
                                    <option value="">{{ Translation::getValue('contact_select', $locale) }}</option>
                                    <option value="company">{{ __('entity.company') }}</option>
                                    <option value="individual">{{ __('entity.individual') }}</option>
                                    <option value="legal_entity">{{ __('entity.legal_entity') }}</option>
                                </select>
                                @error('entity_type')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Email --}}
                            <div class="form-group">
                                <label>{{ Translation::getValue('contact_email', $locale) }}</label>
                                <input type="email" name="email" required>
                                @error('email')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Phone --}}
                            <div class="form-group">
                                <label>{{ Translation::getValue('contact_phone', $locale) }}</label>
                                <input type="text" name="phone">
                                @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Message --}}
                            <div class="form-group">
                                <label>{{ Translation::getValue('contact_message', $locale) }}</label>
                                <textarea name="message" required></textarea>
                                @error('message')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            {{-- Submit --}}
                            <div class="form-group">
                                <button class="theme-btn btn-style-three" type="submit">
                                    {{ Translation::getValue('contact_button_text', $locale) }}
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Contact Form Section -->

@endsection