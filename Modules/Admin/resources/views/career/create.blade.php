@extends('admin::layouts.app')
@section('title', 'Create Career')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('careers.index') }}">
            Careers
        </a>
    </li>
@endsection
@section('content')
    <!-- form start -->
    <form method="POST" action="{{ route('careers.store') }}">
        @csrf
        <div class="row">
            <x-admin::action-buttons :cancel-url="route('careers.index')" save-label="Create" />
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
                                    <label for="short_description" class="form-label">Short Description*</label>
                                    <textarea name="short_description" id="short_description" class="form-control" required></textarea>
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
                        <h3 class="card-title">Job Type and Experience</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="job_type_id" class="form-label">Job Type*</label>
                                    <select class="form-control select2" id="job_type_id" name="job_type_id"
                                        data-placeholder="Select Job Type" required>
                                        <option></option>
                                        @foreach ($jobTypes as $jobType)
                                            <option value="{{ $jobType->id }}">{{ $jobType->title }}</option>
                                        @endforeach
                                    </select>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="experience" class="form-label">Experience (In years)*</label>
                                    <input type="number" class="form-control numeric-input" id="experience"
                                        name="experience" required>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Location</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="state_id" class="form-label">State*</label>
                                    <select class="form-control select2" id="state_id" name="state_id"
                                        data-placeholder="Select State" required>
                                        <option></option>
                                        @foreach ($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="city_id" class="form-label">City*</label>
                                    <select class="form-control" id="city_id" name="city_id" required>
                                        <option></option>
                                    </select>
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
@include('admin::partials.select2-setup')
@include('admin::partials.jquery-validate-setup')
@push('js')
    <script>
        $(document).ready(function() {
            $('#city_id').select2({
                placeholder: "Select City"
            });

            $('#state_id').on('change', function() {
                const stateId = $(this).val();
                $('#city_id').empty().trigger('change'); // Clear the city dropdown

                if (stateId) {
                    $('#city_id').select2({
                        placeholder: "Select City",
                        ajax: {
                            url: '{{ route('get-cities') }}',
                            data: params => ({
                                state_id: stateId,
                                search: params.term || '' // Ensure search is always defined
                            }),
                            processResults: data => ({
                                results: data
                            }),
                        }
                    });
                } else {
                    $('#city_id').val(null).trigger('change'); // Clear selection if no state is selected
                }
            });

            $('form').customValidate({
                rules: {
                    title: {
                        maxlength: 255
                    }
                },
                messages: {
                    title: {
                        required: "The title field is required.",
                        maxlength: "The title field must not be greater than 255 characters."
                    },
                    short_description: {
                        required: "The short description field is required."
                    },
                    description: {
                        required: "The description on field is required."
                    },
                    job_type_id: {
                        required: "The job type field is required."
                    },
                    experience: {
                        required: "The experience field is required."
                    },
                    state_id: {
                        required: "The state field is required."
                    },
                    city_id: {
                        required: "The city field is required."
                    }
                },
                successRoute: "{{ route('careers.index') }}"
            });
        });
    </script>
@endpush
