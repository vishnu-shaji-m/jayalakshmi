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
                            <a href="index" aria-label="links">Home</a>
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
                <div class="d_flx wow animate__fadeInUp" data-wow-duration="1s">
                    <div class="item">
                        <div class="itemBx">
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
                            <p>Phone :
                                <a href="tel:04844299999" class="phn">
                                    0484 4299999
                                </a>
                            </p>
                            <a href="https://maps.app.goo.gl/dkHG1JocpRgvgtHg7" class="direction">
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
                    <div class="item">
                        <div class="itemBx">
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
                                    Kochi (M.G Road)
                                </div>
                            </div>
                            <p>
                                Mahatma Gandhi Rd, near Shenoys Junction, Shenoys, Kochi, Ernakulam, Kerala 682035
                            </p>
                            <p>Phone :
                                <a href="tel:04844299999" class="phn">
                                    0484 4299999
                                </a>
                            </p>
                            <a href="https://maps.app.goo.gl/dkHG1JocpRgvgtHg7" class="direction">
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
                    <div class="item">
                        <div class="itemBx">
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
                                    Thiruvanthapuram
                                </div>
                            </div>
                            <p>
                                Mahatma Gandhi Rd, Overbridge, Vanchiyoor, Thiruvananthapuram, Kerala 695001
                            </p>
                            <p>Phone :
                                <a href="tel:04714299999" class="phn">
                                    0471 4299999
                                </a>
                            </p>
                            <a href="https://maps.app.goo.gl/dkHG1JocpRgvgtHg7" class="direction">
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
                    <div class="item">
                        <div class="itemBx">
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
                                    Thrissur
                                </div>
                            </div>
                            <p>
                                Poothole Road, Kuttipuzha Nagar, Poothole, Thrissur, Kerala 680004
                            </p>
                            <p>Phone :
                                <a href="tel:04873366699" class="phn">
                                    0487 3366699
                                </a>
                            </p>
                            <a href="https://maps.app.goo.gl/dkHG1JocpRgvgtHg7" class="direction">
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
                    <div class="item">
                        <div class="itemBx">
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
                                    Calicut
                                </div>
                            </div>
                            <p>
                                Kallai Rd, Palayam, Kozhikode, Kerala 673001
                            </p>
                            <p>Phone :
                                <a href="tel:04873366699" class="phn">
                                    0487 3366699
                                </a>
                            </p>
                            <a href="https://maps.app.goo.gl/dkHG1JocpRgvgtHg7" class="direction">
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
                    <div class="item">
                        <div class="itemBx">
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
                                    Mangalore
                                </div>
                            </div>
                            <p>
                                Bejai - Kapikad Rd, opposite MESCOM, Lalbagh, Mangaluru, Karnataka 575004
                            </p>
                            <p>Phone :
                                <a href="tel:08244299999" class="phn">
                                    0824 4299999
                                </a>
                            </p>
                            <a href="https://maps.app.goo.gl/dkHG1JocpRgvgtHg7" class="direction">
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
        </div>
    </section>

    <section id="instafeed">
        <div class="container">
            <div class="he_sec wow animate__fadeInUp" data-wow-duration="1s">
                <div class="title">
                    <div class="icon">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.7465 25C12.6638 25 12.581 25 12.4976 24.9996C10.5379 25.0044 8.72722 24.9546 6.96628 24.8474C5.35184 24.7492 3.87817 24.1913 2.70434 23.2342C1.57172 22.3106 0.798256 21.0619 0.405518 19.523C0.0637079 18.1833 0.0455874 16.8682 0.0282298 15.5962C0.0156408 14.6835 0.00267039 13.602 0 12.5023C0.00267039 11.3979 0.0156408 10.3164 0.0282298 9.40376C0.0455874 8.13193 0.0637079 6.81681 0.405518 5.4769C0.798256 3.93804 1.57172 2.6893 2.70434 1.76576C3.87817 0.808648 5.35184 0.250747 6.96648 0.152518C8.72741 0.0455156 10.5385 -0.00445705 12.5024 0.000311335C14.4626 -0.00388484 16.2728 0.0455156 18.0337 0.152518C19.6482 0.250747 21.1218 0.808648 22.2957 1.76576C23.4285 2.6893 24.2017 3.93804 24.5945 5.4769C24.9363 6.81662 24.9544 8.13193 24.9718 9.40376C24.9844 10.3164 24.9975 11.3979 25 12.4977V12.5023C24.9975 13.602 24.9844 14.6835 24.9718 15.5962C24.9544 16.868 24.9365 18.1831 24.5945 19.523C24.2017 21.0619 23.4285 22.3106 22.2957 23.2342C21.1218 24.1913 19.6482 24.7492 18.0337 24.8474C16.3474 24.95 14.615 25 12.7465 25ZM12.4976 23.0465C14.4254 23.0511 16.1955 23.0024 17.9151 22.8979C19.1358 22.8237 20.1943 22.4276 21.0614 21.7205C21.8629 21.0668 22.4149 20.165 22.7019 19.0401C22.9865 17.9249 23.0029 16.7274 23.0188 15.5695C23.0312 14.6629 23.0441 13.5891 23.0468 12.5C23.0441 11.4107 23.0312 10.337 23.0188 9.43046C23.0029 8.27251 22.9865 7.07507 22.7019 5.95965C22.4149 4.83469 21.8629 3.93289 21.0614 3.27924C20.1943 2.57238 19.1358 2.17622 17.9151 2.10202C16.1955 1.99731 14.4254 1.94905 12.5022 1.95325C10.5747 1.94867 8.80447 1.99731 7.08493 2.10202C5.86418 2.17622 4.80575 2.57238 3.93863 3.27924C3.13714 3.93289 2.58513 4.83469 2.29806 5.95965C2.01347 7.07507 1.99707 8.27232 1.98124 9.43046C1.96884 10.3378 1.95587 11.4122 1.9532 12.5023C1.95587 13.5875 1.96884 14.6621 1.98124 15.5695C1.99707 16.7274 2.01347 17.9249 2.29806 19.0401C2.58513 20.165 3.13714 21.0668 3.93863 21.7205C4.80575 22.4274 5.86418 22.8235 7.08493 22.8977C8.80447 23.0024 10.5751 23.0513 12.4976 23.0465ZM12.4511 18.6035C9.08562 18.6035 6.34733 15.8655 6.34733 12.5C6.34733 9.13444 9.08562 6.39643 12.4511 6.39643C15.8167 6.39643 18.5548 9.13444 18.5548 12.5C18.5548 15.8655 15.8167 18.6035 12.4511 18.6035ZM12.4511 8.34956C10.1625 8.34956 8.30053 10.2115 8.30053 12.5C8.30053 14.7884 10.1625 16.6504 12.4511 16.6504C14.7398 16.6504 16.6016 14.7884 16.6016 12.5C16.6016 10.2115 14.7398 8.34956 12.4511 8.34956ZM19.2384 4.4433C18.4295 4.4433 17.7735 5.09905 17.7735 5.90815C17.7735 6.71725 18.4295 7.373 19.2384 7.373C20.0476 7.373 20.7033 6.71725 20.7033 5.90815C20.7033 5.09905 20.0476 4.4433 19.2384 4.4433Z"
                                fill="#393838" />
                        </svg>

                    </div>
                    <div class="text">
                        Insta feed
                    </div>
                </div>
                <p>
                    Discover a world of bridal elegance at Jayalakshmi Silks. Our bridal gallery showcases a stunning
                    collection of bridal sarees, lehengas, and accessories, all designed to make your special day
                    unforgettable.
                </p>
            </div>
        </div>
        <div class="container-fluid">
            <div class="bridalSlider wow animate__fadeInUp" data-wow-duration="1s">
                <div class="swiper-wrapper">
                    @for ($i = 1; $i <= 17; $i++) <div class="swiper-slide">
                        <a href="{{ asset('frontend/images/br' . $i . '.webp') }}" class="bridalimBx"
                            aria-label="bridaLink" data-fancybox="gallery">
                            <div class="imgBx">
                                <img src="{{ asset('frontend/images/br' . $i . '.webp') }}" width="245" height="245"
                                    alt="Bridal Image {{ $i }}">
                                <div class="icon">
                                    <img src="{{ asset('frontend/images/insta.webp')}}" class="lazy" loading="lazy"
                                        width="24" height="24" alt="insta">
                                </div>
                            </div>
                        </a>
                </div>
                @endfor
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <a href="javascript:void(0)" class="cmnBtn hoveranim" aria-label="cmnLink">
            <span>Come visit us </span>
        </a>
