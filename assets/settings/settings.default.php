<?php

// Default settings.
$settings['config_sync_directory'] = '../config/sync';
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$databases['default']['default'] = [];
$settings['entity_update_backup'] = TRUE;
$settings['entity_update_batch_size'] = 50;
$settings['file_scan_ignore_directories'] = ['node_modules', 'bower_components'];
$settings['hash_salt'] = 'DEVELOPMENT';
$settings['maintenance_theme'] = 'claro';
$settings['migrate_node_migrate_type_classic'] = FALSE;
$settings['update_free_access'] = FALSE;

// Production settings. Overrides default.
if (file_exists($app_root . '/' . $site_path . '/settings.prod.php')) {
  include $app_root . '/' . $site_path . '/settings.prod.php';
}

// Stage settings. Overrides default and production.
if (file_exists($app_root . '/' . $site_path . '/settings.stage.php')) {
  include $app_root . '/' . $site_path . '/settings.stage.php';
}

// Dev settings. Overrides default, production, and stage.
if (file_exists($app_root . '/' . $site_path . '/settings.dev.php')) {
  include $app_root . '/' . $site_path . '/settings.dev.php';
}

// Local settings. Overrides everything.
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
