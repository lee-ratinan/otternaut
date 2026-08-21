<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <main class="main">
        <section id="team" class="team section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="team-header" data-aos="fade-up" data-aos-delay="200">
                    <div class="row align-items-center mt-5 pt-5">
                        <div class="col-lg-6">
                            <h2><?= lang('System.pages.leadership.title') ?></h2>
                            <p><?= lang('Leadership.subtitle') ?></p>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-lg-end">
                            <div class="team-controls">
                                <button class="team-control-btn team-prev"><i class="bi bi-chevron-left"></i></button>
                                <button class="team-control-btn team-next"><i class="bi bi-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-slider swiper init-swiper" data-aos="fade-up" data-aos-delay="300">
                    <script type="application/json" class="swiper-config">{"loop":true,"speed":700,"autoplay":{"delay":5000},"slidesPerView":1,"spaceBetween":30,"navigation":{"nextEl":".team-next","prevEl":".team-prev"},"breakpoints":{"576":{"slidesPerView":2,"spaceBetween":20},"992":{"slidesPerView":3,"spaceBetween":30},"1200":{"slidesPerView":4,"spaceBetween":30}}}</script>
                    <div class="swiper-wrapper">
                        <?php $keys = ['nat', 'jate']; ?>
                        <?php foreach ($keys as $key) : ?>
                        <div class="swiper-slide">
                            <div class="team-member">
                                <div class="member-image">
                                    <img src="<?= base_url('assets/img/leadership/' . $key . '.webp') ?>" class="img-fluid" alt="<?= lang('Leadership.' . $key . '.name') ?>" loading="lazy">
                                    <div class="member-social d-none">
                                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-content">
                                    <h3><?= lang('Leadership.' . $key . '.name') ?></h3>
                                    <span><?= lang('Leadership.' . $key . '.title') ?></span>
                                    <p class="d-none">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->endSection() ?>