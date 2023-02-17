<?php wp_footer(); ?>
<footer>
    <?php
    $menu = wp_get_nav_menu_items('footer_menu');
    $menuToShow = [];
    foreach ($menu as $menu_item) {
        if ($menu_item->menu_item_parent == 0) {
            $menuToShow[$menu_item->ID]['title'] = $menu_item->title;
        } else {
            $menuToShow[$menu_item->menu_item_parent]['items'][$menu_item->ID]['name'] = $menu_item->title;
            $menuToShow[$menu_item->menu_item_parent]['items'][$menu_item->ID]['url'] = $menu_item->url;
        }
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-column">
                    <h3 class="footer-title"><?php bloginfo('name'); ?></h3>
                    <div class="footer-items">
                        <?php if (get_field('mail', 10)): ?>
                            <div class="footer-item-holder">
                                <a href="mailto:<?php the_field('mail', 10); ?>" class="footer-item">
                                    <?php the_field('mail', 10); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('phone', 10)): ?>
                            <div class="footer-item-holder">
                                <a href="tel:<?php the_field('phone', 10); ?>"
                                   class="footer-item"><?php the_field('phone', 10); ?></a>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('address', 10)): ?>
                            <div class="footer-item-holder">
                                <p class="footer-item"><?php the_field('address', 10); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php foreach ($menuToShow as $column): ?>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-column">
                        <h3 class="footer-title"><?= $column['title']; ?></h3>
                        <div class="footer-items">
                            <?php foreach ($column['items'] as $item): ?>
                                <div class="footer-item-holder">
                                    <a href="<?= $item['url'] ?>" class="footer-item">
                                        <?= $item['name']; ?>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="copyrights">
        Copyright 2021 Allright reserved / Dimo.ui
    </div>
</footer>

<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/fontawesome.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/fa-all.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/app.js"></script>

</body>
</html>
