<?php
$files = glob('*.php');

// We replaced dark and white logos with the exact string:
$h2_text = '<img src="assets/img/scotch-logo1.jpeg" alt="Scotch Security Logo" style="max-height: 50px; width: auto;" />';

// The new logo HTML
$new_logo_html = '<img src="assets/img/scotch-logo1.jpeg" alt="Scotch Security Logo" style="max-height: 50px; width: auto;" />';

foreach ($files as $file) {
    if (file_exists($file)) {
        $html = file_get_contents($file);
        
        // Restore the logo with proper image tag
        $html = str_replace($h2_text, $new_logo_html, $html);
        
        file_put_contents($file, $html);
    }
}
echo "Logo updated successfully!\n";
