<?php

require_once('Sitemap/Sitemap.php');

header("Content-Type: application/xml charset=utf-8");
Sitemap::generate($_GET['locale']);