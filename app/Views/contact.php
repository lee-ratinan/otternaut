<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <main class="main">
        <section id="contact" class="contact section">
            <div class="container section-title aos-init aos-animate pt-5 mt-5" data-aos="fade-up">
                <h2><?= lang('System.pages.contact.title') ?></h2>
                <p><?= lang('Contact.subtitle') ?></p>
            </div>
            <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-4">
                    <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="150">
                        <div class="quick-contact-wrapper">
                            <div class="contact-card">
                                <div class="icon-wrapper">
                                    <i class="bi bi-envelope-paper"></i>
                                </div>
                                <h4><?= lang('Contact.email.title') ?></h4>
                                <p class="contact-detail"><a href="mailto:<?= getenv('CONTACT_EMAIL') ?>"><?= getenv('CONTACT_EMAIL') ?></a></p>
                                <span class="availability d-none"><?= lang('Contact.email.detail') ?></span>
                            </div>
                            <div class="contact-card">
                                <div class="icon-wrapper">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <h4><?= lang('Contact.live-chat.title') ?></h4>
                                <p class="contact-detail"><?= lang('Contact.live-chat.app') ?></p>
                                <span class="availability d-none"><?= lang('Contact.live-chat.detail') ?></span>
                            </div>
                            <div class="contact-card">
                                <div class="icon-wrapper">
                                    <i class="bi bi-pin-map"></i>
                                </div>
                                <h4><?= lang('Contact.location.title') ?></h4>
                                <p class="contact-detail"><?= lang('Contact.location.bangkok') ?></p>
                                <span class="availability d-none"><?= lang('Contact.location.detail') ?></span>
                            </div>
                            <div class="trust-indicators">
                                <div class="indicator-item">
                                    <div class="indicator-icon">
                                        <i class="bi bi-shield-check"></i>
                                    </div>
                                    <div class="indicator-text">
                                        <strong><?= lang('Contact.messages.secured.title') ?></strong>
                                        <span><?= lang('Contact.messages.secured.detail') ?></span>
                                    </div>
                                </div>
                                <div class="indicator-item">
                                    <div class="indicator-icon">
                                        <i class="bi bi-clock-history"></i>
                                    </div>
                                    <div class="indicator-text">
                                        <strong><?= lang('Contact.messages.quick.title') ?></strong>
                                        <span><?= lang('Contact.messages.quick.detail') ?></span>
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
                                    <span><?= lang('Contact.form.label') ?></span>
                                </div>
                                <h2><?= lang('Contact.form.title') ?></h2>
                                <p><?= lang('Contact.form.subtitle') ?></p>
                            </div>
                            <form action="<?= base_url('contact-submit') ?>" method="post" class="php-email-form modern-form">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="d-none" for="name"><?= lang('Contact.form.fields.full-name') ?></label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="<?= lang('Contact.form.fields.full-name') ?>" required="">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="d-none" for="email"><?= lang('Contact.form.fields.email') ?></label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="<?= lang('Contact.form.fields.email') ?>" required="">
                                    </div>
                                </div>
                                <div class="row g-3 mt-1">
                                    <div class="col-md-6">
                                        <label class="d-none" for="phone"><?= lang('Contact.form.fields.phone') ?></label>
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="<?= lang('Contact.form.fields.phone') ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="d-none" for="subject"><?= lang('Contact.form.fields.subject.label') ?></label>
                                        <select class="form-select" name="subject" id="subject" required="">
                                            <option value=""><?= lang('Contact.form.fields.subject.please-select') ?></option>
                                            <option value="general"><?= lang('Contact.form.fields.subject.general') ?></option>
                                            <option value="technical-support"><?= lang('Contact.form.fields.subject.technical-support') ?></option>
                                            <option value="sales"><?= lang('Contact.form.fields.subject.sales') ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <label class="d-none" for="message"><?= lang('Contact.form.fields.message') ?></label>
                                    <textarea class="form-control" name="message" id="message" placeholder="<?= lang('Contact.form.fields.message-tell-us-more') ?>" rows="6" required=""></textarea>
                                </div>
                                <input type="hidden" name="locale" value="<?= $locale ?>">
                                <div class="my-3">
                                    <div class="loading"><?= lang('Contact.form.loading') ?></div>
                                    <div class="error-message"></div>
                                    <div class="sent-message"><?= lang('Contact.form.sent') ?></div>
                                </div>
                                <button type="submit" class="btn-submit bg-secondary">
                                    <span><?= lang('Contact.form.send-btn') ?></span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                                <div class="form-footer-note">
                                    <i class="bi bi-info-circle"></i>
                                    <span><?= lang('Contact.form.est-respond-time') ?></span>
                                </div>
                            </form>
                            <div class="social-proof">
                                <div class="proof-stats d-none">
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
                                    <p><?= lang('Contact.social-media') ?></p>
                                    <div class="channel-links">
                                        <a href="<?= getenv('SOCIAL_FACEBOOK') ?>" class="channel-link aos-init aos-animate" data-aos="zoom-in" data-aos-delay="250">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                        <a href="<?= getenv('SOCIAL_INSTAGRAM') ?>" class="channel-link aos-init aos-animate" data-aos="zoom-in" data-aos-delay="350">
                                            <i class="bi bi-instagram"></i>
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