@extends('client.layout.master')
@php
    use App\Models\Translation;
    $locale = app()->getLocale();
@endphp

@section('title', Translation::getValue('product_detail', $locale))
@section('content')



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

            <!-- ================= CONTENT SIDE ================= -->
            <div class="content-side col-lg-9 col-md-12 col-sm-12">
                <div class="shop-single">
                    <div class="product-details">

                        <!-- ===== BASIC DETAILS ===== -->
                        <div class="basic-details">
                            <div class="row clearfix">

                                <!-- PRODUCT GALLERY -->
                                <div class="image-column col-md-6 col-sm-12">
                                    <div class="product-gallery">

                                        {{-- Main image --}}
                                        <figure class="image mb-3">
                                            <a href="{{ asset('storage/'.$product->image) }}" class="lightbox-image">
                                                <img src="{{ asset('storage/'.$product->image) }}" alt="">
                                            </a>
                                        </figure>

                                        {{-- Extra images (max 9 total recommended) --}}
                                        @if($product->images && $product->images->count())
                                            <div class="row clearfix">
                                                @foreach($product->images as $img)
                                                    <div class="col-4 mb-2">
                                                        <a href="{{ asset('storage/'.$img->path) }}" class="lightbox-image">
                                                            <img src="{{ asset('storage/'.$img->path) }}" class="img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif

                                    </div>
                                </div>

                                <!-- PRODUCT INFO -->
                                <div class="info-column col-md-6 col-sm-12">
                                    <div class="details-header">

                                        <h4>{{ $product->getTranslation('name', $locale) }}</h4>

                                        {{-- MODEL CODE --}}
                                        <div class="model-code mb-2">
                                            <strong>{{Translation::getValue('model',$locale)}}:</strong> {{ $product->model_code }}
                                        </div>

                                        {{-- PRICE --}}
                                        <div class="item-price mb-3">
                                            ${{ $product->amazon_price ?? $product->price }}
                                        </div>

                                        {{-- SHORT DESCRIPTION --}}
                                        <div class="text mb-4">
                                            {{ $product->getTranslation('description', $locale) }}
                                        </div>

                                        {{-- AMAZON CTA --}}
                                      
                                            <a href="{{ $product->amazon_link }}"
                                               target="_blank"
                                               class="theme-btn btn-style-one bg-green">
                                                {{ Translation::getValue('buy_on_amazon', $locale) }}
                                            </a>
                                      

                                    </div>

                                    {{-- META --}}
                                    <ul class="product-meta mt-4">
                                        <li>
                                            {{ Translation::getValue('product_category', $locale) }}:
                                            <a href="{{ route('products.byCategory', ['locale'=>$locale,'category'=>$product->category->id]) }}">
                                                {{ $product->category->getTranslation('name', $locale) }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <!-- ===== END BASIC DETAILS ===== -->


                        <!-- ===== PRODUCT INFO TABS ===== -->
                        <div class="product-info-tabs">
                            <div class="prod-tabs tabs-box">

                                <!-- TAB BUTTONS -->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#prod-desc" class="tab-btn active-btn">
                                        {{ Translation::getValue('description', $locale) }}
                                    </li>
                                    <li data-tab="#prod-specs" class="tab-btn">
                                        {{ Translation::getValue('specifications', $locale) }}
                                    </li>
                                    <li data-tab="#prod-reviews" class="tab-btn">
                                        {{ Translation::getValue('customer_reviews', $locale) }}
                                        ({{ $product->reviews->count() }})
                                    </li>
                                </ul>

                                <!-- TABS CONTENT -->
                                <div class="tabs-content">

                                    <!-- DESCRIPTION TAB -->
                                    <div class="tab active-tab" id="prod-desc">
                                        <h2 class="title">{{ Translation::getValue('description', $locale) }}</h2>
                                        <p>{{ $product->getTranslation('description', $locale) }}</p>

                                        {{-- A+ CONTENT (optional images) --}}
                                        @if($product->aPlusContents && $product->aPlusContents->count())
                                            @foreach($product->aPlusContents as $content)
                                                <div class="a-plus-block mt-4">
                                                    <img src="{{ asset('storage/'.$content->image) }}" class="img-fluid mb-2">
                                                    <p>{{ $content->getTranslation('text', $locale) }}</p>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>

                                    <!-- SPECIFICATIONS TAB -->
                                    <div class="tab" id="prod-specs">
                                        <h2 class="title">{{ Translation::getValue('specifications', $locale) }}</h2>

                                        <table class="table table-bordered">
                                            @forelse($product->specs as $spec)
                                                <tr>
                                                    <th>{{ $spec->key }}</th>
                                                    <td>{{ $spec->value }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="2">No specifications available.</td>
                                                </tr>
                                            @endforelse
                                        </table>
                                    </div>

                                    <!-- REVIEWS TAB -->
                                    <div class="tab" id="prod-reviews">
                                        <h2 class="title">
                                            {{ $product->reviews->count() }}
                                            {{ Translation::getValue('customer_reviews', $locale) }}
                                        </h2>

                                        <div class="comments-area">
                                            @forelse($product->reviews as $review)
                                                <div class="comment-box">
                                                    <strong>{{ $review->name }}</strong>
                                                    <span class="date">{{ $review->created_at->format('M d, Y') }}</span>
                                                    <p>{{ $review->message }}</p>
                                                </div>
                                            @empty
                                                <p>No reviews yet.</p>
                                            @endforelse
                                        </div>

                                        {{-- REVIEW FORM --}}
                                        <div class="comment-form default-form mt-4">
                                            <form method="POST"
                                                  action="{{ route('product.storeReview',['locale'=>$locale,'product'=>$product->id]) }}">
                                                @csrf

                                                <textarea name="message" required></textarea>
                                                <input type="text" name="name" placeholder="Name" required>
                                                <input type="email" name="email" placeholder="Email" required>

                                                <button type="submit" class="theme-btn btn-style-three">
                                                    {{ Translation::getValue('submit', $locale) }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ===== END TABS ===== -->


                        <!-- ===== RELATED PRODUCTS ===== -->
                        <div class="related-products">
                            <div class="sec-title">
                                <h2>{{ Translation::getValue('related_products', $locale) }}</h2>
                            </div>

                            <div class="row">
                                @foreach($related as $item)
                                    <div class="shop-item col-lg-3 col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <figure class="image">
                                                <a href="{{ route('product.detail',['locale'=>$locale,'product'=>$item->id]) }}">
                                                    <img src="{{ asset('storage/'.$item->image) }}">
                                                </a>
                                            </figure>
                                            <h4 class="name">{{ $item->getTranslation('name',$locale) }}</h4>
                                            <div class="price">${{ $item->amazon_price ?? $item->price }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- ===== END RELATED ===== -->

                    </div>
                </div>
            </div>
            <!-- ================= END CONTENT SIDE ================= -->


            <!-- ================= SIDEBAR ================= -->
            <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                <aside class="sidebar">
                    <h3>{{ Translation::getValue('categories_title', $locale) }}</h3>
                    <ul class="categories-list">
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('products.byCategory',['locale'=>$locale,'category'=>$category->id]) }}">
                                    {{ $category->getTranslation('name',$locale) }}
                                    <span>({{ $category->products_count }})</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </aside>
            </div>

        </div>
    </div>
</div>


@endsection
