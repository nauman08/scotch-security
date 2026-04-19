<?php
$files = ['header.php', 'footer.php'];
$logo_text = '<h2 style="color:#fff; margin:0px; display:flex; align-items:center; font-weight: 700;">CyberGuard</h2>';

foreach ($files as $file) {
    if (file_exists($file)) {
        $html = file_get_contents($file);
        
        // Elementor specific dark/light logos in header:
        $html = preg_replace('/<img[^>]*src=["\'][^"\']*logo\.png["\'][^>]*>/i', $logo_text, $html);
        
        // Replace main logo in footer: 
        $html = preg_replace('/<img[^>]*src=["\'][^"\']*logo-big-white[^"\']*["\'][^>]*>/i', $logo_text, $html);
        
        file_put_contents($file, $html);
        echo "Replaced logo in $file\n";
    }
}
