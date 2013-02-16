<?php
/**
 * @file
 *
 * Theme implementation to display the messages area, which is normally
 * included roughly in the content area of a page.
 *
 * This utilizes the following variables thata re normally found in
 * page.tpl.php:
 * - $main_menu
 *
 * Additional items can be added via theme_preprocess_pane_messages(). See
 * template_preprocess_pane_messages() for examples.
 */
?>
<?php if (!empty($main_menu)): ?>
  <nav id="main-menu" role="navigation">
    <?php print $main_menu; ?>
  </nav>
<?php endif; ?>
