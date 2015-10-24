<?php
/**
 * phpas.php
 * PHPBookLibrary
 *
 * Main File
 *
 * @author: Stephen Moon <stephen@logicalmoon.com>
 * @copyright (c) Stephen Moon, 2015
 */
 
    // Based on: http://www.jacobward.co.uk/web-scraping-with-php-curl-part-1/
    function curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
	
    $scraped_website = curl("http://www.amazon.co.uk/Instant-PHP-Scraping-Jacob-Ward/dp/1782164766/"); 
	echo $scraped_website;
?>