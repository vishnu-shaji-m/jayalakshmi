@extends('admin::layouts.app')
@section('title', 'Show Career Enquiry')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('career-enquiries.index') }}">
            Career Enquiries
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
                                    <h5 class="font-size-15">Career :</h5>
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="text-muted">
                                    {{ $careerEnquiry->career ? $careerEnquiry->career->title : '' }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-3">
                        <div class="row">
                            <div class="col-xl-2">
                                <div>
                                    <h5 class="font-size-15">Name :</h5>
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="text-muted">
                                    {{ $careerEnquiry->name }}
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
                                    {{ $careerEnquiry->email }}
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
                                    {{ $careerEnquiry->phone_number }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pb-3">
                        <div class="row">
                            <div class="col-xl-2">
                                <div>
                                    <h5 class="font-size-15">Resume :</h5>
                                </div>
                            </div>
                            <div class="col-xl">
                                <div class="text-muted">
                                    @if ($careerEnquiry->resume_value)
                                        <a href="{{ $careerEnquiry->resume_value }}" target="_blank"
                                            class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light">
                                            <i class="bx bxs-file label-icon"></i>
                                            {{ $careerEnquiry->resume_extension }}
                                        </a>
                                    @else
                                        <a href="javascript: void(0);"
                                            class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light">
                                            <i class="bx bx-file label-icon"></i>
                                            No File
                                        </a>
                                    @endif
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
                                    {{ $careerEnquiry->message }}
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
                                    {{ $careerEnquiry->date_formatted }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
