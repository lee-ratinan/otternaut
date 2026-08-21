<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <main class="main">
        <section id="pricing" class="pricing section">
            <div class="container section-title aos-init aos-animate pt-5 mt-5">
                <h2><?= lang('System.pages.about-us.title') ?></h2>
                <p><?= lang('AboutUs.subtitle') ?></p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        About Us
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->endSection() ?>