<?php
// Data dokumen yang tersedia untuk diunduh
$documents = [
    [
        'title' => 'Curriculum Vitae (CV)',
        'description' => 'My complete professional resume and work experience',
        'icon' => '<i class="fas fa-file-pdf"></i>',
        'file' => '../assets/documents/CV_John_Doe.pdf',
        'size' => '245 KB',
        'type' => 'PDF',
        'color' => '#e74c3c'
    ],
    [
        'title' => 'Portfolio PDF',
        'description' => 'Complete portfolio presentation with project details',
        'icon' => '<i class="fas fa-folder-open"></i>',
        'file' => '../assets/documents/Portfolio_John_Doe.pdf',
        'size' => '3.2 MB',
        'type' => 'PDF',
        'color' => '#3498db'
    ],
    [
        'title' => 'Certificates',
        'description' => 'Professional certifications and achievements',
        'icon' => '<i class="fas fa-certificate"></i>',
        'file' => '../assets/documents/Certificates.pdf',
        'size' => '1.8 MB',
        'type' => 'PDF',
        'color' => '#f39c12'
    ],
    [
        'title' => 'Cover Letter',
        'description' => 'Professional cover letter template',
        'icon' => '<i class="fas fa-file-alt"></i>',
        'file' => '../assets/documents/Cover_Letter.pdf',
        'size' => '156 KB',
        'type' => 'PDF',
        'color' => '#9b59b6'
    ],
    [
        'title' => 'Project Documentation',
        'description' => 'Technical documentation of major projects',
        'icon' => '<i class="fas fa-book"></i>',
        'file' => '../assets/documents/Project_Docs.pdf',
        'size' => '2.5 MB',
        'type' => 'PDF',
        'color' => '#1abc9c'
    ],
    [
        'title' => 'References',
        'description' => 'Professional references and recommendations',
        'icon' => '<i class="fas fa-user-friends"></i>',
        'file' => '../assets/documents/References.pdf',
        'size' => '180 KB',
        'type' => 'PDF',
        'color' => '#e67e22'
    ]
];

$page_title = "Documents - John Doe";
$current_page = "dokumen";
$base_url = "../";
include '../includes/header.php'; 
?>

    <!-- Documents Section -->
    <section class="page-section">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">My Documents</h1>
                <p class="subtitle">Download my professional documents and certificates</p>
            </div>

            <!-- Documents Info Banner -->
            <div class="docs-info-banner">
                <div class="info-icon">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div class="info-content">
                    <h3>About These Documents</h3>
                    <p>All documents are available in PDF format. Click the download button to save them to your device. Files are regularly updated to reflect latest information.</p>
                </div>
            </div>

            <!-- Documents Grid -->
            <div class="documents-grid">
                <?php foreach($documents as $index => $doc): ?>
                <div class="document-card" style="animation-delay: <?= $index * 0.1 ?>s">
                    <div class="doc-icon" style="color: <?= $doc['color'] ?>">
                        <?= $doc['icon'] ?>
                    </div>
                    <div class="doc-content">
                        <h3 class="doc-title"><?= $doc['title'] ?></h3>
                        <p class="doc-description"><?= $doc['description'] ?></p>
                        <div class="doc-meta">
                            <span class="doc-type">
                                <i class="fas fa-file"></i> <?= $doc['type'] ?>
                            </span>
                            <span class="doc-size">
                                <i class="fas fa-hdd"></i> <?= $doc['size'] ?>
                            </span>
                        </div>
                    </div>
                    <div class="doc-actions">
                        <a href="<?= $doc['file'] ?>" class="btn-download" download>
                            <i class="fas fa-download"></i> Download
                        </a>
                        <a href="<?= $doc['file'] ?>" class="btn-view" target="_blank">
                            <i class="fas fa-eye"></i> View
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Quick Links Section -->
            <div class="quick-links-section">
                <h2 class="section-title">Need More Information?</h2>
                <div class="quick-links-grid">
                    <a href="about.php" class="quick-link-card">
                        <div class="link-icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <h3>About Me</h3>
                        <p>Learn more about my background and experience</p>
                    </a>
                    <a href="galeri.php" class="quick-link-card">
                        <div class="link-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>My Projects</h3>
                        <p>View my portfolio and recent work</p>
                    </a>
                    <a href="kontak.php" class="quick-link-card">
                        <div class="link-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h3>Contact Me</h3>
                        <p>Get in touch for opportunities</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>