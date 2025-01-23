@extends('layouts.app')
@section('title', 'About')
@push('css')
{{-- Placeholder for pushing CSS files specific to this page into the stack --}}
@endpush
@section('content')
{{-- Main content of the page goes here --}}


<div id="pageWrapper" class="aboutPage">

    <section id="InnerBanner">
        <picture>
            <source media="(min-width: 468px)" srcset="{{ asset('frontend/images/about-banner.webp')}}">
            <img src="{{ asset('frontend/images/about-banner.webp')}}" width="1920" height="700" alt="banner">
        </picture>
        <div class="container">
            <div class="cntWrap">
                <div id="Breadcrumb">
                    <ul>
                        <li>
                            <a href="index1.php" aria-label="links">Home</a>
                        </li>
                        <li>
                            <a href="#!" class="current" aria-label="links">About Us</a>
                        </li>
                    </ul>
                </div>
                <h1 class="mHead">Jayalakshmi <span>Legacy</span> </h1>
            </div>
        </div>
    </section>

    <section id="about-sec">
        <div class="container">
            <div class="flxBx wow animate__fadeInUp" data-wow-duration="1s">
                <div class="lefBx">
                    <div class="contentWrap">
                        <div class="imgWrp">
                            <div class="imgBx">
                                <img src="{{ asset('frontend/images/about-sec.webp')}}"
                                    data-src="{{ asset('frontend/images/about-sec.webp')}}" class="lazy" width="506"
                                    height="511" loading="lazy" alt="abouImg">
                                <div class="about-logo">
                                    <img src="{{ asset('frontend/images/about-logo.webp')}}" class="lazy" width="273"
                                        height="75" loading="lazy" alt="logo">
                                </div>
                            </div>
                        </div>
                        <div class="infoSec">
                            <div class="mainHead">
                                <div class="mainTitle">Experience the <br> Magic of<span>Jayalakshmi</span></div>
                            </div>
                            <div class="contentBx">
                                <p>
                                    For over 75 wonderful years, Jayalakshmi Silks has been the premier destination for
                                    sarees and bridal wear, and it has now reached a time when when it modernises
                                    further to be as relevant and modern to the young consumer as it has been for over
                                    four generations.
                                </p>
                                <p>
                                    Jayalakshmi Silks, since its inception, has a firmly established reputation for
                                    having a unique fashion selection of sarees, not just in Kerala but around India and
                                    the globe.. The store was founded in 1947 by Narasimha Kamath and quickly gained a
                                    reputation as a go-to destination for fashion forward women who chose it as the
                                    first stop for their bridal, occasion and everyday needs. The legacy has been taken
                                    forward by his three sons and the showroom continue to command the love of
                                    customers, from celebrities, heads of state & people of varied social standing,
                                    irrespective of religion, region or class. In addition to clothing and accessories,
                                    Jayalakshmi also sells a range of lehengas, lachas, ethic and westernwear including
                                    for men and children.
                                </p>
                                <p>
                                    <strong>
                                        We are soon launching our flagship showroom at Palarivattom in Kochi.
                                    </strong>
                                </p>
                                <p>
                                    <strong>
                                        The store’s legacy continues through the countless individuals it has inspired
                                        and the lasting memories it creates for its customers. As we like to say,
                                        Jayalakshmi is #ForeverMore.
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="founder">
        <div class="bg">
            <img src="{{asset('frontend/images/founder-bg.webp')}}" width="521" height="526" class="lazy" loading="lazy"
                alt="bg">
        </div>
        <div class="container">
            <div class="flxBx wow animate__fadeInUp" data-wow-duration="1s">
                <div class="lft">
                    <div class="flx">
                        <div class="logo">
                            <img src="{{asset('frontend/images/founder-logo.webp')}}" width="121" height="441" class="lazy" loading="lazy" alt="logo">
                        </div>
                        <div class="infoSec">
                            <div class="mainHead">
                                <div class="mainTitle">About Our <span>founder</span></div>
                            </div>
                            <div class="contentBx">
                                <p>Late Mr. Narasimha Kamath, the visionary founder of Jayalakshmi Stores, was born in a
                                    small village in Kerala. From a young age, he displayed a keen interest in textiles,
                                    learning the intricacies of weaving and dyeing while assisting his father, a local
                                    artisan. Driven by an entrepreneurial spirit, Mr. Kamath moved to Cochin and
                                    established Jayalakshmi Stores in 1947. He envisioned a store that would not only
                                    offer high-quality products but also provide an exceptional shopping experience for
                                    customers.
                                </p>
                                <p>
                                    Mr. Kamath instilled strong family values and a commitment to customer satisfaction
                                    in his sons, ensuring the continued success of Jayalakshmi.
                                </p>
                                <p>
                                    Though he is no longer with us, his entrepreneurial spirit and dedication to quality
                                    remain the guiding principles of Jayalakshmi Stores, ensuring that his legacy
                                    continues to thrive. Today, Jayalakshmi stands as a testament to his vision,
                                    offering a diverse range of products and an unparalleled shopping experience to
                                    customers across Kerala and beyond.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rgt">
                    <div class="imgBx">
                        <img src="{{ asset('frontend/images/founder.webp')}}"
                            data-src="{{ asset('frontend/images/founder.webp')}}" class="lazy" width="665" height="540"
                            loading="lazy" alt="abouImg">
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