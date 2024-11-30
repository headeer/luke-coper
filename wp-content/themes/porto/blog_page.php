<?php
/*
Template Name: Blog
*/

get_header(); ?>
<div class="blog_page_content">

    <div class="_ desktop_app">
        <div class="wrapper">
            <div class="frame">
                <div class="t-hero-hero-hero-2">
                    <?php
                    // Custom query to fetch the recent blog posts
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 10, // Number of posts to display
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );
                    $recent_posts = new WP_Query($args);

                    if ($recent_posts->have_posts()):
                        while ($recent_posts->have_posts()):
                            $recent_posts->the_post();
                            $post_link = get_permalink();
                            $post_title = get_the_title();
                            $post_excerpt = get_the_excerpt();
                            $post_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            ?>
                            <a href="<?php echo esc_url($post_link); ?>" target="_blank" class="hero-15">
                                <div class="background-image"
                                    style="background-image: url('<?php echo esc_url($post_image); ?>');">
                                </div>
                                <div class="mied-ijej-wp-yw-na-energi-yciow-jak-ona-dzia-ana-cia-oiumys">
                                    <p><?php echo esc_html($post_title); ?></p>
                                </div>
                                <div
                                    class="t-czy-wiesz-emied-od-wiek-wby-auywana-do-wzmacniania-energii-yciowej-dowiedz-si-jak-noszenie-miedzianej-bi-uterii-mo-ewspiera-twoje-zdrowie-witalno-irwnowag-wewn-trzn">
                                    <div
                                        class="czy-wiesz-emied-od-wiek-wby-auywana-do-wzmacniania-energii-yciowej-dowiedz-si-jak-noszenie-miedzianej-bi-uterii-mo-ewspiera-twoje-zdrowie-witalno-irwnowag-wewn-trzn">
                                        <p><?php echo esc_html($post_excerpt); ?></p>
                                    </div>
                                </div>
                                <div class="frame-83">
                                    <button class="czytaj-wi-cej-1">czytaj więcej</button>
                                </div>
                            </a>
                        <?php endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <p><?php esc_html_e('No recent posts found.', 'text-domain'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div id="mobile_app">
        <div class="mobile__index_luke_copper_mobile">
            <div class="mobile_wrapper">
                <div class="mobile_frame swiper mobile_blog">
                    <div class="swiper-wrapper smaller_wishlist">
                        <?php
                        // Custom query to fetch the recent blog posts
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 10, // Number of posts to display
                            'orderby' => 'date',
                            'order' => 'DESC'
                        );
                        $recent_posts = new WP_Query($args);

                        if ($recent_posts->have_posts()):
                            while ($recent_posts->have_posts()):
                                $recent_posts->the_post();
                                $post_link = get_permalink();
                                $post_title = get_the_title();
                                $post_excerpt = get_the_excerpt();
                                $post_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                ?>
                                <a href="<?php echo esc_url($post_link); ?>" target="_blank"
                                    class="swiper-slide mobile_t-3kategorie">
                                    <div class="mobile_wrapper-9">
                                        <div class="mobile_kategorie-1">
                                            <div class="mobile_t-hero-frame">
                                                <div class="mobile_hero-11"
                                                    style="background-image: url('<?php echo esc_url($post_image); ?>');">
                                                    <object
                                                        data="<?php echo get_template_directory_uri(); ?>/assets/block14.svg"
                                                        class="mobile_frame-53"></object>
                                                    <div
                                                        class="mobile_mied-ijej-wp-yw-na-energi-yciow-jak-ona-dzia-ana-cia-oiumys">
                                                        <p><?php echo esc_html($post_title); ?></p>
                                                    </div>
                                                    <div
                                                        class="mobile_t-czy-wiesz-emied-od-wiek-wby-auywana-do-wzmacniania-energii-yciowej-dowiedz-si-jak-noszenie-miedzianej-bi-uterii-mo-ewspiera-twoje-zdrowie-witalno-irwnowag-wewn-trzn">
                                                        <div
                                                            class="mobile_czy-wiesz-emied-od-wiek-wby-auywana-do-wzmacniania-energii-yciowej-dowiedz-si-jak-noszenie-miedzianej-bi-uterii-mo-ewspiera-twoje-zdrowie-witalno-irwnowag-wewn-trzn">
                                                            <p><?php echo esc_html($post_excerpt); ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="mobile_frame-54">
                                                        <div class="mobile_czytaj-wi-cej">czytaj więcej</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php endwhile;
                            wp_reset_postdata();
                        else: ?>
                            <p><?php esc_html_e('No recent posts found.', 'text-domain'); ?></p>
                        <?php endif; ?>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow_slider_white.png"
                        class="fixed-arrow" />
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiperContainerBlog = document.querySelector(".mobile_blog");
    var slidesBlog = document.querySelectorAll(".mobile_blog .swiper-slide");
    if (swiperContainerBlog && slidesBlog.length > 0) {
        // Initialize Swiper only if elements are present
        var swiper = new Swiper(".mobile_blog", {
            slidesPerView: "auto",
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2000, // 2 seconds delay for autoplay
            },
            breakpoints: {
                768: {
                    enabled: false, // Disables Swiper on screens >= 768px
                },
            },
        });
    }
</script>