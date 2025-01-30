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
            <div class="mainHead wow animate__fadeInUp" data-wow-duration="1s">
                <div class="mainTitle">A World of <span>Elegance</span></div>
            </div>
            <div class="text wow animate__fadeInUp" data-wow-duration="1s">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at massa neque. Aliquam mi dui,
                ultricies vitae vehicula at, feugiat et ipsum.
                Nunc vel ante id neque ultricies rutrum nec sed risus.
            </div>
            <div class="eleganceBx wow animate__fadeInUp" data-wow-duration="1s">
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
            <p class="wow animate__fadeInUp" data-wow-duration="1s">
                Nunc lacinia in metus ut vehicula. Phasellus et lectus vitae turpis scelerisque convallis a at lorem.
                Nulla sed lectus suscipit, porta risus non, porta risus. Integer condimentum neque sit amet turpis
                convallis fermentum sit amet vitae leo. Integer faucibus odio in nibh sollicitudin ullamcorper.
                Phasellus facilisis, ipsum et malesuada dictum, felis turpis gravida eros, a commodo nunc dolor non
                nunc. Vestibulum sollicitudin massa dolor, quis mollis dui euismod non. Suspendisse a lectus
                scelerisque, consequat dolor non, eleifend velit. Morbi vehicula gravida risus. Suspendisse sapien mi,
                ullamcorper ut ipsum ut, pharetra lacinia nulla.\
            </p>
            <p class="wow animate__fadeInUp" data-wow-duration="1s">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at massa neque. Aliquam mi dui,
                ultricies vitae vehicula at, feugiat et ipsum. Nunc vel ante id neque ultricies rutrum nec sed risus.
                Nunc lacinia in metus ut vehicula.
            </p>
            <ul class="wow animate__fadeInUp" data-wow-duration="1s">
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
                <div class="d_flx wow animate__fadeInUp" data-wow-duration="1s">
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
                <div class="d_flx wow animate__fadeInUp" data-wow-duration="1s">
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
            <div class="mainHead wow animate__fadeInUp" data-wow-duration="1s">
                <div class="mainTitle">A World of <span>Elegance</span></div>
            </div>
            <div class="d_flx wow animate__fadeInUp" data-wow-duration="1s">
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
                                    <img src="{{ asset('frontend/images/google-map.webp')}}" class="lazy" width="20"
                                        height="20" loading="lazy" alt="google map">
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
                <div class="rgt">
                    <div class="title">
                        Connect With Us
                    </div>
                    <ul>
                        <li>
                            <div class="lotn">
                                <div class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_26212)">
                                            <path
                                                d="M12 0C7.038 0 3 4.066 3 9.065C3 16.168 11.154 23.502 11.501 23.81C11.644 23.937 11.822 24 12 24C12.178 24 12.356 23.937 12.499 23.811C12.846 23.502 21 16.168 21 9.065C21 4.066 16.962 0 12 0ZM12 14C9.243 14 7 11.757 7 9C7 6.243 9.243 4 12 4C14.757 4 17 6.243 17 9C17 11.757 14.757 14 12 14Z"
                                                fill="#5E0B0B" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1_26212">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                                <div class="text">
                                    Palarivattom - Edappally Rd, Junction, Vennala, Kochi, Ernakulam, Kerala 682025
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="tel:80024587552" class="cmnLink" aria-label="cmnLink">
                                <div class="icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M22.0448 17.52C21.3892 16.9703 17.5448 14.5358 16.9058 14.6475C16.6058 14.7008 16.3763 14.9565 15.762 15.6893C15.4779 16.0499 15.166 16.3877 14.829 16.6995C14.2116 16.5504 13.614 16.3288 13.0485 16.0395C10.831 14.9599 9.03947 13.1679 7.9605 10.95C7.67118 10.3846 7.44964 9.78691 7.3005 9.1695C7.6123 8.83252 7.95009 8.52056 8.31075 8.2365C9.04275 7.62225 9.29925 7.39425 9.3525 7.09275C9.46425 6.45225 7.0275 2.60925 6.48 1.95375C6.2505 1.68225 6.042 1.5 5.775 1.5C5.001 1.5 1.5 5.829 1.5 6.39C1.5 6.43575 1.575 10.9425 7.26675 16.7333C13.0575 22.425 17.5642 22.5 17.61 22.5C18.171 22.5 22.5 18.999 22.5 18.225C22.5 17.958 22.3177 17.7495 22.0448 17.52Z"
                                            fill="#5E0B0B" />
                                        <path
                                            d="M17.25 11.25H18.75C18.7482 9.65925 18.1155 8.13416 16.9907 7.00933C15.8658 5.8845 14.3408 5.25179 12.75 5.25V6.75C13.9431 6.75119 15.087 7.22568 15.9307 8.06933C16.7743 8.91299 17.2488 10.0569 17.25 11.25Z"
                                            fill="#5E0B0B" />
                                        <path
                                            d="M21 11.25H22.5C22.497 8.66505 21.4688 6.18683 19.641 4.359C17.8132 2.53116 15.3349 1.50298 12.75 1.5V3C14.9372 3.00258 17.0342 3.8726 18.5808 5.41922C20.1274 6.96584 20.9974 9.06276 21 11.25Z"
                                            fill="#5E0B0B" />
                                    </svg>
                                </div>
                                <div class="text">
                                    <div class="subtext">
                                        Phone:
                                    </div>
                                    <span> 0484 429 9999</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:Support@jayalakshmi.in" class="cmnLink" aria-label="cmnLink">
                                <div class="icon">
                                    <svg width="22" height="18" viewBox="0 0 22 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M1.94753 1.60872L8.43128 8.09528C9.84541 9.50669 12.157 9.50791 13.5723 8.09528L20.056 1.60872C20.1213 1.54342 20.1118 1.43589 20.0361 1.38306C19.3748 0.92186 18.5702 0.648438 17.7034 0.648438H4.30019C3.43342 0.648438 2.62881 0.921906 1.9675 1.38306C1.89175 1.43589 1.88223 1.54342 1.94753 1.60872ZM0.214844 4.73373C0.214844 4.05217 0.383828 3.4082 0.681484 2.84219C0.728031 2.75364 0.846016 2.73573 0.91675 2.80647L7.31842 9.20814C9.34562 11.2383 12.6568 11.2395 14.6852 9.20814L21.0869 2.80647C21.1576 2.73573 21.2756 2.75364 21.3221 2.84219C21.6198 3.4082 21.7888 4.05222 21.7888 4.73373V13.262C21.7888 15.5164 19.955 17.3474 17.7034 17.3474H4.30019C2.04869 17.3474 0.214844 15.5164 0.214844 13.262V4.73373Z"
                                            fill="#5E0B0B" />
                                    </svg>
                                </div>
                                <div class="text">
                                    <div class="subtext">
                                        Email
                                    </div>
                                    <span>support@jayalakshmi.in</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="lctBx">
                        <div class="hd">
                            Reach to
                            <span>
                                Jayalakshmi Bypass Kochi Via:
                            </span>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.3785 0.621554C20.5376 -0.219259 19.1701 -0.205208 18.3467 0.652749L13.8399 5.3491L2.84157 1.70935L0.532812 4.01815L9.70028 9.66274L5.06155 14.4965L2.08678 14.0081L0 16.0949L4.37336 17.6267L5.90515 22L7.99193 19.9132L7.50355 16.9385L12.3373 12.2998L17.9819 21.4672L20.2907 19.1584L16.6509 8.16008L21.3472 3.6533C22.2052 2.82993 22.2193 1.46241 21.3785 0.621554Z"
                                            fill="#5E0B0B" />
                                    </svg>
                                </div>
                                <div class="text">
                                    20 KM from Cochin international airport
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_26137)">
                                            <path d="M0.0429688 20.6719H21.957V21.9609H0.0429688V20.6719Z"
                                                fill="#5E0B0B" />
                                            <path d="M0.0429688 14.2266H1.97656V15.5156H0.0429688V14.2266Z"
                                                fill="#5E0B0B" />
                                            <path
                                                d="M18.4605 14.2266H13.5781V15.5156H20.1147C19.9934 15.3711 19.8544 15.2402 19.699 15.1273L18.4605 14.2266Z"
                                                fill="#5E0B0B" />
                                            <path d="M3.26562 14.2266H5.19922V15.5156H3.26562V14.2266Z"
                                                fill="#5E0B0B" />
                                            <path
                                                d="M20.6561 16.8047H12.2891V12.9375H16.6881L13.1432 10.3594H0.0429688V12.9375H9.71094V16.8047C9.23527 16.8047 0.361883 16.8047 0.0429688 16.8047V19.3828H18.3152C19.6896 19.3828 20.7912 18.197 20.6561 16.8047Z"
                                                fill="#5E0B0B" />
                                            <path d="M6.48828 14.2266H8.42188V15.5156H6.48828V14.2266Z"
                                                fill="#5E0B0B" />
                                            <path
                                                d="M18.0866 9.85922C20.0831 8.43072 21.9064 6.33114 21.9536 3.9267C21.9963 1.74943 20.1877 0.046875 18.0866 0.046875C15.9854 0.046875 14.1767 1.74938 14.2195 3.9267C14.2666 6.32839 16.0815 8.42471 18.0866 9.85922ZM17.442 3.26953H18.7311V4.55859H17.442V3.26953Z"
                                                fill="#5E0B0B" />
                                            <path
                                                d="M5.19922 3.26953C5.19922 3.62493 4.91008 3.91406 4.55469 3.91406H3.26562C2.19944 3.91406 1.33203 4.78147 1.33203 5.84766C1.33203 6.91384 2.19944 7.78125 3.26562 7.78125H10.3555V6.49219H3.26562C2.91023 6.49219 2.62109 6.20305 2.62109 5.84766C2.62109 5.49226 2.91023 5.20312 3.26562 5.20312H4.55469C5.62087 5.20312 6.48828 4.33571 6.48828 3.26953C6.48828 2.20335 5.62087 1.33594 4.55469 1.33594H0.0429688V2.625H4.55469C4.91008 2.625 5.19922 2.91414 5.19922 3.26953Z"
                                                fill="#5E0B0B" />
                                            <path d="M11.6445 6.49219H12.9336V7.78125H11.6445V6.49219Z"
                                                fill="#5E0B0B" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1_26137">
                                                <rect width="22" height="22" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </div>
                                <div class="text">
                                    03 KM from Ernakulam South / North Railway Stations
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="20" height="17" viewBox="0 0 20 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.03125 8.10156V10.7244C0.03125 11.1747 0.7875 11.6937 2.05937 12.0994C8.39469 14.2237 19.9688 12.7112 19.9688 10.7244V8.10156C16.8234 10.6762 3.15938 10.6591 0.03125 8.10156ZM1.40625 10.7244C1.40625 10.8155 1.37003 10.903 1.30557 10.9674C1.2411 11.0319 1.15367 11.0681 1.0625 11.0681C0.971332 11.0681 0.883898 11.0319 0.819432 10.9674C0.754966 10.903 0.71875 10.8155 0.71875 10.7244V9.69312C0.71875 9.60196 0.754966 9.51452 0.819432 9.45006C0.883898 9.38559 0.971332 9.34937 1.0625 9.34937C1.15367 9.34937 1.2411 9.38559 1.30557 9.45006C1.37003 9.51452 1.40625 9.60196 1.40625 9.69312V10.7244ZM3.8125 11.4119C3.8125 11.503 3.77628 11.5905 3.71182 11.6549C3.64735 11.7194 3.55992 11.7556 3.46875 11.7556C3.37758 11.7556 3.29015 11.7194 3.22568 11.6549C3.16122 11.5905 3.125 11.503 3.125 11.4119V10.3806C3.125 10.2895 3.16122 10.202 3.22568 10.1376C3.29015 10.0731 3.37758 10.0369 3.46875 10.0369C3.55992 10.0369 3.64735 10.0731 3.71182 10.1376C3.77628 10.202 3.8125 10.2895 3.8125 10.3806V11.4119ZM6.90625 12.0994C6.90625 12.1905 6.87003 12.278 6.80557 12.3424C6.7411 12.4069 6.65367 12.4431 6.5625 12.4431C6.47133 12.4431 6.3839 12.4069 6.31943 12.3424C6.25497 12.278 6.21875 12.1905 6.21875 12.0994V11.0681C6.21875 10.977 6.25497 10.8895 6.31943 10.8251C6.3839 10.7606 6.47133 10.7244 6.5625 10.7244C6.65367 10.7244 6.7411 10.7606 6.80557 10.8251C6.87003 10.8895 6.90625 10.977 6.90625 11.0681V12.0994ZM10.3438 12.2712C10.3438 12.3624 10.3075 12.4499 10.2431 12.5143C10.1786 12.5788 10.0912 12.615 10 12.615C9.90883 12.615 9.8214 12.5788 9.75693 12.5143C9.69247 12.4499 9.65625 12.3624 9.65625 12.2712V11.24C9.65625 11.1488 9.69247 11.0614 9.75693 10.9969C9.8214 10.9325 9.90883 10.8962 10 10.8962C10.0912 10.8962 10.1786 10.9325 10.2431 10.9969C10.3075 11.0614 10.3438 11.1488 10.3438 11.24V12.2712ZM13.7812 12.0994C13.7812 12.1905 13.745 12.278 13.6806 12.3424C13.6161 12.4069 13.5287 12.4431 13.4375 12.4431C13.3463 12.4431 13.2589 12.4069 13.1944 12.3424C13.13 12.278 13.0938 12.1905 13.0938 12.0994V11.0681C13.0938 10.977 13.13 10.8895 13.1944 10.8251C13.2589 10.7606 13.3463 10.7244 13.4375 10.7244C13.5287 10.7244 13.6161 10.7606 13.6806 10.8251C13.745 10.8895 13.7812 10.977 13.7812 11.0681V12.0994ZM16.875 11.4119C16.875 11.503 16.8388 11.5905 16.7743 11.6549C16.7099 11.7194 16.6224 11.7556 16.5312 11.7556C16.4401 11.7556 16.3526 11.7194 16.2882 11.6549C16.2237 11.5905 16.1875 11.503 16.1875 11.4119V10.3806C16.1875 10.2895 16.2237 10.202 16.2882 10.1376C16.3526 10.0731 16.4401 10.0369 16.5312 10.0369C16.6224 10.0369 16.7099 10.0731 16.7743 10.1376C16.8388 10.202 16.875 10.2895 16.875 10.3806V11.4119ZM19.2812 10.7244C19.2812 10.8155 19.245 10.903 19.1806 10.9674C19.1161 11.0319 19.0287 11.0681 18.9375 11.0681C18.8463 11.0681 18.7589 11.0319 18.6944 10.9674C18.63 10.903 18.5938 10.8155 18.5938 10.7244V9.69312C18.5938 9.60196 18.63 9.51452 18.6944 9.45006C18.7589 9.38559 18.8463 9.34937 18.9375 9.34937C19.0287 9.34937 19.1161 9.38559 19.1806 9.45006C19.245 9.51452 19.2812 9.60196 19.2812 9.69312V10.7244Z"
                                            fill="#5E0B0B" />
                                        <path
                                            d="M2.51656 8.47062C3.34521 8.25113 4.18674 8.08352 5.03625 7.96875L3.56844 6.50094C3.53639 6.46889 3.51096 6.43084 3.49362 6.38896C3.47627 6.34708 3.46734 6.3022 3.46734 6.25688C3.46734 6.21155 3.47627 6.16667 3.49362 6.12479C3.51096 6.08291 3.53639 6.04486 3.56844 6.01281C3.63317 5.94808 3.72096 5.91172 3.8125 5.91172C3.85783 5.91172 3.90271 5.92065 3.94459 5.93799C3.98646 5.95534 4.02451 5.98076 4.05656 6.01281L5.89906 7.85531C7.14642 7.71116 8.40063 7.63427 9.65625 7.625V5.5625C9.65625 5.47133 9.69247 5.3839 9.75693 5.31943C9.8214 5.25497 9.90883 5.21875 10 5.21875C10.0912 5.21875 10.1786 5.25497 10.2431 5.31943C10.3075 5.3839 10.3438 5.47133 10.3438 5.5625V7.625C11.5992 7.63085 12.8534 7.70429 14.1009 7.845L15.9434 6.0025C15.9755 5.97045 16.0135 5.94503 16.0554 5.92768C16.0973 5.91033 16.1422 5.90141 16.1875 5.90141C16.2328 5.90141 16.2777 5.91033 16.3196 5.92768C16.3615 5.94503 16.3995 5.97045 16.4316 6.0025C16.4636 6.03455 16.489 6.0726 16.5064 6.11448C16.5237 6.15635 16.5327 6.20124 16.5327 6.24656C16.5327 6.29189 16.5237 6.33677 16.5064 6.37865C16.489 6.42052 16.4636 6.45857 16.4316 6.49063L14.9637 7.96875C18.0884 8.41219 17.0263 8.65625 18.0988 8.285C18.6728 8.08219 19.9688 7.53906 19.9688 6.9375C19.9688 5.93375 16.1875 4.53125 10 4.53125C3.8125 4.53125 0.03125 5.93375 0.03125 6.9375C0.03125 7.64906 1.80844 8.285 2.51656 8.47062Z"
                                            fill="#5E0B0B" />
                                        <path
                                            d="M0.03125 11.8906V14.1628C0.03125 15.0875 3.05281 16.2459 7.9375 16.5141V15.1941C7.9375 15.1029 7.97372 15.0155 8.03818 14.951C8.10265 14.8865 8.19008 14.8503 8.28125 14.8503H11.7188C11.8099 14.8503 11.8974 14.8865 11.9618 14.951C12.0263 15.0155 12.0625 15.1029 12.0625 15.1941V16.5141C16.9472 16.2459 19.9688 15.0875 19.9688 14.1628V11.8906C16.6 14.5066 3.25563 14.3966 0.03125 11.8906Z"
                                            fill="#5E0B0B" />
                                        <path
                                            d="M7.59375 3.15625H7.9375V3.90219L8.625 3.86781V3.15625H11.375V3.86781L12.0625 3.90219V3.15625H12.4062C12.4974 3.15625 12.5849 3.12003 12.6493 3.05557C12.7138 2.9911 12.75 2.90367 12.75 2.8125V1.4375C12.75 1.34633 12.7138 1.2589 12.6493 1.19443C12.5849 1.12997 12.4974 1.09375 12.4062 1.09375H7.59375C7.50258 1.09375 7.41515 1.12997 7.35068 1.19443C7.28622 1.2589 7.25 1.34633 7.25 1.4375V2.8125C7.25 2.90367 7.28622 2.9911 7.35068 3.05557C7.41515 3.12003 7.50258 3.15625 7.59375 3.15625Z"
                                            fill="#5E0B0B" />
                                        <path
                                            d="M0.716549 3.15686H2.77905V4.62811C2.99905 4.56967 3.22936 4.51467 3.46655 4.46311C3.46655 0.915609 3.49061 1.02561 3.41499 0.915609C3.38444 0.865432 3.34155 0.82392 3.29039 0.795035C3.23924 0.766149 3.18154 0.750854 3.1228 0.750609C2.96811 0.750609 3.13999 0.664671 0.517175 2.53467C0.458484 2.57716 0.41472 2.63711 0.392132 2.70595C0.369543 2.77479 0.369286 2.84901 0.391396 2.91801C0.413506 2.98701 0.456854 3.04726 0.515248 3.09016C0.573641 3.13305 0.644096 3.1564 0.716549 3.15686Z"
                                            fill="#5E0B0B" />
                                        <path
                                            d="M17.2201 3.15913H19.2826C19.3551 3.15867 19.4255 3.13532 19.4839 3.09243C19.5423 3.04954 19.5856 2.98929 19.6078 2.92029C19.6299 2.85129 19.6296 2.77707 19.607 2.70823C19.5844 2.63938 19.5407 2.57943 19.482 2.53695L17.1204 0.852572C17.0779 0.806548 17.0235 0.773035 16.9633 0.755659C16.9031 0.738283 16.8393 0.737705 16.7787 0.753988C16.7182 0.770271 16.6633 0.802795 16.6199 0.848042C16.5765 0.893288 16.5463 0.949535 16.5326 1.0107C16.512 1.06913 16.5326 0.883509 16.5326 4.46538C16.7698 4.51695 17.0001 4.57195 17.2201 4.63038V3.15913Z"
                                            fill="#5E0B0B" />
                                    </svg>
                                </div>
                                <div class="text">
                                    02 KM from Jawaharlal Nehru International Stadium
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <svg width="18" height="22" viewBox="0 0 18 22" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.98 16.214H15.0161C15.9187 16.214 16.6523 15.4825 16.6523 14.5784V4.69287C16.6523 2.43306 14.8208 0.601562 12.5617 0.601562H5.43369C3.17525 0.601562 1.34375 2.43306 1.34375 4.69287V14.5784C1.34375 15.4818 2.07663 16.214 2.98 16.214ZM13.4293 13.9645C12.8271 13.9645 12.3382 13.4757 12.3382 12.8727C12.3382 12.2712 12.8271 11.7824 13.4293 11.7824C14.0322 11.7824 14.5204 12.2712 14.5204 12.8727C14.5204 13.4764 14.0322 13.9645 13.4293 13.9645ZM14.5197 4.82831V9.328H9.85706V4.82831H14.5197ZM3.47569 4.82831H8.13762V9.328H3.47569V4.82831ZM4.56675 11.7831C5.169 11.7831 5.65712 12.2719 5.65712 12.8734C5.65712 13.4764 5.169 13.9652 4.56675 13.9652C3.96381 13.9652 3.47569 13.4764 3.47569 12.8734C3.47569 12.2719 3.96381 11.7831 4.56675 11.7831Z"
                                            fill="#5E0B0B" />
                                        <path
                                            d="M15.3626 21.392H17.4189L14.3973 17.4375H12.3403L13.1612 18.5121H4.83903L5.65991 17.4375H3.60359L0.582031 21.392H2.63766L3.70053 20.0012H14.3004L15.3626 21.392Z"
                                            fill="#5E0B0B" />
                                    </svg>

                                </div>
                                <div class="text">
                                    03 KM from Ernakulam South / North Railway Stations
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lounge">
        <div class="sp-container rgt">
            <div class="d_flx">
                <div class="lft wow animate__fadeInUp" data-wow-duration="1s">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">
                                Bridal <span>Lounge</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false">
                                Styling <span>Consultation</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="text">
                                Fill in the details below to book your slot,
                                we will connect with you soon.
                            </div>
                            <form action="/submit-form" method="post">
                                <div class="action-alert success d-none">Success Message</div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstName">Name</label>
                                            <input type="text" class="form-control" id="Name"
                                                placeholder="Enter your name" name="Name">
                                            <div class="help-block danger d-none">Invalid Input</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneNumber">Contact number</label>
                                            <input type="tel" class="form-control" id="phoneNumber"
                                                placeholder="Enter your contact number" name="phoneNumber">
                                            <div class="help-block danger d-none">Invalid Input</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location">Preferred store location</label>
                                            <select name="category" id="location" class="select">
                                                <option selected disabled="disabled">--- Select Store ---</option>
                                                <option value="1">demo 1</option>
                                                <option value="2">demo 2</option>
                                                <option value="3">demo 3</option>
                                                <option value="4">demo 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date">Confirm your visit date and time</label>
                                            <div class="dateBx">
                                                <div class="icon">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.5703 8.08594C13.9586 8.08594 14.2734 7.77114 14.2734 7.38281C14.2734 6.99449 13.9586 6.67969 13.5703 6.67969C13.182 6.67969 12.8672 6.99449 12.8672 7.38281C12.8672 7.77114 13.182 8.08594 13.5703 8.08594Z"
                                                            fill="#696969" />
                                                        <path
                                                            d="M15.1875 1.40625H14.2734V0.703125C14.2734 0.314789 13.9586 0 13.5703 0C13.182 0 12.8672 0.314789 12.8672 0.703125V1.40625H9.66797V0.703125C9.66797 0.314789 9.35318 0 8.96484 0C8.57651 0 8.26172 0.314789 8.26172 0.703125V1.40625H5.09766V0.703125C5.09766 0.314789 4.78287 0 4.39453 0C4.0062 0 3.69141 0.314789 3.69141 0.703125V1.40625H2.8125C1.26169 1.40625 0 2.66794 0 4.21875V15.1875C0 16.7383 1.26169 18 2.8125 18H8.19141C8.57974 18 8.89453 17.6852 8.89453 17.2969C8.89453 16.9085 8.57974 16.5938 8.19141 16.5938H2.8125C2.03709 16.5938 1.40625 15.9629 1.40625 15.1875V4.21875C1.40625 3.44334 2.03709 2.8125 2.8125 2.8125H3.69141V3.51562C3.69141 3.90396 4.0062 4.21875 4.39453 4.21875C4.78287 4.21875 5.09766 3.90396 5.09766 3.51562V2.8125H8.26172V3.51562C8.26172 3.90396 8.57651 4.21875 8.96484 4.21875C9.35318 4.21875 9.66797 3.90396 9.66797 3.51562V2.8125H12.8672V3.51562C12.8672 3.90396 13.182 4.21875 13.5703 4.21875C13.9586 4.21875 14.2734 3.90396 14.2734 3.51562V2.8125H15.1875C15.9629 2.8125 16.5938 3.44334 16.5938 4.21875V8.22656C16.5938 8.6149 16.9085 8.92969 17.2969 8.92969C17.6852 8.92969 18 8.6149 18 8.22656V4.21875C18 2.66794 16.7383 1.40625 15.1875 1.40625Z"
                                                            fill="#696969" />
                                                        <path
                                                            d="M13.7461 9.49219C11.4005 9.49219 9.49219 11.4005 9.49219 13.7461C9.49219 16.0917 11.4005 18 13.7461 18C16.0917 18 18 16.0917 18 13.7461C18 11.4005 16.0917 9.49219 13.7461 9.49219ZM13.7461 16.5938C12.1759 16.5938 10.8984 15.3163 10.8984 13.7461C10.8984 12.1759 12.1759 10.8984 13.7461 10.8984C15.3163 10.8984 16.5938 12.1759 16.5938 13.7461C16.5938 15.3163 15.3163 16.5938 13.7461 16.5938Z"
                                                            fill="#696969" />
                                                        <path
                                                            d="M14.7656 13.043H14.4492V12.3047C14.4492 11.9164 14.1344 11.6016 13.7461 11.6016C13.3578 11.6016 13.043 11.9164 13.043 12.3047V13.7461C13.043 14.1344 13.3578 14.4492 13.7461 14.4492H14.7656C15.154 14.4492 15.4688 14.1344 15.4688 13.7461C15.4688 13.3578 15.154 13.043 14.7656 13.043Z"
                                                            fill="#696969" />
                                                        <path
                                                            d="M10.5117 8.08594C10.9 8.08594 11.2148 7.77114 11.2148 7.38281C11.2148 6.99449 10.9 6.67969 10.5117 6.67969C10.1234 6.67969 9.80859 6.99449 9.80859 7.38281C9.80859 7.77114 10.1234 8.08594 10.5117 8.08594Z"
                                                            fill="#696969" />
                                                        <path
                                                            d="M7.45312 11.1406C7.84145 11.1406 8.15625 10.8258 8.15625 10.4375C8.15625 10.0492 7.84145 9.73438 7.45312 9.73438C7.0648 9.73438 6.75 10.0492 6.75 10.4375C6.75 10.8258 7.0648 11.1406 7.45312 11.1406Z"
                                                            fill="#696969" />
                                                        <path
                                                            d="M4.39453 8.08594C4.78286 8.08594 5.09766 7.77114 5.09766 7.38281C5.09766 6.99449 4.78286 6.67969 4.39453 6.67969C4.00621 6.67969 3.69141 6.99449 3.69141 7.38281C3.69141 7.77114 4.00621 8.08594 4.39453 8.08594Z"
                                                            fill="#696969" />
                                                        <path
                                                            d="M4.39453 11.1406C4.78286 11.1406 5.09766 10.8258 5.09766 10.4375C5.09766 10.0492 4.78286 9.73438 4.39453 9.73438C4.00621 9.73438 3.69141 10.0492 3.69141 10.4375C3.69141 10.8258 4.00621 11.1406 4.39453 11.1406Z"
                                                            fill="#696969" />
                                                        <path
                                                            d="M4.39453 14.2031C4.78286 14.2031 5.09766 13.8883 5.09766 13.5C5.09766 13.1117 4.78286 12.7969 4.39453 12.7969C4.00621 12.7969 3.69141 13.1117 3.69141 13.5C3.69141 13.8883 4.00621 14.2031 4.39453 14.2031Z"
                                                            fill="#696969" />
                                                        <path
                                                            d="M7.45312 14.2031C7.84145 14.2031 8.15625 13.8883 8.15625 13.5C8.15625 13.1117 7.84145 12.7969 7.45312 12.7969C7.0648 12.7969 6.75 13.1117 6.75 13.5C6.75 13.8883 7.0648 14.2031 7.45312 14.2031Z"
                                                            fill="#696969" />
                                                        <path
                                                            d="M7.45312 8.08594C7.84145 8.08594 8.15625 7.77114 8.15625 7.38281C8.15625 6.99449 7.84145 6.67969 7.45312 6.67969C7.0648 6.67969 6.75 6.99449 6.75 7.38281C6.75 7.77114 7.0648 8.08594 7.45312 8.08594Z"
                                                            fill="#696969" />
                                                    </svg>

                                                </div>
                                                <input type="text" id="eventDate" name="daterange" class="form-control"
                                                    placeholder="--- Select date & time ---">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="attire">What type of attire are you looking for?</label>
                                            <select name="category" id="attire" class="select">
                                                <option selected disabled="disabled">--- Select attire ---</option>
                                                <option value="1">demo 1</option>
                                                <option value="2">demo 2</option>
                                                <option value="3">demo 3</option>
                                                <option value="4">demo 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="categorySelect2">What occasion are you shopping for?</label>
                                            <select name="occasion" id="occasion" class="select"
                                                aria-label="Default select example">
                                                <option selected disabled="disabled">--- Select occasion ---</option>
                                                <option value="1">demo 1</option>
                                                <option value="2">demo 2</option>
                                                <option value="3">demo 3</option>
                                                <option value="4">demo 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="people">How many people will accompany you?</label>
                                            <select name="people" id="people" class="select"
                                                aria-label="Default select example">
                                                <option selected disabled="disabled">--- Select number of people ---
                                                </option>
                                                <option value="1">demo 1</option>
                                                <option value="2">demo 2</option>
                                                <option value="3">demo 3</option>
                                                <option value="4">demo 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="btnWrap">
                                            <button type="submit" class="baseBtn baseBtn1 hoveranim">
                                                <span>SUBMIT</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">...</div>
                    </div>
                </div>
                <div class="rgt wow animate__fadeInUp" data-wow-duration="1s">
                    <div class="imgBx">
                        <img src="{{ asset('frontend/images/lounge.webp')}}" class="lazy" width="819" height="822"
                            loading="lazy" alt="lounge">
                    </div>
                </div>
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
<!-- SELECT2-->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- BOOTSTRAP_SELECTPICKER -->

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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

$(".select").select2({
    minimumResultsForSearch: Infinity,
    theme: "bootstrap-5",
    containerCssClass: "select2--small", // For Select2 v4.0
    selectionCssClass: "select2--small", // For Select2 v4.1
    dropdownCssClass: "select2--small",
    dropdownPosition: 'below'
});
// datepicker
$(function() {
    var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";

    $("#eventDate, #eventDate1").datepicker({
        dateFormat: 'dd-mm-yy',
        onSelect: function(dateText, inst) {
            var date = $(this).datepicker('getDate'),
                day = date.getDate(),
                month = date.getMonth() + 1,
                year = date.getFullYear();
            var dayOfWeek = weekday[date.getUTCDay() + 1];
        }

    });

});
</script>


@endsection
@push('js')
{{-- Placeholder for pushing JavaScript files specific to this page into the stack --}}
@endpush