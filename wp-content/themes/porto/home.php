<?php
get_header();

global $porto_settings, $porto_layout;
$builder_id = porto_check_builder_condition('single');

if ($builder_id) {
    echo do_shortcode('[porto_block id="' . esc_attr($builder_id) . '" tracking="layout-single-' . esc_attr($builder_id) . '"]');
} else {
    if (have_posts()):
        the_post();
        global $post;

        $event_start_date = get_post_meta($post->ID, 'event_start_date', true);
        $event_start_time = get_post_meta($post->ID, 'event_start_time', true);
        $event_location = get_post_meta($post->ID, 'event_location', true);
        $event_count_down = get_post_meta($post->ID, 'event_time_counter', true);
        $event_link = get_post_meta($post->ID, 'event_link', true);

        $show_count_down = ('' == $event_count_down) ? ($porto_settings['event-single-countdown'] ?? true) : ($event_count_down === 'show');

        if ($event_start_date) {
            $has_event_date = true;
            $event_date_parts = explode('/', $event_start_date);

            if (count($event_date_parts) == 3) {
                $event_year_numeric = trim($event_date_parts[0]);
                $event_month_numeric = trim($event_date_parts[1]);
                $event_date_numeric = trim($event_date_parts[2]);
                $event_month_short = date('M', mktime(0, 0, 0, $event_month_numeric, 1));
            } else {
                $has_event_date = false;
            }
        } else {
            $has_event_date = false;
        }

        $event_time_js_format = $event_start_time ? date('H:i', strtotime($event_start_time)) : '00:00:00';

        // Variables set for potential use in your custom HTML
    endif;

    porto_add_block_tooltip('single');
}

get_footer();
