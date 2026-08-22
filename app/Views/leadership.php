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
                        <?php
                        $keys  = ['nat', 'jate'];
                        $links = [
                            'nat'  => [
                                'globe'     => 'https://lee.ratinan.com',
                                'linkedin' => 'https://www.linkedin.com/in/ratinanlee',
                            ],
                            'jate' => [
                                'globe'     => 'https://www.example.com'
                            ]
                        ];
                        ?>
                        <?php foreach ($keys as $key) : ?>
                        <div class="swiper-slide">
                            <div class="team-member">
                                <div class="member-image">
                                    <img src="<?= base_url('assets/img/leadership/' . $key . '.webp') ?>" class="img-fluid" alt="<?= lang('Leadership.' . $key . '.name') ?>" loading="lazy">
                                    <div class="member-social">
                                        <?php foreach ($links[$key] as $icon => $link) : ?>
                                            <a href="<?= $link ?>" target="_blank"><i class="bi bi-<?= $icon ?>"></i></a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="member-content">
                                    <h3><?= lang('Leadership.' . $key . '.name') ?></h3>
                                    <span><?= lang('Leadership.' . $key . '.title') ?></span>
                                    <p><?= lang('Leadership.' . $key . '.paragraph') ?></p>
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