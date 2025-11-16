@extends('client.layout.master')

@section('page_title', __('About Us'))

@section('content')

@php
$locale = app()->getLocale();
$about = \App\Models\AboutSection::with('missionItems')->where('is_active', true)->get()->keyBy('type');
@endphp


<!--Page Title-->
<section class="page-title">
    <div class="cws-image-bg" style="background-image: url(images/background/30.jpg)">
        <div class="cws-overlay-bg"></div>
    </div>

    <div class="auto-container">
        <h1>About Us</h1>
        <ul class="page-breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>About Us</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!-- ========================= -->
<!-- ABOUT SECTION THREE -->
<!-- ========================= -->
@if(isset($about['about_section_three']))
<section class="about-section-three">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{ asset('assets/images/background/31.jpg') }})"></div>
        <div class="cws-triangle-overlay bottom-left"></div>
        <div class="cws-triangle-overlay bottom-right"></div>
    </div>

    <div class="auto-container">
        <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>{{ $about['about_section_three']->getTitle($locale) }}</h2>
                    </div>
                    <div class="about-text">
                        {!! $about['about_section_three']->getContent($locale) !!}
                    </div>
                </div>

                @if($about['about_section_three']->button_key)
                <div class="btn-box">
                    <a href="#" class="theme-btn btn-style-one large">
                        {{ \App\Models\Translation::getValue($about['about_section_three']->button_key, $locale) }}
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endif


<!-- ========================= -->
<!-- OUR STANDARDS -->
<!-- ========================= -->
@if(isset($about['our_standards']))
<section class="our-standards">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url({{ asset('assets/images/background/32.jpg') }})">
            <div class="cws-overlay-bg"></div>
            <div class="cws-triangle-overlay"></div>
        </div>
        <div class="cws-triangle-overlay bottom-left"></div>
    </div>

    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12 offset-6">
                <div class="inner-column">
                    <div class="sec-title light">
                        <h2>{{ $about['our_standards']->getTitle($locale) }}</h2>
                        <div class="text">
                            {!! $about['our_standards']->getContent($locale) !!}
                        </div>
                    </div>

                    <!-- optional icons, fixed -->
                    <ul class="icon-list-two">
                        <li><a href="#"><span class="icon flaticon-target"></span></a></li>
                        <li><a href="#"><span class="icon flaticon-mouse"></span></a></li>
                        <li><a href="#"><span class="icon flaticon-notification-1"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </section>
@endif



<!-- ========================= -->
<!-- OUR MISSION -->
<!-- ========================= -->
@if(isset($about['our_mission']))
 <section class="our-mission">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>{{ $about['our_mission']->getTitle($locale) }}</h2>
            <div class="text">
                {{ $about['our_mission']->getShortDesc($locale) }}
            </div>
        </div>

        <div class="row">
            @foreach($about['our_mission']->missionItems as $item)
            <div class="mission-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <span class="icon {{ $item->icon }}"></span>
                    <h4>{{ $item->getTitle($locale) }}</h4>
                    <p>{{ $item->getText($locale) }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif



<!-- Team Section -->
<section class="team-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <h2>OUR PEOPLE</h2>
            <div class="text">Praesent dictum, nulla sit amet mattis cursus, purus lectus fermentum sapien, a pharetra mi orci eu velit. Vestibulum feugiat aliquam vehicula. Donec eu dolor eget tortor accumsan convallis ac tincidunt metus. Praesent iaculis egestas nisl, vitae dictum ante ornare vel.</div>
        </div>

        <div class="row">
            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="image-box">
                    <figure class="image"><img src="images/resource/team-1.jpg" alt=""></figure>
                    <div class="overlay-box">
                        <div class="text">Interdum eros feugiat velit porttitor quis dui</div>
                        <ul class="social-icon">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                </div>
                <h4><a href="#">John Wood</a></h4>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="image-box">
                    <figure class="image"><img src="images/resource/team-2.jpg" alt=""></figure>
                    <div class="overlay-box">
                        <div class="text">Interdum eros feugiat velit porttitor quis dui</div>
                        <ul class="social-icon">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                </div>
                <h4><a href="#">Anna Doe</a></h4>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="image-box">
                    <figure class="image"><img src="images/resource/team-3.jpg" alt=""></figure>
                    <div class="overlay-box">
                        <div class="text">Interdum eros feugiat velit porttitor quis dui</div>
                        <ul class="social-icon">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                </div>
                <h4><a href="#">Peter White</a></h4>
            </div>

            <!-- Team Block -->
            <div class="team-block col-lg-3 col-md-6 col-sm-12">
                <div class="image-box">
                    <figure class="image"><img src="images/resource/team-4.jpg" alt=""></figure>
                    <div class="overlay-box">
                        <div class="text">Interdum eros feugiat velit porttitor quis dui</div>
                        <ul class="social-icon">
                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        </ul>
                    </div>
                </div>
                <h4><a href="#">Alex Black</a></h4>
            </div>
        </div>
        <div class="btn-box text-center">
            <a href="#" class="theme-btn btn-style-three large">Load More</a>
        </div>
    </div>
</section>
<!-- End Our People -->

<!--Clients Section-->
<section class="clients-section">
    <div class="auto-container">
        <!--Sponsors carousel-->
        <ul class="sponsors-carousel owl-carousel owl-theme">
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
            </li>
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
            </li>
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
            </li>
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
            </li>
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
            </li>
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
            </li>
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
            </li>
            <li class="slide-item">
                <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
            </li>
        </ul>
    </div>
</section>
<!--End Clients Section-->

@endsection