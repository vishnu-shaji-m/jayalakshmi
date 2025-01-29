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
                    slidesToShow: 3, // Adjusted for a more natural flow
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2, // Adjusted for consistency
                    slidesToScroll: 1,
                    verticalSwiping: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
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
</script>


@endsection
@push('js')
{{-- Placeholder for pushing JavaScript files specific to this page into the stack --}}
@endpush