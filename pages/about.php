<?php
// Data pendidikan
$education = [
    [
        'degree' => 'Teknik Informatika',
        'school' => 'Universitas Teknologi Bandung',
        'year' => '2023 - Sekarang',
        'description' => 'Focused on software engineering and cybersecurity'
    ],
    [
        'degree' => 'Teknik Elektronika Industri',
        'school' => 'SMK Negeri 1 Katapang',
        'year' => '2019 - 2022',
        'description' => 'Focused on industrial electronics and automation'
    ],
    [
        'degree' => 'SMP Negeri 2 Soreang',
        'school' => 'SMP Negeri 2 Soreang',
        'year' => '2016 - 2019',
        'description' => 'General secondary education'
    ],
    [
        'degree' => 'SD Negeri 1 Soreang',
        'school' => 'SD Negeri 1 Soreang',
        'year' => '2010 - 2016',
        'description' => 'Basic primary education'
    ]
];

// Data skills
$skills = [
    ['name' => 'C++', 'level' => 82],
    ['name'=> 'Java', 'level'=> 89],
    ['name'=> 'Python', 'level'=> 80],
    ['name'=> 'Dart', 'level'=> 85],
    ['name' => 'HTML/CSS', 'level' => 85],
    ['name' => 'JavaScript', 'level' => 70],
    ['name' => 'PHP', 'level' => 70],
    ['name' => 'MySQL', 'level' => 85],
    ['name' => 'Git', 'level' => 88]
];

$page_title = "About - Syaiful Fathur Rozaq";
$current_page = "about";
$base_url = "../";
include '../includes/header.php'; 
?>

    <!-- About Section -->
    <section class="page-section">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">About Me</h1>
                <p class="subtitle">Get to know me better</p>
            </div>

            <div class="about-content">
                <div class="about-text">
                    <h2>Hello! I'm <span class="highlight">Syaiful Fathur Rozaq</span></h2>
                    <p>I am a student who is very enthusiastic about the world of technology, with a primary focus on the intersection of Artificial Intelligence (AI), the Internet of Things (IoT), and Cybersecurity. I actively seek out projects and challenges that allow me to apply AI to process IoT data, while ensuring that the security of the system remains guaranteed. I am passionate about continuing to learn and contribute to building smart and secure technology solutions.</p>
                    <p>When I'm not coding, you'll find me exploring new technologies, contributing to open-source projects, or sharing my knowledge through blog posts and tutorials.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="education-section">
        <div class="container">
            <h2 class="section-title">Education</h2>
            <div class="timeline">
                <?php foreach($education as $index => $edu): ?>
                <div class="timeline-item" style="animation-delay: <?= $index * 0.2 ?>s">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h3><?= $edu['degree'] ?></h3>
                        <h4><?= $edu['school'] ?></h4>
                        <span class="timeline-date"><?= $edu['year'] ?></span>
                        <p><?= $edu['description'] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
     
    <section class="skills-section">
        <div class="container">
            <h2 class="section-title">Technical Skills</h2>
            <div class="skills-list">
                <?php foreach($skills as $index => $skill): ?>
                <div class="skill-item" style="animation-delay: <?= $index * 0.1 ?>s">
                    <div class="skill-info">
                        <span class="skill-name"><?= $skill['name'] ?></span>
                        <span class="skill-percentage"><?= $skill['level'] ?>%</span>
                    </div>
                    <div class="skill-bar">
                        <div class="skill-progress" data-progress="<?= $skill['level'] ?>"></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>