<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php
    $title = lang('System.pages.' . $page_slug . '.title');
    if (str_contains($page_slug, 'pricing') || str_contains($page_slug, 'solutions')) {
        $split_slug = str_replace('-', '.', $page_slug);
        $title = lang('System.pages.' . $split_slug);
    }
    ?>
    <title><?= $title . ' | ' . lang('System.site-name') ?></title>
    <meta name="description" content="<?= lang('System.pages.' . $page_slug . '.meta.description') ?>">
    <meta name="keywords" content="<?= lang('System.pages.' . $page_slug . '.meta.keywords') ?>">
    <meta name="author" content="<?= lang('System.author') ?>">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?= lang('System.pages.' . $page_slug . '.title') . ' | ' . lang('System.site-name') ?>">
    <meta property="og:description" content="<?= lang('System.pages.' . $page_slug . '.meta.description') ?>">
    <meta property="og:image" content="<?= base_url('assets/img/otternova-greeting.webp') ?>">
    <meta property="og:url" content="<?= current_url() ?>">
    <meta property="og:type" content="website" />
    <!-- Favicons -->
    <link href="<?= base_url('assets/img/favicon.webp') ?>" rel="icon">
    <link href="<?= base_url('assets/img/apple-touch-icon.webp') ?>" rel="apple-touch-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <?php if ('th' == $country) : ?>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@100..900&family=Noto+Serif+Thai:wght@100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <?php else: ?>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <?php endif; ?>
    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/flag-icons-main/css/flag-icons.min.css') ?>" rel="stylesheet">
    <!-- Main CSS File -->
    <link href="<?= base_url('assets/css/main.min.css') ?>" rel="stylesheet">
    <!-- Link Languages -->
    <link rel="alternate" hreflang="en-TH" href="<?= base_url('en-TH/' . $url_part) ?>">
    <link rel="alternate" hreflang="th-TH" href="<?= base_url('th-TH/' . $url_part) ?>">
    <link rel="alternate" hreflang="x-default" href="<?= base_url($url_part) ?>">
    <link rel="canonical" href="<?= current_url() ?>">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "OtterNova",
            "url": "https://otternova.com/",
            "logo": "https://otternova.com/assets/img/logo-original.webp"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "OtterNova",
            "url": "https://otternova.com/"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "OtterNova",
            "applicationCategory": "BusinessApplication",
            "operatingSystem": "Web",
            "url": "https://otternova.com/",
            "description": "OtterNova is a smart booking and scheduling system for businesses, replacing paper chaos with an organized dashboard.",
            "offers": {
                "@type": "Offer",
                "price": "320",
                "priceCurrency": "THB",
                "description": "30-day free trial, then paid plans available."
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ContactPage",
            "name": "Contact OtterNova",
            "url": "https://otternova.com/contact"
        }
    </script>
    <!-- =======================================================
    * Template Name: Aventro
    * Template URL: https://bootstrapmade.com/aventro-bootstrap-template/
    * Updated: Oct 31 2025 with Bootstrap v5.3.8
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body class="index-page country-<?= $country ?>">
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="<?= base_url($locale . DEV_MODE_BYPASS) ?>" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="<?= base_url('assets/img/logo-dark.webp') ?>" alt="<?= lang('System.site-name') ?>">
            <h1 class="sitename"><?= lang('System.site-name') ?></h1>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <?php $doc_lang = substr($locale, 0, 2); ?>
                <li><a href="<?= base_url($locale) . DEV_MODE_BYPASS ?>" <?= ('home' == $page_slug ? 'class="active"' : '') ?>><?= lang('System.pages.home.title') ?></a></li>
                <li class="dropdown"><a href="#"><span><?= lang('System.pages.solutions.title') ?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?= base_url($locale . '/solutions/mart') ?>"><?= lang('System.pages.solutions.mart') ?></a></li>
                        <li><a href="<?= base_url($locale . '/solutions/page') ?>"><?= lang('System.pages.solutions.page') ?></a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span><?= lang('System.pages.pricing.title') ?></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="<?= base_url($locale . '/pricing/mart') ?>"><?= lang('System.pages.pricing.mart') ?></a></li>
                        <li><a href="<?= base_url($locale . '/pricing/page') ?>"><?= lang('System.pages.pricing.page') ?></a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url($locale . '/contact') ?>" <?= ('contact' == $page_slug ? 'class="active"' : '') ?>><?= lang('System.pages.contact.title') ?></a></li>
                <li><a href="<?= base_url('docs?page=' . $doc_lang . '/introduction.md') ?>" target="_blank"><?= lang('System.pages.resources.title') ?></a></li>
                <li class="d-none d-md-block"><a href="<?= base_url($locale . '/choose-region') ?>"><?= get_locale_name($locale) ?></a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <div class="header-social-links d-none d-md-flex">
            <?php foreach (get_social_list() as $key => $link) : ?>
                <a href="<?= $link ?>" class="<?= $key ?>" target="_blank"><i class="bi bi-<?= $key ?>"></i></a>
            <?php endforeach; ?>
        </div>
    </div>
