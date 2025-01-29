@extends('layouts.app')
@section('title', 'bookslot')
@push('css')
{{-- Placeholder for pushing CSS files specific to this page into the stack --}}
@endpush
@section('content')
{{-- Main content of the page goes here --}}


<div id="pageWrapper" class="bookslotPage">

    <section id="InnerBanner">
        <picture>
            <source media="(min-width: 468px)" srcset="{{ asset('frontend/images/bookslot-banner.webp')}}">
            <img src="{{ asset('frontend/images/bookslot-banner.webp')}}" width="1920" height="700" alt="banner">
        </picture>
        <div class="container">
            <div class="cntWrap">
                <div id="Breadcrumb">
                    <ul>
                        <li>
                            <a href="index" aria-label="links">Home</a>
                        </li>
                        <li>
                            <a href="#!" class="current" aria-label="links">Visit Us</a>
                        </li>
                    </ul>
                </div>
                <h1 class="mHead">Jayalakshmi Bypass, Kochi; India's Premier Bridal <span>Destination</span> </h1>
            </div>
        </div>
    </section>

    <section id="elegance">
        <div class="container">
            <div class="mainHead">
                <div class="mainTitle">A World of <span>Elegance</span></div>
            </div>
            <div class="text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at massa neque. Aliquam mi dui,
                ultricies vitae vehicula at, feugiat et ipsum.
                Nunc vel ante id neque ultricies rutrum nec sed risus.
            </div>
            <div class="eleganceBx">
                <div class="d_flx">
                    <div class="lft">
                        <div class="imgBx">
                            <img src="{{ asset('frontend/images/elegance.webp')}}" class="lazy" width="1098"
                                height="636" loading="lazy" alt="elegance">
                            <div class="bg">
                                <img src="{{ asset('frontend/images/elegance-bg.webp')}}" class="lazy" width="273"
                                    height="272" loading="lazy" alt="elegance-bg">
                            </div>
                            <div class="info">
                                <div class="title">
                                    Luxurious Well Organized Racks
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rgt">
                        <div class="pro_slider">
                            <div class="item">
                                <a data-fancybox="gallery" href="{{ asset('frontend/images/e1.webp')}}" class="imgBx">
                                    <img src="{{ asset('frontend/images/e1.webp')}}" alt="product">
                                </a>
                            </div>
                            <div class="item">
                                <a data-fancybox="gallery" href="{{ asset('frontend/images/e1.webp')}}" class="imgBx">
                                    <img src="{{ asset('frontend/images/e1.webp')}}" class="lazy" width="426"
                                        height="253" loading="lazy" alt="product">
                                </a>
                            </div>
                            <div class="item">
                                <a data-fancybox="gallery" href="{{ asset('frontend/images/e2.webp')}}" class="imgBx">
                                    <img src="{{ asset('frontend/images/e2.webp')}}" class="lazy" width="426"
                                        height="253" loading="lazy" alt="product">
                                </a>
                            </div>
                            <div class="item">
                                <a data-fancybox="gallery" href="{{ asset('frontend/images/e1.webp')}}" class="imgBx">
                                    <img src="{{ asset('frontend/images/e1.webp')}}" class="lazy" width="426"
                                        height="253" loading="lazy" alt="product">
                                </a>
                            </div>
                            <div class="item">
                                <a data-fancybox="gallery" href="{{ asset('frontend/images/e2.webp')}}" class="imgBx">
                                    <img src="{{ asset('frontend/images/e2.webp')}}" class="lazy" width="426"
                                        height="253" loading="lazy" alt="product">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p>
                Nunc lacinia in metus ut vehicula. Phasellus et lectus vitae turpis scelerisque convallis a at lorem.
                Nulla sed lectus suscipit, porta risus non, porta risus. Integer condimentum neque sit amet turpis
                convallis fermentum sit amet vitae leo. Integer faucibus odio in nibh sollicitudin ullamcorper.
                Phasellus facilisis, ipsum et malesuada dictum, felis turpis gravida eros, a commodo nunc dolor non
                nunc. Vestibulum sollicitudin massa dolor, quis mollis dui euismod non. Suspendisse a lectus
                scelerisque, consequat dolor non, eleifend velit. Morbi vehicula gravida risus. Suspendisse sapien mi,
                ullamcorper ut ipsum ut, pharetra lacinia nulla.\
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at massa neque. Aliquam mi dui,
                ultricies vitae vehicula at, feugiat et ipsum. Nunc vel ante id neque ultricies rutrum nec sed risus.
                Nunc lacinia in metus ut vehicula.
            </p>
            <ul>
                <li>Phasellus et lectus vitae turpis scelerisque convallis</li>
                <li>Nulla sed lectus suscipit, porta risus non</li>
            </ul>
        </div>
    </section>

    <section id="fashion">
        <div class="container">
            <div class="mainHead wow animate__fadeInUp" data-wow-duration="1s">
                <div class="mainTitle">Collections in <span>Bypass, Kochi</span></div>
            </div>
            <div class="fashionSlider wow animate__fadeInUp" data-wow-duration="1s">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="javascript:void(0)" class="fashionBx" aria-label="fashionLink">
                            <div class="imgbx">
                                <img src="{{asset('frontend/images/c1.webp')}}" width="300" height="420"
                                    alt="fashionImg">
                            </div>
                            <div class="info">
                                <div class="mainTxt">Magenta Pink Printed Art
                                    Silk Saree</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:void(0)" class="fashionBx" aria-label="fashionLink">
                            <div class="imgbx">
                                <img src="{{asset('frontend/images/c2.webp')}}" width="300" height="420"
                                    alt="fashionImg">
                            </div>
                            <div class="info">
                                <div class="mainTxt"> Gold Printed Art Silk Saree</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:void(0)" class="fashionBx" aria-label="fashionLink">
                            <div class="imgbx">
                                <img src="{{asset('frontend/images/c3.webp')}}" width="300" height="420"
                                    alt="fashionImg">
                            </div>
                            <div class="info">
                                <div class="mainTxt">Mauve Printed Art Silk Saree</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:void(0)" class="fashionBx" aria-label="fashionLink">
                            <div class="imgbx">
                                <img src="{{asset('frontend/images/c4.webp')}}" width="300" height="420"
                                    alt="fashionImg">
                            </div>
                            <div class="info">
                                <div class="mainTxt">Gold Printed Art Silk Saree</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:void(0)" class="fashionBx" aria-label="fashionLink">
                            <div class="imgbx">
                                <img src="{{asset('frontend/images/c5.webp')}}" width="300" height="420"
                                    alt="fashionImg">
                            </div>
                            <div class="info">
                                <div class="mainTxt">Pastel Blue Printed Art
                                    Silk Saree</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:void(0)" class="fashionBx" aria-label="fashionLink">
                            <div class="imgbx">
                                <img src="{{asset('frontend/images/fashion5.webp')}}" width="300" height="420"
                                    alt="fashionImg">
                            </div>
                            <div class="info">
                                <div class="mainTxt">Pastel Blue Printed Art
                                    Silk Saree</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="btnBx">
                    <div class="swiper-button-prev">
                        <div class="icon">
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.01839 7.87805C6.30813 8.37732 6.88047 11.5723 6.88042 13.1074C6.20615 13.1074 4.86621 12.8276 4.90064 11.7085C4.94368 10.3097 4.19049 9.47047 3.71706 8.82487C3.33831 8.3084 2.18198 7.87802 1.65116 7.72739C1.48617 7.56958 1.72864 7.37878 4.01839 7.87805Z"
                                    fill="black" />
                                <path d="M6.69938 11.9221L4.90546 11.7773V13.1074L6.88042 13.1074L6.69938 11.9221Z"
                                    fill="black" />
                                <path d="M15.4023 6.24245H0.596684V7.79185H15.4023V6.24245Z" fill="black" />
                                <path
                                    d="M4.01839 6.12387C6.30813 5.6246 6.88047 2.42962 6.88042 0.894542C6.20615 0.894542 4.86621 1.17431 4.90064 2.29339C4.94368 3.69225 4.19049 4.53145 3.71706 5.17704C3.33831 5.69352 2.18198 6.12389 1.65116 6.27452C1.48617 6.43233 1.72864 6.62314 4.01839 6.12387Z"
                                    fill="black" />
                                <path d="M6.69938 2.07977L4.90546 2.22463V0.894531L6.88042 0.894542L6.69938 2.07977Z"
                                    fill="black" />
                            </svg>

                        </div>
                    </div>
                    <div class="swiper-button-next">
                        <div class="icon">
                            <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.9816 7.87805C9.69187 8.37732 9.11953 11.5723 9.11958 13.1074C9.79385 13.1074 11.1338 12.8276 11.0994 11.7085C11.0563 10.3097 11.8095 9.47047 12.2829 8.82487C12.6617 8.3084 13.818 7.87802 14.3488 7.72739C14.5138 7.56958 14.2714 7.37878 11.9816 7.87805Z"
                                    fill="black" />
                                <path d="M9.30062 11.9221L11.0945 11.7773V13.1074L9.11958 13.1074L9.30062 11.9221Z"
                                    fill="black" />
                                <path d="M0.597656 6.24245H15.4033V7.79185H0.597656V6.24245Z" fill="black" />
                                <path
                                    d="M11.9816 6.12387C9.69187 5.6246 9.11953 2.42962 9.11958 0.894542C9.79385 0.894542 11.1338 1.17431 11.0994 2.29339C11.0563 3.69225 11.8095 4.53145 12.2829 5.17704C12.6617 5.69352 13.818 6.12389 14.3488 6.27452C14.5138 6.43233 14.2714 6.62314 11.9816 6.12387Z"
                                    fill="black" />
                                <path d="M9.30062 2.07977L11.0945 2.22463V0.894531L9.11958 0.894542L9.30062 2.07977Z"
                                    fill="black" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="commenSec">
        <div class="bridalLounge">
            <div class="container">
                <div class="d_flx">
                    <div class="lft">
                        <div class="imgBx">
                            <img src="{{ asset('frontend/images/bridal-lounge.webp')}}" class="lazy" loading="lazy"
                                width="729" height="463" alt="bridal lounge">
                        </div>
                    </div>
                    <div class="rgt">
                        <div class="bg">
                            <img src="{{ asset('frontend/images/bridallounge-bg.webp')}}" class="lazy" width="530"
                                height="535" loading="lazy" alt="bg">
                        </div>
                        <div class="mainHead">
                            <div class="mainTitle">Bridal <span>Lounge</span></div>
                        </div>
                        <div class="text">
                            Where Your Dream Bridal Look Comes to Life.
                        </div>
                        <p>
                            Discover the Bridal Suite—a private, luxurious space tailored just for you. Enjoy;
                        </p>
                        <div class="bridalBx">
                            <div class="borderBx">
                                <ul>
                                    <li>Personalized selection</li>
                                    <li>Total Privacy</li>
                                    <li>Intimate Setting for families</li>
                                    <li>Stylist Access</li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Enjoy a personalized selection of sarees and ornaments in an intimate setting, where you can
                            explore your dream bridal look in total comfort and privacy.
                        </p>
                        <a href="javascript:void(0)" class="hoveranim cmnBtn" aria-label="link-btn">
                            <span>BOOK SLOT</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bridalLounge">
            <div class="container">
                <div class="d_flx">
                    <div class="lft">
                        <div class="imgBx">
                            <img src="{{ asset('frontend/images/bridal-lounge2.webp')}}" class="lazy" loading="lazy"
                                width="729" height="463" alt="bridal lounge">
                        </div>
                    </div>
                    <div class="rgt">
                        <div class="mainHead">
                            <div class="mainTitle">Consult A <span>Stylist</span></div>
                        </div>
                        <div class="text">
                            Get personalized style advice
                        </div>
                        <p>
                            Need styling advice? Our expert stylists are here to help! Book an online consultation
                            today.
                        </p>
                        <p>
                            Feeling overwhelmed by wedding planning or simply looking to refresh your wardrobe?
                            Our team of expert stylists is here to guide you every step of the way. Through convenient
                            online consultations, we provide personalized styling advice tailored to your unique needs
                            and preferences.
                        </p>
                        <div class="bridalBx">
                            <div class="borderBx">
                                <ul>
                                    <li>Personalized Styling</li>
                                    <li>Stress-Free Planning</li>
                                    <li>Wide Range of Services</li>
                                    <li>Confidence Boost</li>
                                </ul>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="hoveranim cmnBtn" aria-label="link-btn">
                            <span>BOOK SLOT</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="location">
        <div class="container">
            <div class="mainHead">
                <div class="mainTitle">A World of <span>Elegance</span></div>
            </div>
            <div class="d_flx">
                <div class="lft">
                    <div class="locationMap">
                        <a href="https://maps.app.goo.gl/B4bmzefcTbovtuwp9" class="map">
                            <div class="icon">
                                <svg width="38" height="38" viewBox="0 0 38 38" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1_26106)">
                                        <path
                                            d="M19 0C11.1435 0 4.75 6.43783 4.75 14.3529C4.75 25.5993 17.6605 37.2115 18.2099 37.6992C18.4363 37.9002 18.7182 38 19 38C19.2818 38 19.5637 37.9003 19.7901 37.7008C20.3395 37.2115 33.25 25.5993 33.25 14.3529C33.25 6.43783 26.8565 0 19 0ZM19 22.1667C14.6348 22.1667 11.0833 18.6152 11.0833 14.25C11.0833 9.88475 14.6348 6.33333 19 6.33333C23.3652 6.33333 26.9167 9.88475 26.9167 14.25C26.9167 18.6152 23.3652 22.1667 19 22.1667Z"
                                            fill="#EC2829" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1_26106">
                                            <rect width="38" height="38" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </div>
                            <div class="dirBx">
                                <div class="iconBx">

                                </div>
                                <div class="text">
                                    Get Direction
                                </div>
                            </div>
                        </a>   
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d31434.120710853556!2d76.2839413!3d9.994948!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1738136062110!5m2!1sen!2sin"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="rgt"></div>
            </div>
        </div>
    </section>

