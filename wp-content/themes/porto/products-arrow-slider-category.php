<div class="swiper-wrapper smaller_wishlist">
    <?php
    // Custom query to fetch the product categories
    $args = array(
        'taxonomy' => 'product_cat',
        'orderby' => 'name',
        'order' => 'ASC',
        'hide_empty' => false,
        'number' => 3 // Number of categories to display
    );
    $product_categories = get_terms($args);

    foreach ($product_categories as $category):
        $category_link = get_term_link($category);
        $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
        $image_url = wp_get_attachment_url($thumbnail_id);
        ?>
        <div href="<?php echo esc_url($category_link); ?>" class="swiper-slide mobile_t-hero-frame-51hero">
            <div class="product-image-container">
                <img src="<?php echo $product_image[0]; ?>" class="frame-46" data-image="<?php echo $product_image[0]; ?>">
                <?php if ($second_image): ?>
                    <div class="product-image-zoom" style="background-image: url('<?php echo $second_image[0]; ?>');"></div>
                <?php endif; ?>
            </div>
            <div>
                <div class="mobile_hero-12">
                    <div class="mobile_nowo-ci-2"><?php echo esc_html($category->name); ?></div>
                    <div class="mobile_ttt-ju-od-55tarrow_forward_24dp_5f-6368_fill-0_wght-400_grad-0_opsz">
                        <div class="mobile_tt-ju-od-55tarrow_forward_24dp_5f-6368_fill-0_wght-400_grad-0_opsz">
                            <div class="mobile_t-ju-od-5">
                                <div class="mobile_ju-od-5">już od</div>
                            </div>
                            <div class="mobile_component-8"><?php echo $category->count; ?> products</div>
                            <div class="mobile_t-arrow_forward_24dp_5f-6368_fill-0_wght-400_grad-0_opsz-11">
                                <object data="<?php echo get_template_directory_uri(); ?>/assets/arrow_white_right.svg"
                                    class="mobile_arrow_forward_24dp_5f6368_fill0_wght-400_grad0_opsz-11"></object>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<img src="<?php echo get_template_directory_uri(); ?>/assets/arrow_slider.png" class="fixed-arrow" />