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
                            <span class="hero-badge" data-aos="fade-right" data-aos-delay="300"><?= lang('SolutionsPage.hero.convenient-solutions') ?></span>
                            <h1 data-aos="fade-right" data-aos-delay="400"><?= lang('SolutionsPage.hero.headline') ?></h1>
                            <p data-aos="fade-right" data-aos-delay="500"><?= lang('SolutionsPage.hero.subheadline') ?></p>
                            <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
                                <a href="<?= getenv('REGISTER_LINK') ?>" class="btn-primary"><i class="bi bi-check2-circle"></i> <?= lang('SolutionsPage.hero.cta') ?></a>
                                <a href="<?= base_url($locale . '/pricing/page') ?>" class="btn-secondary"><i class="bi bi-play-circle"></i><span><?= lang('System.pages.pricing.title') ?></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-visual" data-aos="fade-left" data-aos-delay="400">
                            <div class="row g-3">
                                <div class="col-6">
                                    <div class="feature-card" data-aos="fade-up" data-aos-delay="500">
                                        <i class="bi bi-award"></i>
                                        <span><?= lang('SolutionsPage.hero.boxes.1') ?></span>
                                    </div>
                                    <div class="feature-card" data-aos="fade-up" data-aos-delay="700">
                                        <i class="bi bi-phone"></i>
                                        <span><?= lang('SolutionsPage.hero.boxes.2') ?></span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
                                        <i class="bi bi-emoji-smile"></i>
                                        <span><?= lang('SolutionsPage.hero.boxes.3') ?></span>
                                    </div>
                                    <div class="feature-card" data-aos="fade-up" data-aos-delay="800">
                                        <i class="bi bi-hand-index"></i>
                                        <span><?= lang('SolutionsPage.hero.boxes.4') ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="call-to-action" class="call-to-action section light-background">
            <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="content-wrapper">
                            <div class="section-label"><?= lang('SolutionsPage.features.badge') ?></div>
                            <h2><?= lang('SolutionsPage.features.title') ?></h2>
                            <p><?= lang('SolutionsPage.features.paragraph') ?></p>
                            <div class="trust-metrics">
                                <?php foreach (lang('SolutionsPage.features.numbers') as $number) : ?>
                                <div class="metric-item">
                                    <div class="metric-value"><?= $number['number'] ?></div>
                                    <div class="metric-label"><?= $number['text'] ?></div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="cta-box">
                            <div class="cta-header">
                                <h3><?= lang('SolutionsPage.web-builder.title') ?></h3>
                                <p><?= lang('SolutionsPage.web-builder.subtitle') ?></p>
                            </div>
                            <div class="benefits-grid">
                                <?php $icons = ['<i class="bi bi-images"></i>', '<i class="bi bi-people"></i>', '<i class="bi bi-info-circle"></i>', '<i class="bi bi-headset"></i>']; ?>
                                <?php foreach (lang('SolutionsPage.web-builder.sections') as $i => $section) : ?>
                                <div class="benefit-item">
                                    <div class="benefit-icon"><?= $icons[$i] ?></div>
                                    <div class="benefit-content">
                                        <h4><?= $section['header'] ?></h4>
                                        <p><?= $section['paragraph'] ?></p>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="faq" class="faq section">
            <div class="container section-title" data-aos="fade-up">
                <h2><?= lang('SolutionsPage.faq.title') ?></h2>
                <p><?= lang('SolutionsPage.faq.subtitle') ?></p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="faq-wrapper">
                            <?php $delay = 150; ?>
                            <?php foreach (lang('SolutionsPage.faq.questions') as $i => $question) : ?>
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