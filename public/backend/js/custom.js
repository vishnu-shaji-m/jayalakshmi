$(function () {
    // CSRF token
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    /**
     * Disable submit button during form submission
     */
    $(".submitBtn").on("click", function (e) {
        e.preventDefault();

        var button = $(this);
        var buttonBeforeText = button.text().toLowerCase().trim();
        var buttonAfterText = "";

        switch (buttonBeforeText) {
            case "log in":
                buttonAfterText = "Logging In...";
                break;
            default:
                buttonAfterText = "Processing...";
                break;
        }

        // Update button with loader and new text
        button.html(
            '<i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i> ' +
                buttonAfterText
        );
        button.prop("disabled", true);

        // Delay form submission slightly to allow UI update
        setTimeout(function () {
            button.closest("form").submit();
        }, 100);
    });

    /**
     * Attach a click event handler to delete buttons
     */
    $("body").on("click", ".delete-btn", function (event) {
        event.preventDefault();

        const $button = $(this);
        const tableId = $button.closest("table").attr("id"); // Get the DataTable ID

        const deleteMessage =
            $button.data("delete-message-type") === "itemWithRelated"
                ? "This will delete the item and its related items!"
                : "This will delete the item!";

        Swal.fire({
            title: "Are you sure?",
            text: deleteMessage,
            icon: "warning",
            showCancelButton: !0,
            confirmButtonColor: "#2ab57d",
            cancelButtonColor: "#fd625e",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: $button.closest("form").attr("action"),
                    type: "POST",
                    data: $button.closest("form").serialize(),
                    success: function (response) {
                        alertify[response.success ? "success" : "error"](
                            response.message
                        );
                        if (response.success)
                            $("#" + tableId)
                                .DataTable()
                                .ajax.reload(null, false); // Preserve pagination
                    },
                    error: function (xhr) {
                        alertify.error("An error occurred. Please try again.");
                        console.error(
                            "Unexpected error:",
                            xhr.responseText || xhr.statusText
                        );
                    },
                });
            }
        });
    });

    /**
     * Manages the input and change events for elements with the class `.sort-order`,
     * ensuring that only valid numeric input is processed and updating the server with
     * the new sort order value via AJAX with a debounce mechanism.
     */
    let sortOrderDebounceTimer;

    $(document).on("input change", ".sort-order", function (event) {
        const $this = $(this);
        let inputValue = $this.val().replace(/[^\d]/g, ""); // Remove non-digit characters
        let value = Math.max(
            0,
            Math.min(parseInt(inputValue, 10) || 0, 2147483647)
        ); // Validate and limit range
        $this.val(value);

        // Only trigger AJAX request on change event
        if (event.type === "change") {
            clearTimeout(sortOrderDebounceTimer);

            sortOrderDebounceTimer = setTimeout(() => {
                $.ajax({
                    url: `/${prefix}/admin-settings/update-sort-order`,
                    type: "POST",
                    data: {
                        id: $this.data("id"),
                        model: $this.data("model"),
                        value: value,
                    },
                    success(response) {
                        alertify[response.success ? "success" : "error"](
                            response.success
                                ? "Sort Order Updated successfully"
                                : "Failed to Update Sort Order"
                        );
                    },
                    error: function (xhr) {
                        alertify.error(
                            "An error occurred while updating Sort Order"
                        );
                        console.error(
                            "Unexpected error:",
                            xhr.responseText || xhr.statusText
                        );
                    },
                });
            }, 300); // Debounce time
        }
    });

    /**
     * Handles toggle switch changes with debouncing to prevent rapid AJAX requests.
     */
    var toggleSwitchDebounceTimer;

    $(document).on("change", ".toggle-switch", function () {
        clearTimeout(toggleSwitchDebounceTimer);

        const $this = $(this);
        const value = $this.is(":checked") ? 1 : 0;
        const { model, column, id, labels, name } = $this.data();
        const [labelSuccess, labelFailed] = labels.split(";");
        const $label = $this.siblings("label");

        $label.text(value === 1 ? labelSuccess : labelFailed);

        toggleSwitchDebounceTimer = setTimeout(() => {
            $.ajax({
                url: `/${prefix}/admin-settings/update-toggle-status`,
                type: "POST",
                data: { id, model, column, value },
                success(response) {
                    if (response.success)
                        alertify.success(`${name} updated successfully`);
                    else
                        revertToggleSwitch(
                            $this,
                            value,
                            labelFailed,
                            labelSuccess,
                            name
                        );
                },
                error: function (xhr) {
                    revertToggleSwitch(
                        $this,
                        value,
                        labelFailed,
                        labelSuccess,
                        name
                    );
                    console.error(
                        "Unexpected error:",
                        xhr.responseText || xhr.statusText
                    );
                },
            });
        }, 300);
    });

    function revertToggleSwitch(
        $element,
        value,
        labelFailed,
        labelSuccess,
        name
    ) {
        $element.prop("checked", !value);
        $element
            .siblings("label")
            .text(value === 1 ? labelFailed : labelSuccess);
        alertify.error(`Failed to Update ${name}`);
    }

    /**
     * Toggles 'scroll-active' class on '.fixed-action-card' based on window scroll position (80px threshold).
     */
    const actionCard = $(".fixed-action-card");
    const scrollPoint = 80;

    $(window).scroll(function () {
        if ($(this).scrollTop() > scrollPoint) {
            actionCard.addClass("scroll-active");
        } else {
            actionCard.removeClass("scroll-active");
        }
    });
});
