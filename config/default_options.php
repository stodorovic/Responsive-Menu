<?php

function get_responsive_menu_default_options() {

    return [

        'breakpoint' => 8000,
        'menu_to_hide' => '',
        'menu_depth' => 5,
        'menu_depth_0' => 5,
        'menu_depth_1' => 10,
        'menu_depth_2' => 15,
        'menu_depth_3' => 20,
        'menu_depth_4' => 25,
        'menu_depth_5' => 30,
        'menu_depth_0_unit' => '%',
        'menu_depth_1_unit' => '%',
        'menu_depth_2_unit' => '%',
        'menu_depth_3_unit' => '%',
        'menu_depth_4_unit' => '%',
        'menu_depth_5_unit' => '%',
        'menu_to_use' => '',
        'theme_location_menu' => '',
        'show_menu_on_page_load' => false,
        'keyboard_shortcut_close_menu' => '27,37',
        'keyboard_shortcut_open_menu' => '32,39',

        // Button Settings
        'button_title' => null,
        'button_title_open' => null,
        'button_image' => null,
        'button_image_alt' => null,
        'button_image_when_clicked' => null,
        'button_image_alt_when_clicked' => null,
        'button_font' => null,
        'button_font_icon' => null,
        'button_font_icon_type' => 'font-awesome',
        'button_font_icon_when_clicked' => null,
        'button_font_icon_when_clicked_type' => 'font-awesome',
        'button_trigger_type' => 'click',
        'button_click_trigger' => '#responsive-menu-button',
        'button_title_position' => 'left',
        'button_title_line_height' => '13',
        'button_title_line_height_unit' => 'px',
        'button_background_colour' => '#000',
        'button_background_colour_hover' => '#000',
        'button_background_colour_active' => '#000',
        'button_click_animation' => 'boring',
        'button_line_colour' => '#fff',
        'button_line_colour_hover' => '#fff',
        'button_line_colour_active' => '#fff',
        'button_text_colour' => '#fff',
        'button_transparent_background' => 'off',
        'button_width' => 55,
        'button_width_unit' => 'px',
        'button_height' => 55,
        'button_height_unit' => 'px',
        'button_line_margin' => 5,
        'button_line_margin_unit' => 'px',
        'button_line_height' => 3,
        'button_line_height_unit' => 'px',
        'button_line_width' => 25,
        'button_line_width_unit' => 'px',
        'button_top' => 15,
        'button_top_unit' => 'px',
        'button_distance_from_side' => 5,
        'button_distance_from_side_unit' => '%',
        'button_left_or_right' => 'right',
        'button_position_type' => 'fixed',
        'button_push_with_animation' => 'off',
        'button_font_size' => 14,
        'button_font_size_unit' => 'px',

        // Animation Settings
        'animation_type' => 'slide',
        'page_wrapper' => null,
        'animation_speed' => 0.5,
        'transition_speed' => 0.5,

        // Menu Settings
        'active_arrow_shape' => '▲',
        'inactive_arrow_shape' => '▼',
        'active_arrow_image' => '',
        'active_arrow_image_alt' => '',
        'inactive_arrow_image' => '',
        'inactive_arrow_image_alt' => '',
        'active_arrow_font_icon' => '',
        'active_arrow_font_icon_type' => 'font-awesome',
        'inactive_arrow_font_icon' => '',
        'inactive_arrow_font_icon_type' => 'font-awesome',
        'arrow_position' => 'right',
        'submenu_arrow_width' => '40',
        'submenu_arrow_width_unit' => 'px',
        'submenu_arrow_height' => '40',
        'submenu_arrow_height_unit' => 'px',
        'accordion_animation' => 'off',
        'auto_expand_all_submenus' => 'off',
        'auto_expand_current_submenus' => 'off',

        'menu_background_colour' => '#212121',
        'menu_container_background_colour' => '#212121',
        'menu_background_image' => '',
        'menu_item_background_colour' => '#212121',
        'menu_item_background_hover_colour' => '#3f3f3f',
        'menu_item_border_colour' => '#212121',
        'menu_item_border_colour_hover' => '#212121',
        'menu_title_background_colour' => '#212121',
        'menu_title_background_hover_colour' => '#212121',
        'menu_current_item_background_colour' => '#212121',
        'menu_current_item_background_hover_colour' => '#3f3f3f',
        'menu_current_item_border_colour' => '#212121',
        'menu_current_item_border_hover_colour' => '#3f3f3f',
        'menu_title_colour' => '#fff',
        'menu_title_hover_colour' => '#fff',
        'menu_link_colour' => '#fff',
        'menu_link_hover_colour' => '#fff',
        'menu_current_link_colour' => '#fff',
        'menu_current_link_hover_colour' => '#fff',
        'menu_sub_arrow_border_colour' => '#212121',
        'menu_sub_arrow_border_hover_colour' => '#3f3f3f',
        'menu_sub_arrow_border_colour_active' => '#212121',
        'menu_sub_arrow_border_hover_colour_active' => '#3f3f3f',
        'menu_sub_arrow_background_colour' => '#212121',
        'menu_sub_arrow_background_hover_colour' => '#3f3f3f',
        'menu_sub_arrow_background_colour_active' => '#212121',
        'menu_sub_arrow_background_hover_colour_active' => '#3f3f3f',
        'menu_sub_arrow_shape_colour' => '#fff',
        'menu_sub_arrow_shape_hover_colour' => '#fff',
        'menu_sub_arrow_shape_colour_active' => '#fff',
        'menu_sub_arrow_shape_hover_colour_active' => '#fff',
        'menu_font' => null,
        'menu_font_size' => 13,
        'menu_font_size_unit' => 'px',
        'menu_title_font_size' => 13,
        'menu_title_font_size_unit' => 'px',
        'menu_text_alignment' => 'left',
        'menu_links_height' => 40,
        'menu_links_height_unit' => 'px',
        'menu_border_width' => 1,
        'menu_border_width_unit' => 'px',
        'menu_minimum_width' => null,
        'menu_minimum_width_unit' => 'px',
        'menu_maximum_width' => null,
        'menu_maximum_width_unit' => 'px',
        'menu_auto_height' => 'off',
        'menu_adjust_for_wp_admin_bar' => 'off',
        'menu_additional_content' => null,
        'menu_additional_content_colour' => '#fff',
        'menu_title' => null,
        'menu_title_image' => null,
        'menu_title_image_alt' => null,
        'menu_title_font_icon' => null,
        'menu_title_font_icon_type' => 'font-awesome',
        'menu_appear_from' => 'left',
        'menu_title_link' => null,
        'menu_title_link_location' => '_self',
        'menu_width' => 75,
        'menu_width_unit' => '%',
        'menu_close_on_link_click' => 'off',
        'menu_close_on_body_click' => 'off',
        'menu_item_click_to_trigger_submenu' => 'off',
        'menu_disable_scrolling' => 'off',
        'menu_overlay' => 'off',
        'menu_overlay_colour' => 'rgba(0,0,0,0.7)',
        'menu_font_icons' => '',
        'menu_search_box_text' => 'Search',
        'menu_search_box_text_colour' => '#333',
        'menu_search_box_border_colour' => '#dadada',
        'menu_search_box_background_colour' => '#fff',
        'menu_search_box_placeholder_colour' => '#C7C7CD',
        'menu_word_wrap' => 'off',

        'minify_scripts' => 'off',
        'scripts_in_footer' => 'off',
        'external_files' => 'off',

        'shortcode' => 'off',
        'mobile_only' => 'off',
        'custom_walker' => null,
        'custom_css' => null,

        'use_single_menu' => 'off',

        'single_menu_height' => '80',
        'single_menu_height_unit' => 'px',
        'single_menu_font' => null,
        'single_menu_font_size' => '14',
        'single_menu_font_size_unit' => 'px',

        'single_menu_submenu_height' => '40',
        'single_menu_submenu_height_unit' => 'px',
        'single_menu_submenu_font' => null,
        'single_menu_submenu_font_size' => '12',
        'single_menu_submenu_font_size_unit' => 'px',

        'single_menu_item_link_colour' => '#000000',
        'single_menu_item_link_colour_hover' => '#000000',
        'single_menu_item_background_colour' => '#ffffff',
        'single_menu_item_background_colour_hover' => '#ffffff',

        'single_menu_item_submenu_link_colour' => '#000000',
        'single_menu_item_submenu_link_colour_hover' => '#000000',
        'single_menu_item_submenu_background_colour' => '#ffffff',
        'single_menu_item_submenu_background_colour_hover' => '#ffffff',

        'use_header_bar' => 'off',
        'header_bar_breakpoint' => '800',
        'header_bar_logo' => null,
        'header_bar_logo_alt' => '',
        'header_bar_logo_link' => null,
        'header_bar_title' => null,
        'header_bar_html_content' => null,
        'header_bar_height' => '80',
        'header_bar_height_unit' => 'px',
        'header_bar_font_size' => '14',
        'header_bar_font_size_unit' => 'px',
        'header_bar_font' => null,
        'header_bar_background_color' => '#ffffff',
        'header_bar_text_color' => '#ffffff',
        'header_bar_position_type' => 'fixed',

        'items_order' => '{"title":"on","menu":"on","search":"on","additional content":"on"}',
        'header_bar_items_order' => '{"logo":"on","title":"on","search":"on","html content":"on"}',

        'fade_submenus' => 'off',
        'fade_submenus_side' => 'left',
        'fade_submenus_delay' => 100,
        'fade_submenus_speed' => 500,

        'use_slide_effect' => 'off',
        'slide_effect_back_to_text' => 'Back'
    ];

};