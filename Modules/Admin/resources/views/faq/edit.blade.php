@extends('admin::layouts.app')
@section('title', 'Edit Faq')
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('faq.index') }}">
            Faq
        </a>
    </li>
@endsection
@section('content')
    <!-- form start -->
    <form method="POST" action="{{ route('faq.update', base64_encode($faq->id)) }}">
        @csrf
        @method('PUT')
        <div class="row">
            <x-admin::action-buttons :cancel-url="route('faq.index')" save-label="Update" />
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="question" class="form-label">Question*</label>
                                    <input type="text" class="form-control" id="question" name="question"
                                        value="{{ $faq->question }}" required>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="answer" class="form-label">Answer*</label>
                                    <textarea name="answer" id="answer" class="form-control ckeditor" required>
                                        {{ $faq->answer }}
                                    </textarea>
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label for="sort_order" class="form-label">Sort Order</label>
                                    <input type="number" class="form-control numeric-input" id="sort_order"
                                        name="sort_order" value="{{ $faq->sort_order }}">
                                    <span class="error-block"></span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="form-label">Status</label>
                                    <select class="form-select" name="status">
                                        <option value="1" @selected($faq->status == 1)>Enabled</option>
                                        <option value="0" @selected($faq->status == 0)>Disabled</option>
                                    </select>
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
                    question: {
                        maxlength: 255
                    }
                },
                messages: {
                    question: {
                        required: "The question field is required.",
                        maxlength: "The question field must not be greater than 255 characters."
                    },
                    answer: {
                        required: "The answer field is required."
                    }
                },
                successRoute: "{{ route('faq.index') }}"
            });
        });
    </script>
@endpush
