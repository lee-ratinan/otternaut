<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <main class="main">
        <section id="hero" class="hero section">
            <div class="hero-background">
                <img src="<?= base_url('assets/img/home/hero.webp') ?>" alt="" data-aos="zoom-out"
                     data-aos-duration="1000">
                <div class="overlay"></div>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="200">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <span class="hero-badge" data-aos="fade-right"
                                  data-aos-delay="300"><?= lang('SolutionsPage.hero.convenient-solutions') ?></span>
                            <h1 data-aos="fade-right"
                                data-aos-delay="400"><?= lang('SolutionsPage.hero.headline') ?></h1>
                            <p data-aos="fade-right"
                               data-aos-delay="500"><?= lang('SolutionsPage.hero.subheadline') ?></p>
                            <div class="hero-actions" data-aos="fade-right" data-aos-delay="600">
                                <a href="<?= getenv('REGISTER_LINK') ?>" class="btn-primary"><i
                                        class="bi bi-check2-circle"></i> <?= lang('SolutionsPage.hero.cta') ?></a>
                                <a href="<?= base_url($locale . '/pricing/page') ?>" class="btn-secondary"><i
                                        class="bi bi-play-circle"></i>
                                    <span><?= lang('System.pages.pricing.title') /* = lang('SolutionsPage.hero.demo') */ ?></span></a>
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
        <?php include_once('_about-us.php') ?>
        <section id="call-to-action" class="call-to-action section light-background">

            <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

                <div class="row">

                    <div class="col-lg-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="content-wrapper">
                            <div class="section-label">Transform Your Business</div>
                            <h2>Partner with Industry Leaders</h2>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget
                                tortor risus.</p>

                            <div class="trust-metrics">
                                <div class="metric-item">
                                    <div class="metric-value">750+</div>
                                    <div class="metric-label">Enterprise Clients</div>
                                </div>
                                <div class="metric-item">
                                    <div class="metric-value">98%</div>
                                    <div class="metric-label">Client Retention</div>
                                </div>
                                <div class="metric-item">
                                    <div class="metric-value">24/7</div>
                                    <div class="metric-label">Support Coverage</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="cta-box">
                            <div class="cta-header">
                                <h3>Request a Consultation</h3>
                                <p>Speak with our experts to discuss your business requirements</p>
                            </div>

                            <div class="benefits-grid">
                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="bi bi-shield-check"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4>Enterprise Security</h4>
                                        <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                    </div>
                                </div>

                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4>Scalable Solutions</h4>
                                        <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                                    </div>
                                </div>

                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4>Dedicated Support</h4>
                                        <p>Pellentesque in ipsum id orci porta dapibus vestibulum ac diam.</p>
                                    </div>
                                </div>

                                <div class="benefit-item">
                                    <div class="benefit-icon">
                                        <i class="bi bi-lightning"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4>Rapid Implementation</h4>
                                        <p>Nulla quis lorem ut libero malesuada feugiat curabitur arcu erat.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="action-area">
                                <a href="#" class="btn-primary">Schedule Consultation</a>
                                <a href="#" class="btn-secondary">Download Brochure</a>
                                <div class="contact-info">
                                    <i class="bi bi-telephone"></i>
                                    <span>Or call us at <strong>+1 (555) 234-5678</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <section id="faq" class="faq section">

            <!-- Section Title -->
            <div class="container section-title aos-init aos-animate" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

                <div class="row justify-content-center">
                    <div class="col-lg-10">

                        <div class="faq-wrapper">

                            <div class="faq-item faq-active aos-init aos-animate" data-aos="fade-up"
                                 data-aos-delay="150">
                                <div class="faq-header">
                                    <h4>Vestibulum ac diam sit amet quam vehicula elementum?</h4>
                                    <div class="faq-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="content-inner">
                                        <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum
                                            congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci
                                            luctus et ultrices posuere cubilia curae. Praesent sapien massa, convallis a
                                            pellentesque nec, egestas non nisi.</p>
                                    </div>
                                </div>
                            </div><!-- End FAQ Item -->

                            <div class="faq-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                                <div class="faq-header">
                                    <h4>Nulla porttitor accumsan tincidunt mauris blandit?</h4>
                                    <div class="faq-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="content-inner">
                                        <p>Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget
                                            tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta.
                                            Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus
                                            nibh.</p>
                                    </div>
                                </div>
                            </div><!-- End FAQ Item -->

                            <div class="faq-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="250">
                                <div class="faq-header">
                                    <h4>Curabitur aliquet quam id dui posuere blandit proin?</h4>
                                    <div class="faq-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="content-inner">
                                        <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac
                                            diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin
                                            molestie malesuada. Pellentesque in ipsum id orci porta dapibus.</p>
                                    </div>
                                </div>
                            </div><!-- End FAQ Item -->

                            <div class="faq-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <div class="faq-header">
                                    <h4>Vivamus magna justo lacinia eget consectetur sed?</h4>
                                    <div class="faq-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="content-inner">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium. Totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto. Nemo enim ipsam voluptatem quia voluptas sit
                                            aspernatur.</p>
                                    </div>
                                </div>
                            </div><!-- End FAQ Item -->

                            <div class="faq-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="350">
                                <div class="faq-header">
                                    <h4>Donec sollicitudin molestie malesuada proin eget?</h4>
                                    <div class="faq-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="content-inner">
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas
                                            molestias excepturi sint occaecati. Cupiditate non provident, similique sunt
                                            in culpa.</p>
                                    </div>
                                </div>
                            </div><!-- End FAQ Item -->

                            <div class="faq-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                                <div class="faq-header">
                                    <h4>Pellentesque in ipsum id orci porta dapibus vestibulum?</h4>
                                    <div class="faq-icon">
                                        <i class="bi bi-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="faq-content">
                                    <div class="content-inner">
                                        <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec
                                            rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget
                                            consectetur sed, convallis at tellus. Quisque velit nisi, pretium ut lacinia
                                            in.</p>
                                    </div>
                                </div>
                            </div><!-- End FAQ Item -->

                        </div>

                    </div>
                </div>

            </div>

        </section>
    </main>
<?php $this->endSection() ?>