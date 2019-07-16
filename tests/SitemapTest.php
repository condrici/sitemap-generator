<?php

namespace TDD\Test;

use PHPUnit\Framework\TestCase;
use Sitemap;

class SitemapTest extends TestCase {

    public function testOutputTypeNoParams() {
        $output = $this->getActualOutput(Sitemap::generate());
        $this->assertIsString($output);
    }

}