<?php
$files = glob('*.php');

$replacements = [
    'href="/appointment/"' => 'href="contact.php"',
    'href="/appointment"' => 'href="contact.php"',
    "href='/appointment/'" => "href='contact.php'",
    "href='/appointment'" => "href='contact.php'",
    
    'href="/contact-us/"' => 'href="contact.php"',
    'href="/contact-us"' => 'href="contact.php"',
    "href='/contact-us/'" => "href='contact.php'",
    "href='/contact-us'" => "href='contact.php'",
    
    'href="/contact/"' => 'href="contact.php"',
    'href="/contact"' => 'href="contact.php"',
    "href='/contact/'" => "href='contact.php'",
    "href='/contact'" => "href='contact.php'",
    
    // some elements like "Start For Free" might go to appointment
    'href="appointment/"' => 'href="contact.php"',
    'href="contact-us/"' => 'href="contact.php"'
];

foreach ($files as $file) {
    if (file_exists($file) && !in_array($file, ['redirect_contact.php', 'apply_svg_logo.php', 'replace_logo.php', 'replace_logo_all.php', 'restore_logo.php', 'style_logo.php'])) {
        $html = file_get_contents($file);
        
        foreach ($replacements as $search => $replace) {
            $html = str_replace($search, $replace, $html);
        }
        
        // Let's also enforce it with regex just in case they use absolute urls or random slashes
        $html = preg_replace('/href=[\'"]([a-zA-Z0-9\-\.\/]*)(appointment|contact|contact-us)\/?[\'"]/i', 'href="contact.php"', $html);
        
        // The regex might catch "contact.php" and rewrite it to "contact.php" which is fine.
        file_put_contents($file, $html);
    }
}
echo "Buttons redirected successfully!\n";
