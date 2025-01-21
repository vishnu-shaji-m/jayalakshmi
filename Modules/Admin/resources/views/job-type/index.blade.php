@extends('admin::layouts.app')
@section('title', 'Job Types')
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
            initializeDataTable("{{ route('job-types.index') }}", [{
                    data: 'DT_RowIndex',
                    searchable: false,
                    orderable: false
                },
                {
                    data: 'title',
                    name: 'title'
                }
            ]);
        });
    </script>
@endpush
