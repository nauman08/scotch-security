<?php

$template = file_get_contents('about.php');

$pages = [
    'hipaa-compliance.php' => [
        'title' => 'HIPAA Compliance - Scotch Security',
        'meta' => 'HIPAA Compliance Consulting services to help healthcare organizations protect PHI.',
        'page_title' => 'HIPAA Compliance',
        'subtitle' => 'HIPAA Compliance Consulting',
        'main_title' => 'HIPAA requires healthcare organizations and their partners to implement safeguards that protect Protected Health Information (PHI).',
        'main_desc' => 'We help organizations understand HIPAA requirements and implement security and privacy controls needed to achieve compliance.',
        'boxes_title' => 'Our HIPAA services',
        'boxes_desc' => 'HIPAA risk assessments, Security policy development, Administrative safeguard implementation, Technical safeguard implementation, Compliance documentation, HIPAA readiness review and assessments.',
        'list_title' => 'Who Needs HIPAA Compliance',
        'list_items' => [
            'Healthcare providers',
            'Health technology companies',
            'SaaS platforms handling healthcare data',
            'Business associates supporting healthcare organizations'
        ]
    ],
    'iso-27001.php' => [
        'title' => 'ISO 27001 Implementation - Scotch Security',
        'meta' => 'ISO 27001 Compliance and Implementation services for your ISMS.',
        'page_title' => 'ISO 27001',
        'subtitle' => 'ISO 27001 Compliance',
        'main_title' => 'ISO 27001 is the international standard for Information Security Management Systems (ISMS).',
        'main_desc' => 'We help organizations build structured security programs aligned with ISO 27001 requirements.',
        'boxes_title' => 'Benefits of ISO 27001',
        'boxes_desc' => 'Stronger information security governance, Improved risk management, Increased customer trust, Competitive advantage.',
        'list_title' => 'Our ISO 27001 services',
        'list_items' => [
            'ISO 27001 gap assessment',
            'ISMS implementation',
            'Risk assessment and treatment planning',
            'Security policy framework development'
        ]
    ],
    'soc-2.php' => [
        'title' => 'SOC 2 Compliance - Scotch Security',
        'meta' => 'SOC 2 Compliance Consulting services. Help for SaaS and Tech companies.',
        'page_title' => 'SOC 2 Compliance',
        'subtitle' => 'SOC 2 Compliance Consulting',
        'main_title' => 'SOC 2 is one of the most widely recognized security frameworks for technology and SaaS companies that handle customer data.',
        'main_desc' => 'SOC 2 focuses on the Trust Services Criteria: Security, Availability, Processing Integrity, Confidentiality, Privacy. We help organizations design and implement security controls that meet SOC 2 requirements and prepare for independent audits.',
        'boxes_title' => 'SOC 2 Type I vs Type II',
        'boxes_desc' => 'Type I evaluates the design of security controls at a specific point in time. Type II evaluates both the design and operational effectiveness of controls over a defined monitoring period.',
        'list_title' => 'Our SOC 2 services',
        'list_items' => [
            'SOC 2 Gap Assessment',
            'Security Policy & Procedure Development',
            'Security Control Implementation',
            'Documentation & Evidence Preparation'
        ]
    ],
    'hitrust.php' => [
        'title' => 'HITRUST Certification - Scotch Security',
        'meta' => 'HITRUST certification consulting for healthcare technology platforms.',
        'page_title' => 'HITRUST Certification',
        'subtitle' => 'HITRUST Compliance',
        'main_title' => 'HITRUST provides a comprehensive security and privacy framework widely adopted in healthcare environments.',
        'main_desc' => 'We assist organizations in preparing for HITRUST certification by implementing required security controls and compliance documentation.',
        'boxes_title' => 'Who Needs HITRUST',
        'boxes_desc' => 'Healthcare technology companies, SaaS platforms handling healthcare data, Business associates supporting healthcare organizations.',
        'list_title' => 'Our HITRUST services',
        'list_items' => [
            'Initial scoping & readiness assessment',
            'Security control implementation',
            'Compliance documentation development',
            'Preparation for external HITRUST validation'
        ]
    ],
    'documentation-services.php' => [
        'title' => 'Documentation Services - Scotch Security',
        'meta' => 'High-quality technical documentation for software products and systems.',
        'page_title' => 'Documentation Services',
        'subtitle' => 'Software & Technical Documentation',
        'main_title' => 'High-quality documentation helps organizations communicate complex systems clearly.',
        'main_desc' => 'We provide user-focused technical documentation tailored to organizational needs.',
        'boxes_title' => 'Documentation Types',
        'boxes_desc' => 'Architecture Documentation, Use Case Documentation, Installation Guides, API Documentation, User Manuals, Release Notes.',
        'list_title' => 'Documentation We Provide',
        'list_items' => [
            'Architecture & API Documentation',
            'User Manuals & Admin Guides',
            'Online Help Guides',
            'FAQs & Workflow Documentation'
        ]
    ],
    'trust-security.php' => [
        'title' => 'Trust & Security - Scotch Security',
        'meta' => 'Learn about our internal commitment to security and data protection.',
        'page_title' => 'Trust & Security',
        'subtitle' => 'Our Commitment to Security',
        'main_title' => 'As cybersecurity professionals, we maintain strong security practices within our own organization.',
        'main_desc' => 'Our security program focuses on protecting client information, maintaining confidentiality, and ensuring operational reliability.',
        'boxes_title' => 'Data Protection',
        'boxes_desc' => 'We maintain strict controls to ensure that customer data is protected against unauthorized access, disclosure, or loss.',
        'list_title' => 'Security Practices',
        'list_items' => [
            'Access control and identity management',
            'Encryption of sensitive data',
            'Security monitoring and logging',
            'Vulnerability management'
        ]
    ]
];

