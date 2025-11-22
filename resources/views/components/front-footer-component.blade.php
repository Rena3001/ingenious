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
                            {{ Translation::getValue('footer_about_title', $locale) }}
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

                        @if($latestPost)
                        <div class="widget-content">
                            <article class="post">
                                <div class="thumb">
                                    <a href="{{ route('blog.detail', ['locale' => $locale, 'id' => $latestPost->id]) }}">
                                        <img src="{{ asset('storage/' . $latestPost->image) }}" alt="">
                                    </a>
                                </div>

                                <h5>
                                    <a href="{{ route('blog.detail', ['locale' => $locale, 'id' => $latestPost->id]) }}">
                                        {{ $latestPost->getTranslation('title', $locale)}}
                                    </a>
                                </h5>

                                <div class="text">
                                    {{ \Illuminate\Support\Str::limit($latestPost->getTranslation('description', $locale), 180) }}
                                </div>
                            </article>
                        </div>
                        @endif

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
                                    <a href="tel:{{ $settings->phone }}">{{ $settings->phone }}</a>
                                </li>

                                <li>
                                    <div class="social-icon">
                                        @if($settings->facebook)
                                            <a href="{{ $settings->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                        @endif
                                        @if($settings->twitter)
                                            <a href="{{ $settings->twitter }}"><i class="fab fa-twitter"></i></a>
                                        @endif
                                        @if($settings->instagram)
                                            <a href="{{ $settings->instagram }}"><i class="fab fa-instagram"></i></a>
                                        @endif
                                        @if($settings->linkedin)
                                            <a href="{{ $settings->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                        @endif
                                        @if($settings->telegram)
                                            <a href="{{ $settings->telegram }}"><i class="fa fa-signal"></i></a>
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
                <p>{{ Translation::getValue('footer_about_title', $locale) }} © {{ date('Y') }}</p>
            </div>
        </div>
    </div>
</footer>
