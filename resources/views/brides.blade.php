@extends('layouts.app')
@section('title', 'Brides')
@push('css')
{{-- Placeholder for pushing CSS files specific to this page into the stack --}}
@endpush
@section('content')
{{-- Main content of the page goes here --}}

<div id="pageWrapper" class="bridePage">

    <section id="InnerBanner">
        <picture>
            <source media="(min-width: 578px)" srcset="{{ asset('frontend/images/brides-banner.webp')}}">
            <img src="{{ asset('frontend/images/brides-banner.webp')}}" width="1920" height="700" alt="banner">
        </picture>
        <div class="container">
            <div class="cntWrap">
                <div id="Breadcrumb">
                    <ul>
                        <li>
                            <a href="index.php" aria-label="links">Home</a>
                        </li>
                        <li>
                            <a href="#!" class="current" aria-label="links">Gallery</a>
                        </li>
                    </ul>
                </div>
                <h1 class="mHead">Brides of <span>Jayalakshmi</span> </h1>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            <div class="mainHead center">
                <div class="mainTitle">Our <span>Brides</span></div>
                <p>Discover a world of bridal elegance at Jayalakshmi Silks. Our bridal gallery showcases a stunning
                    collection of bridal sarees, lehengas, and accessories, all designed to make your special day
                    unforgettable.</p>
            </div>
            <div class="flxbx">
                @for ($i = 1; $i <= 17; $i++) <div class="item">
                    <a href="{{ asset('frontend/images/br' . $i . '.webp') }}" class="galBox" aria-label="galeryLink"
                        data-fancybox="gallery">
                        <div class="imgBx">
                            <img src="{{ asset('frontend/images/br' . $i . '.webp') }}" width="245" height="245"
                                alt="Bridal Image {{ $i }}">
                        </div>
                        <div class="info">
                            <div class="Txt">Midhun & Arathy</div>
                        </div>
                    </a>
            </div>
            @endfor
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
{{-- Placeholder for pushing JavaScript files specific to this page into the stack --}}
@endpush