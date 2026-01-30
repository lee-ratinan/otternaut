<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <main class="main">
        <section id="pricing" class="pricing section">
            <div class="container section-title aos-init aos-animate pt-5 mt-5">
                <h2><?= lang('System.pages.choose-region.title') ?></h2>
                <p><?= lang('ChooseRegion.subtitle') ?></p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-12">
                        <h3><?= lang('ChooseRegion.regions.southeast-asia') ?></h3>
                        <ul class="ps-0" style="list-style-type: none;">
                            <li><a href="<?= base_url('en-th') ?>">Thailand</a></li>
                            <li><a href="<?= base_url('th-th') ?>">ไทย</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->endSection() ?>