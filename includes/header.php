<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Portfolio - Syaiful Fathur Rozaq'; ?></title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/style.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="nav-brand">
                <a href="<?php echo $base_url; ?>index.php">SFR<span class="dot">.</span></a>
            </div>
            <div class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="<?php echo $base_url; ?>index.php" class="<?php echo $current_page == 'home' ? 'active' : ''; ?>">Home</a></li>
                <li><a href="<?php echo $base_url; ?>pages/about.php" class="<?php echo $current_page == 'about' ? 'active' : ''; ?>">About</a></li>
                <li><a href="<?php echo $base_url; ?>pages/galeri.php" class="<?php echo $current_page == 'galeri' ? 'active' : ''; ?>">Projects</a></li>
                <li><a href="<?php echo $base_url; ?>pages/dokumen.php" class="<?php echo $current_page == 'dokumen' ? 'active' : ''; ?>">Documents</a></li>
                <li><a href="<?php echo $base_url; ?>pages/kontak.php" class="<?php echo $current_page == 'kontak' ? 'active' : ''; ?>">Contact</a></li>
            </ul>
        </div>
    </nav>