<?php

// Set a default private files directory outside of the docroot.
$settings['file_private_path'] = '../private';

// Set a default config sync directory outside of the docroot.
// This is defined inside the read-only "config" directory, deployed via Git.
$settings['config_sync_directory'] = '../config/sync';

// Logging
$config['system.logging']['error_level'] = 'verbose';

// Preprocessing
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

// Caching
// $settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
// $settings['cache']['bins']['render'] = 'cache.backend.null';

// Security
$settings['hash_salt'] = 'DEVELOPMENT';
$settings['rebuild_access'] = TRUE;
$settings['skip_permissions_hardening'] = TRUE;

// Services
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/default/services.dev.yml';
$settings['hash_salt'] = 'DEVELOPMENT';

// Misc
$settings['extension_discovery_scan_tests'] = TRUE;

// Database
$databases['default']['default'] = array (
  'database' => '',
  'username' => '',
  'password' => '',
  'prefix' => '',
  'host' => '',
  'port' => '',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

// Hosts
$settings['trusted_host_patterns'] = [];
