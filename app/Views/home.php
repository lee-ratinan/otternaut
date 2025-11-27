<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="hero-background">
            <img src="<?= base_url('assets/img/home/hero.jpg') ?>" alt="" data-aos="zoom-out" data-aos-duration="1000">
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
                            <a href="#" class="btn-primary"><i class="bi bi-check2-circle"></i> <?= lang('Home.hero.cta') ?></a>
                            <a href="#" class="btn-secondary glightbox"><i class="bi bi-play-circle"></i> <span><?= lang('Home.hero.demo') ?></span></a>
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
    </section><!-- /Hero Section -->
    <!-- About Section -->
    <section id="about" class="about section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
                    <img src="<?= base_url('assets/img/about/about-21.webp') ?>" class="img-fluid rounded shadow" alt="Comprehensive solutions for business success">
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                    <div class="about-content">
                        <h2 class="mb-3">Our Visionary Endeavors</h2>
                        <p class="lead mb-3">Discover how our diverse range of services can empower your business to achieve greater efficiency and growth in a competitive landscape.</p>
                        <p>We provide expert consultancy and practical tools designed to streamline your operations, enhance productivity, and maximize your return on investment. Our committed team of professionals is dedicated to helping you navigate challenges and seize opportunities.</p>
                        <a href="#" class="btn btn-primary mt-3">Discover Our Story</a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->
    <!-- Services Section -->
    <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4">

                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-stack"></i>
                        </div>
                        <h3>Digital Solutions</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa.</p>
                        <div class="card-links">
                            <a href="#" class="link-item">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3>Secure Systems</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
                        <div class="card-links">
                            <a href="#" class="link-item">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <h3>Growth Strategy</h3>
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur vel illum qui dolorem.</p>
                        <div class="card-links">
                            <a href="#" class="link-item">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <!-- Card 4 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-cpu"></i>
                        </div>
                        <h3>AI Integration</h3>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
                        <div class="card-links">
                            <a href="#" class="link-item">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <!-- Card 5 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-cloud-arrow-up"></i>
                        </div>
                        <h3>Cloud Services</h3>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.</p>
                        <div class="card-links">
                            <a href="#" class="link-item">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <!-- Card 6 -->
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item">
                        <div class="icon">
                            <i class="bi bi-gear"></i>
                        </div>
                        <h3>Process Automation</h3>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                        <div class="card-links">
                            <a href="#" class="link-item">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->
    <!-- Tabs Section -->
    <section id="tabs" class="tabs section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="tabs-wrapper">
                <div class="tabs-header" data-aos="fade-up" data-aos-delay="200">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tabs-tab-1">
                                <div class="tab-content-preview">
                                    <span class="tab-number">01</span>
                                    <div class="tab-text">
                                        <h6>Innovation</h6>
                                        <small>Creative solutions</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-2">
                                <div class="tab-content-preview">
                                    <span class="tab-number">02</span>
                                    <div class="tab-text">
                                        <h6>Strategy</h6>
                                        <small>Business growth</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-3">
                                <div class="tab-content-preview">
                                    <span class="tab-number">03</span>
                                    <div class="tab-text">
                                        <h6>Performance</h6>
                                        <small>Optimal results</small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-4">
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

                <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                    <div class="tab-pane fade active show" id="tabs-tab-1">
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
                                    <img src="<?= base_url('assets/img/features/use-case-spa.jpg') ?>" alt="" class="img-fluid">
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

                    <div class="tab-pane fade" id="tabs-tab-2">
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
                                    <img src="<?= base_url('assets/img/features/use-case-school.jpg') ?>" alt="" class="img-fluid">
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

                    <div class="tab-pane fade" id="tabs-tab-3">
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
                                    <img src="<?= base_url('assets/img/features/use-case-consultant.jpg') ?>" alt="" class="img-fluid">
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

                    <div class="tab-pane fade" id="tabs-tab-4">
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
                                    <img src="<?= base_url('assets/img/features/use-case-gym.jpg') ?>" alt="" class="img-fluid">
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
    </section><!-- /Tabs Section -->
    <!-- Faq Section -->
    <section id="faq" class="faq section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Frequently Asked Questions</h2>
            <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="faq-wrapper">

                        <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="150">
                            <div class="faq-header">
                                <h4>Vestibulum ac diam sit amet quam vehicula elementum?</h4>
                                <div class="faq-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                            </div>
                            <div class="faq-content">
                                <div class="content-inner">
                                    <p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
                                </div>
                            </div>
                        </div><!-- End FAQ Item -->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                            <div class="faq-header">
                                <h4>Nulla porttitor accumsan tincidunt mauris blandit?</h4>
                                <div class="faq-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                            </div>
                            <div class="faq-content">
                                <div class="content-inner">
                                    <p>Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh.</p>
                                </div>
                            </div>
                        </div><!-- End FAQ Item -->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="250">
                            <div class="faq-header">
                                <h4>Curabitur aliquet quam id dui posuere blandit proin?</h4>
                                <div class="faq-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                            </div>
                            <div class="faq-content">
                                <div class="content-inner">
                                    <p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus.</p>
                                </div>
                            </div>
                        </div><!-- End FAQ Item -->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="faq-header">
                                <h4>Vivamus magna justo lacinia eget consectetur sed?</h4>
                                <div class="faq-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                            </div>
                            <div class="faq-content">
                                <div class="content-inner">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                                </div>
                            </div>
                        </div><!-- End FAQ Item -->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="350">
                            <div class="faq-header">
                                <h4>Donec sollicitudin molestie malesuada proin eget?</h4>
                                <div class="faq-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                            </div>
                            <div class="faq-content">
                                <div class="content-inner">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati. Cupiditate non provident, similique sunt in culpa.</p>
                                </div>
                            </div>
                        </div><!-- End FAQ Item -->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                            <div class="faq-header">
                                <h4>Pellentesque in ipsum id orci porta dapibus vestibulum?</h4>
                                <div class="faq-icon">
                                    <i class="bi bi-chevron-down"></i>
                                </div>
                            </div>
                            <div class="faq-content">
                                <div class="content-inner">
                                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Quisque velit nisi, pretium ut lacinia in.</p>
                                </div>
                            </div>
                        </div><!-- End FAQ Item -->

                    </div>

                </div>
            </div>

        </div>

    </section><!-- /Faq Section -->
</main>
<?php $this->endSection() ?>