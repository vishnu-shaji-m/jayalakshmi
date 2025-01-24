@extends('layouts.app')
@section('title', 'sub category')
@push('css')
{{-- Placeholder for pushing CSS files specific to this page into the stack --}}
@endpush
@section('content')
{{-- Main content of the page goes here --}}


<div id="pageWrapper" class="categoryListingPage">

    <section id="InnerBanner">
        <picture>
            <source media="(min-width: 468px)" srcset="{{ asset('frontend/images/sub-category-banner.webp')}}">
            <img src="{{ asset('frontend/images/sub-category-banner.webp')}}" width="1920" height="700" alt="banner">
        </picture>
        <div class="container">
            <div class="cntWrap">
                <div id="Breadcrumb">
                    <ul>
                        <li>
                            <a href="index" aria-label="links">Home</a>
                        </li>
                        <li>
                            <a href="categoryListing" aria-label="links">Collections</a>
                        </li>
                        <li>
                            <a href="#!" class="current" aria-label="links">Sarees</a>
                        </li>
                    </ul>
                </div>
                <h1 class="mHead">Sarees </h1>
            </div>
        </div>
    </section>

    <section id="collections">
        <div class="container">
            <div class="mainHead center wow animate__fadeInUp" data-wow-duration="1s">
                <div class="mainTitle">Saree <span>Collections</span></div>
                <p>
                    Discover a breathtaking collection of traditional and contemporary sarees, woven with love and
                    adorned with intricate details.
                </p>
            </div>
            <div class="d_flx">
                <div class="item">
                    <div class="sub_category">
                        <div class="imgBx">
                            <img src="{{asset('frontend/images/s1.webp')}}" loading="lazy" class="lazy" width="780"
                                height="518" alt="sub category">
                            <div class="info">
                                <div class="popup_flx">
                                    <a href="#!" aria-label="view" class="view">
                                        VIEW
                                    </a>
                                    <a href="#!" aria-label="enq" class="enq">
                                        ENQUIRE NOW
                                    </a>
                                </div>
                                <div class="name">
                                    Kanjeevaram Silk
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="sub_category">
                        <div class="imgBx">
                            <img src="{{asset('frontend/images/s2.webp')}}" loading="lazy" class="lazy" width="780"
                                height="518" alt="sub category">
                            <div class="info">
                                <div class="popup_flx">
                                    <a href="#!" aria-label="view" class="view">
                                        VIEW
                                    </a>
                                    <a href="#!" aria-label="enq" class="enq">
                                        ENQUIRE NOW
                                    </a>
                                </div>
                                <div class="name">
                                    Tussar Silk
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="sub_category">
                        <div class="imgBx">
                            <img src="{{asset('frontend/images/s3.webp')}}" loading="lazy" class="lazy" width="780"
                                height="518" alt="sub category">
                            <div class="info">
                                <div class="popup_flx">
                                    <a href="#!" aria-label="view" class="view">
                                        VIEW
                                    </a>
                                    <a href="#!" aria-label="enq" class="enq">
                                        ENQUIRE NOW
                                    </a>
                                </div>
                                <div class="name">
                                    Banarasi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="sub_category">
                        <div class="imgBx">
                            <img src="{{asset('frontend/images/s4.webp')}}" loading="lazy" class="lazy" width="780"
                                height="518" alt="sub category">
                            <div class="info">
                                <div class="popup_flx">
                                    <a href="#!" aria-label="view" class="view">
                                        VIEW
                                    </a>
                                    <a href="#!" aria-label="enq" class="enq">
                                        ENQUIRE NOW
                                    </a>
                                </div>
                                <div class="name">
                                    Kasavu Kada
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="sub_category">
                        <div class="imgBx">
                            <img src="{{asset('frontend/images/s5.webp')}}" loading="lazy" class="lazy" width="780"
                                height="518" alt="sub category">
                            <div class="info">
                                <div class="popup_flx">
                                    <a href="#!" aria-label="view" class="view">
                                        VIEW
                                    </a>
                                    <a href="#!" aria-label="enq" class="enq">
                                        ENQUIRE NOW
                                    </a>
                                </div>
                                <div class="name">
                                    Silk Saree
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


@endsection
@push('js')
{{-- Placeholder for pushing JavaScript files specific to this page into the stack --}}
@endpush