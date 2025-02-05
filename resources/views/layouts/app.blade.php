<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <!-- Include meta tags for SEO and social media -->
    @include('layouts.meta')
    <!-- Include CSS stylesheets -->
    @include('layouts.css')
</head>

<body class="{{ Nav::isRoute('home', 'isHome') }}">
    <div id="preloader">
        <div class="circle">
        </div>
        <img loading="lazy" decoding="async" class="logo" src="{{asset('frontend/images/loder.svg')}}" width="108"
            height="92" alt="logo">
    </div>


    <!-- Include header -->
    @include('layouts.header')

    <main>
        <!-- Main content area -->
        @yield('content')

        <!-- Include footer -->
        @include('layouts.footer')
    </main>

    <!-- Include JavaScript files -->
    @include('layouts.js')


    <!-- modals -->

    <!-- subCategory Modal  -->

    <div class="modal fade cmnModal" id="subCategoryModal" tabindex="-1" aria-labelledby="subCategoryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog enquiry">
            <div class="modal-content">
                <button type="button" class="closeBTn" data-bs-dismiss="modal" aria-label="Close">
                    <span>Close</span>
                    <div class="icon">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1069_732444)">
                                <path
                                    d="M20.4891 3.683C15.8069 -0.998214 8.19233 -0.998214 3.51013 3.683C-1.17004 8.36421 -1.17004 15.9807 3.51013 20.662C5.85123 23.0021 8.92566 24.1716 12.0001 24.1716C15.0746 24.1716 18.148 23.002 20.4891 20.662C25.1703 15.9808 25.1703 8.36421 20.4891 3.683ZM16.9514 15.7096C17.3426 16.1008 17.3426 16.7331 16.9514 17.1243C16.7563 17.3194 16.5002 17.4174 16.2441 17.4174C15.988 17.4174 15.7318 17.3194 15.5367 17.1243L12.0001 13.5866L8.46442 17.1232C8.26835 17.3183 8.0122 17.4164 7.75708 17.4164C7.50097 17.4164 7.24482 17.3183 7.04973 17.1232C6.65856 16.7321 6.65856 16.0988 7.04973 15.7086L10.5854 12.172L7.04874 8.63532C6.65758 8.24415 6.65758 7.61085 7.04874 7.22067C7.43893 6.8295 8.07222 6.8295 8.46339 7.22067L12 10.7573L15.5367 7.22067C15.9278 6.8295 16.5602 6.8295 16.9513 7.22067C17.3425 7.61085 17.3425 8.24415 16.9513 8.63532L13.4147 12.172L16.9514 15.7096Z"
                                    fill="#EE3824" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1069_732444">
                                    <rect width="24" height="24" fill="white" transform="translate(0 0.171875)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </button>
                <div class="modal-body">
                    <div class="mainHead center">
                        <div class="mainTitle">Submit your <span>Enquiry</span></div>
                        <p>Fill the fields below to send an enquiry</p>
                    </div>
                    <form action="javascript:void(0)" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="formGroup">
                                    <input type="text" class="form-control" placeholder="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="formGroup">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="formGroup">
                                    <input type="text" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="formGroup">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="formGroup">
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="hoveranim cmnBtn" id="submitBtn" data-bs-toggle="modal"
                                    data-bs-target="#thanksModal">
                                    <span>Submit</span>
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- thanks Modal -->
    <div class="modal fade cmnModal" id="thanksModal" tabindex="-1" aria-labelledby="thanksModalLabel"
        aria-hidden="true">
        <div class="modal-dialog enquiry">
            <div class="modal-content">
                <button type="button" class="closeBTn" data-bs-dismiss="modal" aria-label="Close">
                    <span>Close</span>
                    <div class="icon">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1069_732444)">
                                <path
                                    d="M20.4891 3.683C15.8069 -0.998214 8.19233 -0.998214 3.51013 3.683C-1.17004 8.36421 -1.17004 15.9807 3.51013 20.662C5.85123 23.0021 8.92566 24.1716 12.0001 24.1716C15.0746 24.1716 18.148 23.002 20.4891 20.662C25.1703 15.9808 25.1703 8.36421 20.4891 3.683ZM16.9514 15.7096C17.3426 16.1008 17.3426 16.7331 16.9514 17.1243C16.7563 17.3194 16.5002 17.4174 16.2441 17.4174C15.988 17.4174 15.7318 17.3194 15.5367 17.1243L12.0001 13.5866L8.46442 17.1232C8.26835 17.3183 8.0122 17.4164 7.75708 17.4164C7.50097 17.4164 7.24482 17.3183 7.04973 17.1232C6.65856 16.7321 6.65856 16.0988 7.04973 15.7086L10.5854 12.172L7.04874 8.63532C6.65758 8.24415 6.65758 7.61085 7.04874 7.22067C7.43893 6.8295 8.07222 6.8295 8.46339 7.22067L12 10.7573L15.5367 7.22067C15.9278 6.8295 16.5602 6.8295 16.9513 7.22067C17.3425 7.61085 17.3425 8.24415 16.9513 8.63532L13.4147 12.172L16.9514 15.7096Z"
                                    fill="#EE3824" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1069_732444">
                                    <rect width="24" height="24" fill="white" transform="translate(0 0.171875)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </button>
                <div class="modal-body">
                    <div class="thanksBx">
                        <div class="icon">
                            <svg viewBox="0 0 65 65">
                                <g clip-path="url(#clip0_1069_741104)">
                                    <path
                                        d="M32.5 65C50.4493 65 65 50.4493 65 32.5C65 14.5507 50.4493 0 32.5 0C14.5507 0 0 14.5507 0 32.5C0 50.4493 14.5507 65 32.5 65Z"
                                        fill="#32BA7C" />
                                    <path
                                        d="M24.1953 47.1619L40.9067 63.8732C54.7474 60.1824 64.9997 47.572 64.9997 32.501C64.9997 32.1934 64.9997 31.8858 64.9997 31.5783L51.8767 19.4805L24.1953 47.1619Z"
                                        fill="#0AA06E" />
                                    <path
                                        d="M33.3194 39.7816C34.7547 41.2169 34.7547 43.6775 33.3194 45.1128L30.3462 48.086C28.9109 49.5213 26.4503 49.5213 25.015 48.086L11.9945 34.9629C10.5591 33.5276 10.5591 31.067 11.9945 29.6317L14.9677 26.6585C16.403 25.2232 18.8636 25.2232 20.2989 26.6585L33.3194 39.7816Z"
                                        fill="white" />
                                    <path
                                        d="M44.702 17.1234C46.1373 15.688 48.5979 15.688 50.0332 17.1234L53.0064 20.0966C54.4418 21.5319 54.4418 23.9925 53.0064 25.4278L30.4512 47.8805C29.0159 49.3158 26.5553 49.3158 25.12 47.8805L22.1468 44.9073C20.7115 43.4719 20.7115 41.0114 22.1468 39.576L44.702 17.1234Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1069_741104">
                                        <rect width="65" height="65" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="mainHead center">
                            <div class="mainTitle">Thank You for your interest!</div>
                            <p>Our team will get back to you soon.</p>
                        </div>
                        <a href="index" class="cmnBtn hoveranim">
                            <span>GO HOME</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner modal -->
    <div class="modal fade cmnModal" id="bannerModal" tabindex="-1" aria-labelledby="thanksModalLabel"
        aria-hidden="true">
        <div class="modal-dialog bannerBx">
            <div class="modal-content">
                <button type="button" class="closeBTn" data-bs-dismiss="modal" aria-label="Close">
                    <span>Close</span>
                    <div class="icon">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1069_732444)">
                                <path
                                    d="M20.4891 3.683C15.8069 -0.998214 8.19233 -0.998214 3.51013 3.683C-1.17004 8.36421 -1.17004 15.9807 3.51013 20.662C5.85123 23.0021 8.92566 24.1716 12.0001 24.1716C15.0746 24.1716 18.148 23.002 20.4891 20.662C25.1703 15.9808 25.1703 8.36421 20.4891 3.683ZM16.9514 15.7096C17.3426 16.1008 17.3426 16.7331 16.9514 17.1243C16.7563 17.3194 16.5002 17.4174 16.2441 17.4174C15.988 17.4174 15.7318 17.3194 15.5367 17.1243L12.0001 13.5866L8.46442 17.1232C8.26835 17.3183 8.0122 17.4164 7.75708 17.4164C7.50097 17.4164 7.24482 17.3183 7.04973 17.1232C6.65856 16.7321 6.65856 16.0988 7.04973 15.7086L10.5854 12.172L7.04874 8.63532C6.65758 8.24415 6.65758 7.61085 7.04874 7.22067C7.43893 6.8295 8.07222 6.8295 8.46339 7.22067L12 10.7573L15.5367 7.22067C15.9278 6.8295 16.5602 6.8295 16.9513 7.22067C17.3425 7.61085 17.3425 8.24415 16.9513 8.63532L13.4147 12.172L16.9514 15.7096Z"
                                    fill="#EE3824" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1069_732444">
                                    <rect width="24" height="24" fill="white" transform="translate(0 0.171875)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </button>
                <div class="modal-body">
                    <div class="mainHead">
                        <div class="mainTitle">Our Bypass, Kochi Showroom coming soon!</div>
                        <p>
                            Wait for the world class bridal destination experience
                        </p>
                    </div>
                    <div class="bannerImBx">
                        <img src="{{asset('frontend/images/bannerPopImg.webp')}}"
                            data-src="{{asset('frontend/images/bannerPopImg.webp')}}" class="lazy" loading="lazy"
                            width="1480" height="730" alt="banner Img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $("#submitBtn").click(function() {
            var currentModal = $(this).closest(".modal");
            currentModal.modal("hide");
            currentModal.on("hidden.bs.modal", function() {
                $("#thanksModal").modal("show");
                currentModal.off("hidden.bs.modal");
            });
        });
    });
    </script>
</body>

</html>