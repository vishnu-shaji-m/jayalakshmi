@extends('admin::layouts.app')
@section('title', 'Edit Site Settings')
@section('content')
    <!-- form start -->
    <form method="POST" action="{{ route('site-settings.update', base64_encode($siteSettings->id)) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <x-admin::action-buttons :cancel-url="route('site-settings.edit')" save-label="Update" />
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Contact Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="address" class="form-label">Address*</label>
                                            <textarea name="address" id="address" class="form-control ckeditor" required>{{ $siteSettings->address }}</textarea>
                                            <span class="error-block"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="email" class="form-label">Email*</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ $siteSettings->email }}" required>
                                            <span class="error-block"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="phone_number" class="form-label">Phone Number*</label>
                                            <input type="tel" class="form-control" id="phone_number" name="phone_number"
                                                value="{{ $siteSettings->phone_number }}" required>
                                            <span class="error-block"></span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="whatsapp_number" class="form-label">WhatsApp Number</label>
                                            <input type="tel" class="form-control" id="whatsapp_number"
                                                name="whatsapp_number" value="{{ $siteSettings->whatsapp_number }}">
                                            <span class="error-block"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Social Media Links</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="facebook_link" class="form-label">Facebook Link</label>
                                    <input type="url" class="form-control" id="facebook_link" name="facebook_link"
                                        value="{{ $siteSettings->facebook_link }}">
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="instagram_link" class="form-label">Instagram Link</label>
                                    <input type="url" class="form-control" id="instagram_link" name="instagram_link"
                                        value="{{ $siteSettings->instagram_link }}">
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="x_link" class="form-label">X Link</label>
                                    <input type="url" class="form-control" id="x_link" name="x_link"
                                        value="{{ $siteSettings->x_link }}">
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="linkedin_link" class="form-label">LinkedIn Link</label>
                                    <input type="url" class="form-control" id="linkedin_link" name="linkedin_link"
                                        value="{{ $siteSettings->linkedin_link }}">
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="youtube_link" class="form-label">YouTube Link</label>
                                    <input type="url" class="form-control" id="youtube_link" name="youtube_link"
                                        value="{{ $siteSettings->youtube_link }}">
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="map_link" class="form-label">Map Link</label>
                                    <input type="url" class="form-control" id="map_link" name="map_link"
                                        value="{{ $siteSettings->map_link }}">
                                    <div class="text-muted">
                                        Note: Use the Google Maps "Share" link (e.g., https://goo.gl/maps/...).
                                    </div>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@include('admin::partials.ckeditor-setup')
@include('admin::partials.jquery-validate-setup')
@push('js')
    <script>
        $(document).ready(function() {
            $('form').customValidate({
                rules: {
                    address: {
                        maxlength: 255
                    },
                    email: {
                        email: true,
                        maxlength: 255
                    },
                    phone_number: {
                        maxlength: 255
                    },
                    whatsapp_number: {
                        maxlength: 255
                    },
                    facebook_link: {
                        url: true,
                        maxlength: 255
                    },
                    instagram_link: {
                        url: true,
                        maxlength: 255
                    },
                    x_link: {
                        url: true,
                        maxlength: 255
                    },
                    linkedin_link: {
                        url: true,
                        maxlength: 255
                    },
                    youtube_link: {
                        url: true,
                        maxlength: 255
                    },
                    map_link: {
                        url: true,
                        maxlength: 255
                    }
                },
                messages: {
                    address: {
                        required: "The address field is required.",
                        maxlength: "The address field must not be greater than 255 characters."
                    },
                    email: {
                        required: "The email field is required.",
                        email: "Please enter a valid email address.",
                        maxlength: "The email field must not be greater than 255 characters."
                    },
                    phone_number: {
                        required: "The phone number field is required.",
                        maxlength: "The phone number field must not be greater than 255 characters."
                    },
                    whatsapp_number: {
                        maxlength: "The whatsapp number field must not be greater than 255 characters."
                    },
                    facebook_link: {
                        url: "Please enter a valid facebook link.",
                        maxlength: "The facebook link field must not be greater than 255 characters."
                    },
                    instagram_link: {
                        url: "Please enter a valid instagram link.",
                        maxlength: "The instagram link field must not be greater than 255 characters."
                    },
                    x_link: {
                        url: "Please enter a valid x link.",
                        maxlength: "The x link field must not be greater than 255 characters."
                    },
                    linkedin_link: {
                        url: "Please enter a valid linkedin link.",
                        maxlength: "The linkedin link field must not be greater than 255 characters."
                    },
                    youtube_link: {
                        url: "Please enter a valid youtube link.",
                        maxlength: "The youtube link field must not be greater than 255 characters."
                    },
                    map_link: {
                        url: "Please enter a valid map link.",
                        maxlength: "The map link field must not be greater than 255 characters."
                    }
                },
                successRoute: "{{ route('site-settings.edit') }}"
            });
        });
    </script>
@endpush
