<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
<?php
$structure = [
    'southeast-asia' => [
        'id' => [
            'label' => 'Indonesia',
            'lang'  => []
        ],
        'my' => [
            'label' => 'Malaysia',
            'lang'  => []
        ],
        'sg' => [
            'label' => 'Singapore',
            'lang'  => []
        ],
        'th' => [
            'label' => 'Thailand &middot; ประเทศไทย',
            'lang'  => [
                'en' => 'English',
                'th' => 'ไทย'
            ]
        ]
    ],
    'east-asia'      => [
        'jp' => [
            'label' => 'Japan &middot; 日本',
            'lang'  => []
        ],
        'tw' => [
            'label' => 'Taiwan &middot; 台灣',
            'lang'  => []
        ]
    ]
];
?>
    <main class="main">
        <section id="pricing" class="pricing section">
            <div class="container section-title aos-init aos-animate pt-5 mt-5">
                <h2><?= lang('System.pages.choose-region.title') ?></h2>
                <p><?= lang('ChooseRegion.subtitle') ?></p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <?php foreach ($structure as $region_key => $region) : ?>
                            <h3><?= lang('ChooseRegion.regions.' . $region_key) ?></h3>
                            <?php foreach ($region as $key => $value) : ?>
                                <p>
                                    <span class="fi fi-<?= $key ?>"></span> &nbsp; <?= $value['label'] ?>
                                    <?php if (empty($value['lang'])) : ?>
                                        <em class="small">- - Coming soon</em>
                                    <?php else: ?>
                                        <?php foreach ($value['lang'] as $lang_code => $lang_name) : ?>
                                            <a class="px-3" href="<?= base_url($lang_code . '-' . $key) ?>"><?= $lang_name ?></a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </p>
                            <?php endforeach; ?>
                            <br>
                        <?php endforeach; ?>
                        <hr>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->endSection() ?>