@extends('admin::layouts.app')
@section('title', 'Careers')
@section('buttons')
    <a href="{{ route('careers.create') }}" class="btn btn-primary btn-sm">
        <i class="fas fa-plus"></i> Create
    </a>
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered dt-responsive">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Title</th>
                                <th>Job Type</th>
                                <th>Experience (In years)</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Sort Order</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('admin::partials.data-tables-setup')
@include('admin::partials.sweet-alert-setup')
@push('js')
    <script>
        $(document).ready(function() {
            initializeDataTable("{{ route('careers.index') }}", [{
                    data: 'DT_RowIndex',
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'title',
                    name: 'title',
                    render: data => formatData(data)
                },
                {
                    data: 'job_type.title',
                    name: 'jobType.title',
                },
                {
                    data: 'experience',
                    name: 'experience'
                },
                {
                    data: 'city.name',
                    name: 'city.name'
                },
                {
                    data: 'state.name',
                    name: 'state.name'
                },
                {
                    data: 'sort_order',
                    name: 'sort_order'
                },
                {
                    data: 'status',
                    name: 'status'
                },

                {
                    data: 'action',
                    name: 'action',
                    searchable: false,
                    orderable: false
                },
            ]);
        });
    </script>
@endpush
