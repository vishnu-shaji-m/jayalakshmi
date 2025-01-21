@extends('admin::layouts.app')
@section('title', 'Create Policy')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('policies.index') }}">
            Policies
        </a>
    </li>
@endsection
@section('content')
    <!-- form start -->
    <form method="POST" action="{{ route('policies.store') }}">
        @csrf
        <div class="row">
            <x-admin::action-buttons :cancel-url="route('policies.index')" save-label="Create" />
            <div class="col-md-12">
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
                                    <label for="content" class="form-label">Content*</label>
                                    <textarea name="content" id="content" class="form-control ckeditor" data-editor-height="500px" required></textarea>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Meta Tags</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" class="form-control" id="meta_title" name="meta_title">
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" class="form-control"></textarea>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                    <textarea name="meta_keywords" id="meta_keywords" class="form-control"></textarea>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="other_meta_tags" class="form-label">Other Meta Tags</label>
                                    <textarea name="other_meta_tags" id="other_meta_tags" class="form-control"></textarea>
                                    <div class="text-muted">
                                        Note: Only include HTML tags such as &lt;meta&gt; or &lt;script&gt;.
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
                messages: {
                    title: {
                        required: "The title field is required."
                    },
                    content: {
                        required: "The content field is required."
                    },
                },
                successRoute: "{{ route('policies.index') }}"
            });
        });
    </script>
@endpush
