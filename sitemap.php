<?php

require __DIR__ . '/vendor/autoload.php';

use Sitemap\Sitemap;

header("Content-Type: application/xml charset=utf-8");
Sitemap::generate($_GET['locale']);