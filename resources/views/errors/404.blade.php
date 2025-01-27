@extends('layouts.app')
@section('title', '404 - Page Not Found')
@section('content')
{{-- Main content of the page goes here --}}

<div id="pageWrapper" class="errorPage">
    <section id="error">
        <div class="container">
            <div class="page_cntnt">
                <div class="imgBx">
                    <img src="{{asset('frontend/images/404.webp')}}" width="710" height="527" class="lazy"
                        loading="lazy" alt="404">
                </div>
                <div class="head_one">
                    Page Not <span>Found!</span> 
                </div>
                <a href="index" class="cmnBtn m-auto hoveranim" aria-label="cmn_link">
                    <span>GO HOME</span>
                </a>
            </div>
        </div>
    </section>
</div>


@endsection