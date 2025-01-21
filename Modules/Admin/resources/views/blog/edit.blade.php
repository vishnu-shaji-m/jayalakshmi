@extends('admin::layouts.app')
@section('title', 'Edit Blog')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('blogs.index') }}">
            Blogs
        </a>
    </li>
@endsection
@section('content')
    <!-- form start -->
    <form method="POST" action="{{ route('blogs.update', base64_encode($blog->id)) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <x-admin::action-buttons :cancel-url="route('blogs.index')" save-label="Update" />
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
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $blog->title }}" required>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="author" class="form-label">Author</label>
                                    <input type="text" class="form-control" id="author" name="author"
                                        value="{{ $blog->author }}">
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="content" class="form-label">Content*</label>
                                    <textarea name="content" id="content" class="form-control ckeditor" required>{{ $blog->content }}</textarea>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="published_on" class="form-label">Published On*</label>
                                    <input type="text" class="form-control" id="published_on" name="published_on"
                                        value="{{ $blog->published_on }}" required>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                        <option value="1" @selected($blog->status == 1)>Published</option>
                                        <option value="0" @selected($blog->status == 0)>Draft</option>
                                    </select>
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
                                    <input type="text" class="form-control" id="meta_title" name="meta_title"
                                        value="{{ $blog->meta_title }}">
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" class="form-control">{{ $blog->meta_description }}</textarea>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                    <textarea name="meta_keywords" id="meta_keywords" class="form-control">{{ $blog->meta_keywords }}</textarea>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="other_meta_tags" class="form-label">Other Meta Tags</label>
                                    <textarea name="other_meta_tags" id="other_meta_tags" class="form-control">{{ $blog->other_meta_tags }}</textarea>
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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Search Keywords</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="search_keywords" class="form-label">Search Keywords</label>
                                    <input id="search_keywords" name="search_keywords[]" class="form-control"
                                        value="{{ $blog->search_keywords }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Images</h3>
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
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="banner" class="form-label">Banner*</label>
                                    <input type="file" class="form-control" name="banner" id="banner" required>
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
@include('admin::partials.datepicker-setup')
@include('admin::partials.choices-setup')
@include('admin::partials.filepond-setup')
@include('admin::partials.jquery-validate-setup')
@push('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            initializeFlatpickr("#published_on", {
                altInput: true,
                altFormat: "d M Y",
                dateFormat: "Y-m-d",
                defaultDate: "today",
                maxDate: "today"
            });
            initializeChoices("#search_keywords", {
                delimiter: ',',
                editItems: true,
                maxItemCount: 10,
                removeItemButton: true,
                duplicateItemsAllowed: false,
                placeholder: true,
                placeholderValue: 'Add keywords',
            });
        });
        $(document).ready(function() {
            $('#image').filepond({
                allowMultiple: false,
                storeAsFile: true,
                acceptedFileTypes: ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'],
                maxFileSize: '300KB',
                @if ($blog->hasMedia('image'))
                    files: [{
                        source: '{{ $blog->getFirstMediaUrl('image') }}',

                    }]
                @endif
            });

            $('#banner').filepond({
                allowMultiple: false,
                storeAsFile: true,
                acceptedFileTypes: ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'],
                maxFileSize: '300KB',
                @if ($blog->hasMedia('banner'))
                    files: [{
                        source: '{{ $blog->getFirstMediaUrl('banner') }}',

                    }]
                @endif
            });

            $('form').customValidate({
                rules: {
                    title: {
                        maxlength: 255
                    },
                    author: {
                        maxlength: 255
                    },
                },
                messages: {
                    title: {
                        required: "The title field is required.",
                        maxlength: "The title field must not be greater than 255 characters."
                    },
                    author: {
                        maxlength: "The author field must not be greater than 255 characters."
                    },
                    content: {
                        required: "The content field is required."
                    },
                    published_on: {
                        required: "The published on field is required."
                    },
                    image: {
                        required: "The image field is required."
                    },
                    banner: {
                        required: "The banner field is required."
                    }
                },
                successRoute: "{{ route('blogs.index') }}"
            });
        });
    </script>
@endpush
