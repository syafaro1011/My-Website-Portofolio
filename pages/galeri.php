<?php
// Data proyek portfolio
$projects = [
    [
        'title' => 'MasakCuy - Online Recipe Platform',
        'category' => 'Web Development',
        'description' => 'A full-featured online recipe platform with user submissions and ratings',
        'technologies' => ['Java', 'MySQL', 'JavaScript', 'Bootstrap', 'SpringBoot'],
        'image' => '../assets/images/project1.jpg',
        'link' => '#'
    ],
    [
        'title' => 'To-Do List App',
        'category' => 'Web Application',
        'description' => 'Real-time collaborative task management tool with team features',
        'technologies' => ['Java', 'MySQL', 'SpringBoot', 'Bootstrap', 'CSS3'],
        'image' => '../assets/images/project2.jpg',
        'link' => '#'
    ],
    [
        'title' => 'Portfolio Website',
        'category' => 'Web Design',
        'description' => 'Modern and responsive portfolio website with smooth animations',
        'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP'],
        'image' => '../assets/images/project3.jpg',
        'link' => '#'
    ],
    [
        'title' => 'ChatBot UMKM',
        'category' => 'AI',
        'description' => 'AI-powered chatbot for small business customer support',
        'technologies' => ['Python', 'API', 'Flask', 'JavaScript', 'HTML/CSS', 'JSON'],
        'image' => '../assets/images/project4.jpg',
        'link' => '#'
    ],
    [
        'title' => 'MasakCuy - Online Recipe Platform',
        'category' => 'Mobile App',
        'description' => 'Mobile application for browsing and sharing recipes on the go',
        'technologies' => ['Java', 'SQLite'],
        'image' => '../assets/images/project6.jpg',
        'link' => '#'
    ]
];

$categories = ['All', 'Web Development', 'Web Application', 'Web Design', 'Mobile App', 'AI'];

$page_title = "Projects - Syaiful Fathur Rozaq";
$current_page = "galeri";
$base_url = "../";
include '../includes/header.php'; 
?>

    <!-- Projects Section -->
    <section class="page-section">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">My Projects</h1>
                <p class="subtitle">Check out some of my recent work</p>
            </div>

            <!-- Filter Buttons -->
            <div class="filter-buttons">
                <?php foreach($categories as $category): ?>
                <button class="filter-btn <?= $category === 'All' ? 'active' : '' ?>" data-filter="<?= strtolower(str_replace(' ', '-', $category)) ?>">
                    <?= $category ?>
                </button>
                <?php endforeach; ?>
            </div>

            <!-- Projects Grid -->
            <div class="projects-grid">
                <?php foreach($projects as $index => $project): ?>
                <div class="project-card" data-category="<?= strtolower(str_replace(' ', '-', $project['category'])) ?>" style="animation-delay: <?= $index * 0.1 ?>s">
                    <div class="project-image">
                        <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22400%22 height=%22300%22%3E%3Crect width=%22400%22 height=%22300%22 fill=%22%23151a35%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 fill=%22%2300d9ff%22 font-size=%2224%22%3E<?= urlencode($project['title']) ?>%3C/text%3E%3C/svg%3E'">
                        <div class="project-overlay">
                            <a href="<?= $project['link'] ?>" class="project-link">View Project →</a>
                        </div>
                    </div>
                    <div class="project-content">
                        <span class="project-category"><?= $project['category'] ?></span>
                        <h3 class="project-title"><?= $project['title'] ?></h3>
                        <p class="project-description"><?= $project['description'] ?></p>
                        <div class="project-tech">
                            <?php foreach($project['technologies'] as $tech): ?>
                            <span class="tech-tag"><?= $tech ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>