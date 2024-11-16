<div class="swiper-wrapper smaller_wishlist">
    <?php
    // Custom query to fetch the latest products
    $args = array(
        'post_type' => 'product',
        'posts_per_page' => 5, // Number of products to display
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $loop = new WP_Query($args);

    while ($loop->have_posts()):
        $loop->the_post();
        global $product;
        $product_id = $product->get_id();
        $product_image = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');
        $product_price = $product->get_price_html();
        $product_gallery = $product->get_gallery_image_ids();
        $second_image = isset($product_gallery[0]) ? wp_get_attachment_image_src($product_gallery[0], 'single-post-thumbnail') : '';
        $product_title = $product->get_title();
        $product_link = get_permalink($product_id);
        ?>
        <a href="<?php echo esc_url($product_link); ?>"
            class="swiper-slide t-frame-51ttbransoletka-energetyczna-mindfulness-1">
            <div class="product-image-container">
                <img src="<?php echo $product_image[0]; ?>" class="frame-70" data-image="<?php echo $product_image[0]; ?>">
                <?php if ($second_image): ?>
                    <div class="product-image-zoom" style="background-image: url('<?php echo $second_image[0]; ?>');"></div>
                <?php endif; ?>
            </div>
            <div class="wishlist" data-product-id="<?php echo $product_id; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/like.svg" class="icon-default" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hover_on_icon.svg" class="icon-hover" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/like_after_click.svg" class="icon-active" />
            </div>
            <div class="product-link">
                <div class="tt-bransoletka-energetyczna-mindfulness-1">
                    <div class="t-bransoletka-energetyczna-mindfulness-1">
                        <div class="bransoletka-energetyczna-mindfulness-1">
                            <span>
                                <p><?php echo $product_title; ?></p>
                                <p>Mindfulness</p>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="frame-76">
                    <div class="z-28"><?php echo $product_price; ?></div>
                </div>
            </div>
        </a>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</div>
<img src="<?php echo get_template_directory_uri(); ?>/assets/arrow_slider.png" class="fixed-arrow" />