</div>
</section>


</div>


@endsection
@push('js')
{{-- Placeholder for pushing JavaScript files specific to this page into the stack --}}
@endpush

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- FANCYBOX  -->
<noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
</noscript>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // FANCYBOX CSS
    const link = document.createElement('link');
    link.href = "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css";
    link.rel = "stylesheet";
    document.head.appendChild(link);

    // FANCYBOX JS
    const script = document.createElement('script');
    script.src = "https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js";
    script.defer = true;
    script.id = 'FancyboxJs';
    document.head.appendChild(script);

    script.onload = function() {
        Fancybox.bind("[data-fancybox='gallery']", {
            Thumbs: {
                autoStart: true
            },
            Toolbar: {
                display: ["zoom", "download", "close"]
            },
        });
    };
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    new Swiper('.bridalSlider', {
        lazy: true,
        preloadImages: true,
        slidesPerView: 2,
        loop: true,
        watchSlidesProgress: true,
        spaceBetween: 20,
        speed: 5000,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            1661: {
                slidesPerView: 7
            },
            1551: {
                slidesPerView: 7
            },
            1200: {
                slidesPerView: 6
            },
            768: {
                slidesPerView: 5
            },
            578: {
                slidesPerView: 4
            },
            428: {
                slidesPerView: 3
            },
            328: {
                slidesPerView: 2
            },
        },
    });
});
</script>