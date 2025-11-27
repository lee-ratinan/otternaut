<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <main class="main">
        <section id="pricing" class="pricing section mt-5">
            <div class="container section-title aos-init aos-animate mt-5">
                <h2><?= lang('System.pages.pricing.title') ?></h2>
                <p><?= lang('Pricing.subtitle') ?></p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <?php $delay = 100; ?>
                    <?php foreach ($packages as $package) : ?>
                        <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
                            <?php $delay += 100; ?>
                            <div class="pricing-card featured">
                                <?php if ($package['popular']) : ?>
                                    <div class="popular-badge"><?= lang('Pricing.popular') ?></div>
                                <?php endif; ?>
                                <div class="plan-header">
                                    <h3 class="plan-name"><?= $package['name'] ?></h3>
                                    <p class="plan-subtitle"><?= $package['desc'] ?></p>
                                </div>
                                <div class="plan-pricing">
                                    <?php if ('th' == $country) : ?>
                                        <!-- FOR COUNTRIES WHERE SYMBOL IS ON THE LEFT -->
                                        <div class="price-wrapper">
                                            <span class="currency"><?= get_currency_symbol($country) ?></span>
                                            <span class="amount"><?= number_format($package['prices'][$country][0]) ?></span>
                                            <span class="period"><?= lang('Pricing.per-month') ?></span>
                                        </div>
                                        <div class="price-wrapper">
                                            <span class="currency"><?= get_currency_symbol($country) ?></span>
                                            <span class="amount"><?= number_format($package['prices'][$country][1]) ?></span>
                                            <span class="period"><?= lang('Pricing.per-year') ?></span>
                                        </div>
                                    <?php endif; ?>
                                    <?php
                                    $per_month_in_a_year = $package['prices'][$country][0] * 12;
                                    $delta               = $per_month_in_a_year - $package['prices'][$country][1];
                                    $saved               = number_format($delta / $per_month_in_a_year * 100, 1) . '%';
                                    ?>
                                    <p class="billing-info"><?= lang('Pricing.yearly-saved', [$saved]) ?></p>
                                </div>
                                <div class="plan-features">
                                    <ul class="features-list">
                                        <li><i class="bi bi-people-fill"></i><span><?= lang('Pricing.features.max-users', [$package['max_users']]) ?></span></li>
                                        <li><i class="bi bi-stars"></i><span><?= lang('Pricing.features.max-services', [$package['max_services']]) ?></span></li>
                                        <li><i class="bi bi-box-seam-fill"></i><span><?= lang('Pricing.features.max-products', [$package['max_products']]) ?></span></li>
                                        <?php foreach ($package['features'] as $feature) : ?>
                                            <li><?= $feature ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="plan-action">
                                    <a href="#" class="btn-plan"><?= lang('Pricing.free-trial-cta') ?></a>
                                    <p class="trial-info"><?= lang('Pricing.free-trial-msg') ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
<?php $this->endSection() ?>