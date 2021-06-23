<?php

/**
 * The template for create-role page.
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
                <form>
                    <div class="form-group row">
                        <label for="nik" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            User baru login akan jadi subscriber terlebih dahulu, di halaman ini admin menggantinya dengan role yang ditentukan
                            <select name="nama" id="nama" class="form-control">
                                <?php
                                $users = get_users(['role' => ['subscriber']]); //later give role that no-role, or subscriber
                                // var_dump($users);
                                foreach ($users as $user) {
                                    echo '<option>' . $user->display_name . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <select name="role" id="role">
                                <?php
                                $special_role = ['Administrator', 'Editor', 'Contributor', 'Subscriber'];
                                $roles = wp_roles()->role_names;
                                // var_dump($roles);
                                foreach ($roles as $role) {
                                    if (!in_array($role, $special_role))
                                        echo '<option>' . $role . '</option>';
                                }

                                ?>
                            </select>
                        </div>
                    </div>
                </form>
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

get_footer();
