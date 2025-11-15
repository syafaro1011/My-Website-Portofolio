<?php 
$page_title = "Home - John Doe";
$current_page = "home";
$base_url = "";
include 'includes/header.php'; 
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-image">
                    <div class="image-container">
                        <img src="assets/images/profile.jpeg" alt="Profile" onerror="this.src='data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 width=%22500%22 height=%22500%22%3E%3Ccircle cx=%22250%22 cy=%22250%22 r=%22250%22 fill=%22%23151a35%22/%3E%3Ctext x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 fill=%22%2300d9ff%22 font-size=%2260%22%3EJD%3C/text%3E%3C/svg%3E'">
                    </div>
                </div>
                <div class="hero-text">
                    <h1 class="glitch" data-text="Hi, I'm John Doe">Hi, I'm Syaiful Fathur Rozaq</h1>
                    <p class="typing-text"></p>
                    <p class="hero-description">Passionate about creating elegant solutions to complex problems through clean code and innovative things.</p>
                    <div class="hero-buttons">
                        <a href="pages/about.php" class="btn btn-primary">About Me</a>
                        <a href="pages/kontak.php" class="btn btn-secondary">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
        </div>
    </section>
    <section class="skills-preview">
        <div class="container">
            <h2 class="section-title">Core Skills</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-icon"><i class="fas fa-code"></i></div>
                    <h3>Web Development</h3>
                    <p>Building responsive and interactive websites</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h3>Mobile First</h3>
                    <p>Responsive design for all devices</p>
                </div>
                <div class="skill-card">
                    <div class="skill-icon"><i class="fas fa-bolt"></i></div>
                    <h3>IoT</h3>
                    <p>Integrating smart devices for seamless connectivity</p>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>