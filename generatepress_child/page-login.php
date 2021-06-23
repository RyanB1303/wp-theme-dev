<?php

/**
 * The template for login page.
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

      <h1 class="entry-title" itemprop="headline">Login</h1>
      modify this so this will contain the page title
      and make sure to always check, if user is login as soomething , do not go to this page again , forbid any logged in user
      to access this
      NB : maybe add some font awesome , if needed
      <div class="entry-content">
        <form>
          <div class="form-group">
            <label for="nik">NIK</label>
            <input type="email" class="form-control" id="nik" aria-describedby="nik" placeholder="Masukkan NIK">
            <small id="nik" class="form-text text-muted">Hubungi Admin untuk mendapatkan akses</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
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

generate_construct_sidebars();

get_footer();
