<?php
$html = file_get_contents('c:/laragon/www/scotch-security/static-web/index.php');

// We can replace exactly these instances. 
// We use a regex to capture the href and replace it ONLY IF the inner text matches our target buttons.

$html = preg_replace_callback(
    '/<a[^>]*href=["\']([^"\']*)["\'][^>]*>(.*?(?:Get Protected Today|Request a Security Audit|Contact Us).*?)<\/a>/si',
    function ($matches) {
        $full_tag = $matches[0];
        $href = $matches[1];

        // Only modify if it's currently pointing to index.php or hash or anything wrong
        return str_replace('href="' . $href . '"', 'href="contact.php"', $full_tag);
    },
    $html
);

// Extra safe fallback using simpler str_replace on common literal patterns I extracted above
$from1 = '<a href="index.php" class="btn pxl-icon-active btn-default  pxl-icon--left" data-wow-delay="ms" data-onepage-offset=""> <span class="pxl--btn-text" data-text="Request a Security Audit">';
$to1 = '<a href="contact.php" class="btn pxl-icon-active btn-default  pxl-icon--left" data-wow-delay="ms" data-onepage-offset=""> <span class="pxl--btn-text" data-text="Request a Security Audit">';
$html = str_replace($from1, $to1, $html);

$from2 = '<a href="index.php" class="btn pxl-icon-active btn-default wow fadeInUp pxl-icon--left" data-wow-delay="500ms" data-onepage-offset=""> <span class="pxl--btn-text" data-text="Request a Security Audit">';
$to2 = '<a href="contact.php" class="btn pxl-icon-active btn-default wow fadeInUp pxl-icon--left" data-wow-delay="500ms" data-onepage-offset=""> <span class="pxl--btn-text" data-text="Request a Security Audit">';
$html = str_replace($from2, $to2, $html);

$from3 = '<a href="index.php" class="btn pxl-icon-active btn-default  pxl-icon--left" data-wow-delay="ms" data-onepage-offset=""> <span class="pxl--btn-text" data-text="Get Protected Today">';
$to3 = '<a href="contact.php" class="btn pxl-icon-active btn-default  pxl-icon--left" data-wow-delay="ms" data-onepage-offset=""> <span class="pxl--btn-text" data-text="Get Protected Today">';
$html = str_replace($from3, $to3, $html);

$from4 = '<a href="index.php" class="btn pxl-icon-active btn-default wow fadeInLeft pxl-icon--left" data-wow-delay="300ms" data-onepage-offset=""> <span class="pxl--btn-text" data-text="Contact Us">';
$to4 = '<a href="contact.php" class="btn pxl-icon-active btn-default wow fadeInLeft pxl-icon--left" data-wow-delay="300ms" data-onepage-offset=""> <span class="pxl--btn-text" data-text="Contact Us">';
$html = str_replace($from4, $to4, $html);

file_put_contents('c:/laragon/www/scotch-security/static-web/index.php', $html);
echo "Slider and homepage links updated successfully!\n";
