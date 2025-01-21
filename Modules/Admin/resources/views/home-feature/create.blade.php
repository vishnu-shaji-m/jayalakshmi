@extends('admin::layouts.app')
@section('title', 'Create Home Feature')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('home-features.index') }}">
            Home Features
        </a>
    </li>
@endsection
@section('content')
    <!-- form start -->
    <form method="POST" action="{{ route('home-features.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <x-admin::action-buttons :cancel-url="route('home-features.index')" save-label="Create" />
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Main Details</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="title" class="form-label">Title*</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="description" class="form-label">Description*</label>
                                    <textarea name="description" id="description" class="form-control ckeditor" required></textarea>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="sort_order" class="form-label">Sort Order</label>
                                    <input type="number" class="form-control numeric-input" id="sort_order"
                                        name="sort_order" value="{{ $sort_order }}">
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                        <option value="1">Enabled</option>
                                        <option value="0">Disabled</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Image</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="image" class="form-label">Image*</label>
                                    <input type="file" class="form-control" name="image" id="image" required>
                                    <div class="text-muted">Dimensions: </div>
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
@include('admin::partials.filepond-setup')
@include('admin::partials.jquery-validate-setup')
@push('js')
    <script>
        $(document).ready(function() {
            $('#image').filepond({
                allowMultiple: false,
                storeAsFile: true,
                acceptedFileTypes: ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'],
                maxFileSize: '300KB'
            });

            $('form').customValidate({
                rules: {
                    title: {
                        maxlength: 255
                    },
                    description: {
                        maxlength: 500
                    },
                },
                messages: {
                    title: {
                        required: "The title field is required.",
                        maxlength: "The title field must not be greater than 255 characters."
                    },
                    description: {
                        required: "The description field is required.",
                        maxlength: "The description field must not be greater than 500 characters."
                    },
                    image: {
                        required: "The image field is required."
                    },
                },
                successRoute: "{{ route('home-features.index') }}"
            });
        });
    </script>
@endpush
