<?php
$html = file_get_contents('index.php');
preg_match_all('/<h3 class="pxl-item-title">(.*?)<\/h3>/s', $html, $matches);
print_r($matches[1]);
preg_match_all('/<div class="pxl-item--text el-empty"> <span>(.*?)<\/span>/s', $html, $matches);
print_r($matches[1]);
