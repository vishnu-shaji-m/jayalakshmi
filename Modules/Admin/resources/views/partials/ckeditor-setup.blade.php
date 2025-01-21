@push('js')
    <!-- CKEditor: Rich text editor for creating and editing content with advanced formatting options -->
    <script src="{{ asset('backend/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
    <script>
        function initializeCKEditor() {
            document.querySelectorAll('.ckeditor').forEach(function(element) {
                // Get the height from the data-editor-height attribute or default to 250px
                var customHeight = element.getAttribute('data-editor-height') || '250px';

                ClassicEditor.create(element)
                    .then(function(editor) {
                        editor.editing.view.change(writer => {
                            writer.setStyle('height', customHeight, editor.editing.view.document
                                .getRoot());
                        });
                    })
                    .catch(function(error) {
                        console.error(error);
                    });
            });
        }

        // Initialize CKEditor on document ready
        document.addEventListener("DOMContentLoaded", initializeCKEditor);
    </script>
@endpush
