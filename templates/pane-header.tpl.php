<?php
/**
 * @file
 *
 * Theme implementation to display the header block on a Drupal page.
 *
 * This utilizes the following variables thata re normally found in
 * page.tpl.php:
 * - $front_page
 * - $logo
 * - $site_name
 * - $site_slogan
 * - $secondary_menu
 *
 * Additional items can be added via theme_preprocess_pane_header(). See
 * template_preprocess_pane_header() for examples.
 */
?>
<?php if (!empty($logo)): ?>
  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
<?php endif; ?>

<?php if ($site_name || $site_slogan): ?>
  <hgroup id="name-and-slogan">
    <?php if ($site_name): ?>
      <h1 id="site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
      </h1>
    <?php endif; ?>

    <?php if (!empty($site_slogan)): ?>
      <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
    <?php endif; ?>
  </hgroup><!-- /#name-and-slogan -->
<?php endif; ?>

<?php if (!empty($secondary_menu)): ?>
  <nav id="secondary-menu" role="navigation">
    <?php print $secondary_menu; ?>
  </nav>
<?php endif; ?>
