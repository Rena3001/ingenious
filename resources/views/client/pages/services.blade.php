@extends('client.layout.master')
@section('page_title', "__('Services')")
@section('content')

   @php
    use App\Models\Translation;
    $locale = app()->getLocale();
    @endphp

   <!--Page Title-->
    <section class="page-title">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{asset('assets/images/background/30.jpg') }})">
            <div class="cws-overlay-bg"></div>
        </div>
        <div class="cws-triangle-overlay bottom-left"></div>
        <div class="cws-triangle-overlay bottom-right"></div>
    </div>
    <div class="auto-container">
        <h1>{{ Translation::getValue('page_services_title', $locale) }}</h1>
        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home',['locale' => $locale]) }}">
                    {{ Translation::getValue('breadcrumb_home', $locale) }}
                </a>
            </li>
            <li>{{ Translation::getValue('breadcrumb_services', $locale) }}</li>
        </ul>
    </div>
    </section>

    <!--End Page Title-->


<!-- Services Section Three -->


@if(!$services)
    {{-- Heç nə göstərmə, səhifə boş açılsın --}}
    @php
        $icons = [];
    @endphp
@else
    @php
    $locale = app()->getLocale(); 
    $icons = $services->icons ?? []; // artıq array-dir
    $list = $services->section2_list ?? [];
    $bg = $services->section2_background ? asset($services->section2_background) : 'images/background/34.jpg';
    $skills = $services->section3_skills ?? [];
    $bg3 = $services->section3_background 
        ? asset($services->section3_background)
        : 'images/background/34.jpg';
@endphp

@endif


    <section class="services-section-three">
        <!-- Background Layers -->
        <div class="background-layers">
            <div class="cws-image-bg" style="background-image: url(images/background/29.jpg)">
                <div class="cws-overlay-bg"></div>
            </div>
            <div class="cws-triangle-overlay bottom-right"></div>
        </div>

        <div class="auto-container">

            @if($services)
                <!-- Başlıq və açıqlama -->
                <div class="sec-title text-center">
                    <h2>{{ $services->{"title_$locale"} }}</h2>

                    <div class="text">
                        {{ $services->{"description_$locale"} }}
                    </div>
                </div>
            @endif

            <div class="row">

                @foreach($icons as $icon)
                    <div class="service-block-four col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">

                            <div class="icon-box">
                                <span class="icon {{ $icon['icon'] }}"></span>
                            </div>

                            @if(!empty($icon["icon_title_$locale"]))
                                <h4>{{ $icon["icon_title_$locale"] }}</h4>
                            @endif

                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <!-- End Services Section Three -->



    <!-- Fluid Section One -->


    <section class="fluid-section-one">

        <div class="background-layers">
            <div class="cws-image-bg" style="background-image: url({{ $bg }})">
                <div class="cws-overlay-bg"></div>
                <div class="cws-triangle-overlay"></div>
            </div>
            <div class="cws-triangle-overlay bottom-left"></div>
        </div>

        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-5 col-md-12 col-sm-12 offset-7">
                    <div class="inner-column">

                        <div class="sec-title">
                            <h2>{{ $services->{"section2_title_$locale"} }}</h2>
                            <div class="text">{{ $services->{"section2_description_$locale"} }}</div>
                        </div>

                        <ul class="list-style-two">
                            @foreach($list as $item)
                                <li>{{ $item["text_$locale"] ?? '' }}</li>
                            @endforeach
                        </ul>

                        @if($services->{"section2_button_text_$locale"})
                            <div class="btn-box">
                                <a href="{{ $services->section2_button_link }}" class="theme-btn btn-style-one large">
                                    {{ $services->{"section2_button_text_$locale"} }}
                                </a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Fluid Section One --> 

    <!-- Skills Section -->
    <section class="skills-section">

        <div class="background-layers">
            <div class="cws-image-bg" style="background-image: url({{ $bg3 }})">
                <div class="cws-overlay-bg"></div>
                <div class="cws-triangle-overlay"></div>
            </div>
            <div class="cws-triangle-overlay bottom-right"></div>
        </div>

        <div class="auto-container">

            <div class="sec-title text-center">
                <h2>{{ $services->{"section3_title_$locale"} }}</h2>
                <div class="text">
                    {{ $services->{"section3_description_$locale"} }}
                </div>
            </div>

            <div class="skills-outer">
                <div class="row">

                    @foreach($skills as $skill)
                        <div class="pie-graph col-lg-3 col-md-3 col-sm-6">
                            <div class="graph-outer">
                                <input type="text"
                                    class="dial"
                                    data-fgColor="#539760"
                                    data-bgColor="#c6dac9"
                                    data-width="136"
                                    data-height="136"
                                    value="{{ $skill['percent'] }}">
                                <div class="inner-text count-box">
                                    <span class="count-text txt"
                                        data-stop="{{ $skill['percent'] }}"
                                        data-speed="2000"></span>%
                                </div>
                            </div>

                            <h4>{{ $skill["title_$locale"] ?? '' }}</h4>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </section>
    <!-- Skills Section -->

    <!-- Contact Section -->
<section class="contact-section">
    <div class="auto-container">

        <!-- SECTION TITLE -->
        <div class="sec-title text-center">
            <h2>{{ Translation::getValue('contact_title', $locale) }}</h2>

            <div class="text">
                {{ Translation::getValue('contact_description', $locale) }}
            </div>
        </div>

        <!-- CONTACT FORM -->
        <div class="default-form contact-form">
           <form action="{{ route('contact.submit',['locale' => $locale]) }}" method="post">
            @csrf

            <div class="form-group">
                <label>{{ Translation::getValue('contact_form_name', $locale) }}</label>
                <input type="text" name="username" required>
            </div>

            <div class="form-group">
                <label>{{ Translation::getValue('contact_form_email', $locale) }}</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>{{ Translation::getValue('contact_form_message', $locale) }}</label>
                <textarea name="contact_message" required></textarea>
            </div>

            <button type="submit" class="theme-btn btn-style-three">
                {{ Translation::getValue('contact_button_text', $locale) }}
            </button>
        </form>

        @if(session('success'))
            <div class="alert alert-success mt-3" style="color:white; background:#28a745; padding:10px 20px; border-radius:6px;">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger mt-3" style="color:white; background:#dc3545; padding:10px 20px; border-radius:6px;">
                {{ session('error') }}
            </div>
        @endif

        </div>

        <!-- CTA BUTTON -->
        <!-- <div class="btn-box">
            <a href="{{ $contact?->button_link ?? '#' }}" class="theme-btn btn-style-one large">
                {{ $contact?->{"button_text_$locale"} ?? 'Get in touch' }}
            </a>
        </div> -->

    </div>
</section>
    <!-- End Contact Section -->

@endsection