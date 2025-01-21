@extends('admin::layouts.app')
@section('title', 'Create Slider')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('sliders.index') }}">
            Sliders
        </a>
    </li>
@endsection
@section('content')
    <!-- form start -->
    <form method="POST" action="{{ route('sliders.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <x-admin::action-buttons :cancel-url="route('sliders.index')" save-label="Create" />
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
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description"></textarea>
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
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Action Settings</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="action_type" class="form-label">Action Type*</label>
                                    <select class="form-select" id="action_type" name="action_type" required>
                                        <option value="none">None</option>
                                        <option value="url">URL</option>
                                    </select>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-4 action-fields" style="display: none;">
                                <div class="form-group mb-3">
                                    <label for="action_title" class="form-label">Action Title*</label>
                                    <input type="text" class="form-control" id="action_title" name="action_title"
                                        required>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-4 action-fields" style="display: none;">
                                <div class="form-group mb-3">
                                    <label for="action_url" class="form-label">Action URL*</label>
                                    <input type="text" class="form-control" id="action_url" name="action_url" required>
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
                        <h3 class="card-title">Media Settings</h3>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="media_type" class="form-label">Media Type*</label>
                                <select class="form-select" id="media_type" name="media_type" required>
                                    <option value="image">Image</option>
                                    <option value="video">Video</option>
                                    <option value="video_url">Video URL</option>
                                </select>
                                <span class="error-block"></span>
                            </div>
                        </div>
                        <div class="col-md-12" id="image-fields">
                            <div class="form-group mb-3">
                                <label for="image" class="form-label">Image*</label>
                                <input type="file" class="form-control" name="image" id="image" required>
                                <div class="text-muted">Dimensions: </div>
                                <span class="error-block"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="image_mobile" class="form-label">Mobile Image*</label>
                                <input type="file" class="form-control" name="image_mobile" id="image_mobile"
                                    required>
                                <div class="text-muted">Dimensions: </div>
                                <span class="error-block"></span>
                            </div>
                        </div>
                        <div class="col-md-12" id="video-fields" style="display: none;">
                            <div class="form-group mb-3">
                                <label for="video_thumbnail_image" class="form-label">Thumbnail Image*</label>
                                <input type="file" class="form-control" name="video_thumbnail_image"
                                    id="video_thumbnail_image" required>
                                <div class="text-muted">Dimensions: </div>
                                <span class="error-block"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="video" class="form-label">Video*</label>
                                <input type="file" class="form-control" name="video" id="video" required>
                                <div class="text-muted">Maximum file size: 5MB</div>
                                <span class="error-block"></span>
                            </div>
                        </div>
                        <div class="col-md-12" id="video-url-field" style="display: none;">
                            <div class="form-group mb-3">
                                <label for="video_url_thumbnail_image" class="form-label">Thumbnail Image*</label>
                                <input type="file" class="form-control" name="video_url_thumbnail_image"
                                    id="video_url_thumbnail_image" required>
                                <div class="text-muted">Dimensions: </div>
                                <span class="error-block"></span>
                            </div>
                            <div class="form-group mb-3">
                                <label for="video_url" class="form-label">Video URL*</label>
                                <input type="text" class="form-control" id="video_url" name="video_url" required>
                                <span class="error-block"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@include('admin::partials.jquery-validate-setup')
@include('admin::partials.filepond-setup')
@push('js')
    <script>
        $(document).ready(function() {

            const toggleActionFieldsVisibility = () => {
                const selectedActionType = $('#action_type').val();

                if (selectedActionType === 'url') {
                    $('.action-fields').show();
                } else {
                    $('.action-fields').hide();
                    $('#action_title, #action_url').siblings('.error-block').html('');
                }
            };

            $('#action_type').change(toggleActionFieldsVisibility);
            toggleActionFieldsVisibility();

            const toggleMediaFieldsVisibility = () => {
                const selectedMediaType = $('#media_type').val();

                $('#image-fields, #video-fields, #video-url-field').hide();

                ['#image', '#image_mobile', '#video_thumbnail_image', '#video', '#video_url_thumbnail_image',
                    '#video_url'
                ].forEach(field => {
                    $(field).siblings('.error-block').html('');
                });

                if (selectedMediaType === 'image') {
                    $('#image-fields').show();
                } else if (selectedMediaType === 'video') {
                    $('#video-fields').show();
                } else if (selectedMediaType === 'video_url') {
                    $('#video-url-field').show();
                }
            };

            $('#media_type').change(toggleMediaFieldsVisibility);
            toggleMediaFieldsVisibility();

            $('#image').filepond({
                allowMultiple: false,
                storeAsFile: true,
                acceptedFileTypes: ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'],
                maxFileSize: '300KB'
            });

            $('#image_mobile').filepond({
                allowMultiple: false,
                storeAsFile: true,
                acceptedFileTypes: ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'],
                maxFileSize: '300KB'
            });

            $('#video_thumbnail_image').filepond({
                allowMultiple: false,
                storeAsFile: true,
                acceptedFileTypes: ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'],
                maxFileSize: '300KB'
            });

            $('#video').filepond({
                allowMultiple: false,
                storeAsFile: true,
                acceptedFileTypes: ['video/mp4', 'video/avi', 'video/mov'],
                maxFileSize: '5MB'
            });

            $('#video_url_thumbnail_image').filepond({
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
                    action_title: {
                        required: function() {
                            return $('#action_type').val() === 'url';
                        },
                        maxlength: 255
                    },
                    action_url: {
                        required: function() {
                            return $('#action_type').val() === 'url';
                        },
                        url: true,
                        maxlength: 500
                    },
                    image: {
                        required: function() {
                            return $('#media_type').val() === 'image';
                        }
                    },
                    image_mobile: {
                        required: function() {
                            return $('#media_type').val() === 'image';
                        }
                    },
                    video_thumbnail_image: {
                        required: function() {
                            return $('#media_type').val() === 'video';
                        }
                    },
                    video: {
                        required: function() {
                            return $('#media_type').val() === 'video';
                        }
                    },
                    video_url_thumbnail_image: {
                        required: function() {
                            return $('#media_type').val() === 'video_url';
                        }
                    },
                    video_url: {
                        required: function() {
                            return $('#media_type').val() === 'video_url';
                        },
                        url: true,
                        maxlength: 500
                    }
                },
                messages: {
                    title: {
                        required: "The title field is required.",
                        maxlength: "The title field must not be greater than 255 characters."
                    },
                    description: {
                        maxlength: "The description field must not be greater than 500 characters."
                    },
                    action_type: {
                        required: "The action type field is required."
                    },
                    action_title: {
                        required: "The action title field is required.",
                        maxlength: "The action title field must not be greater than 255 characters."
                    },
                    action_url: {
                        required: "The action url field is required.",
                        url: "The action url field must be a valid URL.",
                        maxlength: "The action url field must not be greater than 500 characters."
                    },
                    media_type: {
                        required: "The media type field is required."
                    },
                    image: {
                        required: "The image field is required."
                    },
                    image_mobile: {
                        required: "The image mobile field is required."
                    },
                    video_thumbnail_image: {
                        required: "The thumbnail image field is required."
                    },
                    video: {
                        required: "The video field is required."
                    },
                    video_url_thumbnail_image: {
                        required: "The thumbnail image field is required."
                    },
                    video_url: {
                        required: "The video url field is required.",
                        url: "The video url field must be a valid URL.",
                        maxlength: "The video url field must not be greater than 500 characters."
                    }
                },
                successRoute: "{{ route('sliders.index') }}"
            });
        });
    </script>
@endpush
