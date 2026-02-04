@extends('client.layout.master')
@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('process_title', $locale))

@section('content')



<!-- Page Title -->
<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{ asset('images/background/37.jpg') }})">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <h1>{{ Translation::getValue('page_process_title', $locale) }}</h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home',['locale'=>$locale]) }}">
                    {{ Translation::getValue('breadcrumb_home', $locale) }}
                </a>
            </li>
            <li>{{ Translation::getValue('breadcrumb_process', $locale) }}</li>
        </ul>
    </div>
</section>
<!-- End Page Title -->

<!-- About Process -->
@if($process)
<section class="about-process">
    <div class="auto-container">

        <div class="sec-title">
            <h2>{{ $process->getTranslation('title',$locale) }}</h2>

            <div class="text">
                {{ $process->getTranslation('description',$locale) }}
            </div>
        </div>

        <div class="step-btn">
            <a class="scroll-to-target" data-target="#step-1">
                <span class="step-text">
                    {{ Translation::getValue('process_explore', $locale) }}
                </span>
                <span class="step-arrow">
                    <span class="fa fa-arrow-down"></span>
                </span>
            </a>
        </div>

    </div>
</section>
@endif
<!-- End About Process -->

<!-- Step Section -->
@if(!empty($steps) && count($steps))
@foreach($steps as $step)

    @if($step->layout === 'left-image')
    <section class="step-section" id="step-{{ $step->step_number }}">

        <div class="background-layers">
            <div class="cws-triangle-overlay top-left"></div>
            <div class="cws-image-bg" style="background-image: url({{ asset('images/background/38.jpg') }})">
                <div class="cws-overlay-bg"></div>
                <div class="cws-triangle-overlay"></div>
            </div>
            <div class="cws-triangle-overlay bottom-left"></div>
            <div class="cws-triangle-overlay bottom-right"></div>
        </div>

        <div class="auto-container">
            <div class="row">

                <!-- IMAGE LEFT -->
                <div class="image-column col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-column">
                        @if($step->image)
                        <figure class="image">
                            <img src="{{ asset('storage/'.$step->image) }}" alt="">
                        </figure>
                        @endif
                    </div>
                </div>

                <!-- TEXT RIGHT -->
                <div class="content-column col-lg-5 col-md-12 col-sm-12 offset-1">
                    <div class="inner-column">
                        <h2>{{ $step->getTranslation('title',$locale) }}</h2>
                        <p>{{ $step->getTranslation('description',$locale) }}</p>

                        @if($step->getTranslation('button_text',$locale))
                        <a href="{{ $step->button_link }}" class="theme-btn btn-style-one large">
                            {{ $step->getTranslation('button_text',$locale) }}
                        </a>
                        @endif
                    </div>
                </div>

            </div>
        </div>

        <div class="step-btn">
            <a class="scroll-to-target" data-target="#step-{{ $step->step_number + 1 }}">
                <span class="step-background"></span>
                <span class="step-text">STEP</span>
                <span class="step-count">{{ $step->step_number }}</span>
                <span class="step-arrow"><span class="fa fa-arrow-down"></span></span>
            </a>
        </div>

    </section>

    @else
    <section class="step-section-two" id="step-{{ $step->step_number }}">

        <div class="auto-container">
            <div class="row">

                <!-- TEXT LEFT -->
                <div class="content-column col-lg-5 col-md-6 col-sm-12">
                    <div class="inner-column">
                        <h2>{{ $step->getTranslation('title',$locale) }}</h2>
                        <p>{{ $step->getTranslation('description',$locale) }}</p>

                        @if($step->getTranslation('button_text',$locale))
                        <a href="{{ $step->button_link }}" class="theme-btn btn-style-one large">
                            {{ $step->getTranslation('button_text',$locale) }}
                        </a>
                        @endif
                    </div>
                </div>

                <!-- IMAGE RIGHT -->
                <div class="image-column col-lg-6 col-md-6 col-sm-12 offset-1">
                    <div class="inner-column">
                        @if($step->image)
                        <figure class="image">
                            <img src="{{ asset('storage/'.$step->image) }}" alt="">
                        </figure>
                        @endif
                    </div>
                </div>

            </div>
        </div>

        <div class="step-btn light">
            <a class="scroll-to-target" data-target="#step-{{ $step->step_number + 1 }}">
                <span class="step-background"></span>
                <span class="step-text">STEP</span>
                <span class="step-count">{{ $step->step_number }}</span>
                <span class="step-arrow"><span class="fa fa-arrow-down"></span></span>
            </a>
        </div>

    </section>
    @endif

@endforeach
@endif
<!-- End Step Section -->

<!-- Contact Section -->
@include('components.callback')
<!-- End Contact Section -->

@endsection

