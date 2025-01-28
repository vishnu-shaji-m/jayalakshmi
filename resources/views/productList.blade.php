@extends('layouts.app')
@section('title', 'Product-List ')
@push('css')
{{-- Placeholder for pushing CSS files specific to this page into the stack --}}
@endpush
@section('content')
{{-- Main content of the page goes here --}}

<div id="pageWrapper" class="productPage">
    <section id="InnerBanner">
        <picture>
            <source media="(min-width: 468px)" srcset="{{ asset('frontend/images/product-banner.webp')}}">
            <img src="{{ asset('frontend/images/product-banner.webp')}}" width="1920" height="700" alt="banner">
        </picture>
        <div class="container">
            <div class="cntWrap">
                <div id="Breadcrumb">
                    <ul>
                        <li>
                            <a href="index" aria-label="links">Home</a>
                        </li>
                        <li>
                            <a href="#!" aria-label="links">Signature Styles</a>
                        </li>
                        <li>
                            <a href="#!" aria-label="links">Sarees</a>
                        </li>
                        <li>
                            <a href="#!" class="current" aria-label="links">kanjivaram Sarees</a>
                        </li>
                    </ul>
                </div>
                <h1 class="mHead">The Story of Kanjivaram Sarees </h1>
            </div>
        </div>
    </section>
    <section id="story">
        <div class="container">
            <div class="storyBx">
                <div class="storySlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="javascript:void(0)" class="storyCard" aria-label="story-link">
                                <div class="contentBx">
                                    <div class="Title">4th Century CE</div>
                                </div>
                                <div class="imWrap">
                                    <div class="imgbx">
                                        <img src="{{asset('frontend/images/story1.webp')}}" width="520" height="330"
                                            alt="story_link">
                                    </div>
                                </div>
                                <div class="infoBx">
                                    <div class="contents">
                                        <div class="mainHead">
                                            <div class="mainTitle">A Regal Beginning</div>
                                        </div>
                                        <p>
                                            The rich tradition of Kanjivaram weaving began during the Pallava dynasty in
                                            Kanchipuram, Tamil Nadu, where artisans created intricate designs inspired
                                            by
                                            temple art.
                                        </p>
                                    </div>
                                </div>
                                <div class="boderDot">
                                    <div class="line"></div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0)" class="storyCard" aria-label="story-link">
                                <div class="contentBx">
                                    <div class="Title">4th Century CE</div>
                                </div>
                                <div class="imWrap">
                                    <div class="imgbx">
                                        <img src="{{asset('frontend/images/story1.webp')}}" width="520" height="330"
                                            alt="story_link">
                                    </div>
                                </div>
                                <div class="infoBx">
                                    <div class="contents">
                                        <div class="mainHead">
                                            <div class="mainTitle">A Regal Beginning</div>
                                        </div>
                                        <p>
                                            The rich tradition of Kanjivaram weaving began during the Pallava dynasty in
                                            Kanchipuram, Tamil Nadu, where artisans created intricate designs inspired
                                            by
                                            temple art.
                                        </p>
                                    </div>
                                </div>
                                <div class="boderDot">
                                    <div class="line"></div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0)" class="storyCard" aria-label="story-link">
                                <div class="contentBx">
                                    <div class="Title">4th Century CE</div>
                                </div>
                                <div class="imWrap">
                                    <div class="imgbx">
                                        <img src="{{asset('frontend/images/story1.webp')}}" width="520" height="330"
                                            alt="story_link">
                                    </div>
                                </div>
                                <div class="infoBx">
                                    <div class="contents">
                                        <div class="mainHead">
                                            <div class="mainTitle">A Regal Beginning</div>
                                        </div>
                                        <p>
                                            The rich tradition of Kanjivaram weaving began during the Pallava dynasty in
                                            Kanchipuram, Tamil Nadu, where artisans created intricate designs inspired
                                            by
                                            temple art.
                                        </p>
                                    </div>
                                </div>
                                <div class="boderDot">
                                    <div class="line"></div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="javascript:void(0)" class="storyCard" aria-label="story-link">
                                <div class="contentBx">
                                    <div class="Title">4th Century CE</div>
                                </div>
                                <div class="imWrap">
                                    <div class="imgbx">
                                        <img src="{{asset('frontend/images/story1.webp')}}" width="520" height="330"
                                            alt="story_link">
                                    </div>
                                </div>
                                <div class="infoBx">
                                    <div class="contents">
                                        <div class="mainHead">
                                            <div class="mainTitle">A Regal Beginning</div>
                                        </div>
                                        <p>
                                            The rich tradition of Kanjivaram weaving began during the Pallava dynasty in
                                            Kanchipuram, Tamil Nadu, where artisans created intricate designs inspired
                                            by
                                            temple art.
                                        </p>
                                    </div>
                                </div>
                                <div class="boderDot">
                                    <div class="line"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="products">
        <div class="container">
            <div class="mainHead">
                <div class="mainTitle">kanjivaram <span>Collections</span></div>
            </div>
            <div class="productListItem">
                <div class="item">
                    <div class="productBx">
                        <div class="imgbx">
                            <img src="{{asset('frontend/images/pr1.webp')}}"
                                data-src="{{asset('frontend/images/pr1.webp')}}" class="lazy" loading="lazy"
                                alt="productImg">
                        </div>
                        <div class="info">
                            <div class="btnSec">
                                <div class="item">
                                    <a href="javascript:void(0)" class="viewBtn" aria-label="view-Label">
                                        VIEW
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="viewBtn" aria-label="view-Label">
                                        ENQUIRE NOW
                                    </a>
                                </div>
                            </div>
                            <div class="mainTxt">Brick Red Kanjivaram Saree</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="productBx">
                        <div class="imgbx">
                            <img src="{{asset('frontend/images/pr2.webp')}}"
                                data-src="{{asset('frontend/images/pr2.webp')}}" class="lazy" loading="lazy"
                                alt="productImg">
                        </div>
                        <div class="info">
                            <div class="btnSec">
                                <div class="item">
                                    <a href="javascript:void(0)" class="viewBtn" aria-label="view-Label">
                                        VIEW
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="viewBtn" aria-label="view-Label">
                                        ENQUIRE NOW
                                    </a>
                                </div>
                            </div>
                            <div class="mainTxt">Green Kanjivaram Saree</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="productBx">
                        <div class="imgbx">
                            <img src="{{asset('frontend/images/pr3.webp')}}"
                                data-src="{{asset('frontend/images/pr3.webp')}}" class="lazy" loading="lazy"
                                alt="productImg">
                        </div>
                        <div class="info">
                            <div class="btnSec">
                                <div class="item">
                                    <a href="javascript:void(0)" class="viewBtn" aria-label="view-Label">
                                        VIEW
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="viewBtn" aria-label="view-Label">
                                        ENQUIRE NOW
                                    </a>
                                </div>
                            </div>
                            <div class="mainTxt">Mauve Kanjivaram Saree</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="productBx">
                        <div class="imgbx">
                            <img src="{{asset('frontend/images/pr4.webp')}}"
                                data-src="{{asset('frontend/images/pr4.webp')}}" class="lazy" loading="lazy"
                                alt="productImg">
                        </div>
                        <div class="info">
                            <div class="btnSec">
                                <div class="item">
                                    <a href="javascript:void(0)" class="viewBtn" aria-label="view-Label">
                                        VIEW
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="viewBtn" aria-label="view-Label">
                                        ENQUIRE NOW
                                    </a>
                                </div>
                            </div>
                            <div class="mainTxt">Orange Green Kanjivaram Saree</div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="productBx">
                        <div class="imgbx">
                            <img src="{{asset('frontend/images/pr5.webp')}}"
                                data-src="{{asset('frontend/images/pr5.webp')}}" class="lazy" loading="lazy"
                                alt="productImg">
                        </div>
                        <div class="info">
                            <div class="btnSec">
                                <div class="item">
                                    <a href="javascript:void(0)" class="viewBtn" aria-label="view-Label">
                                        VIEW
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="viewBtn" aria-label="view-Label">
                                        ENQUIRE NOW
                                    </a>
                                </div>
                            </div>
                            <div class="mainTxt">Magentha Kanjivaram Saree</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


@endsection
@push('js')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
$(document).ready(function() {

    new Swiper('.storySlider', {
        lazy: true,
        preloadImages: true,
        slidesPerView: 2,
        paginationClickable: true,
        loop: true,
        watchSlidesProgress: true,
        direction: "vertical",
        spaceBetween: 35,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },


        breakpoints: {
            1661: {
                slidesPerView: 1.5,
                spaceBetween: 15
            },
            1551: {
                slidesPerView: 1.5,
                spaceBetween: 10
            },
            1200: {
                slidesPerView: 1.6,
                spaceBetween: 10
            },
            578: {
                slidesPerView: 4,
                spaceBetween: 10
            },

            480: {
                slidesPerView: 3.7,
                spaceBetween: 10
            },
            360: {
                slidesPerView: 3,
                spaceBetween: 10
            },
            0: {
                slidesPerView: 2.5,
                spaceBetween: 10
            }
        }
    });
});
</script>

@endpush