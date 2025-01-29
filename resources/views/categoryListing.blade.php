@extends('layouts.app')
@section('title', 'category')
@push('css')
{{-- Placeholder for pushing CSS files specific to this page into the stack --}}
@endpush
@section('content')
{{-- Main content of the page goes here --}}


<div id="pageWrapper" class="categoryListingPage">

    <section id="InnerBanner">
        <picture>
            <source media="(min-width: 468px)" srcset="{{ asset('frontend/images/collection-banner.webp')}}">
            <img src="{{ asset('frontend/images/collection-banner.webp')}}" width="1920" height="700" alt="banner">
        </picture>
        <div class="container">
            <div class="cntWrap">
                <div id="Breadcrumb">
                    <ul>
                        <li>
                            <a href="index1.php" aria-label="links">Home</a>
                        </li>
                        <li>
                            <a href="#!" class="current" aria-label="links">Collections</a>
                        </li>
                    </ul>
                </div>
                <h1 class="mHead">Signature <span>Styles</span> </h1>
            </div>
        </div>
    </section>

    <section id="style">
        <div class="container">
            <div class="mainHead center wow animate__fadeInUp" data-wow-duration="1s">
                <div class="mainTitle">Explore Our Signature <span>Styles</span></div>
                <p>
                    Explore our diverse collection of sarees, salwar kameez, lehengas, western wear, and more. Our
                    product categories cater to all your style needs, offering a wide range of options for women, men,
                    and kids. Find the perfect outfit for every occasion, from casual to formal.
                </p>
            </div>
            <div class="d_flx">
                <div class="item wow animate__fadeInUp" data-wow-duration="1s">
                    <a href="javascript:void(0)" class="signatureBx" aria-label="signatureLink">
                        <div class="imgbx">
                            <img src="{{asset('frontend/images/style1.webp')}}" loading="lazy" class="lazy" width="510" height="350" alt="product ">
                        </div>
                        <div class="info">
                            <div class="mainTxt">Saree</div>
                        </div>
                    </a>
                </div>
                <div class="item wow animate__fadeInUp" data-wow-duration="1s">
                    <a href="javascript:void(0)" class="signatureBx" aria-label="signatureLink">
                        <div class="imgbx">
                            <img src="{{asset('frontend/images/style2.webp')}}" loading="lazy" class="lazy" width="510" height="350" alt="product  ">
                        </div>
                        <div class="info">
                            <div class="mainTxt">Lehenga</div>
                        </div>
                    </a>
                </div>
                <div class="item wow animate__fadeInUp" data-wow-duration="1s">
                    <a href="javascript:void(0)" class="signatureBx" aria-label="signatureLink">
                        <div class="imgbx">
                            <img src="{{asset('frontend/images/style3.webp')}}" loading="lazy" class="lazy" width="510" height="350" alt="product ">
                        </div>
                        <div class="info">
                            <div class="mainTxt">Gown</div>
                        </div>
                    </a>
                </div>
                <div class="item wow animate__fadeInUp" data-wow-duration="1s">
                    <a href="javascript:void(0)" class="signatureBx" aria-label="signatureLink">
                        <div class="imgbx">
                            <img src="{{asset('frontend/images/style4.webp')}}" loading="lazy" class="lazy" width="510" height="350" alt="product ">
                        </div>
                        <div class="info">
                            <div class="mainTxt">Mens Wear</div>
                        </div>
                    </a>
                </div>
                <div class="item wow animate__fadeInUp" data-wow-duration="1s">
                    <a href="javascript:void(0)" class="signatureBx" aria-label="signatureLink">
                        <div class="imgbx">
                            <img src="{{asset('frontend/images/style5.webp')}}" loading="lazy" class="lazy" width="510" height="350" alt="product ">
                        </div>
                        <div class="info">
                            <div class="mainTxt">Kids Wear</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


</div>


@endsection
@push('js')
{{-- Placeholder for pushing JavaScript files specific to this page into the stack --}}
@endpush