<?php

$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['file_scan_ignore_directories'] = ['node_modules', 'bower_components'];
$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;
$settings['migrate_node_migrate_type_classic'] = FALSE;
$settings['maintenance_theme'] = 'claro';

// Production settings.
if (file_exists($app_root . '/' . $site_path . '/settings.prod.php')) {
  include $app_root . '/' . $site_path . '/settings.prod.php';
}

// Stage settings.
if (file_exists($app_root . '/' . $site_path . '/settings.stage.php')) {
  include $app_root . '/' . $site_path . '/settings.stage.php';
}

// Dev settings.
if (file_exists($app_root . '/' . $site_path . '/settings.dev.php')) {
  include $app_root . '/' . $site_path . '/settings.dev.php';
}

// Local settings. This is last so as to override anything.
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
