<div class="swiper-wrapper">
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
        $product_gallery = $product->get_gallery_image_ids();
        $second_image = isset($product_gallery[0]) ? wp_get_attachment_image_src($product_gallery[0], 'single-post-thumbnail') : '';
        $product_image = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'single-post-thumbnail');
        $product_price = $product->get_price_html();
        $product_title = $product->get_title();
        $product_link = get_permalink($product_id);
        ?>
        <a href="<?php echo esc_url($product_link); ?>" class="swiper-slide mobile_hero-6 mobile_swiper_hero-6"
            style="background-image: url('<?php echo $product_image[0]; ?>');">
            <div class="wishlist" data-product-id="<?php echo $product_id; ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/like.svg" class="icon-default" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hover_on_icon.svg" class="icon-hover" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/like_after_click.svg" class="icon-active" />
            </div>
            <div class="product-image-container">
                <div class="product-image" style="background-image: url('<?php echo $product_image[0]; ?>');"></div>
                <?php if ($second_image): ?>
                    <div class="product-image-zoom" style="background-image: url('<?php echo $second_image[0]; ?>');"></div>
                <?php endif; ?>
            </div>
            <div class="product-link">
                <div class="content-mobile">
                    <div class="mobile_pier-cionek-wska-obr-czka">
                        <p><?php echo $product_title; ?></p>
                    </div>
                    <div class="mobile_t-frame-5">
                        <div class="mobile_frame-40">
                            <div class="mobile_z-10"><?php echo $product_price; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</div>