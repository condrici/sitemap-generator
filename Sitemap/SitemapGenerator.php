<?php

trait SitemapGenerator {

    private static $priority = 1;
    private static $locale   = 'en';

    /**
     * Generate sitemap
     * If path is not provided, dummy sample will be used
     *
     * @param null $locale
     */
    public static function generate($locale=null) {

        !empty($locale) ? self::$locale = $locale : null;

        echo
            self::get_xml_header() .
            self::get_xml_body() .
            self::get_xml_footer();
    }

    /**
     * Generate xml file header
     *
     * @return string
     */
    private static function get_xml_header() {
        return
            '<?xml version="1.0" encoding="UTF-8" ?>' . PHP_EOL .
            '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;
    }

    /**
     * Generate xml file footer
     *
     * @return string
     */
    private static function get_xml_footer() {
        return '</urlset>';
    }

    /**
     * Generate xml body, based on the sample json file
     */
    public static function get_xml_body() {

        $sample_data    = self::data();
        $sample_locales = self::data()['locales'];
        $output = '';

        //Set locale to default if user input is invalid
        if (!array_key_exists(self::$locale, $sample_locales)) {
            self::$locale = 'en';
        }

        foreach ($sample_data['links'] as $key => $entry) {
            foreach($entry as $locale => $permalink) {

                if($locale !== self::$locale) { continue; }

                $output .= "<url> \n";
                $output .= "<loc>" . $permalink . "</loc>\n";
                $output .= "<priority>" . self::$priority . "</priority>\n";
                $output .= "</url>\n";

            }
        }

        return $output;


    }

}