<?php
$root_dir = dirname(__DIR__);
$webroot_dir = $root_dir . '/public';

/**
 * Use Dotenv to set required environment variables and load .env file in root
 */
$dotenv = new Dotenv\Dotenv($root_dir);
if (file_exists($root_dir . '/.env')) {
  $dotenv->load();
  $dotenv->required([
      'DB_NAME', 'DB_USER', 'DB_PASSWORD',
      'CRAFT_USERNAME', 'CRAFT_EMAIL', 'CRAFT_PASSWORD',
      'CRAFT_SITENAME', 'CRAFT_SITEURL', 'CRAFT_LOCALE'
  ]);
}
