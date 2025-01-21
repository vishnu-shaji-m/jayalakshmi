@extends('admin::layouts.app')
@section('title', 'Edit Home About')
@section('content')
    <!-- form start -->
    <form method="POST" action="{{ route('home-about.update', base64_encode($homeAbout->id)) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <x-admin::action-buttons :cancel-url="route('home-about.edit')" save-label="Update" />
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="title" class="form-label">Title*</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        value="{{ $homeAbout->title }}" required>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="subtitle" class="form-label">Subtitle*</label>
                                    <input type="text" class="form-control" id="subtitle" name="subtitle"
                                        value="{{ $homeAbout->subtitle }}" required>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="description" class="form-label">Description*</label>
                                    <textarea name="description" id="description" class="form-control ckeditor" required>{{ $homeAbout->description }}</textarea>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
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
                maxFileSize: '300KB',
                @if ($homeAbout->hasMedia('image'))
                    files: [{
                        source: '{{ $homeAbout->getFirstMediaUrl('image') }}',

                    }]
                @endif
            });

            $('form').customValidate({
                messages: {
                    title: {
                        required: "The title field is required."
                    },
                    subtitle: {
                        required: "The subtitle field is required."
                    },
                    description: {
                        required: "The description field is required."
                    },
                    image: {
                        required: "The image field is required."
                    }
                },
                successRoute: "{{ route('home-about.edit') }}"
            });
        });
    </script>
@endpush
