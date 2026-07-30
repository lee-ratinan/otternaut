<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>
        <?= lang('System.pages.coming-soon.title') ?> |
        <?= lang('System.site-name') ?>
    </title>
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.webp') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.webp') ?>" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <?php if ('th' == $lang) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&family=Noto+Serif+Thai:wght@100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <?php else : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <?php endif; ?>
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/css/main.min.css') ?>" rel="stylesheet">
    <!-- =======================================================
    * Template Name: NiceAdmin
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Updated: Apr 20 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body style="background-color:#08101b;">
<main>
    <div class="container">
        <section class="section text-center align-items-center justify-content-center mt-5 p-5" style="background-color:#08101b;">
            <img src="<?= base_url('assets/img/coming-soon.webp') ?>" alt="<?= lang('System.pages.coming-soon.title') ?>" class="img-fluid" style="max-height:60vh;mask-image: linear-gradient(to right, transparent, black 20%, black 80%, transparent);">
            <h1 class="pt-5" style="color:#c97232"><?= lang('System.pages.coming-soon.title') ?></h1>
            <h2 style="color:#c97232"><?= lang('System.pages.coming-soon.paragraph') ?></h2>
        </section>
    </div>
</main><!-- End #main -->
</body>
</html>