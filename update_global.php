<?php
$header = file_get_contents('header.php');

// Add SEO Meta keywords
if (strpos($header, '<meta name="keywords"') === false) {
    $keywords = '<meta name="keywords" content="Cybersecurity consulting, HIPAA compliance consulting, SOC2 compliance consulting, ISO 27001 implementation, HITRUST certification consulting, Security policy development, Information security consulting, Cybersecurity compliance services, Technical documentation services, API documentation services, End-user documentation, Online wikis, Workflow documentation">';
    $header = str_replace('</title>', "</title>\n    $keywords", $header);
}

// Nav updates for header (rough replaces to point to right pages)
$header = str_replace('href="/home-1/"', 'href="index.php"', $header);
$header = str_replace('href="/about-us/"', 'href="about.php"', $header);
$header = str_replace('href="/services-1/"', 'href="services.php"', $header);
$header = str_replace('href="contact.php"', 'href="contact.php"', $header);
$header = str_replace('href="contact.php"', 'href="contact.php"', $header);

// Add missing dropdown links for services (if possible, but simplest is just mapping what exists)
// Wait, the menu HTML might be pre-rendered in wp_nav_menu style. We will just globally map href keywords.
file_put_contents('header.php', $header);


$footer = file_get_contents('footer.php');
$footer = str_replace('href="/home-1/"', 'href="index.php"', $footer);
$footer = str_replace('href="/about-us/"', 'href="about.php"', $footer);
$footer = str_replace('href="/services-1/"', 'href="services.php"', $footer);
$footer = str_replace('href="contact.php"', 'href="contact.php"', $footer);
$footer = str_replace('href="contact.php"', 'href="contact.php"', $footer);

// Replace "Network Security" etc in footer links to the new service pages.
$replacements = [
    'href="/service/network-security/"' => 'href="hipaa-compliance.php"',
    'href="/service/data-encryption/"' => 'href="iso-27001.php"',
    'href="/service/identity-access/"' => 'href="soc-2.php"',
    'href="/service/security-monitoring/"' => 'href="hitrust.php"',
    'href="/service/backup-recovery/"' => 'href="documentation-services.php"',
    'href="/service/security-configuration/"' => 'href="trust-security.php"',
    
    // Names
    '>Network Security<' => '>HIPAA Compliance<',
    '>Data Encryption<' => '>ISO 27001<',
    '>Identity &amp; Access<' => '>SOC 2 Compliance<',
    '>Security Monitoring<' => '>HITRUST Certification<',
    '>Backup &amp; Recovery<' => '>Documentation Services<',
    '>Security Configuration<' => '>Trust & Security<',
];

foreach($replacements as $search => $replace) {
    $footer = str_replace($search, $replace, $footer);
}

file_put_contents('footer.php', $footer);

echo "Global header and footer updated!\n";
