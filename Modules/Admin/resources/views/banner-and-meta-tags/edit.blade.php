@extends('admin::layouts.app')
@section('title', 'Edit Banner And Meta Tags: ' . $bannerAndMetaTag->page_value)
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('banner-and-meta-tags.index') }}">
            Banner And Meta Tags
        </a>
    </li>
@endsection
@section('content')
    <!-- form start -->
    <form method="POST" action="{{ route('banner-and-meta-tags.update', base64_encode($bannerAndMetaTag->id)) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <x-admin::action-buttons :cancel-url="route('banner-and-meta-tags.index')" save-label="Update" />
            @if ($bannerAndMetaTag->has_banner)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Banner</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="title" class="form-label">Title*</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ $bannerAndMetaTag->title }}" required>
                                        <span class="error-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="banner" class="form-label">Banner</label>
                                        <input type="file" class="form-control" name="banner" id="banner" required>
                                        <div class="text-muted">Dimensions: </div>
                                        <span class="error-block"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="banner_mobile" class="form-label">Banner Mobile</label>
                                        <input type="file" class="form-control" name="banner_mobile" id="banner_mobile"
                                            required>
                                        <div class="text-muted">Dimensions: </div>
                                        <span class="error-block"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="col-md-{{ $bannerAndMetaTag->has_banner ? '6' : '12' }}">
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
                                        value="{{ $bannerAndMetaTag->meta_title }}">
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea name="meta_description" id="meta_description" class="form-control">{{ $bannerAndMetaTag->meta_description }}</textarea>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                    <textarea name="meta_keywords" id="meta_keywords" class="form-control">{{ $bannerAndMetaTag->meta_keywords }}</textarea>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="other_meta_tags" class="form-label">Other Meta Tags</label>
                                    <textarea name="other_meta_tags" id="other_meta_tags" class="form-control">{{ $bannerAndMetaTag->other_meta_tags }}</textarea>
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
@if ($bannerAndMetaTag->has_banner)
    @include('admin::partials.filepond-setup')
@endif
@include('admin::partials.jquery-validate-setup')
@push('js')
    <script>
        $(document).ready(function() {
            @if ($bannerAndMetaTag->has_banner)
                $('#banner').filepond({
                    allowMultiple: false,
                    storeAsFile: true,
                    acceptedFileTypes: ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'],
                    maxFileSize: '300KB',
                    @if ($bannerAndMetaTag->hasMedia('banner'))
                        files: [{
                            source: '{{ $bannerAndMetaTag->getFirstMediaUrl('banner') }}',

                        }]
                    @endif
                });

                $('#banner_mobile').filepond({
                    allowMultiple: false,
                    storeAsFile: true,
                    acceptedFileTypes: ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'],
                    maxFileSize: '300KB',
                    @if ($bannerAndMetaTag->hasMedia('banner_mobile'))
                        files: [{
                            source: '{{ $bannerAndMetaTag->getFirstMediaUrl('banner_mobile') }}',

                        }]
                    @endif
                });
            @endif

            $('form').customValidate({
                @if ($bannerAndMetaTag->has_banner)
                    messages: {
                        title: {
                            required: "The title field is required."
                        },
                        banner: {
                            required: "The banner field is required."
                        },
                        banner_mobile: {
                            required: "The banner mobile field is required."
                        }
                    },
                @endif
                successRoute: "{{ route('banner-and-meta-tags.index') }}"
            });
        });
    </script>
@endpush
