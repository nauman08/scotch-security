<?php
$html = file_get_contents('index.php');

$replacements = [
    '<span class="pxl-item--subtext"> Why Choose Us </span>' => '<span class="pxl-item--subtext"> Why Choose Us </span>',
    'Complete Cyber Defense Against Modern Attacks' => 'Why Organizations Work With Us',
    'Stay protected with a fully integrated defense strategy built for today’s complex cyber landscape. From ransomware to phishing and zero-day exploits, we provide comprehensive protection across networks, endpoints, and cloud environments.' => 'We help organizations implement structured security programs that align with global standards while supporting business operations.',
    
    // There are 4 list items in index.php
    '24/7 threat monitoring and response' => 'Experienced Information Security specialists',
    'Advanced protection against malware and ransomware' => 'Practical and scalable compliance solutions',
    'Customized security solutions for your business' => 'Clear and professional technical documentation',
    'Compliance-ready and future-proof defense strategies' => 'End-to-end support from assessment to certification',
    // It has a fifth we could add but since it's hardcoded to 4 list items, changing the 4 is enough.
    
    // There is also 'Advanced Threat Detection' block
    'Advanced Threat Detection' => 'Security Program Development',
    'Leverage real-time monitoring and AI-driven analytics to detect threats on your systems.' => 'Simplifying complex compliance requirements with structured governance.',
    
    'Zero Trust Architecture' => 'Compliance Readiness',
    'Enforce strict access control and verification at every level to prevent lateral movement in your network.' => 'Prepare for HIPAA, ISO 27001, SOC 2, and HITRUST with confidence.',
    
    'Need 24/7 Protection From Cyber Attacks?' => 'Need Expert Security & Compliance Consulting?',
    'Start For Free' => 'Contact Us',
    '/appointment/' => 'contact.php',
    '/contact-us/' => 'contact.php',
    
    'Total Cybersecurity' => 'Information Security',
    'Cyber Defense' => 'Scotch Security',
    'Testimonials' => 'Customer Success',
    'Hear It from Our Happy Customers' => 'Feedback from our clients'
];

foreach ($replacements as $search => $replace) {
    $html = str_replace($search, $replace, $html);
}

// Global hero text replacement if available
$html = str_replace('Keeping Your Business One Step Ahead of Hackers', 'Governance, Risk Management, and Compliance Frameworks', $html);

file_put_contents('index.php', $html);
echo "index.php updated!\n";
