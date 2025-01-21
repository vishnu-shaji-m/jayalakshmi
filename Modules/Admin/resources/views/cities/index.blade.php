@extends('admin::layouts.app')
@section('title', 'Cities')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered dt-responsive">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>State</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('admin::partials.data-tables-setup')
@push('js')
    <script>
        $(document).ready(function() {
            initializeDataTable("{{ route('cities.index') }}", [{
                    data: 'DT_RowIndex',
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'state_id',
                    name: 'state_id',
                },
                {
                    data: 'name',
                    name: 'name'
                }
            ]);
        });
    </script>
@endpush
