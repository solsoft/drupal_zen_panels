<?php
/**
 * @file
 *
 * Theme implementation to display the messages area, which is normally
 * included roughly in the content area of a page.
 *
 * This utilizes the following variables thata re normally found in
 * page.tpl.php:
 * - $breadcrumb
 * - $messages
 * - $tabs
 * - $help
 * - $action_links
 *
 * Additional items can be added via theme_preprocess_pane_messages(). See
 * template_preprocess_pane_messages() for examples.
 */
?>
<?php if (!empty($breadcrumb)): ?>
  <div id="breadcrumb">
    <?php print $breadcrumb; ?>
  </div>
<?php endif; ?>
<?php print $messages; ?>
<?php if (!empty($tabs)): ?>
  <div class="tabs">
    <?php print render($tabs); ?>
  </div>
<?php endif; ?>
<?php print $help; ?>
<?php if ($action_links): ?>
  <ul class="action-links">
    <?php print render($action_links); ?>
  </ul>
<?php endif; ?>
