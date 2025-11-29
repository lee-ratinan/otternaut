<?php $this->extend('_layout'); ?>
<?= $this->section('content') ?>
    <main class="main">
        <!-- Content Section Section -->
        <section id="content-section" class="starter-section section mt-5">
            <div class="container aos-init aos-animate mt-5" data-aos="fade-up">
                <div class="row">
                    <div class="col col-lg-10 col-xl-8">
                        <h1><?= lang('System.pages.terms-and-conditions.title') ?></h1>
                        <div id="source" class="d-none"><?php include_once 'docs/generic-terms-' . $language . '.md'; ?></div>
                        <div id="markdown"></div>
                    </div>
                </div>
            </div>
        </section><!-- /Content Section Section -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script>
        let source = document.getElementById('source').innerHTML;
        document.getElementById('markdown').innerHTML = marked.parse(source);
    </script>
<?php $this->endSection() ?>