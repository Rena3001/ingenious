@extends('client.layout.master')
@section('page_title', __('Product-detail'))
@section('content')

@php
use App\Models\Translation;
$locale = app()->getLocale();
@endphp

<!-- Page Title -->
<section class="page-title">
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url('{{ asset('assets/images/background/37.jpg') }}');">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <h1>{{ $product->getTranslation('name', $locale) }}</h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home', ['locale' => $locale]) }}">
                    {{ Translation::getValue('breadcrumb_home', $locale) }}
                </a>
            </li>
            <li>
                <a href="{{ route('products', ['locale' => $locale]) }}">
                    {{ Translation::getValue('breadcrumb_shop_items', $locale) }}
                </a>
            </li>
            <li>{{ $product->getTranslation('name', $locale) }}</li>
        </ul>
    </div>
</section>

<!-- Sidebar Page Container -->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Content Side -->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="shop-single">
                    <div class="product-details">

                        <!-- Basic Details -->
                        <div class="basic-details">
                            <div class="row clearfix">

                                <!-- PRODUCT IMAGE -->
                                <div class="image-column col-md-6 col-sm-12">
                                    <figure class="image">
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="">
                                    </figure>
                                </div>

                                <!-- PRODUCT INFO -->
                                <div class="info-column col-md-6 col-sm-12">
                                    <div class="details-header">

                                        <h4>{{ $product->getTranslation('name', $locale) }}</h4>

                                        <div class="item-price">${{ $product->price }}</div>

                                        <div class="text">
                                            {{ $product->getTranslation('description', $locale) }}
                                        </div>

                                    </div>

                                    <div class="other-options clearfix">
                                        <ul class="product-meta">
                                            <li>
                                                {{ Translation::getValue('product_category', $locale) }}:

                                                @if($product->category)
                                                <a href="{{ route('products.byCategory', ['locale' => $locale, 'category' => $product->category->id]) }}">
                                                    {{ $product->category->getTranslation('name', $locale) }}
                                                </a>
                                                @else
                                                <span>No Category</span>
                                                @endif

                                            </li>
                                        </ul>
                                    </div>

                                    <!-- AMAZON LINK -->
                                    @if($product->amazon_link)
                                    <a href="{{ $product->amazon_link }}" target="_blank" class="theme-btn btn-style-three">
                                        {{ Translation::getValue('buy_on_amazon', $locale) }}
                                    </a>
                                    @endif

                                </div>

                            </div>
                        </div>
                        <!-- End Basic Details -->


                        <!-- Product Reviews -->
                        <div class="product-info-tabs">
                            <div class="prod-tabs tabs-box">

                                <ul class="tab-btns tab-buttons clearfix">
                                    <li class="tab-btn active-btn" data-tab="#prod-reviews">
                                        {{ Translation::getValue('customer_reviews', $locale) }}
                                        ({{ $product->reviews->count() }})
                                    </li>
                                </ul>

                                <div class="tabs-content">

                                    <div class="tab active-tab" id="prod-reviews">

                                        <h2 class="title">
                                            {{ $product->reviews->count() }} {{ Translation::getValue('customer_reviews', $locale) }}
                                        </h2>

                                        <div class="comments-area">
                                            @forelse($product->reviews as $review)
                                            <div class="comment-box">
                                                <div class="comment">
                                                    <div class="comment-inner">

                                                        <div class="comment-info clearfix">
                                                            <strong class="name">{{ $review->name }}</strong>
                                                            <span class="date">{{ $review->created_at->format('M d, Y') }}</span>
                                                        </div>

                                                        <div class="text">{{ $review->message }}</div>

                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                            <p>No reviews yet.</p>
                                            @endforelse
                                        </div>

                                        <!-- Review Form -->
                                        <div class="comment-form default-form mt-5">
                                            <div class="sub-title">{{ Translation::getValue('add_review', $locale) }}</div>

                                            <div class="form-outer">
                                                <form method="POST" action="{{ route('product.storeReview', ['locale' => $locale, 'product' => $product->id]) }}">

                                                    @csrf

                                                    <div class="col-lg-12 form-group">
                                                        <div class="field-label">{{ Translation::getValue('your_review', $locale) }} *</div>
                                                        <textarea name="message" required></textarea>
                                                    </div>

                                                    <div class="col-lg-6 form-group">
                                                        <div class="field-label">{{ Translation::getValue('your_name', $locale) }} *</div>
                                                        <input type="text" name="name" required>
                                                    </div>

                                                    <div class="col-lg-6 form-group">
                                                        <div class="field-label">{{ Translation::getValue('your_email', $locale) }} *</div>
                                                        <input type="email" name="email" required>
                                                    </div>

                                                    <div class="col-lg-12 form-group">
                                                        <button type="submit" class="theme-btn btn-style-three">
                                                            {{ Translation::getValue('submit', $locale) }}
                                                        </button>
                                                    </div>
                                                </form>

                                                @if(session('success'))
                                                <div class="alert alert-success mt-3">
                                                    {{ session('success') }}
                                                </div>
                                                @endif

                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Product Reviews -->


                        <!-- Related Products -->
                        <div class="related-products">
                            <div class="sec-title">
                                <h2>{{ Translation::getValue('related_products', $locale) }}</h2>
                            </div>

                            <div class="row item-green">

                                @foreach($related as $item)
                                <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">

                                        <div class="image-box">
                                            <figure class="image">
                                                <a href="{{ route('product.detail', ['locale' => $locale, 'product' => $item->id]) }}">
                                                    <img src="{{ asset('storage/' . $item->image) }}" alt="">
                                                </a>
                                            </figure>
                                        </div>

                                        <div class="lower-content">
                                            <h4 class="name">
                                                <a href="{{ route('product.detail', ['locale' => $locale, 'product' => $item->id]) }}">
                                                    {{ $item->getTranslation('name', $locale) }}
                                                </a>
                                            </h4>

                                            <div class="price">${{ $item->price }}</div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <!-- End Related Products -->

                    </div>

                </div>
            </div>
            <!-- End Content Side -->


            <!-- Sidebar -->
            <div class="sidebar-side sticky-container col-lg-3 col-md-12 col-sm-12">
                <aside class="sidebar theiaStickySidebar">
                    <div class="sticky-sidebar">

                        <!-- Category Widget -->
                        <div class="sidebar-widget category-widget">
                            <div class="widget-content">

                                <h3 class="widget-title">
                                    {{ Translation::getValue('categories_title', $locale) }}
                                </h3>

                                <ul class="categories-list">
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('products.byCategory', ['locale' => $locale, 'category' => $category->id]) }}">
                                            {{ $category->getTranslation('name', $locale) }}
                                            <span>({{ $category->products_count }})</span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>

                    </div>
                </aside>
            </div>

        </div>
    </div>
</div>

@endsection
