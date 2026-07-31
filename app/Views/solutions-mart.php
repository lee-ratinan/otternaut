<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
<main class="main">
    <section id="hero" class="hero section">
        <div class="hero-background">
            <img src="<?= base_url('assets/img/home/hero.webp') ?>" alt="" data-aos="zoom-out" data-aos-duration="1000">
            <div class="overlay"></div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="200">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <span class="hero-badge" data-aos="fade-right" data-aos-delay="300"><?= lang('SolutionsMart.hero.innovative-solutions') ?></span>
                        <h1 data-aos="fade-right" data-aos-delay="400"><?= lang('SolutionsMart.hero.headline') ?></h1>
                        <p data-aos="fade-right" data-aos-delay="500"><?= lang('SolutionsMart.hero.subheadline') ?></p>
                        <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
                            <a href="<?= getenv('REGISTER_LINK') ?>" class="btn-primary"><i class="bi bi-check2-circle"></i> <?= lang('SolutionsMart.hero.cta') ?></a>
                            <a href="<?= base_url($locale . '/pricing/mart') ?>" class="btn-secondary"><i class="bi bi-play-circle"></i> <span><?= lang('System.pages.pricing.title') /* = lang('SolutionsMart.hero.demo') */ ?></span></a>
                        </div>
                        <div class="hero-stats d-none" data-aos="fade-up" data-aos-delay="700">
                            <div class="stat-item">
                                <span class="stat-number">500+</span>
                                <span class="stat-label">Projects Completed</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">98%</span>
                                <span class="stat-label">Client Satisfaction</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">24/7</span>
                                <span class="stat-label">Support Available</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    <span><?= lang('SolutionsMart.hero.boxes.high-performance') ?></span>
                                </div>
                                <div class="feature-card" data-aos="fade-up" data-aos-delay="700">
                                    <i class="bi bi-emoji-smile"></i>
                                    <span><?= lang('SolutionsMart.hero.boxes.convenience') ?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
                                    <i class="bi bi-list-check"></i>
                                    <span><?= lang('SolutionsMart.hero.boxes.flexibility') ?></span>
                                </div>
                                <div class="feature-card" data-aos="fade-up" data-aos-delay="800">
                                    <i class="bi bi-clipboard2-data"></i>
                                    <span><?= lang('SolutionsMart.hero.boxes.transparency') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once('_about-us.php') ?>
    <section id="services" class="services section">
        <div class="container section-title" data-aos="fade-up">
            <h2><?= lang('SolutionsMart.features.title') ?></h2>
            <p><?= lang('SolutionsMart.features.subtitle') ?></p>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-4">
                <?php
                $keys   = ['booking', 'session', 'product', 'payment', 'backend', 'report'];
                $delays = [100, 200, 300, 100, 200, 300];
                $icons  = ['calendar-check', 'people', 'bag-check', 'bank', 'gear-wide-connected', 'graph-up-arrow'];
                ?>
                <?php foreach ($keys as $i => $key) : ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $delays[$i] ?>">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-<?= $icons[$i] ?>"></i>
                        </div>
                        <h3><?= lang('SolutionsMart.features.boxes.' . $key . '.title') ?></h3>
                        <p><?= lang('SolutionsMart.features.boxes.' . $key . '.description') ?></p>
                        <div class="card-links d-none"><a href="#" class="link-item">Learn More<i class="bi bi-arrow-right"></i></a></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section id="tabs" class="tabs section">
        <?php
        $keys = ['spa', 'school', 'consultant', 'gym'];
        $float_icons = ['feather', 'mortarboard', 'vector-pen', 'hand-thumbs-up'];
        ?>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="tabs-wrapper">
                <div class="tabs-header" data-aos="fade-up" data-aos-delay="200">
                    <ul class="nav nav-tabs">
                        <?php foreach ($keys as $i => $key) : ?>
                        <li class="nav-item">
                            <a class="nav-link <?= (0 == $i ? 'active show' : '') ?>" data-bs-toggle="tab" data-bs-target="#tabs-tab-<?= $key ?>">
                                <div class="tab-content-preview">
                                    <span class="tab-number">0<?= ($i+1) ?></span>
                                    <div class="tab-text">
                                        <h6><?= lang('SolutionsMart.use-cases.' . $key . '.tab-title') ?></h6>
                                        <small><?= lang('SolutionsMart.use-cases.' . $key . '.tab-subtitle') ?></small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
                    <?php foreach ($keys as $i => $key) : ?>
                    <div class="tab-pane fade <?= (0 == $i ? 'active show' : '') ?>" id="tabs-tab-<?= $key ?>">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="content-area">
                                    <div class="content-badge">
                                        <i class="bi bi-<?= $float_icons[$i] ?>"></i>
                                        <span><?= lang('SolutionsMart.use-cases.' . $key . '.label') ?></span>
                                    </div>
                                    <h3><?= lang('SolutionsMart.use-cases.' . $key . '.title') ?></h3>
                                    <p><?= lang('SolutionsMart.use-cases.' . $key . '.description') ?></p>
                                    <div class="highlight-stats d-none">
                                        <div class="stat-item">
                                            <span class="stat-value"><?= lang('SolutionsMart.use-cases.' . $key . '.boxes.0.value') ?></span>
                                            <span class="stat-label"><?= lang('SolutionsMart.use-cases.' . $key . '.boxes.0.label') ?></span>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-value"><?= lang('SolutionsMart.use-cases.' . $key . '.boxes.1.value') ?></span>
                                            <span class="stat-label"><?= lang('SolutionsMart.use-cases.' . $key . '.boxes.1.label') ?></span>
                                        </div>
                                    </div>
                                    <div class="feature-points">
                                        <?php foreach (lang('SolutionsMart.use-cases.' . $key . '.benefits') as $line) : ?>
                                        <div class="point-item"><i class="bi bi-arrow-right"></i><span><?= $line ?></span></div>
                                        <?php endforeach; ?>
                                    </div>
                                    <a href="#" class="explore-link d-none">
                                        Explore Innovation <i class="bi bi-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="visual-content">
                                    <img src="<?= base_url('assets/img/features/use-case-' . $key . '.webp') ?>" alt="" class="img-fluid">
                                    <div class="floating-element d-none">
                                        <div class="floating-card">
                                            <i class="bi bi-xxx"></i>
                                            <div class="card-info">
                                                <span><?= lang('SolutionsMart.use-cases.' . $key . '.float.label') ?></span>
                                                <strong><?= lang('SolutionsMart.use-cases.' . $key . '.float.detail') ?></strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <section id="faq" class="faq section">
        <div class="container section-title" data-aos="fade-up">
            <h2><?= lang('SolutionsMart.faq.title') ?></h2>
            <p><?= lang('SolutionsMart.faq.subtitle') ?></p>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="faq-wrapper">
                        <?php $delay = 150; ?>
                        <?php foreach (lang('SolutionsMart.faq.questions') as $i => $question) : ?>
                        <div class="faq-item <?= (0 == $i ? 'faq-active' : '') ?>" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                            <div class="faq-header">
                                <h4><?= $question[0] ?></h4>
                                <div class="faq-icon"><i class="bi bi-chevron-down"></i></div>
                            </div>
                            <div class="faq-content">
                                <div class="content-inner"><p><?= $question[1] ?></p></div>
                            </div>
                        </div><?php $delay+= 50; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->endSection() ?>