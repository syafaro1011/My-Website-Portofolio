<?php
$page_title = "Contact - Syaiful Fathur Rozaq";
$current_page = "kontak";
$base_url = "../";
include '../includes/header.php'; 
?>

    <!-- Contact Section -->
    <section class="page-section">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">Get In Touch</h1>
                <p class="subtitle">Have a project in mind? Let's talk about it</p>
            </div>

            <div class="contact-wrapper">
                <!-- Contact Info -->
                <div class="contact-info">
                    <h2>Contact Information</h2>
                    <p class="contact-subtitle">Fill out the form and I'll get back to you within 24 hours</p>
                    
                    <div class="info-items">
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-envelope"></i></div>
                            <div class="info-content">
                                <h3>Email</h3>
                                <a href="mailto:syaifulfathurrozaq@gmail.com">syaifulfathurrozaq@gmail.com</a>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="info-content">
                                <h3>Phone</h3>
                                <a href="tel:+6288886056098">+62 888-6056-098</a>
                            </div>
                        </div>
                        
                        <div class="info-item">
                            <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="info-content">
                                <h3>Location</h3>
                                <p>Bandung, Indonesia</p>
                            </div>
                        </div>
                    </div>

                    <div class="social-contact">
                        <h3>Follow Me</h3>
                        <div class="social-icons">
                            <a href="https://github.com/syafaro1011" class="social-icon"><i class="fab fa-github"></i> GitHub</a>
                            <a href="https://www.linkedin.com/in/syaiful-fathur-rozaq-b327741a6/" class="social-icon"><i class="fab fa-linkedin"></i> LinkedIn</a>
                            <a href="https://www.instagram.com/syfr_zq/" class="social-icon"><i class="fab fa-instagram"></i> Instagram</a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="contact-form-wrapper">
                    <form id="contactForm" class="contact-form">
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required placeholder="John Doe">
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" required placeholder="john@example.com">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="+62 812-3456-7890">
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <input type="text" id="subject" name="subject" required placeholder="Project Discussion">
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="5" required placeholder="Tell me about your project..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary submit-btn">
                            <span>Send Message</span>
                            <span class="btn-icon">→</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include '../includes/footer.php'; ?>