</div>

<!-- Slick Slider CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<!-- Slick Slider JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!-- FANCYBOX -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
    integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
    integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- FANCYBOX  -->
<noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
</noscript>

<script>
$(document).ready(function() {
    $('.pro_slider').slick({
        slidesToShow: 2.5,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        vertical: true,
        verticalSwiping: true,
        responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2.5, // Adjusted for a more natural flow
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2.5, // Adjusted for consistency
                    slidesToScroll: 1,
                    verticalSwiping: false,
                }
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2.5,
                    slidesToScroll: 1,
                    vertical: false,
                    verticalSwiping: false,
                }
            },
            {
                breakpoint: 430,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    vertical: false,
                    verticalSwiping: false,
                }
            }
        ]
    });
});

new Swiper('.fashionSlider', {
    lazy: true,
    preloadImages: true,
    slidesPerView: 1,
    paginationClickable: true,
    loop: true,
    watchSlidesProgress: true,
    spaceBetween: 10,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        1661: {
            slidesPerView: 5,
            spaceBetween: 25
        },
        1551: {
            slidesPerView: 5,
            spaceBetween: 15
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 10
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 15
        },

        678: {
            slidesPerView: 3,
            spaceBetween: 10
        },
        478: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        360: {
            slidesPerView: 2,
            spaceBetween: 10
        }
    }
});
</script>


@endsection
@push('js')
{{-- Placeholder for pushing JavaScript files specific to this page into the stack --}}
@endpush