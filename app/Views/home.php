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
                            <a href="<?= base_url($locale . '/pricing') ?>" class="btn-secondary"><i class="bi bi-play-circle"></i> <span><?= lang('System.pages.pricing.title') /* = lang('Home.hero.demo') */ ?></span></a>
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
                                    <span><?= lang('Home.hero.boxes.high-performance') ?></span>
                                </div>
                                <div class="feature-card" data-aos="fade-up" data-aos-delay="700">
                                    <i class="bi bi-emoji-smile"></i>
                                    <span><?= lang('Home.hero.boxes.convenience') ?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="feature-card" data-aos="fade-up" data-aos-delay="600">
                                    <i class="bi bi-list-check"></i>
                                    <span><?= lang('Home.hero.boxes.flexibility') ?></span>
                                </div>
                                <div class="feature-card" data-aos="fade-up" data-aos-delay="800">
                                    <i class="bi bi-clipboard2-data"></i>
                                    <span><?= lang('Home.hero.boxes.transparency') ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="features section">

        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center">
                <div class="col-lg-5 aos-init aos-animate" data-aos="fade-right" data-aos-delay="200">
                    <div class="features-intro">
                        <div class="intro-badge">
                            <i class="bi bi-stars"></i>
                            <span>Premium Features</span>
                        </div>
                        <h2>Elevating Your Digital Experience</h2>
                        <p>Curabitur ullamcorper ultricies nisi. Nam eget dui etiam rhoncus maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>

                        <div class="metrics-display">
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

                        <a href="#" class="link-explore">
                            Explore all features
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-7 aos-init aos-animate" data-aos="fade-left" data-aos-delay="300">
                    <div class="features-collection">

                        <div class="feature-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <div class="feature-header">
                                <div class="feature-icon-wrapper">
                                    <i class="bi bi-lock-fill"></i>
                                </div>
                                <div class="feature-meta">
                                    <h3>Advanced Security Protocol</h3>
                                    <span class="feature-tag active">Active</span>
                                </div>
                            </div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas vestibulum tortor quam feugiat vitae.</p>
                        </div>

                        <div class="feature-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-header">
                                <div class="feature-icon-wrapper">
                                    <i class="bi bi-bezier2"></i>
                                </div>
                                <div class="feature-meta">
                                    <h3>Seamless Workflows</h3>
                                    <span class="feature-tag active">Active</span>
                                </div>
                            </div>
                            <p>Donec sodales sagittis magna sed pellentesque urna nunc id cursus metus aliquam eleifend mi in nulla posuere sollicitudin.</p>
                        </div>

                        <div class="feature-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-header">
                                <div class="feature-icon-wrapper">
                                    <i class="bi bi-droplet-half"></i>
                                </div>
                                <div class="feature-meta">
                                    <h3>Real-Time Analytics</h3>
                                    <span class="feature-tag beta">Beta</span>
                                </div>
                            </div>
                            <p>Proin libero nunc consequat interdum varius sit amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan.</p>
                        </div>

                        <div class="feature-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-header">
                                <div class="feature-icon-wrapper">
                                    <i class="bi bi-rocket-takeoff"></i>
                                </div>
                                <div class="feature-meta">
                                    <h3>Rapid Deployment</h3>
                                    <span class="feature-tag upcoming">Coming Soon</span>
                                </div>
                            </div>
                            <p>Vivamus suscipit tortor eget felis porttitor volutpat curabitur arcu erat accumsan id imperdiet et porttitor at sem.</p>
                        </div>

                        <div class="feature-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                            <div class="feature-header">
                                <div class="feature-icon-wrapper">
                                    <i class="bi bi-infinity"></i>
                                </div>
                                <div class="feature-meta">
                                    <h3>Infinite Scalability</h3>
                                    <span class="feature-tag active">Active</span>
                                </div>
                            </div>
                            <p>Mauris blandit aliquet elit eget tincidunt nibh pulvinar a proin eget tortor risus quisque velit nisi pretium ut lacinia.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>
    <section id="tabs" class="tabs section">

        <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            <div class="tabs-wrapper">
                <div class="tabs-header aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tabs-tab-1" aria-selected="true" role="tab">
                                <div class="tab-content-preview">
                                    <span class="tab-number">01</span>
                                    <div class="tab-text">
                                        <h6>Innovation</h6>
                                        <small>Creative solutions</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-2" aria-selected="false" tabindex="-1" role="tab">
                                <div class="tab-content-preview">
                                    <span class="tab-number">02</span>
                                    <div class="tab-text">
                                        <h6>Strategy</h6>
                                        <small>Business growth</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-3" aria-selected="false" tabindex="-1" role="tab">
                                <div class="tab-content-preview">
                                    <span class="tab-number">03</span>
                                    <div class="tab-text">
                                        <h6>Performance</h6>
                                        <small>Optimal results</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-4" aria-selected="false" tabindex="-1" role="tab">
                                <div class="tab-content-preview">
                                    <span class="tab-number">04</span>
                                    <div class="tab-text">
                                        <h6>Integration</h6>
                                        <small>Seamless workflow</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="tabs-tab-1" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="content-area">
                                    <div class="content-badge">
                                        <i class="bi bi-lightbulb"></i>
                                        <span>Innovation Hub</span>
                                    </div>
                                    <h3>Revolutionary Design Thinking</h3>
                                    <p>Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                                    <div class="highlight-stats">
                                        <div class="stat-item">
                                            <span class="stat-value">145%</span>
                                            <span class="stat-label">Innovation Rate</span>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-value">28K</span>
                                            <span class="stat-label">Ideas Generated</span>
                                        </div>
                                    </div>

                                    <div class="feature-points">
                                        <div class="point-item">
                                            <i class="bi bi-arrow-right"></i>
                                            <span>Nemo enim ipsam voluptatem quia voluptas sit</span>
                                        </div>
                                        <div class="point-item">
                                            <i class="bi bi-arrow-right"></i>
                                            <span>Aspernatur aut odit fugit sed quia consequuntur</span>
                                        </div>
                                        <div class="point-item">
                                            <i class="bi bi-arrow-right"></i>
                                            <span>Magni dolores eos qui ratione voluptatem</span>
                                        </div>
                                    </div>

                                    <a href="#" class="explore-link">
                                        Explore Innovation <i class="bi bi-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="visual-content">
                                    <img src="assets/img/features/features-2.webp" alt="" class="img-fluid">
                                    <div class="floating-element">
                                        <div class="floating-card">
                                            <i class="bi bi-lightning-charge"></i>
                                            <div class="card-info">
                                                <span>Speed</span>
                                                <strong>3x Faster</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tabs-tab-2" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="content-area">
                                    <div class="content-badge">
                                        <i class="bi bi-compass"></i>
                                        <span>Strategic Planning</span>
                                    </div>
                                    <h3>Data-Driven Business Strategy</h3>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>

                                    <div class="highlight-stats">
                                        <div class="stat-item">
                                            <span class="stat-value">234%</span>
                                            <span class="stat-label">Growth Rate</span>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-value">156</span>
                                            <span class="stat-label">Strategies</span>
                                        </div>
                                    </div>

                                    <div class="feature-points">
                                        <div class="point-item">
                                            <i class="bi bi-arrow-right"></i>
                                            <span>Similique sunt in culpa qui officia deserunt</span>
                                        </div>
                                        <div class="point-item">
                                            <i class="bi bi-arrow-right"></i>
                                            <span>Mollitia animi id est laborum et dolorum fuga</span>
                                        </div>
                                        <div class="point-item">
                                            <i class="bi bi-arrow-right"></i>
                                            <span>Et harum quidem rerum facilis est expedita</span>
                                        </div>
                                    </div>

                                    <a href="#" class="explore-link">
                                        View Strategy <i class="bi bi-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="visual-content">
                                    <img src="assets/img/features/features-4.webp" alt="" class="img-fluid">
                                    <div class="floating-element">
                                        <div class="floating-card">
                                            <i class="bi bi-graph-up-arrow"></i>
                                            <div class="card-info">
                                                <span>Growth</span>
                                                <strong>+189% ROI</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tabs-tab-3" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="content-area">
                                    <div class="content-badge">
                                        <i class="bi bi-speedometer2"></i>
                                        <span>High Performance</span>
                                    </div>
                                    <h3>Optimized System Performance</h3>
                                    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet voluptates repudiandae sint et molestiae non recusandae itaque earum rerum hic tenetur sapiente delectus.</p>

                                    <div class="highlight-stats">
                                        <div class="stat-item">
                                            <span class="stat-value">99.8%</span>
                                            <span class="stat-label">System Uptime</span>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-value">2.4s</span>
                                            <span class="stat-label">Load Time</span>
                                        </div>
                                    </div>

                                    <div class="feature-points">
                                        <div class="point-item">
                                            <i class="bi bi-arrow-right"></i>
                                            <span>Ut aut reiciendis voluptatibus maiores alias</span>
                                        </div>
                                        <div class="point-item">
                                            <i class="bi bi-arrow-right"></i>
                                            <span>Consequatur aut perferendis doloribus asperiores</span>
                                        </div>
                                        <div class="point-item">
                                            <i class="bi bi-arrow-right"></i>
                                            <span>Repellat nam libero tempore cum soluta nobis</span>
                                        </div>
                                    </div>

                                    <a href="#" class="explore-link">
                                        Check Performance <i class="bi bi-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="visual-content">
                                    <img src="assets/img/features/features-1.webp" alt="" class="img-fluid">
                                    <div class="floating-element">
                                        <div class="floating-card">
                                            <i class="bi bi-cpu"></i>
                                            <div class="card-info">
                                                <span>Power</span>
                                                <strong>128 Cores</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tabs-tab-4" role="tabpanel">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="content-area">
                                    <div class="content-badge">
                                        <i class="bi bi-puzzle"></i>
                                        <span>Smart Integration</span>
                                    </div>
                                    <h3>Seamless Workflow Integration</h3>
                                    <p>Eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis voluptas assumenda est omnis dolor repellendus temporibus autem quibusdam et aut officiis debitis.</p>

                                    <div class="highlight-stats">
                                        <div class="stat-item">
                                            <span class="stat-value">450+</span>
                                            <span class="stat-label">Integrations</span>
                                        </div>
                                        <div class="stat-item">
                                            <span class="stat-value">85%</span>
                                            <span class="stat-label">Automation</span>
                                        </div>
                                    </div>

                                    <div class="feature-points">
                                        <div class="point-item">
                                            <i class="bi bi-arrow-right"></i>
                                            <span>Rerum necessitatibus saepe eveniet voluptates</span>
                                        </div>
                                        <div class="point-item">
                                            <i class="bi bi-arrow-right"></i>
                                            <span>Repudiandae sint et molestiae non recusandae</span>
                                        </div>
                                        <div class="point-item">
                                            <i class="bi bi-arrow-right"></i>
                                            <span>Itaque earum rerum hic tenetur sapiente</span>
                                        </div>
                                    </div>

                                    <a href="#" class="explore-link">
                                        Start Integration <i class="bi bi-arrow-up-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="visual-content">
                                    <img src="assets/img/features/features-5.webp" alt="" class="img-fluid">
                                    <div class="floating-element">
                                        <div class="floating-card">
                                            <i class="bi bi-link-45deg"></i>
                                            <div class="card-info">
                                                <span>Connected</span>
                                                <strong>24/7 Sync</strong>
                                            </div>
                                        </div>
                                    </div>
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