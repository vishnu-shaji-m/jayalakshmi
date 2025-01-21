@push('js')
    <!-- jQuery Validate JS: A plugin for validating forms, ensuring that inputs meet the required criteria before submission -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
        integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom Validation JS: Includes custom validation logic specific to the application, leveraging the jQuery Validate plugin -->
    <script src="{{ asset('backend/js/validation.js') }}"></script>

    <!-- Custom jQuery validation plugin extension. -->
    <script>
        (function($) {
            $.fn.customValidate = function(options) {
                var opts = $.extend({
                        rules: {},
                        messages: {},
                        successRoute: "",
                        onSuccess: function() {},
                        onError: function() {},
                        onValidationChange: function() {},
                    },
                    options
                );

                function getLoadingButtonText(text) {
                    const texts = {
                        create: "Creating...",
                        update: "Updating...",
                        save: "Saving..."
                    };
                    return `<i class="bx bx-loader bx-spin"></i><span>${texts[text] || "Processing..."}</span>`;
                }

                function resetSubmitButton($button, originalText) {
                    $button.prop("disabled", false).html(`<i class="bx bx-save"></i><span>${originalText}</span>`);
                }

                function handleValidationErrors(errors) {
                    $.each(errors, function(field, messages) {
                        $('[name="' + field + '"]')
                            .closest(".form-group")
                            .find(".error-block")
                            .text(messages.join(", "));
                    });
                }

                return this.each(function() {
                    var form = $(this);
                    form.validate({
                        ignore: ":hidden:not(.ckeditor)",
                        rules: opts.rules,
                        messages: opts.messages,
                        errorPlacement: function(error, element) {
                            $(element).closest('.form-group')
                                .find('.error-block').text(error.text());
                        },
                        success: function(label, element) {
                            $(element).closest('.form-group')
                                .find('.error-block').text("");
                        },
                        onchange: function(element) {
                            $(element).valid();
                        },
                        onfocusout: function(element) {
                            if (
                                element.tagName === "TEXTAREA" ||
                                (element.tagName === "INPUT" &&
                                    element.type !== "password")
                            ) {
                                element.value = $.trim(element.value);
                            }
                            if (
                                !this.checkable(element) &&
                                (element.name in this.submitted ||
                                    !this.optional(element))
                            ) {
                                this.element(element);
                            }
                        },
                        submitHandler: function(form) {
                            $(form).find('.error-block').html('');

                            var $submitBtn = $(form).find(":submit:visible");
                            var originalText = $submitBtn.find('span').text();

                            $submitBtn
                                .prop("disabled", true)
                                .html(getLoadingButtonText(originalText.toLowerCase()));

                            // Delay form submission slightly to allow UI update
                            setTimeout(function() {
                                    $.ajax({
                                        type: "POST",
                                        url: $(form).attr("action"),
                                        data: new FormData(form),
                                        processData: false,
                                        contentType: false,
                                        success: function(response) {
                                            if (response.success) {
                                                alertify.success(response
                                                    .message);
                                                var redirectUrl = opts
                                                    .successRoute ||
                                                    homeUrl;
                                                setTimeout(
                                                    () => (window.location
                                                        .href =
                                                        redirectUrl),
                                                    1000
                                                );
                                            } else {
                                                alertify.error(response
                                                    .message);
                                                resetSubmitButton($submitBtn,
                                                    originalText);
                                            }
                                        },
                                        error: function(xhr) {
                                            alertify.error(
                                                "Something went wrong");
                                            resetSubmitButton($submitBtn,
                                                originalText);
                                            if (xhr.status === 422)
                                                handleValidationErrors(xhr
                                                    .responseJSON
                                                    .errors);
                                            else
                                                console.error(
                                                    "Unexpected error:",
                                                    xhr.responseText || xhr
                                                    .statusText
                                                );
                                        },
                                    });
                                },
                                100
                            ); // Small delay (100ms) before proceeding with the AJAX request
                        },
                    });
                });
            };
        })(jQuery);
    </script>
@endpush
