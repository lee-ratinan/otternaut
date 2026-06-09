<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
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
                                        <em class="small"><?= lang('ChooseRegion.coming-soon') ?></em>
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
                        <div class="d-none">
                            <h5>Notes</h5>
                            <p>Singapore: Very friendly for cross-border services. You don't need to register for GST (Goods and Services Tax) unless your global turnover exceeds S$1 million and your taxable supplies in Singapore exceed S$100,000.</p>
                            <p>Malaysia: You can provide services remotely. However, once your sales to Malaysian consumers exceed RM 500,000 per year, you are technically required to register for Service Tax as a foreign service provider.</p>
                            <p>Taiwan: Highly digitalized, but unique. While you can provide services, many Taiwanese customers prefer paying via CVS (Convenience Store) payments or local bank transfers. Without a company, you'll likely rely on credit cards or PayPal, which might limit your conversion rate.</p>
                            <p>Japan: You can offer services from Thailand, but Japan's "Consumption Tax" (JCT) rules apply to B2C digital services. If your sales to Japanese residents exceed ¥10 million, you must register.</p>
                            <p>Strategy for Expansion</p>
                            <p>To keep things "lean" while you're still unregistered, I recommend focusing on a two-step approach:</p>
                            <p>Step 1: The "Digital Nomad" Setup</p>
                            <p>Use international payment aggregators that handle the tax and compliance for you.</p>
                            <p>Merchant of Record (MoR): Services like Paddle or LemonSqueezy act as the "seller" on your behalf. They handle the VAT/GST in Singapore, Japan, and Indonesia so you don't have to register as an individual in those countries. This is the most efficient way to avoid the "efficiency trap" of trying to manage eight different tax systems yourself.</p>
                            <p>Step 2: Priority List</p>
                            <p>Based on your base in Thailand, here is the recommended order of expansion:</p>
                            <ul>
                                <li>Singapore: Lowest barrier for English/Tech services.</li>
                                <li>Malaysia: Proximity and similar digital behavior to Thailand.</li>
                                <li>Japan/Taiwan: High purchasing power, but requires localized UI/UX.</li>
                                <li>Vietnam/Indonesia: High growth, but only once you have an MoR to handle the complex tax filings.</li>
                            </ul>
                            <p>A note on Singapore: While it is often praised for efficiency, remember that for a solo founder, the "efficiency" is mostly in the lack of red tape for small volumes. Once you scale, the compliance costs (like the 15% Global Minimum Tax or local audits) can become a significant administrative burden.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php $this->endSection() ?>