<?php
$files = glob('*.php');
$logo_text = '<img src="assets/img/scotch-logo1.jpeg" alt="Scotch Security Logo" style="max-height: 50px; width: auto;" />';

foreach ($files as $file) {
    if (file_exists($file) && !in_array($file, ['replace_logo.php', 'replace_logo_all.php', 'inspect_logo.php', 'inspect.php', 'update_contact.php', 'update_global.php', 'update_index.php', 'update_services.php', 'generate_pages.php', 'process_contact.php', 'replace_about_content.php'])) {
        $html = file_get_contents($file);
        
        // Elementor specific dark/light logos in header:
        $html = preg_replace('/<img[^>]*src=["\'][^"\']*logo\.png["\'][^>]*>/i', $logo_text, $html);
        
        // Replace main logo big white: 
        $html = preg_replace('/<img[^>]*src=["\'][^"\']*logo-big-white[^"\']*["\'][^>]*>/i', $logo_text, $html);
        
        file_put_contents($file, $html);
        echo "Replaced logo in $file\n";
    }
}