</header>
<?= $this->renderSection('content') ?>
<footer id="footer" class="footer light-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6 footer-about">
                <a href="<?= base_url($locale . DEV_MODE_BYPASS) ?>" class="logo d-flex align-items-center">
                    <span class="sitename"><?= lang('System.site-name') ?></span>
                </a>
                <div class="footer-contact">
                    <p><?= lang('System.slogan') ?></p>
                    <?php if (getenv('CONTACT_PHONE')) : ?>
                        <p class="mt-3"><i class="bi bi-telephone"></i> <?= format_phone_number(getenv('CONTACT_PHONE')) ?></p>
                    <?php endif; ?>
                    <?php if (getenv('CONTACT_EMAIL')) : ?>
                        <p><i class="bi bi-envelope"></i> <a href="mailto:<?= getenv('CONTACT_EMAIL') ?>"><?= getenv('CONTACT_EMAIL') ?></a></p>
                    <?php endif; ?>
                </div>
                <div class="social-links d-flex mt-4">
                    <?php foreach (get_social_list() as $key => $link) : ?>
                        <a href="<?= $link ?>"><i class="bi bi-<?= $key ?>"></i></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4><?= lang('System.footer.useful-links') ?></h4>
                <ul>
                    <li><a href="<?= base_url($locale) . DEV_MODE_BYPASS ?>"><?= lang('System.pages.home.title') ?></a></li>
                    <li><a href="<?= base_url($locale . '/contact') ?>"><?= lang('System.pages.contact.title') ?></a></li>
                    <li><a href="<?= base_url($locale . '/about-us') ?>"><?= lang('System.pages.about-us.title') ?></a></li>
                    <li><a href="<?= base_url($locale . '/leadership') ?>"><?= lang('System.pages.leadership.title') ?></a></li>
                    <li><a href="<?= base_url('docs') ?>" target="_blank"><?= lang('System.pages.resources.title') ?></a></li>
                    <li><a href="<?= getenv('OTTERMART_LINK') ?>" target="_blank">OtterMart</a></li>
                    <li><a href="<?= getenv('OTTERPAGE_LINK') ?>" target="_blank">OtterPage</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4><?= lang('System.pages.solutions.title') ?></h4>
                <ul>
                    <li class="pb-0">
                        <?= lang('System.pages.solutions.mart') ?>:
                        <a class="ms-2" href="<?= base_url($locale . '/solutions/mart') ?>"><?= lang('System.pages.solutions.title') ?></a>
                        <a class="ms-2" href="<?= base_url($locale . '/pricing/mart') ?>"><?= lang('System.pages.pricing.title') ?></a>
                    </li>
                    <li class="pb-0">
                        <?= lang('System.pages.solutions.page') ?>
                        <a class="ms-2" href="<?= base_url($locale . '/solutions/page') ?>"><?= lang('System.pages.solutions.title') ?></a>
                        <a class="ms-2" href="<?= base_url($locale . '/pricing/page') ?>"><?= lang('System.pages.pricing.title') ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4><?= lang('System.locales.title') ?></h4>
                <p><a href="<?= base_url($locale . '/choose-region') ?>"><?= lang('System.pages.choose-region.title') ?></a></p>
                <div id="dbd-section">
                    <p>OtterNova | ทะเบียนพาณิชย์เลขที่ XXXXXXXXXXXXX</p>
                    <div>[area to embed DBD script after registration is complete]</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright text-center mt-4">
        <p>
            <?= lang('System.copyright-message', [date('Y')]) ?>
            | <a href="<?= base_url($locale . '/terms-and-conditions') ?>"><?= lang('System.pages.terms-and-conditions.title') ?></a>
            | <a href="<?= base_url($locale . '/privacy-policy') ?>"><?= lang('System.pages.privacy-policy.title') ?></a>
        </p>
    </div>
</footer>
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Preloader -->
<div id="preloader"></div>
<!-- Vendor JS Files -->
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
<script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
<script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
<!-- Main JS File -->
<script src="<?= base_url('assets/js/main.min.js') ?>"></script>
</body>
</html>