<?php
/**
 * Created by PhpStorm.
 * User: andreidediu
 * Date: 19.01.2021
 * Time: 18:52
 */

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use app\controllers\AuthController;
use app\controllers\SiteController;
use andreidediumxv\phpmvc\Application;

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(__DIR__, $config);

$app->db->applyMigrations();