@extends('admin::layouts.app')
@section('title', 'Career Enquiries')

@unless ($careerEnquiries->isEmpty())
    @section('buttons')
    <div class="col-md-3">
        <label for="start-date">Start Date:</label>
        <input type="text" id="start-date" class="form-control form-control-sm" placeholder="YYYY-MM-DD">
    </div>
    <div class="col-md-3">
        <label for="end-date">End Date:</label>
        <input type="text" id="end-date" class="form-control form-control-sm" placeholder="YYYY-MM-DD">
    </div>
        <button id="export" class="btn btn-success btn-sm mt-4">
            <i class="fas fa-download"></i> Export
        </button>
    @endsection
@endunless

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered dt-responsive">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Career</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Resume</th>
                                <th>Date</th>
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
<!-- Include Bootstrap Datepicker CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize the datepicker
        $('#start-date, #end-date').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });

        // Initialize DataTable with server-side processing
        var table = $('#dataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('career-enquiries.index') }}",
                data: function(d) {
                    d.start_date = $('#start-date').val();
                    d.end_date = $('#end-date').val();
                }
            },
            columns: [
                { data: 'DT_RowIndex', searchable: false, orderable: false },
                { data: 'career_id', name: 'career_id' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'phone_number', name: 'phone_number' },
                { data: 'resume', name: 'resume', searchable: false, orderable: false },
                { data: 'created_at', name: 'created_at' },
                { data: 'action', name: 'action', searchable: false, orderable: false }
            ]
        });

        // Reload table when filters change
        $('#start-date, #end-date').on('change', function() {
            table.draw();
        });

        // Export with current filter parameters
        $('#export').on('click', function() {
            // Get filter values
            var start_date = $('#start-date').val();
            var end_date = $('#end-date').val();

            // Construct URL with query parameters for export
            var url = "{{ route('career-enquiries.export') }}" +
                "?start_date=" + encodeURIComponent(start_date) +
                "&end_date=" + encodeURIComponent(end_date);

            // Redirect to export URL
            window.location.href = url;
        });
    });
</script>
@endpush
