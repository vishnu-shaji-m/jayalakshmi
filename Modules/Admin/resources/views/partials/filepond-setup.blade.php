@push('css')
    <!-- FilePond CSS: Core styling for FilePond file upload plugin, providing a modern and accessible file input -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.31.1/filepond.min.css"
        integrity="sha512-TtQdiqlFBF4xOf9GCawalT4FQ7qihYm+EMYxpor3WzndeGC+NflmNd/P5AN8vvRH4XqTjoNrIeJRbZcifEMbWA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FilePond Image Preview Plugin CSS: Styling for displaying image previews within the FilePond file upload interface -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/filepond-plugin-image-preview@4.6.12/dist/filepond-plugin-image-preview.min.css">
@endpush

@push('js')
    <!-- jQuery Validate JS: Plugin for validating form inputs to ensure data integrity before submission -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
        integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- FilePond JS: Core functionality for FilePond, a versatile and user-friendly file upload plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.31.1/filepond.min.js"
        integrity="sha512-UlakzTkpbSDfqJ7iKnPpXZ3HwcCnFtxYo1g95pxZxQXrcCLB0OP9+uUaFEj5vpX7WwexnUqYXIzplbxq9KSatw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- FilePond Image Preview Plugin JS: Adds image preview functionality to FilePond, allowing users to see selected images before upload -->
    <script
        src="https://cdn.jsdelivr.net/npm/filepond-plugin-image-preview@4.6.12/dist/filepond-plugin-image-preview.min.js">
    </script>

    <!-- FilePond File Validate Type Plugin JS: Ensures that only specified file types can be uploaded via FilePond -->
    <script
        src="https://cdn.jsdelivr.net/npm/filepond-plugin-file-validate-type@1.2.9/dist/filepond-plugin-file-validate-type.min.js">
    </script>

    <!-- FilePond File Validate Size Plugin JS: Validates the size of files before they are uploaded, preventing oversized files -->
    <script
        src="https://cdn.jsdelivr.net/npm/filepond-plugin-file-validate-size@2.2.8/dist/filepond-plugin-file-validate-size.min.js">
    </script>

    <!-- FilePond jQuery Adapter JS: Adapter to integrate FilePond seamlessly with jQuery, making it easy to use with jQuery-based projects -->
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>

    <!-- Register FilePond Plugins: Registering necessary plugins for image preview, file size validation, and file type validation -->
    <script>
        $.fn.filepond.registerPlugin(
            FilePondPluginImagePreview, // Plugin for image previews
            FilePondPluginFileValidateSize, // Plugin for validating file size
            FilePondPluginFileValidateType // Plugin for validating file types
        );
    </script>
@endpush
