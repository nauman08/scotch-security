<?php
$html = file_get_contents('c:/laragon/www/scotch-security/static-web/index.php');

// 1. Update Hours of Work
// current: data-startnumber="65000" data-endnumber="65250" data-to-value="65250" ... >65000</span>
$html = preg_replace(
    '/data-startnumber="65000" data-endnumber="65250" data-to-value="65250" data-delimiter="">.*?<\/span>/s',
    'data-startnumber="9000" data-endnumber="10000" data-to-value="10000" data-delimiter="">10000</span>',
    $html
);

// 2. Update Happy customers
// current: data-startnumber="23000" data-endnumber="23160" data-to-value="23160" ... >23000</span>
$html = preg_replace(
    '/data-startnumber="23000" data-endnumber="23160" data-to-value="23160" data-delimiter="">.*?<\/span>/s',
    'data-startnumber="0" data-endnumber="20" data-to-value="20" data-delimiter="">20</span>',
    $html
);

// 3. Update Years of Experience
// current: data-startnumber="0" data-endnumber="20" data-to-value="20" data-delimiter="">0</span>
$html = preg_replace(
    '/data-startnumber="0" data-endnumber="20" data-to-value="20" data-delimiter="">.*?<\/span>/s',
    'data-startnumber="0" data-endnumber="25" data-to-value="25" data-delimiter="">25</span>',
    $html
);
$html = preg_replace(
    '/<span class="pxl--counter-value effect-default" data-duration="2000" data-startnumber="0" data-endnumber="25" data-to-value="25" data-delimiter="">0<\/span>/',
    '<span class="pxl--counter-value effect-default" data-duration="2000" data-startnumber="0" data-endnumber="25" data-to-value="25" data-delimiter="">25</span>', 
    $html
);

// 4. Remove Experienced Workers block completely
// Find the block identifying Experienced Workers and remove it
$html = preg_replace(
    '/<div class="elementor-element elementor-element-[^"]+ e-con-full e-flex[^>]+>\s*<div class="elementor-element elementor-element-[^"]+ elementor-widget elementor-widget-pxl_counter".*?<div class="pxl--item-title">\s*Experienced Workers\s*<\/div><\/div><\/div><\/div><\/div><\/div><\/div><\/div>/s',
    '',
    $html
);

// Fallback logic if the block wipe failed due to regex spacing:
// we can hide it via CSS inline if it doesn't get removed. 
$html = str_replace(
    '<div class="pxl--item-title"> Experienced Workers</div>',
    '<div class="pxl--item-title" style="display:none;"> Experienced Workers</div><script>document.currentScript.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.style.display="none";</script>',
    $html
);

file_put_contents('c:/laragon/www/scotch-security/static-web/index.php', $html);
echo "Counters updated successfully!\n";
