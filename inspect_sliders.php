<?php
$html = file_get_contents('c:/laragon/www/scotch-security/static-web/index.php');

$output = "";

preg_match_all('/<a[^>]*>(.*?)Get Protected Today(.*?)<\/a>/si', $html, $matches1);
$output .= implode("\n", $matches1[0]) . "\n";

preg_match_all('/<a[^>]*>(.*?)Request a Security Audit(.*?)<\/a>/si', $html, $matches2);
$output .= implode("\n", $matches2[0]) . "\n";

preg_match_all('/<a[^>]*href=["\']([^"\']*)["\'][^>]*>(.*?)Contact Us(.*?)<\/a>/si', $html, $matches3);
$output .= implode("\n", $matches3[0]) . "\n";

file_put_contents('sliders_out.txt', $output);
