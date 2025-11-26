<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <main class="main">
        <section id="pricing" class="pricing section mt-5">
            <!-- Section Title -->
            <div class="container section-title aos-init aos-animate mt-5" data-aos="fade-up">
                <h2>Pricing</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <!-- Starter Plan -->
                    <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                        <div class="pricing-card">
                            <div class="plan-header">
                                <h3 class="plan-name">Starter</h3>
                                <p class="plan-subtitle">For small teams getting started</p>
                            </div>
                            <div class="plan-pricing">
                                <div class="price-wrapper">
                                    <span class="currency">$</span>
                                    <span class="amount monthly-price">29</span>
                                    <span class="amount annual-price">23</span>
                                    <span class="period">/user/month</span>
                                </div>
                                <p class="billing-info monthly-billing">Billed monthly</p>
                                <p class="billing-info annual-billing">Billed annually at $276/user</p>
                            </div>
                            <div class="plan-features">
                                <ul class="features-list">
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Up to 10 team members</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>5 GB storage per user</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Basic reporting and analytics</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Email support</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Mobile app access</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="plan-action">
                                <a href="#" class="btn-plan">Start Free Trial</a>
                                <p class="trial-info">14-day free trial, no credit card required</p>
                            </div>
                        </div>
                    </div><!-- End Starter Plan -->

                    <!-- Professional Plan -->
                    <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-card featured">
                            <div class="popular-badge">Most Popular</div>
                            <div class="plan-header">
                                <h3 class="plan-name">Professional</h3>
                                <p class="plan-subtitle">For growing businesses</p>
                            </div>
                            <div class="plan-pricing">
                                <div class="price-wrapper">
                                    <span class="currency">$</span>
                                    <span class="amount monthly-price">59</span>
                                    <span class="amount annual-price">47</span>
                                    <span class="period">/user/month</span>
                                </div>
                                <p class="billing-info monthly-billing">Billed monthly</p>
                                <p class="billing-info annual-billing">Billed annually at $564/user</p>
                            </div>
                            <div class="plan-features">
                                <ul class="features-list">
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Unlimited team members</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>50 GB storage per user</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Advanced analytics and reporting</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Priority email and chat support</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Custom integrations</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>API access</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="plan-action">
                                <a href="#" class="btn-plan">Start Free Trial</a>
                                <p class="trial-info">14-day free trial, no credit card required</p>
                            </div>
                        </div>
                    </div><!-- End Professional Plan -->

                    <!-- Enterprise Plan -->
                    <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="250">
                        <div class="pricing-card">
                            <div class="plan-header">
                                <h3 class="plan-name">Enterprise</h3>
                                <p class="plan-subtitle">For large organizations</p>
                            </div>
                            <div class="plan-pricing">
                                <div class="price-wrapper custom">
                                    <span class="custom-text">Custom Pricing</span>
                                </div>
                                <p class="billing-info">Tailored to your needs</p>
                            </div>
                            <div class="plan-features">
                                <ul class="features-list">
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Everything in Professional</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Unlimited storage</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Dedicated account manager</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>24/7 phone support</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Advanced security and compliance</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>
                                        <span>Custom SLA and contracts</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="plan-action">
                                <a href="#" class="btn-plan">Contact Sales</a>
                                <p class="trial-info">Schedule a consultation with our team</p>
                            </div>
                        </div>
                    </div><!-- End Enterprise Plan -->

                </div>

                <div class="pricing-footer aos-init" data-aos="fade-up" data-aos-delay="300">
                    <p class="footer-text">All plans include: SSL security, 99.9% uptime guarantee, data backup, and GDPR compliance</p>
                    <div class="footer-links">
                        <a href="#">Compare all features</a>
                        <span class="divider">|</span>
                        <a href="#">View FAQ</a>
                        <span class="divider">|</span>
                        <a href="#">Contact Support</a>
                    </div>
                </div>

            </div>

        </section>

    </main>
<?php $this->endSection() ?>