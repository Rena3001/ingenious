@php
use App\Models\Translation;
use App\Models\Setting;
use App\Models\Blog;

$locale = app()->getLocale();
$settings = Setting::first();
$latestPost = Blog::orderBy('created_at', 'desc')->first();
@endphp

<footer class="main-footer" style="background-image: url({{ asset('assets/images/background/6.jpg') }});">
    <div class="auto-container">

        <div class="widgets-section">
            <div class="row">

                {{-- ABOUT SECTION --}}
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget about-widget">
                        <h4 class="widget-title">
                            {{ Translation::getValue('footer_title', $locale) }}
                        </h4>

                        <div class="widget-content">
                            <div class="text">
                                {{ Translation::getValue('footer_about_text', $locale) }}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- LATEST POST --}}
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget recent-posts">
                        <h4 class="widget-title">
                            {{ Translation::getValue('footer_latest_posts_title', $locale) }}
                        </h4>

                        <div class="text">
                            {{ Translation::getValue('footer_atalar_title', $locale) }}
                        </div>
                        
                    </div>
                </div>

                {{-- CONTACT SECTION --}}
                <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget contact-widget">
                        <h4 class="widget-title">
                            {{ Translation::getValue('footer_contacts_title', $locale) }}
                        </h4>

                        <div class="widget-content">
                            <ul class="contact-list">

                                <li>
                                    <i class="far fa-envelope"></i>
                                    <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
                                </li>

                                <li>
                                    <i class="fa fa-phone"></i>
                                    <a href="https://wa.me/{{ $settings->phone }}" target="_blank">{{ $settings->phone }}</a>
                                </li>

                                <li> 
                                    <div class="social-icon">
                                        @if($settings->facebook)
                                            <a href="{{ $settings->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                        @endif
                                        @if($settings->twitter)
                                            <a href="{{ $settings->twitter }}"><i class="fab fa-youtube"></i></a>
                                        @endif
                                        @if($settings->instagram)
                                            <a href="{{ $settings->instagram }}"><i class="fab fa-instagram"></i></a>
                                        @endif
                                        @if($settings->linkedin)
                                            <a href="{{ $settings->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                        @endif
                                        @if($settings->telegram)
                                            <a href="{{ $settings->telegram }}"><i class="fab fa-tiktok"></i></a>
                                        @endif
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright-text">
                <a href="{{ url('https://sayt.az/') }}">{{ Translation::getValue('footer_site', $locale) }}</a>
                <p>{{ Translation::getValue('footer_about_title', $locale) }} © {{ date('Y') }}</p>
            </div>
        </div>
    </div>
</footer>
