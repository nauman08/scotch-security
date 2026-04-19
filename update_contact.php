<?php
$html = file_get_contents('contact.php');

$replacements = [
    '<h1 class="pxl-page-title">Contact Us</h1>' => '<h1 class="pxl-page-title">Contact Us</h1>',
    '&quot;Prevention is cheaper than a breach&quot;' => '&quot;Prevention is cheaper than a breach&quot;',
    // Find generic placeholder text from the template and replace it
    'Get in Touch' => 'Get in Touch',
    'We love to hear from you. Our team is always here to chat.' => 'If your organization is looking to strengthen its cybersecurity posture or achieve regulatory compliance, our team is ready to help. We provide expert guidance and practical solutions tailored to your business needs.',
    'Contact Info' => 'Request a Consultation',
    'Our team is always here to chat' => 'Reach out to our team to discuss your security or compliance needs.',
    // Specific email override (already done earlier ideally, but ensuring safety)
    'contact@cyberguard.com' => 'salman.anjum@scotchsecurity.com'
];

foreach ($replacements as $search => $replace) {
    $html = str_replace($search, $replace, $html);
}

// Meta tags
$html = str_replace("'Contact Us - Scotch Security'", "'Contact Us - Scotch Security'", $html);
$html = str_replace("'Get in touch with Scotch Security. Request a consultation for comprehensive cybersecurity services.'", "'Get in touch with Scotch Security. Request a consultation for comprehensive cybersecurity and compliance services.'", $html);

file_put_contents('contact.php', $html);
echo "contact.php updated!\n";
