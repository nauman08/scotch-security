<?php

$file = 'about.php';
$content = file_get_contents($file);

$replacements = [
    'Defending Your Digital World, 24/7' => 'Who are we',
    'For over 15 years, we’ve been safeguarding organizations from evolving cyber threats. Our team of experts provides end-to-end security solutions — from proactive threat detection and vulnerability assessments to rapid incident response — ensuring your data, systems, and reputation remain fully protected in an ever-changing digital landscape.' => 'We are a team of cybersecurity professionals specializing in information security governance, risk management, and compliance frameworks. Our experience spans across industries including healthcare, SaaS platforms, and technology organizations that require strong security practices and regulatory compliance. We help organizations implement structured security programs that align with global standards while supporting business operations.',
    
    'Cybersecurity Experts' => 'Our Mission',
    'Comprehensive Cybersecurity Solutions for Modern Threats' => 'To help organizations build secure, compliant, and well-documented systems that protect sensitive data and support long-term operational resilience.',
    
    'Maximum Protection' => 'Our Expertise',
    'Cybersecurity Solutions for Complete Digital Safety' => 'Our team brings experience in:',
    'Safeguard your business with our comprehensive cybersecurity services. We protect your data, networks, and infrastructure using advanced threat detection, proactive defense strategies, and rapid incident response — ensuring peace of mind in an increasingly hostile digital world.' => 'Information Security Management Systems (ISMS), Regulatory compliance frameworks, Security governance and risk management, Simplifying complex compliance requirements, Delivering clear and usable documentation.',
    
    '24/7 threat monitoring and response' => 'ISMS Implementation',
    'Advanced protection against malware and ransomware' => 'Regulatory Compliance',
    'Customized security solutions for your business' => 'Security Governance',
    'Compliance-ready and future-proof defense strategies' => 'Documentation Delivery',
    
    'Our Team' => 'Our Commitment',
    'Complete Cyber Defense Against Modern Attacks' => 'Dedicated Security Professionals',
    
    'Need 24/7 Protection From Cyber Attacks?' => 'Need Expert Security & Compliance Consulting?',
    'Start For Free' => 'Contact Us',
    'Request a Security Assessment' => 'Request a Consultation',
    '/contact-us/' => 'contact.php',
    '/appointment/' => 'contact.php'
];

foreach ($replacements as $search => $replace) {
    $content = str_replace($search, $replace, $content);
}

file_put_contents($file, $content);
echo "about.php updated successfully.\n";

