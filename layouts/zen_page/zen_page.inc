<?php

/**
 * zen_page.inc
 * Plugin definition for Zen page layout.
 */
// Plugin definition
$plugin = array(
  'title' => t('Site template: Zen page'),
  'category' => t('Site'),
  'icon' => 'zen_page.png',
  'css' => 'zen_page.css',
  'theme' => 'zen_page',
  'regions' => array(
	'header' => t('Header'),
	'highlighted' => t('Highlighted'),
	//'help' => t('Help'),
	'content' => t('Content'),
	'navigation' => t('Navigation'),
	'sidebar_first' => t('Sidebar: First'),
	'sidebar_second' => t('Sidebar: Second'),
	'footer' => t('Footer'),
	'bottom' => t('Bottom'),
  ),
);
