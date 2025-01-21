@extends('admin::layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <a href="{{ route('contact-enquiries.index') }}" class="col-xl-3 col-md-4">
            <div class="card card-h-100 align-items-center">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12 text-center">
                            <h4 class="mb-3">
                                <span class="counter-value text-primary" data-target="{{ $contactCount }}">0</span>
                            </h4>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class=" text-muted font-size-13 ">Contact Enquiries</span>
                    </div>
                </div>
            </div>
        </a>
        <a href="{{ route('career-enquiries.index') }}" class="col-xl-3 col-md-4">
            <div class="card card-h-100 align-items-center">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-12 text-center">
                            <h4 class="mb-3">
                                <span class="counter-value text-primary" data-target="{{ $careerCount }}">0</span>
                            </h4>
                        </div>
                    </div>
                    <div class="text-nowrap">
                        <span class=" text-muted font-size-13 ">Career Enquiries</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Latest Contact Enquiries</h4>
                    <a href="{{ route('contact-enquiries.index') }}" class="btn btn-primary btn-sm">
                        View All
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Subject</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contactEnquiries as $contactEnquiry)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $contactEnquiry->name }}</td>
                                        <td>{{ $contactEnquiry->email }}</td>
                                        <td>{{ $contactEnquiry->phone_number }}</td>
                                        <td>{{ $contactEnquiry->subject }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No contact enquiries found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Latest Career Enquiries</h4>
                    <a href="{{ route('career-enquiries.index') }}" class="btn btn-primary btn-sm">
                        View All
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Career</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Resume</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($careerEnquiries as $careerEnquiry)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $careerEnquiry->career->title }}</td>
                                        <td>{{ $careerEnquiry->name }}</td>
                                        <td>{{ $careerEnquiry->email }}</td>
                                        <td>{{ $careerEnquiry->phone_number }}</td>
                                        <td>
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
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No career enquiries found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
