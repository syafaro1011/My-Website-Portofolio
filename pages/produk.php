<?php
// Contoh data produk/layanan yang ditawarkan
$services = [
    [
        'icon' => '<i class="fas fa-laptop-code"></i>',
        'title' => 'Web Development',
        'description' => 'Custom website development with modern technologies',
        'price' => 'Starting from $500',
        'features' => ['Responsive Design', 'SEO Optimized', 'Fast Loading', 'Maintenance Support']
    ],
    [
        'icon' => '<i class="fas fa-mobile-alt"></i>',
        'title' => 'Mobile App Development',
        'description' => 'Native and cross-platform mobile applications',
        'price' => 'Starting from $1000',
        'features' => ['iOS & Android', 'API Integration', 'Push Notifications', 'App Store Deployment']
    ],
    [
        'icon' => '<i class="fas fa-paint-brush"></i>',
        'title' => 'UI/UX Design',
        'description' => 'Beautiful and intuitive user interface design',
        'price' => 'Starting from $300',
        'features' => ['Wireframing', 'Prototyping', 'User Research', 'Design System']
    ],
    [
        'icon' => '<i class="fas fa-rocket"></i>',
        'title' => 'Consultation',
        'description' => 'Technical consultation and project planning',
        'price' => '$50/hour',
        'features' => ['Tech Stack Selection', 'Architecture Planning', 'Code Review', 'Performance Audit']
    ]
];

$page_title = "Services - John Doe";
$current_page = "produk";
$base_url = "../";
include '../includes/header.php'; 
?>

    <!-- Services Section -->
    <section class="page-section">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">My Services</h1>
                <p class="subtitle">What I can do for you</p>
            </div>

            <div class="services-grid">
                <?php foreach($services as $index => $service): ?>
                <div class="service-card" style="animation-delay: <?= $index * 0.1 ?>s">
                    <div class="service-icon"><?= $service['icon'] ?></div>
                    <h3 class="service-title"><?= $service['title'] ?></h3>
                    <p class="service-description"><?= $service['description'] ?></p>
                    <div class="service-price"><?= $service['price'] ?></div>
                    
                    <ul class="service-features">
                        <?php foreach($service['features'] as $feature): ?>
                        <li><i class="fas fa-check"></i> <?= $feature ?></li>
                        <?php endforeach; ?>
                    </ul>
                    
                    <a href="kontak.php" class="service-btn"><i class="fas fa-arrow-right"></i> Get Started</a>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Process Section -->
            <div class="process-section">
                <h2 class="section-title">How I Work</h2>
                <div class="process-steps">
                    <div class="process-step">
                        <div class="step-number">01</div>
                        <h3>Discovery</h3>
                        <p>Understanding your needs and project requirements</p>
                    </div>
                    <div class="process-arrow">→</div>
                    <div class="process-step">
                        <div class="step-number">02</div>
                        <h3>Planning</h3>
                        <p>Creating detailed project roadmap and timeline</p>
                    </div>
                    <div class="process-arrow">→</div>
                    <div class="process-step">
                        <div class="step-number">03</div>
                        <h3>Development</h3>
                        <p>Building your project with regular updates</p>
                    </div>
                    <div class="process-arrow">→</div>
                    <div class="process-step">
                        <div class="step-number">04</div>
                        <h3>Delivery</h3>
                        <p>Testing, deployment, and ongoing support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>