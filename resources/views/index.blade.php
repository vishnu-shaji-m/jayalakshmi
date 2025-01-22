@extends('layouts.app')
@section('title', 'Home')

@push('css')
{{-- Placeholder for pushing CSS files specific to this page into the stack --}}
@endpush

@section('content')
{{-- Main content of the page goes here --}}

<div id="pageWrapper" class="homepage">
    <!-- mainSlider -->


    <section id="MainBanner">
        <div id="bannerCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <!-- carouel start  -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="bgImgWrap">
                        <!-- <video class="lazy dsk video" autoplay muted loop playsinline width="1280" rel="preload"
                            data-src="assets/videos/banner1.mp4" data-poster="https://placehold.co/1920x1080">
                            <source type="video/mp4" data-src="assets/videos/banner1.mp4" />
                        </video>
                        <video class="lazy mob video" autoplay muted loop playsinline width="768" rel="preload"
                            data-src="assets/videos/banner1.mp4" data-poster="https://placehold.co/1920x1080">
                            <source type="video/mp4" data-src="assets/videos/banner1.mp4" />
                        </video> -->
                        <img src="{{asset('frontend/images/banner.webp')}}" loading="lazy" width="1920" height="630">
                    </div>
                    <div class="container">
                        <div class="contentBx">
                            <h3 class="mHead">
                                Tradition Meets Timeless <span> Elegance</span>
                                Forevermore Jayalakshmi
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="carousel-item  ">
                    <div class="bgImgWrap">
                        <!-- <video class="lazy dsk video" autoplay muted loop playsinline width="1280" rel="preload"
                            data-src="assets/videos/banner1.mp4" data-poster="https://placehold.co/1920x1080">
                            <source type="video/mp4" data-src="assets/videos/banner1.mp4" />
                        </video>
                        <video class="lazy mob video" autoplay muted loop playsinline width="768" rel="preload"
                            data-src="assets/videos/banner1.mp4" data-poster="https://placehold.co/1920x1080">
                            <source type="video/mp4" data-src="assets/videos/banner1.mp4" />
                        </video> -->
                        <img src="{{asset('frontend/images/banner.webp')}}" loading="lazy" width="1920" height="630">
                    </div>
                    <div class="container">
                        <div class="contentBx">
                            <h3 class="mHead">
                                Tradition Meets Timeless <span> Elegance </span>
                                Forevermore Jayalakshmi
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- carouel end  -->
            <div class="container">
                <div class="indictorsFlx">

                    <div class="item">
                        <div class="conteBx">
                            <div class="numberBx">
                                <div class="item">
                                    <div class="num counts">01</div>
                                </div>
                                <div class="item">
                                    <div class="num total">01</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- .collections slider  -->
                <div class="collectionBx">
                    <div class="title upper">OUR COLLECTIONS</div>
                    <div class="collectionSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="javascript:void(0)" class="collectBx" aria-label="collectionLink">
                                    <div class="imgbx">
                                        <img src="{{asset('frontend/images/collection1.webp')}}" width="140" height="77"
                                            alt="">
                                    </div>
                                    <div class="info">
                                        <div class="mainTxt">Kancheepuram Silk</div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0)" class="collectBx" aria-label="collectionLink">
                                    <div class="imgbx">
                                        <img src="{{asset('frontend/images/collection2.webp')}}" width="140" height="77"
                                            alt="">
                                    </div>
                                    <div class="info">
                                        <div class="mainTxt">Banarasi</div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0)" class="collectBx" aria-label="collectionLink">
                                    <div class="imgbx">
                                        <img src="{{asset('frontend/images/collection3.webp')}}" width="140" height="77"
                                            alt="">
                                    </div>
                                    <div class="info">
                                        <div class="mainTxt">Tussar Silk</div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0)" class="collectBx" aria-label="collectionLink">
                                    <div class="imgbx">
                                        <img src="{{asset('frontend/images/collection4.webp')}}" width="140" height="77"
                                            alt="">
                                    </div>
                                    <div class="info">
                                        <div class="mainTxt">Kasavu Kada</div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="javascript:void(0)" class="collectBx" aria-label="collectionLink">
                                    <div class="imgbx">
                                        <img src="{{asset('frontend/images/collection4.webp')}}" width="140" height="77"
                                            alt="">
                                    </div>
                                    <div class="info">
                                        <div class="mainTxt">Kasavu Kada</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- about us -->

    <section id="about">
        <div class="container">
            <div class="abtLx">
                <div class="alx">
                    <div class="contentBx">
                        <div class="mainHeads">
                            <h1 class="subT">About us</h1>
                            <div class="mainTitle">Jayalakshmi Silks:<br>
                                A Legacy of Elegance</div>
                        </div>
                        <p>
                            Since 1947, Jayalakshmi Silks has been synonymous with timeless elegance and exquisite
                            fashion.
                            Our journey began with a small store in Cochin and has blossomed into a renowned brand with
                            multiple showrooms across Kerala and Karnataka.
                        </p>
                        <p>
                            We believe that shopping should be a delightful experience.
                        </p>
                        <h6 class="mainTxt">Visit one of our showrooms today and experience the Jayalakshmi difference.
                            We
                            invite you to indulge in the world of luxury and style.</h6>
                    </div>
                    <a href="javascript:void(0)" class="hoveranim cmnBtn" aria-label="link-btn">
                        <span>LEARN MORE</span>
                    </a>



                </div>
                <div class="arlx">
                    <div class="flxBx">
                        <div class="imgWrap">
                            <div class="imgBx">
                                <img src="{{asset('frontend/images/about.webp')}}"
                                    data-src="{{asset('frontend/images/about.webp')}}" class="lazy" loading="lazy"
                                    width="515" height="515" alt="aboutImg">
                            </div>
                            <div class="tptxt">
                                <div class="txt">Forevermore</div>
                            </div>
                            <div class="btnmTxt">
                                <div class="year">#since1947</div>
                                <div class="cpmyNam">JAYALAKSHMI</div>
                            </div>
                        </div>
                        <div class="conterBx">
                            <div class="itemList">
                                <div class="item wow animate__fadeInUp" data-wow-duration="1s">
                                    <div class="countBx">
                                        <div class="num"><span data-count="78">0</span></div>
                                        <div class="txt">Years of Experience</div>
                                    </div>
                                </div>
                                <div class="item wow animate__fadeInUp" data-wow-duration="1.2s">
                                    <div class="countBx">
                                        <div class="num"><span data-count="6">0</span>+</div>
                                        <div class="txt">Store
                                            Locations</div>
                                    </div>
                                </div>
                                <div class="item wow animate__fadeInUp" data-wow-duration="1.4s">
                                    <div class="countBx">
                                        <div class="num"><span data-count="2">0 </span>Million</div>
                                        <div class="txt">Jayalakshmi
                                            Brides</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- collections -->

    <section id="saree">
        <div class="container">
            <div class="mainHead center">
                <div class="mainTitle">Saree <span>Collections</span></div>
                <p>Discover a breathtaking collection of traditional and contemporary sarees, woven with love and
                    adorned with intricate details.</p>
            </div>
            <div class="sareeSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="javascript:void(0)" class="sareeBx" aria-label="collectionLink">
                            <div class="imgbx">
                                <img src="{{asset('frontend/images/saree1.webp')}}" width="370" height="450" alt="">
                            </div>
                            <div class="info">
                                <div class="mainTxt">Kancheepuram Silk</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:void(0)" class="sareeBx" aria-label="collectionLink">
                            <div class="imgbx">
                                <img src="{{asset('frontend/images/saree2.webp')}}" width="370" height="450" alt="">
                            </div>
                            <div class="info">
                                <div class="mainTxt">Kancheepuram Silk</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:void(0)" class="sareeBx" aria-label="collectionLink">
                            <div class="imgbx">
                                <img src="{{asset('frontend/images/saree3.webp')}}" width="370" height="450" alt="">
                            </div>
                            <div class="info">
                                <div class="mainTxt">Kancheepuram Silk</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="javascript:void(0)" class="sareeBx" aria-label="collectionLink">
                            <div class="imgbx">
                                <img src="{{asset('frontend/images/saree4.webp')}}" width="370" height="450" alt="">
                            </div>
                            <div class="info">
                                <div class="mainTxt">Kancheepuram Silk</div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- moments -->

    <section id="moments" class="jarallax" data-jarallax data-type="scroll">
        <img src="{{asset('frontend/images/momentBg.webp')}}" data-src="{{asset('frontend/images/momentBg.webp')}}"
            width="1920" height="765" class="lazy jarallax-img" loading="lazy" alt="momentBg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 leftbx">
                    <div class="contentBx">
                        <div class="mainHead white">
                            <div class="mainTitle">Celebrate life's <span>special</span> <br>
                                moments in <span>style</span></div>
                            <p>Discover a breathtaking collection of traditional and contemporary sarees, woven with
                                love and adorned with intricate details.</p>
                        </div>
                        <a href="javascript:void(0)" class="hoveranim cmnBtn">
                            <span>VIEW COLLECTIONS</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="sliderBx">
                        <div class="momentSlider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="javascript:void(0)" class="momentBx" aria-label="momentLink">
                                        <div class="imgbx">
                                            <img src="{{asset('frontend/images/moment1.webp')}}" width="250"
                                                height="350" alt="momentImg">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="javascript:void(0)" class="momentBx" aria-label="momentLink">
                                        <div class="imgbx">
                                            <img src="{{asset('frontend/images/moment2.webp')}}" width="250"
                                                height="350" alt="momentImg">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="javascript:void(0)" class="momentBx" aria-label="momentLink">
                                        <div class="imgbx">
                                            <img src="{{asset('frontend/images/moment3.webp')}}" width="250"
                                                height="350" alt="momentImg">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- fashion forward -->

    <section id="fashion">
        <div class="container">
            <div class="mainHead center">
                <div class="mainTitle">Fashion <span>Forward</span></div>
                <p>Immerse yourself in a world of exquisite silks, rich fabrics, and stunning designs, perfect for every
                    occasion.</p>
            </div>
            <div class="fashionSlider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="javascript:void(0)" class="fashionBx" aria-label="fashionLink">
                            <div class="imgbx">
                                <img src="{{asset('frontend/images/fashion1.webp')}}" width="300" height="420"
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
                                <img src="{{asset('frontend/images/fashion2.webp')}}" width="300" height="420"
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
                                <img src="{{asset('frontend/images/fashion3.webp')}}" width="300" height="420"
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
                                <img src="{{asset('frontend/images/fashion4.webp')}}" width="300" height="420"
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
                                <img src="{{asset('frontend/images/fashion5.webp')}}" width="300" height="420"
                                    alt="fashionImg">
                            </div>
                            <div class="info">
                                <div class="mainTxt">Pastel Blue Printed Art
                                    Silk Saree</div>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="swiper-slide">
                        <a href="javascript:void(0)" class="fashionBx" aria-label="fashionLink">
                            <div class="imgbx">
                                <img src="{{asset('frontend/images/fashion5.webp')}}" width="300" height="420"
                                    alt="fashionImg">
                            </div>
                            <div class="info">
                                <div class="mainTxt">Pastel Blue Printed Art
                                    Silk Saree</div>
                            </div>
                        </a> -->
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

    <!-- bridal lounge -->

    <section id="bridal" class="jarallax" data-jarallax data-type="scroll">
        <img src="{{asset('frontend/images/bridal.webp')}}" data-src="{{asset('frontend/images/bridal.webp')}}"
            width="1920" height="478" class="lazy jarallax-img" loading="lazy" alt="bridalImg">
        <div class="container">
            <div class="contentBx">
                <div class="mainHead">
                    <div class="mainTitle">Bridal <span>lounge</span></div>
                </div>
            </div>
        </div>
    </section>





    @endsection
    @push('js')
    {{-- Placeholder for pushing JavaScript files specific to this page into the stack --}}

    <!-- TOUCH_SWIPE -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js" defer>
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // TOUCH_SWIPE
        $(".carousel").swipe({
            swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
                if (direction == 'left') $(this).carousel('next');
                if (direction == 'right') $(this).carousel('prev');
            },
            allowPageScroll: "vertical"
        });
    });
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



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
        }, 3000);
    });
    </script>

    <!-- SCROLL MAGIC -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"
        integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

    <!-- JARALLAX --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jarallax/2.0.3/jarallax.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jarallax/2.0.3/jarallax.min.js"></script>



    <script>
    $(document).ready(function() {
        var controller = new ScrollMagic.Controller();

        var scene = new ScrollMagic.Scene({
                triggerElement: '#about .countBx ',
                triggerHook: 0.9
            })
            .setClassToggle('#about .countBx', 'isVisible')
            .on("enter", function() {
                $('.num span').each(function() {
                    var $this = $(this),
                        countTo = $this.attr('data-count');

                    $({
                        countNum: $this.text()
                    }).animate({
                        countNum: countTo
                    }, {
                        duration: 2000,
                        easing: 'linear',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }
                    });
                });
            })
            .on("leave", function() {
                $('.num span').each(function() {
                    $(this).text(0);
                });
            })
            .reverse(true)
            .addTo(controller);
    });


    document.addEventListener("DOMContentLoaded", function() {
        const lazyImages = document.querySelectorAll('img.lazy');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src; // Set the real image source
                    img.classList.remove("lazy"); // Remove lazy class
                    observer.unobserve(img); // Stop observing once loaded
                }
            });
        });

        lazyImages.forEach(img => observer.observe(img));
    });

    // banner slider count

    $(document).ready(function() {
        let totalSlides = $('#bannerCarousel .carousel-item').length;

        // Initialize total slides and set first slide count
        $('.total').text(totalSlides.toString().padStart(2, '0'));
        $('.counts').text('01');

        // Update counts on slide change
        $('#bannerCarousel').on('slid.bs.carousel', function(e) {
            let currentSlide = $(e.relatedTarget).index() + 1; // 1-based index
            $('.counts').text(currentSlide.toString().padStart(2, '0'));
        });
    });


    // banner slider count end


    $(document).ready(function() {

        new Swiper('.collectionSlider', {
            lazy: true,
            preloadImages: true,
            slidesPerView: 2,
            paginationClickable: true,
            loop: true,
            watchSlidesProgress: true,
            spaceBetween: 35,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },


            breakpoints: {
                1661: {
                    slidesPerView: 4,
                    spaceBetween: 15
                },
                1551: {
                    slidesPerView: 4,
                    spaceBetween: 10
                },
                1441: {
                    slidesPerView: 4,
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
        // sree slkider
        new Swiper('.sareeSlider', {
            lazy: true,
            preloadImages: true,
            slidesPerView: 1,
            paginationClickable: true,
            loop: true,
            watchSlidesProgress: true,
            spaceBetween: 15,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },


            breakpoints: {
                1661: {
                    slidesPerView: 4,
                    spaceBetween: 15
                },
                1551: {
                    slidesPerView: 4,
                    spaceBetween: 10
                },
                1441: {
                    slidesPerView: 4,
                    spaceBetween: 10
                },
                992: {
                    slidesPerView: 4,
                    spaceBetween: 10
                },

                678: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
                578: {
                    slidesPerView: 2.7,
                    spaceBetween: 10
                },
                420: {
                    slidesPerView: 2,
                    spaceBetween: 10
                }
            }
        });

        // momentSlider

        new Swiper('.momentSlider', {
            lazy: true,
            preloadImages: true,
            slidesPerView: 2,
            paginationClickable: true,
            loop: true,
            watchSlidesProgress: true,
            spaceBetween: 35,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            breakpoints: {
                1661: {
                    slidesPerView: 3,
                    spaceBetween: 40
                },
                1551: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 25
                },
                992: {
                    slidesPerView: 2.5,
                    spaceBetween: 15
                },

                678: {
                    slidesPerView: 3,
                    spaceBetween: 10
                },
                478: {
                    slidesPerView: 2.7,
                    spaceBetween: 10
                },
                0: {
                    slidesPerView: 2,
                    spaceBetween: 10
                }
            }
        });

        // fashionSlider 

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



    });
    </script>
</div>
@endpush