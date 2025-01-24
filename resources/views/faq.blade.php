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
            <div class="mainTitle">FAQ ( frequently asked questions)</div>
        </div>
        <div class="faqBx"></div>
    </div>
</section>

</div>


@endsection
@push('js')
 
{{-- Placeholder for pushing JavaScript files specific to this page into the stack --}}
@endpush