jQuery(function ($) {
    $(document).on('click', '.ikreatefse-install-plugin', function () {
        event.preventDefault();
        var $button = $(this);

        if ($button.hasClass('updating-message')) {
            return;
        }

        wp.updates.installPlugin({
            slug: $button.data('slug')
        });
    });

    $(document).on('click', '.ikreatefse-activate-plugin', function () {
        event.preventDefault();
        var $button = $(this);
        $button.addClass('updating-message').html(importer_params.activating_text);
        ikreatefse_activate_plugin($button);

    });

    $(document).on('wp-plugin-installing', function (event, args) {
        event.preventDefault();
        $('.ikreatefse-install-plugin').addClass('updating-message').html(importer_params.installing_text);
    });

    $(document).on('wp-plugin-install-success', function (event, response) {

        event.preventDefault();
        var $button = $('.ikreatefse-install-plugin');

        $button.html(importer_params.activating_text);

        setTimeout(function () {
            ikreatefse_activate_plugin($button);
        }, 1000);

    });

    function ikreatefse_activate_plugin($button) {
        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'ikreatefse_activate_plugin',
                slug: $button.data('slug'),
                file: $button.data('filename')
            },
        }).done(function (result) {
            var result = JSON.parse(result)
            if (result.success) {
                window.location.href = importer_params.importer_url;
            } else {
                $button.removeClass('updating-message').html(importer_params.error);
            }

        });
    }

    /** Plugins Installer */
    $(document).ready(function () {
        $('.thim-button-link').on('click', function () {
            var $button = $(this);
            $button.addClass('updating-message').attr('disabled', true);
            window.location.href = $button.attr('data-href');
        })
    });
});