foreach ($pages as $filename => $data) {
    $html = $template;
    
    // PHP variables replacements
    $html = str_replace("'About Us - Scotch Security'", "'" . $data['title'] . "'", $html);
    $html = str_replace("'Learn more about Scotch Security. We are a dedicated team of cybersecurity experts committed to protecting your business from modern threats.'", "'" . $data['meta'] . "'", $html);
    
    // Title replacements
    $html = str_replace('<h1 class="pxl-page-title">About Us</h1>', '<h1 class="pxl-page-title">'.$data['page_title'].'</h1>', $html);
    $html = str_replace('<span class="breadcrumb-entry">About Us</span>', '<span class="breadcrumb-entry">'.$data['page_title'].'</span>', $html);
    
    // Section 1 replacements
    $html = str_replace('Who are we', $data['subtitle'], $html);
    $html = str_replace('We are a team of cybersecurity professionals specializing in information security governance, risk management, and compliance frameworks. Our experience spans across industries including healthcare, SaaS platforms, and technology organizations that require strong security practices and regulatory compliance. We help organizations implement structured security programs that align with global standards while supporting business operations.', $data['main_title'], $html);
    $html = str_replace('Our Mission', 'Overview', $html);
    $html = str_replace('To help organizations build secure, compliant, and well-documented systems that protect sensitive data and support long-term operational resilience.', $data['main_desc'], $html);
    
    // Section 2 replacements
    $html = str_replace('Our Expertise', 'Details', $html);
    $html = str_replace('Our team brings experience in:', $data['boxes_title'], $html);
    $html = str_replace('Information Security Management Systems (ISMS), Regulatory compliance frameworks, Security governance and risk management, Simplifying complex compliance requirements, Delivering clear and usable documentation.', $data['boxes_desc'], $html);
    
    // the 4 list items replacements
    $html = str_replace('ISMS Implementation', $data['list_items'][0], $html);
    $html = str_replace('Regulatory Compliance', $data['list_items'][1], $html);
    $html = str_replace('Security Governance', $data['list_items'][2], $html);
    $html = str_replace('Documentation Delivery', $data['list_items'][3], $html);
    $html = str_replace('Dedicated Security Professionals', $data['list_title'], $html);
    
    file_put_contents($filename, $html);
    echo "Created $filename\n";
}

