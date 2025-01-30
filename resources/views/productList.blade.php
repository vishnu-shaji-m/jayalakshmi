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
                                    <div class="Title">Chola Dynasty
                                        (9th–13th Century CE)</div>
                                </div>
                                <div class="imWrap">
                                    <div class="imgbx">
                                        <img src="{{asset('frontend/images/story2.webp')}}" width="520" height="330"
                                            alt="story_link">
                                    </div>
                                </div>
                                <div class="infoBx">
                                    <div class="contents">
                                        <div class="mainHead">
                                            <div class="mainTitle">The Silk Renaissance  </div>
                                        </div>
                                        <p>
                                            The Cholas nurtured the art of silk weaving, making Kanchipuram the heart of
                                            high-quality silk sarees, woven with pure mulberry silk.
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
                                    <div class="Title">Chola Dynasty
                                        (9th–13th Century CE)</div>
                                </div>
                                <div class="imWrap">
                                    <div class="imgbx">
                                        <img src="{{asset('frontend/images/story2.webp')}}" width="520" height="330"
                                            alt="story_link">
                                    </div>
                                </div>
                                <div class="infoBx">
                                    <div class="contents">
                                        <div class="mainHead">
                                            <div class="mainTitle">The Silk Renaissance  </div>
                                        </div>
                                        <p>
                                            The Cholas nurtured the art of silk weaving, making Kanchipuram the heart of
                                            high-quality silk sarees, woven with pure mulberry silk.
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
                                    <a href="{{asset('frontend/images/pr1.webp')}}" class="viewBtn"
                                        aria-label="view-Label" data-fancybox="gallery">
                                        VIEW
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#!" aria-label="enq" class="enq viewBtn " data-bs-toggle="modal"
                                        data-bs-target="#subCategoryModal">

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
                                    <a href="{{asset('frontend/images/pr2.webp')}}" class="viewBtn" data-fancybox="gallery"
                                        aria-label="view-Label">
                                        VIEW
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#!" aria-label="enq" class="enq viewBtn" data-bs-toggle="modal"
                                        data-bs-target="#subCategoryModal">
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
                                    <a href="{{asset('frontend/images/pr3.webp')}}" class="viewBtn" data-fancybox="gallery"
                                        aria-label="view-Label">
                                        VIEW
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#!" aria-label="enq" class="enq viewBtn" data-bs-toggle="modal"
                                        data-bs-target="#subCategoryModal">
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
                                    <a href="{{asset('frontend/images/pr4.webp')}}" class="viewBtn" aria-label="view-Label" data-fancybox="gallery">
                                        VIEW
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#!" aria-label="enq" class="enq viewBtn" data-bs-toggle="modal"
                                        data-bs-target="#subCategoryModal">
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
                                    <a href="{{asset('frontend/images/pr5.webp')}}" class="viewBtn" aria-label="view-Label" data-fancybox="gallery">
                                        VIEW
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="#!" aria-label="enq" class="enq viewBtn" data-bs-toggle="modal"
                                        data-bs-target="#subCategoryModal">
                                        ENQUIRE NOW
                                    </a>
                                </div>
                            </div>
                            <div class="mainTxt">Magentha Kanjivaram Saree</div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pagination">
                <li class="prev disabled"><span></span> </li>
                <li><a href="javascript:void(0)" aria-label="links" data-page="0">01</a></li>
                <li><a href="javascript:void(0)" aria-label="links" data-page="1">02</a></li>
                <li><a href="javascript:void(0)" aria-label="links" data-page="2">..</a></li>
                <li><a href="javascript:void(0)" aria-label="links" data-page="3">03</a></li>
                <li><a href="javascript:void(0)" aria-label="links" data-page="4">04</a></li>
                <li class="next active"><a href="javascript:void(0)" aria-label="links" data-page="1"></a></li>
            </ul>
        </div>
</div>
</section>

</div>


@endsection
@push('js')


<!-- FANCYBOX  -->
<noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
</noscript>

<script>
document.addEventListener("DOMContentLoaded", function() {
    window.setTimeout(function() {
        // FANCYBOX CSS
        const link = document.createElement('link');
        link.href =
            "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css";
        link.rel = "stylesheet";
        link.integrity =
            'sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==';
        link.referrerPolicy = 'no-referrer';
        link.crossOrigin = 'anonymous';
        var appStylesheet = document.getElementById('AppStyle');
        document.head.insertBefore(link, appStylesheet);

        // FANCYBOX JS
        const script = document.createElement('script');
        script.src = "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js";
        script.integrity =
            'sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA==';
        script.referrerPolicy = 'no-referrer';
        script.crossOrigin = 'anonymous';
        script.defer = true;
        script.id = 'FancyboxJs';

        document.head.appendChild(script);
    }, 100);
});
</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
$(document).ready(function() {
    var storySlider = new Swiper('.storySlider', {
        lazy: true,
        preloadImages: true,
        slidesPerView: 2,
        paginationClickable: true,
        loop: true,
        watchSlidesProgress: true,
        direction: getDirection(), // Dynamically set direction based on screen width
        spaceBetween: 35,
        speed: 200,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },

        on: {
            resize: function() {
                this.changeDirection(getDirection()); // Correct reference to Swiper instance
            },
        },

        breakpoints: {
            1661: {
                slidesPerView: 1.5,
                spaceBetween: 90
            },
            1551: {
                slidesPerView: 1.5,
                spaceBetween: 80
            },
            1200: {
                slidesPerView: 1.6,
                spaceBetween: 65
            },
            992: {
                slidesPerView: 1.5,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 1.5,
                spaceBetween: 30
            },
            360: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            0: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });

    function getDirection() {
        return window.innerWidth <= 768 ? 'horizontal' : 'vertical';
    }
});
</script>

@endpush