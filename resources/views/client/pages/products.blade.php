@extends('client.layout.master')
@section('page_title', __('Products'))
@section('content')
@php
use App\Models\Translation;
$locale = app()->getLocale();
@endphp

<!--Page Title-->
<section class="page-title">
    <!-- Background Layers -->
    <div class="background-layers">
        <div class="cws-image-bg" style="background-image: url('{{ asset('assets/images/background/37.jpg') }}')">
            <div class="cws-overlay-bg"></div>
        </div>
    </div>

    <div class="auto-container">
        <h1>{{ Translation::getValue('shop_items_title', $locale) }}</h1>

        <ul class="page-breadcrumb">
            <li>
                <a href="{{ route('home',['locale' => $locale]) }}">
                    {{ Translation::getValue('breadcrumb_home', $locale) }}
                </a>
            </li>
            <li>
                {{ Translation::getValue('breadcrumb_shop_items', $locale) }}
            </li>
        </ul>
    </div>
</section>

<!--End Page Title-->

<!--Sidebar Page Container-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="our-shop no-padding style-two">
                    <div class="shop-upper-box clearfix">
                        <div class="items-label">
                            {{ Translation::getValue('shop_showing_results', $locale) }}
                        </div>
                        <div class="orderby">
                            <form method="GET">
                                <select name="orderby" class="sortby-select" onchange="this.form.submit()">
                                    <option value="date" {{ request('orderby') == 'date' ? 'selected' : '' }}>
                                        {{ Translation::getValue('shop_sort_newness', $locale) }}
                                    </option>

                                    <option value="price" {{ request('orderby') == 'price' ? 'selected' : '' }}>
                                        {{ Translation::getValue('shop_sort_price_low_to_high', $locale) }}
                                    </option>

                                    <option value="price-desc" {{ request('orderby') == 'price-desc' ? 'selected' : '' }}>
                                        {{ Translation::getValue('shop_sort_price_high_to_low', $locale) }}
                                    </option>
                                </select>
                            </form>
                        </div>
                    </div>


                    <div class="row clearfix">
                        @if($products->count() === 0)
                        <div class="no-results" style="padding: 40px; text-align:center;">
                            <h3>{{ \App\Models\Translation::getValue('no_results', $locale) }}</h3>

                            @if($search)
                            <p>"{{ $search }}"</p>
                            @endif
                        </div>
                        @endif

                        @foreach($products as $product)
                        <div class="shop-item col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">

                                <div class="image-box">
                                    <!-- <a href="{{ $product->amazon_link }}" target="_blank"> -->
                                    <figure class="image">
                                        <img
                                            src="{{ asset('storage/' . $product->image) }}"
                                            alt="{{ $product->getTranslation('name', $locale) }}">
                                    </figure>
                                    <!-- </a> -->
                                    {{-- Hover overlay --}}
                                    <div class="hover-overlay">
                                        <a
                                            href="{{ $product->amazon_link }}"
                                            target="_blank"
                                            class="buy-now">
                                            <span>{{ Translation::getValue('go_to_amazon', $locale) }}</span>
                                        </a>
                                    </div>

                                </div>

                                <div class="lower-content">
                                    <h4 class="name">
                                        <a href="{{ route('product.detail', ['locale' => $locale, 'product' => $product->id]) }}" target="_blank">
                                            {{ $product->getTranslation('name', $locale) }}
                                        </a>
                                    </h4>

                                    <div class="price">
                                        ${{ $product->price }}
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side sticky-container col-lg-3 col-md-12 col-sm-12">
                <aside class="sidebar theiaStickySidebar">
                    <div class="sticky-sidebar">

                        <!-- Category  Widget -->
                        <div class="sidebar-widget category-widget">
                            <div class="widget-content">

                                {{-- Title --}}
                                <h3 class="widget-title">
                                    {{ Translation::getValue('categories_title', $locale) }}
                                </h3>

                                <ul class="categories-list">

                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{ route('products.byCategory', ['locale' => $locale, 'category' => $category->id]) }}">
                                            {{ $category->getTranslation('name', $locale) }}

                                            {{-- Məhsul sayını göstərmək istəyirsənsə --}}
                                            <span>({{ $category->products_count}})</span>
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
<!--End Sidebar Page Container-->
@endsection