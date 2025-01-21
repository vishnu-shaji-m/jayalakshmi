@push('css')
    <!-- Link to Select2 documentation for reference: https://select2.org/ -->
    <!-- Include Select2 CSS for additional select box styling and functionality -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('js')
    <!-- Include Select2 JavaScript for additional select box features -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        // Initialize Select2 on all elements with the class 'select2'
        $('.select2').select2();
    </script>
@endpush
