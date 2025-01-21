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
                                Where Tradition Meets Timeless
                                Elegance. Forevermore JL
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
                                Where Tradition Meets Timeless
                                Elegance. Forevermore JL
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container cmContainer">
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
        new Swiper('.productSlider', {
            lazy: true,
            preloadImages: true,
            slidesPerView: 2,
            paginationClickable: true,
            watchSlidesProgress: true,
            spaceBetween: 35,
            autoplay: {
                delay: 30000,
                disableOnInteraction: false,
            },

            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
            breakpoints: {
                1661: {
                    slidesPerView: 4,
                    spaceBetween: 45
                },
                1551: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                1441: {
                    slidesPerView: 4,
                    spaceBetween: 20
                },
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 15
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 15
                },
                678: {
                    slidesPerView: 2.5,
                    spaceBetween: 15
                },
                480: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                360: {
                    slidesPerView: 1.3,
                    spaceBetween: 10
                },
                0: {
                    slidesPerView: 1,
                    spaceBetween: 10
                }
            }
        });





    });
    </script>
</div>
@endpush