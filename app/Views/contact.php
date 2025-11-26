<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <main class="main">
        <section id="contact" class="contact section mt-5">
            <!-- Section Title -->
            <div class="container section-title aos-init aos-animate mt-5" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4">
                    <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                        <div class="quick-contact-wrapper">
                            <div class="contact-card">
                                <div class="icon-wrapper">
                                    <i class="bi bi-envelope-paper"></i>
                                </div>
                                <h4>Email Support</h4>
                                <p class="contact-detail">support@example.com</p>
                                <span class="availability">Usually replies in 2 hours</span>
                            </div>

                            <div class="contact-card">
                                <div class="icon-wrapper">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <h4>Live Chat</h4>
                                <p class="contact-detail">Chat with our team</p>
                                <span class="availability">Available Mon-Fri, 9AM-6PM</span>
                            </div>

                            <div class="contact-card">
                                <div class="icon-wrapper">
                                    <i class="bi bi-pin-map"></i>
                                </div>
                                <h4>Our Location</h4>
                                <p class="contact-detail">2847 Market Street<br>San Francisco, CA 94114</p>
                                <span class="availability">Open for visits</span>
                            </div>

                            <div class="trust-indicators">
                                <div class="indicator-item">
                                    <div class="indicator-icon">
                                        <i class="bi bi-shield-check"></i>
                                    </div>
                                    <div class="indicator-text">
                                        <strong>100% Secure</strong>
                                        <span>Your data is protected</span>
                                    </div>
                                </div>
                                <div class="indicator-item">
                                    <div class="indicator-icon">
                                        <i class="bi bi-clock-history"></i>
                                    </div>
                                    <div class="indicator-text">
                                        <strong>Quick Response</strong>
                                        <span>We reply within hours</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <div class="main-form-container">
                            <div class="form-intro">
                                <div class="intro-badge">
                                    <i class="bi bi-stars"></i>
                                    <span>Get Started Today</span>
                                </div>
                                <h2>Send us a message</h2>
                                <p>Consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation.</p>
                            </div>

                            <form action="forms/contact.php" method="post" class="php-email-form modern-form">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="name" placeholder="Full Name" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                                    </div>
                                </div>

                                <div class="row g-3 mt-1">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone Number (Optional)">
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select" name="subject" required="">
                                            <option value="">Select Inquiry Type</option>
                                            <option value="general">General Inquiry</option>
                                            <option value="support">Technical Support</option>
                                            <option value="sales">Sales Question</option>
                                            <option value="partnership">Partnership</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <textarea class="form-control" name="message" placeholder="Tell us more about your needs" rows="6" required=""></textarea>
                                </div>

                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>

                                <button type="submit" class="btn-submit">
                                    <span>Send Message</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>

                                <div class="form-footer-note">
                                    <i class="bi bi-info-circle"></i>
                                    <span>We typically respond within 24 hours on business days</span>
                                </div>
                            </form>

                            <div class="social-proof">
                                <div class="proof-stats">
                                    <div class="stat-box">
                                        <div class="stat-value">4.9/5</div>
                                        <div class="stat-label">Customer Rating</div>
                                    </div>
                                    <div class="stat-box">
                                        <div class="stat-value">12k+</div>
                                        <div class="stat-label">Happy Customers</div>
                                    </div>
                                    <div class="stat-box">
                                        <div class="stat-value">24/7</div>
                                        <div class="stat-label">Support Available</div>
                                    </div>
                                </div>

                                <div class="social-channels">
                                    <p>Or reach us on social media</p>
                                    <div class="channel-links">
                                        <a href="#" class="channel-link aos-init aos-animate" data-aos="zoom-in" data-aos-delay="250">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                        <a href="#" class="channel-link aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                                            <i class="bi bi-twitter-x"></i>
                                        </a>
                                        <a href="#" class="channel-link aos-init aos-animate" data-aos="zoom-in" data-aos-delay="350">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                        <a href="#" class="channel-link aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
                                            <i class="bi bi-linkedin"></i>
                                        </a>
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