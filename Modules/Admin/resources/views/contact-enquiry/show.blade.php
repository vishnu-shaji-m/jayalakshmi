@extends('admin::layouts.app')
@section('title', 'Show Contact Enquiry')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('contact-enquiries.index') }}">
            Contact Enquiries
        </a>
    </li>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="pb-3">
                        <div class="row">
                            <div class="col-xl-2">
                                <div>
                                    <h5 class="font-size-15">Name :</h5>
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="text-muted">
                                    {{ $contactEnquiry->name }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-3">
                        <div class="row">
                            <div class="col-xl-2">
                                <div>
                                    <h5 class="font-size-15">Email :</h5>
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="text-muted">
                                    {{ $contactEnquiry->email }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-3">
                        <div class="row">
                            <div class="col-xl-2">
                                <div>
                                    <h5 class="font-size-15">Phone Number :</h5>
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="text-muted">
                                    {{ $contactEnquiry->phone_number }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-3">
                        <div class="row">
                            <div class="col-xl-2">
                                <div>
                                    <h5 class="font-size-15">Subject :</h5>
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="text-muted">
                                    {{ $contactEnquiry->subject }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-3">
                        <div class="row">
                            <div class="col-xl-2">
                                <div>
                                    <h5 class="font-size-15">Message :</h5>
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="text-muted">
                                    {{ $contactEnquiry->message }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-3">
                        <div class="row">
                            <div class="col-xl-2">
                                <div>
                                    <h5 class="font-size-15">Date :</h5>
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="text-muted">
                                    {{ $contactEnquiry->date_formatted }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
