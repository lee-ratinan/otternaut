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
                        <span class="hero-badge" data-aos="fade-right" data-aos-delay="300"><?= lang('Home.hero.innovative-solutions') ?></span>
                        <h1 data-aos="fade-right" data-aos-delay="400"><?= lang('Home.hero.headline') ?></h1>
                        <p data-aos="fade-right" data-aos-delay="500"><?= lang('Home.hero.subheadline') ?></p>
                        <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
                            <a href="<?= getenv('REGISTER_LINK') ?>" class="btn-primary"><i class="bi bi-check2-circle"></i> <?= lang('Home.hero.cta') ?></a>
                        </div>
                        <div class="hero-stats" data-aos="fade-up" data-aos-delay="700">
                            <?php foreach (lang('Home.hero.stats') as $stat) : ?>
                            <div class="stat-item">
                                <span class="stat-number"><?= $stat['number'] ?></span>
                                <span class="stat-label"><?= $stat['text'] ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                        <div class="row g-3">
                            <div class="col-6">
                                <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                                    <i class="bi bi-piggy-bank"></i>
                                    <span><?= lang('Home.hero.boxes.1') ?></span>
                                </div>
                                <div class="feature-card" data-aos="fade-up" data-aos-delay="700">
                                    <i class="bi bi-arrow-left-right"></i>
                                    <span><?= lang('Home.hero.boxes.2') ?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
                                    <i class="bi bi-list-check"></i>
                                    <span><?= lang('Home.hero.boxes.3') ?></span>
                                </div>
                                <div class="feature-card" data-aos="fade-up" data-aos-delay="800">
                                    <i class="bi bi-emoji-smile"></i>
                                    <span><?= lang('Home.hero.boxes.4') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include_once('_about-us.php') ?>
    <section id="features" class="features section">
        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center">
                <div class="col-lg-5 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                    <div class="features-intro">
                        <div class="intro-badge"><i class="bi bi-stars"></i><span><?= lang('Home.features.badge') ?></span></div>
                        <h2><?= lang('Home.features.title') ?></h2>
                        <p><?= lang('Home.features.subtitle') ?></p>
                        <div class="metrics-display d-none">
                            <div class="metric-card">
                                <div class="metric-value">2.5K+</div>
                                <div class="metric-label">Active Users</div>
                            </div>
                            <div class="metric-card">
                                <div class="metric-value">99.9%</div>
                                <div class="metric-label">Uptime Rate</div>
                            </div>
                            <div class="metric-card">
                                <div class="metric-value">150+</div>
                                <div class="metric-label">Integrations</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300">
                    <div class="features-collection">
                        <?php $icons = ['<i class="bi bi-suitcase-lg"></i>', '<i class="bi bi-people"></i>', '<i class="bi bi-bag-check"></i>', '<i class="bi bi-globe"></i>']; ?>
                        <?php foreach (lang('Home.features.list') as $i => $feature) : ?>
                        <div class="feature-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="feature-header">
                                <div class="feature-icon-wrapper"><?= $icons[$i] ?></div>
                                <div class="feature-meta"><h3><?= $feature['title'] ?></h3></div>
                            </div>
                            <p><?= $feature['paragraph'] ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php $this->endSection() ?>