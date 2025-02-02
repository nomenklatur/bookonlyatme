<!doctype html>
<html lang="<?= config('language_code') ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="theme-color" content="#35A768">
    <meta name="google" content="notranslate">

    <meta property="og:title" content="<?= lang('page_title') . ' ' . vars('company_name') ?> | Easy!Appointments"/>
    <meta property="og:description" content="Book Your Appointment With A Few Clicks"/>
    <meta property="og:url" content="<?= base_url() ?>">
    <meta property="og:image" content="<?= base_url('assets/img/social-card.png') ?>"/>
    <meta property="og:type" content="website">

    <?php slot('meta'); ?>

    <title><?= lang('page_title') . ' ' . vars('company_name') ?> | Easy!Appointments</title>

    <link rel="icon" type="image/x-icon" href="<?= asset_url('assets/img/favicon.ico') ?>">
    <link rel="icon" sizes="192x192" href="<?= asset_url('assets/img/logo.png') ?>">

    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/vendor/cookieconsent/cookieconsent.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/vendor/flatpickr/flatpickr.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/vendor/flatpickr/material_green.min.css') ?>">
    <!-- <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/themes/' . vars('theme') . '.css') ?>"> -->
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/general.css') ?>">
    <!-- <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/layouts/booking_layout.css') ?>"> -->
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/built_custom.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset_url('assets/css/built_tailwind.css') ?>">

    <?php component('company_color_style', ['company_color' => vars('company_color')]); ?>

    <?php slot('styles'); ?>
</head>

<body>
<div id="main" class="h-[95vh] w-full flex justify-center items-center">
    <div class="p-4 rounded-xl shadow-lg w-full md:w-1/2 lg:w-1/3 m-2">
        <div id="book-appointment-wizard">

            <?php component('booking_header', [
                'company_name' => vars('company_name'),
                'company_logo' => vars('company_logo'),
            ]); ?>

            <?php slot('content'); ?>

        </div>
    </div>
</div>
<div class="mt-2 text-center">
    <small>
        Created by
        <a href="https://www.linkedin.com/in/masdimasekaputra/" class="text-blue-400">Dimas Eka Putra</a>
    </small>
</div>

<script src="<?= asset_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= asset_url('assets/vendor/cookieconsent/cookieconsent.min.js') ?>"></script>
<script src="<?= asset_url('assets/vendor/@popperjs-core/popper.min.js') ?>"></script>
<script src="<?= asset_url('assets/vendor/bootstrap/bootstrap.min.js') ?>"></script>
<script src="<?= asset_url('assets/vendor/moment/moment.min.js') ?>"></script>
<script src="<?= asset_url('assets/vendor/moment-timezone/moment-timezone-with-data.min.js') ?>"></script>
<script src="<?= asset_url('assets/vendor/@fortawesome-fontawesome-free/fontawesome.min.js') ?>"></script>
<script src="<?= asset_url('assets/vendor/@fortawesome-fontawesome-free/solid.min.js') ?>"></script>
<script src="<?= asset_url('assets/vendor/tippy.js/tippy-bundle.umd.min.js') ?>"></script>
<script src="<?= asset_url('assets/vendor/flatpickr/flatpickr.min.js') ?>"></script>

<script src="<?= asset_url('assets/js/app.js') ?>"></script>
<script src="<?= asset_url('assets/js/utils/date.js') ?>"></script>
<script src="<?= asset_url('assets/js/utils/file.js') ?>"></script>
<script src="<?= asset_url('assets/js/utils/http.js') ?>"></script>
<script src="<?= asset_url('assets/js/utils/lang.js') ?>"></script>
<script src="<?= asset_url('assets/js/utils/message.js') ?>"></script>
<script src="<?= asset_url('assets/js/utils/string.js') ?>"></script>
<script src="<?= asset_url('assets/js/utils/url.js') ?>"></script>
<script src="<?= asset_url('assets/js/utils/validation.js') ?>"></script>
<script src="<?= asset_url('assets/js/layouts/booking_layout.js') ?>"></script>
<script src="<?= asset_url('assets/js/http/localization_http_client.js') ?>"></script>

<?php component('js_vars_script'); ?>
<?php component('js_lang_script'); ?>

<?php component('google_analytics_script', ['google_analytics_code' => vars('google_analytics_code')]); ?>
<?php component('matomo_analytics_script', [
    'matomo_analytics_url' => vars('matomo_analytics_url'),
    'matomo_analytics_site_id' => vars('matomo_analytics_site_id'),
]); ?>

<?php slot('scripts'); ?>

</body>
</html>
