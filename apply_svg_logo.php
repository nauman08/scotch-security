<?php
$files = glob('*.php');

// The exact string placed by style_logo.php
$old_html = '<img src="assets/img/scotch-logo1.jpeg" alt="Scotch Security Logo" style="max-height: 65px; width: auto; filter: invert(1) brightness(100) contrast(1.2); mix-blend-mode: screen;" />';

// The new stunning SVG logo
$new_html = '<img src="assets/img/scotch-logo.svg" alt="Scotch Security" style="max-height: 60px; width: auto;" />';

foreach ($files as $file) {
    if (file_exists($file) && !in_array($file, ['apply_svg_logo.php', 'replace_logo.php', 'replace_logo_all.php', 'restore_logo.php', 'style_logo.php'])) {
        $html = file_get_contents($file);
        
        $html = str_replace($old_html, $new_html, $html);
        
        file_put_contents($file, $html);
    }
}
echo "SVG Logo applied successfully!\n";
