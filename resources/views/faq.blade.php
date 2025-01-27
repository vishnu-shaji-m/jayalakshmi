@extends('layouts.app')
@section('title', 'faq')
@push('css')
{{-- Placeholder for pushing CSS files specific to this page into the stack --}}
@endpush
@section('content')
{{-- Main content of the page goes here --}}

<div id="pageWrapper" class="faqPage">

    <section id="faq">
        <div class="container">
            <div class="mainHead">
                <div class="mainTitle">FAQ ( Frequently Asked <span>Questions</span>)</div>
            </div>
            <div class="faqBx">
                <div class="accordion" id="faqAccord">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqAccord1" aria-expanded="true" aria-controls="faqAccord1">
                                What is Jayalakshmi Silks known for?
                            </button>
                        </h2>
                        <div id="faqAccord1" class="accordion-collapse collapse show" data-bs-parent="#faqAccord">
                            <div class="accordion-body">
                                <p>Jayalakshmi Silks is renowned for its premium sarees, bridal collections, and ethnic
                                    wear, offering a luxurious shopping experience for over 75 years.</p>
                               
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqAccord2" aria-expanded="false" aria-controls="faqAccord2">
                                Where can I find Jayalakshmi stores?
                            </button>
                        </h2>
                        <div id="faqAccord2" class="accordion-collapse collapse" data-bs-parent="#faqAccord">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                until the collapse plugin adds the appropriate classes that we use to style each
                                element. These classes control the overall appearance, as well as the showing and hiding
                                via CSS transitions. You can modify any of this with custom CSS or overriding our
                                default variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqAccord3" aria-expanded="false" aria-controls="faqAccord3">
                                Does Jayalakshmi offer bridal consultation services?
                            </button>
                        </h2>
                        <div id="faqAccord3" class="accordion-collapse collapse" data-bs-parent="#faqAccord">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqAccord4" aria-expanded="false" aria-controls="faqAccord4">
                                Does Jayalakshmi offer bridal consultation services?
                            </button>
                        </h2>
                        <div id="faqAccord4" class="accordion-collapse collapse" data-bs-parent="#faqAccord">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes that we use to style each element.
                                These classes control the overall appearance, as well as the showing and hiding via CSS
                                transitions. You can modify any of this with custom CSS or overriding our default
                                variables. It's also worth noting that just about any HTML can go within the
                                <code>.accordion-body</code>, though the transition does limit overflow.
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