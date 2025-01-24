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
                            <img src="{{asset('frontend/images/founder-logo.webp')}}" width="121" height="441"
                                class="lazy" loading="lazy" alt="logo">
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

    <section id="office">
        <div class="container">
            <div class="officeBx">
                <div class="mainHead">
                    <div class="mainTitle">Corporate Office & Store locations</div>
                </div>
                <div class="d_flx">
                    <div class="item">
                        <div class="title">
                            <div class="icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_683_29179)">
                                        <path
                                            d="M12 0C7.038 0 3 4.066 3 9.065C3 16.168 11.154 23.502 11.501 23.81C11.644 23.937 11.822 24 12 24C12.178 24 12.356 23.937 12.499 23.811C12.846 23.502 21 16.168 21 9.065C21 4.066 16.962 0 12 0ZM12 14C9.243 14 7 11.757 7 9C7 6.243 9.243 4 12 4C14.757 4 17 6.243 17 9C17 11.757 14.757 14 12 14Z"
                                            fill="#EA2126" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_683_29179">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="text">
                                Palarivattom <span>(Corporate Office)</span>
                            </div>
                        </div>
                        <p>
                            Palarivattom - Edappally Rd, Junction, Vennala, Kochi, Ernakulam, Kerala 682025
                        </p>
                        <span>Phone : </span> <a href="tel:04844299999" class="phn">
                            0484 4299999
                        </a>
                        <a href="#" class="direction">
                            <div class="icon">
                                <img src="{{ asset('frontend/images/google-map.webp')}}" class="lazy" width="20"
                                    height="20" loading="lazy" alt="google map">
                            </div>
                            <div class="text">
                                Get Direction
                            </div>
                        </a>
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