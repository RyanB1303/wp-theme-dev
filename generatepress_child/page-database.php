<?php

/**
 * The template for database page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GeneratePress
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<div id="primary" <?php generate_do_element_classes('content'); ?>>
    <main id="main" <?php generate_do_element_classes('main'); ?>>

        <?php
        /**
         * generate_before_main_content hook.
         *
         * @since 0.1
         */
        do_action('generate_before_main_content');

        ?>
        <div class="inside-article">

            <header class="entry-header">
                <?php
                /**
                 * generate_before_page_title hook.
                 *
                 * @since 2.4
                 */
                do_action('generate_before_page_title');

                if (generate_show_title()) {
                    $params = generate_get_the_title_parameters();

                    the_title($params['before'], $params['after']);
                }

                /**
                 * generate_after_page_title hook.
                 *
                 * @since 2.4
                 */
                do_action('generate_after_page_title');
                ?>
            </header>
            <div class="entry-content">
                <div class="jumbotron">
                    <h1 class="display-4">Database Page is underconstruction</h1>
                    <p class="lead">Is this need table ? or i don't know, managing file uploaded ????</p>
                    <hr class="my-4">
                    <p>Table, that containing, all of the proposal submitted, maybe , confirmed it again with client</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                    </p>
                </div>
            </div>
        </div>
        <?php
        /**
         * generate_after_main_content hook.
         *
         * @since 0.1
         */
        do_action('generate_after_main_content');
        ?>
    </main>
</div>

<?php
/**
 * generate_after_primary_content_area hook.
 *
 * @since 2.0
 */
do_action('generate_after_primary_content_area');

generate_construct_sidebars();

get_footer();
