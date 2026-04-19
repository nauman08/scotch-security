<?php
$html = file_get_contents('services.php');

$replacements = [
    '<h1 class="pxl-page-title">Services 1</h1>' => '<h1 class="pxl-page-title">Services</h1>',
    '<span class="breadcrumb-entry">Services 1</span>' => '<span class="breadcrumb-entry">Services</span>',
    
    // Icon 1
    'Network Security' => 'HIPAA Compliance',
    'Deploying firewalls and intrusion detection systems to safeguard networks.' => 'HIPAA consulting to help healthcare organizations protect PHI.',
    '/service/network-security/' => 'hipaa-compliance.php',
    
    // Icon 2
    'Data Encryption' => 'ISO 27001',
    'Encrypting sensitive data at rest and in transit using advanced encryption.' => 'ISO 27001 implementation services for your ISMS.',
    '/service/data-encryption/' => 'iso-27001.php',
    
    // Icon 3
    'Identity &amp; Access' => 'SOC 2 Compliance',
    'Managing user identities and access with MFA and detailed role-based control.' => 'SOC 2 consulting services for SaaS and technology providers.',
    '/service/identity-access/' => 'soc-2.php',
    
    // Icon 4
    'Security Monitoring' => 'HITRUST Certification',
    '24/7 monitoring with advanced SIEM systems for real-time detection.' => 'HITRUST certification readiness for healthcare tech.',
    '/service/security-monitoring/' => 'hitrust.php',
    
    // Icon 5
    'Backup &amp; Recovery' => 'Documentation Services',
    'Protecting critical data with secure backups and rapid recovery plans.' => 'High-quality technical documentation for your systems.',
    '/service/backup-recovery/' => 'documentation-services.php',
    
    // Icon 6
    'Security Configuration' => 'Trust & Security',
    'Hardening systems and applying secure configurations across all infrastructure.' => 'Learn about our internal commitment to security.',
    '/service/security-configuration/' => 'trust-security.php',
    
    // Bottom sections
    'Why Choose Us' => 'Cybersecurity & Compliance',
    'Complete Cyber Defense Against Modern Attacks' => 'Consulting and Implementation Services',
    'Stay protected with a fully integrated defense strategy built for today’s complex cyber landscape. From ransomware to phishing and zero-day exploits, we provide comprehensive protection across networks, endpoints, and cloud environments.' => 'We provide a range of cybersecurity consulting services designed to help organizations strengthen their security posture and achieve regulatory compliance.',
    
    'Advanced Threat Detection' => 'Security Consulting Services',
    'Leverage real-time monitoring and AI-driven analytics to detect threats on your systems.' => 'Information Security Program Development, Security Risk Assessments, Security Policy and Procedure Development, Security Control Implementation, Internal Security Audits',
    
    'Zero Trust Architecture' => 'Compliance Implementation',
    'Enforce strict access control and verification at every level to prevent lateral movement in your network.' => 'Our experts assist organizations with implementing security frameworks required to achieve certifications such as: HIPAA, ISO 27001, SOC2, HITRUST',
    
    'Need 24/7 Protection From Cyber Attacks?' => 'Need Expert Security & Compliance Consulting?',
    'Start For Free' => 'Contact Us',
    '/appointment/' => 'contact.php'
];

foreach($replacements as $search => $replace) {
    $html = str_replace($search, $replace, $html);
}

// Meta tags
$html = str_replace("'Our Services - Scotch Security'", "'Cybersecurity & Compliance Services - Scotch Security'", $html);
$html = str_replace("'Discover our robust cybersecurity services including Network Security, Data Encryption, Security Monitoring, and Incident Response.'", "'We provide a range of cybersecurity consulting services designed to help organizations strengthen their security posture and achieve regulatory compliance.'", $html);

file_put_contents('services.php', $html);
echo "services.php updated!\n";

