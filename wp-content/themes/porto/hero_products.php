<div class="swiper-wrapper">
    <?php
    // Define the categories
    $categories = array('bransoletki', 'pierscionki', 'naszyjniki');

    foreach ($categories as $category) {
        // Custom query to fetch the latest product for each category
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 1, // Number of products to display
            'orderby' => 'date',
            'order' => 'DESC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'name',
                    'terms' => $category
                )
            )
        );
        $loop = new WP_Query($args);

        if ($loop->have_posts()):
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
                <a href="<?php echo esc_url($product_link); ?>" style="background-image: url('<?php echo $product_image[0]; ?>');"
                    class="swiper-slide herooo mobile_hero-<?php echo $loop->current_post + 2; ?> hero-<?php echo $loop->current_post + 2; ?>">
                    <div class="product-image-container">
                        <div class="product-image" style="background-image: url('<?php echo $product_image[0]; ?>');"></div>
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
                        <button class="hover">
                            <div class="product-title"><?php echo $product_title; ?></div>
                            <div class="frame-26">
                                <div class="z-6"><?php echo $product_price; ?></div>
                            </div>
                        </button>
                    </div>
                </a>
            <?php endwhile;
            wp_reset_postdata();
        endif;
    }
    ?>
</div>