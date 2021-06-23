<?php

/**
 * The template for profile page.
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
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <div class="col-sm-10">
              NIK harus ditambahkan custom_meta_data , lihat di video
              <input type="text" class="form-control" id="nik" placeholder="12345678">
            </div>
          </div>
          <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              Tembak fungsi password reset
              <input type="password" class="form-control" id="password" placeholder="********">
              <a href="#">Change Password</a>
            </div>
          </div>
          <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
              Jabatan harus ditambahkan custom_meta_data , lihat di video atau jadikan ini sebagai role
              <select name="jabatan" id="jabatan">
                <option value="admin">Admin</option>
                <option value="reviewer">Reviewer</option>
                <option value="monev">Monev</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="prodi" class="col-sm-2 col-form-label">Program Studi</label>
            <div class="col-sm-10">
              custom metadata , prodi , dengan tabel fakultas_list
              <select name="prodi" id="prodi">
                <option value="fti">FTI</option>
                <option value="FH">FH</option>
                <option value="FKG">FKG</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              user email ,bisa di get di get_user
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
          </div>
          <div class="form-group row">
            <label for="whatsapp" class="col-sm-2 col-form-label">Whatsapp</label>
            <div class="col-sm-10">
              custom metadata , whatasapp, tambahkan di registrasi
              <input type="text" class="form-control" id="whatsapp" placeholder="Whatsapp">
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              custom metadata , sama seperti whatsapp
              <input type="text" class="form-control" id="alamat" placeholder="Alamat">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              edit, untuk konfirmasi ganti, back untuk kembali ke halaman sebelumnya, atau halaman home
              <button type="submit" class="btn btn-primary">Edit</button>
              <button type="submit" class="btn btn-secondary">Back</button>
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
