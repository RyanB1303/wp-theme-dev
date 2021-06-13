<?php

/**
 * The template for proposal page.
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
            <label for="proposal" class="col-sm-2 col-form-label">Judul Proposal</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="proposal" placeholder="Nama Proposal">
            </div>
          </div>
          <div class="form-group row">
            <label for="nik1" class="col-sm-2 col-form-label">NIK Pengusul I</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nik1">
            </div>
          </div>
          <div class="form-group row">
            <label for="nik2" class="col-sm-2 col-form-label">NIK Pengusul II</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nik2">
            </div>
          </div>
          <div class="form-group row">
            <label for="nik3" class="col-sm-2 col-form-label">NIK Pengusul III</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nik3">
            </div>
          </div>
          <div class="form-group row">
            <label for="biaya" class="col-sm-2 col-form-label">Biaya </label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="biaya" placeholder="Usulan Biaya">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Submit</button>
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

generate_construct_sidebars();

get_footer();
