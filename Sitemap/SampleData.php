<?php

namespace Sitemap;

trait SampleData {

    private static $file = __DIR__ . DIRECTORY_SEPARATOR . 'data.json';

    /**
     * Sample data to be used for generating the dummy sitemaps
     *
     * @param bool $decode
     * @return json|array
     */
    private static function data($decode = true) {

        $data = file_get_contents(self::$file);

        if ($decode) {
            return json_decode($data, true);
        }
        return $data;

    }

}