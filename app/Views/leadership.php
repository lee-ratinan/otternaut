<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <main class="main">
        <section id="pricing" class="pricing section">
            <div class="container section-title aos-init aos-animate pt-5 mt-5">
                <h2><?= lang('System.pages.leadership.title') ?></h2>
                <p><?= lang('Leadership.subtitle') ?></p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-6">
                        <?php $keys = ['nat']; ?>
                        <?php foreach ($keys as $key) : ?>
                        <div class="py-5">
                            <img class="img-thumbnail mb-5" src="<?= base_url('assets/img/leadership/' . $key . '.png') ?>" alt="<?= lang('Leadership.' . $key . '.name') ?>" style="max-width:200px" />
                            <h3 class="mb-0"><?= lang('Leadership.' . $key . '.name') ?></h3>
                            <h4 class="mb-5" style="font-weight:200"><?= lang('Leadership.' . $key . '.title') ?></h4>
                            <p class="mb-5"><?= lang('Leadership.' . $key . '.paragraph') ?></p>
                            <p class="text-center">* * *</p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->endSection() ?>