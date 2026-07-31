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
                            <span class="hero-badge" data-aos="fade-right" data-aos-delay="300"><?= lang('SolutionsPage.hero.innovative-solutions') ?></span>
                            <h1 data-aos="fade-right" data-aos-delay="400"><?= lang('SolutionsPage.hero.headline') ?></h1>
                            <p data-aos="fade-right" data-aos-delay="500"><?= lang('SolutionsPage.hero.subheadline') ?></p>
                            <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
                                <a href="<?= getenv('REGISTER_LINK') ?>" class="btn-primary"><i class="bi bi-check2-circle"></i> <?= lang('SolutionsPage.hero.cta') ?></a>
                                <a href="<?= base_url($locale . '/pricing') ?>" class="btn-secondary"><i class="bi bi-play-circle"></i> <span><?= lang('System.pages.pricing.title') /* = lang('SolutionsPage.hero.demo') */ ?></span></a>
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
                                        <span><?= lang('SolutionsPage.hero.boxes.high-performance') ?></span>
                                    </div>
                                    <div class="feature-card" data-aos="fade-up" data-aos-delay="700">
                                        <i class="bi bi-emoji-smile"></i>
                                        <span><?= lang('SolutionsPage.hero.boxes.convenience') ?></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
                                        <i class="bi bi-list-check"></i>
                                        <span><?= lang('SolutionsPage.hero.boxes.flexibility') ?></span>
                                    </div>
                                    <div class="feature-card" data-aos="fade-up" data-aos-delay="800">
                                        <i class="bi bi-clipboard2-data"></i>
                                        <span><?= lang('SolutionsPage.hero.boxes.transparency') ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->endSection() ?>