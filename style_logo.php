<?php
$files = glob('*.php');

$old_html = '<img src="assets/img/scotch-logo1.jpeg" alt="Scotch Security Logo" style="max-height: 50px; width: auto;" />';

// Assuming the header is dark and logo is black on white:
// invert(1) turns white to black (which screen will ignore) and black text to white (which remains visible).
// brightness(1.2) gives it a bit more pop.
// contrast(1.2) ensures crispness.
$new_html = '<img src="assets/img/scotch-logo1.jpeg" alt="Scotch Security Logo" style="max-height: 65px; width: auto; filter: invert(1) brightness(100) contrast(1.2); mix-blend-mode: screen;" />';

foreach ($files as $file) {
    if (file_exists($file) && !in_array($file, ['replace_logo.php', 'replace_logo_all.php', 'restore_logo.php', 'style_logo.php'])) {
        $html = file_get_contents($file);
        
        $html = str_replace($old_html, $new_html, $html);
        
        file_put_contents($file, $html);
    }
}
echo "Logo styled with transparent blend mode!\n";
