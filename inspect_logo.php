<?php
$html = file_get_contents('header.php');
if (preg_match_all('/<a[^>]*href=["\']index\.php["\'][^>]*>.*?<\/a>/s', $html, $matches)) {
    print_r($matches[0]);
}

if (preg_match_all('/<img[^>]*logo[^>]*>/i', $html, $matches)) {
    print_r($matches[0]);
}
