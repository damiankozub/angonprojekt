<?php
/*
 * Template Name: < Homepage >
 */
get_header(); ?>
    <div class="hero dark-backdrop">
        <?php $hero_bg = get_field('hero_bg');
        if ($hero_bg):?>
            <img class="img-abs-center"
                 src="<?= $hero_bg['url']; ?>" alt="<?= $hero_bg['alt']; ?>">
        <?php endif; ?>
        <div class="container" style="position:relative; z-index: 9;">
            <?php if (get_field('hero_title')): ?>
                <h1 class="hero-title"><?php the_field('hero_title'); ?></h1>
            <?php endif; ?>
            <?php if (get_field('hero_content')): ?>
                <p class="hero-content"><?php the_field('hero_content'); ?></p>
            <?php endif; ?>
            <div class="hero-btns">
                <?php if (get_field('hero_btn_text_1') && get_field('hero_btn_link_1')): ?>
                    <a href="<?php the_field('hero_btn_link_1'); ?>"
                       class="link-btn link-btn-green"><?php the_field('hero_btn_text_1'); ?></a>
                <?php endif; ?>
                <?php if (get_field('hero_btn_text_2') && get_field('hero_btn_link_2')): ?>
                    <a href="<?php the_field('hero_btn_link_2'); ?>"
                       class="link-btn"><?php the_field('hero_btn_text_2'); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <?php $hero_banner = get_field('hero_banner');
        if ($hero_banner):?>
            <div class="hero-banner-holder">
                <div class="container">
                    <div class="banner">
                        <img class="img-abs-center"
                             src="<?= $hero_banner['url']; ?>" alt="<?= $hero_banner['alt']; ?>">
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <section>
        <div class="container">
            <?php if (get_field('sec1_title')): ?>
                <h3 class="section-title"><?php the_field('sec1_title'); ?></h3>
            <?php endif; ?>
            <?php if (get_field('sec1_desc')): ?>
                <h1 class="section-desc"><?php the_field('sec1_desc'); ?></h1>
            <?php endif; ?>
            <div class="offer">
                <div class="row">
                    <?php for ($i = 1; $i <= 4; $i++): ?>
                        <?php if (have_rows('sec1_el_' . $i)): ?>
                            <?php while (have_rows('sec1_el_' . $i)): the_row(); ?>
                                <div class="col-md-6 col-lg-3">
                                    <div class="offer-tile">
                                        <?php $icon = get_sub_field('icon');
                                        if ($icon):?>
                                            <div class="offer-tile-icon-holder">
                                                <img class="offer-tile-icon"
                                                     src="<?= $icon['url']; ?>">
                                            </div>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('title')): ?>
                                            <h5 class="offer-tile-title"><?php the_sub_field('title'); ?></h5>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('desc')): ?>
                                            <p class="offer-tile-content"><?php the_sub_field('desc'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <?php if (get_field('sec2_title')): ?>
                <h3 class="section-title"><?php the_field('sec2_title'); ?></h3>
            <?php endif; ?>
            <?php if (get_field('sec2_desc')): ?>
                <h1 class="section-desc"><?php the_field('sec2_desc'); ?></h1>
            <?php endif; ?>
            <?php if (get_field('sec2_text')): ?>
                <p class="text-center"><?php the_field('sec2_text'); ?></p>
            <?php endif; ?>
            <div class="pricing">
                <div class="row">
                    <?php for ($i = 1; $i <= 3; $i++): ?>
                        <?php if (have_rows('offer_' . $i)): ?>
                            <?php while (have_rows('offer_' . $i)): the_row(); ?>
                                <div class="col-lg-4">
                                    <div class="pricing-el <?php if ($i == 2) echo "pricing-el-green"; ?>">
                                        <?php if (get_sub_field('title')): ?>
                                            <h3 class="pricing-el-title"><?php the_sub_field('title'); ?></h3>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('price')): ?>
                                            <h5 class="pricing-el-price"><?php the_sub_field('price'); ?>
                                                <span>/Month</span></h5>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('desc')): ?>
                                            <p><?php the_sub_field('desc'); ?></p>
                                        <?php endif; ?>
                                        <div class="pricing-el-offer">
                                            <?php for ($e = 0; $e < 10; $e++): ?>
                                                <?php if (get_sub_field('offer_el')): ?>
                                                    <div class="pricing-el-offer-item">
                                                        <?php if ($i == 2): ?>
                                                            <i class="fa-solid fa-circle-check"></i>
                                                        <?php else: ?>
                                                            <i class="fa-regular fa-circle-check"></i>
                                                        <?php endif; ?>
                                                        <?php the_sub_field('offer_el'); ?>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endfor; ?>
                                        </div>
                                        <?php if (get_sub_field('btn_text') && get_sub_field('btn_link')): ?>
                                            <a href="<?php the_sub_field('btn_link'); ?>"
                                               class="link-btn <?php if ($i != 2) echo "link-btn-blue"; ?>">
                                                <?php the_sub_field('btn_text'); ?>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="banner dark-backdrop">
                <?php $banner_bg = get_field('banner_bg');
                if ($banner_bg):?>
                    <img class="img-abs-center"
                         src="<?= $banner_bg['url']; ?>" alt="<?= $banner_bg['alt']; ?>">
                <?php endif; ?>
                <div class="banner-content">
                    <?php if (get_field('banner_title')): ?>
                        <h1 class="section-desc"><?php the_field('banner_title'); ?></h1>
                    <?php endif; ?>
                    <?php if (get_field('banner_content')): ?>
                        <p><?php the_field('banner_content'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('banner_btn_text') && get_field('banner_btn_link')): ?>
                        <a href="<?php the_field('banner_btn_link'); ?>"
                           class="link-btn"><?php the_field('banner_btn_text'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>