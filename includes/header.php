<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Kiplangat | Portfolio</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css"> 
    
    <!-- Bootstrap JS (Defer for Better Performance) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

    <style>
        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
        
        /* Improved Navbar Brand Style */
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #f8f9fa !important;
        }

        /* Fix Navbar Overlapping */
        body {
            padding-top: 80px; /* Adjust based on navbar height */
        }
    </style>
</head>
<body>

<?php 
    $currentPage = basename($_SERVER['PHP_SELF']); 
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <!-- Logo / Brand -->
        <a class="navbar-brand" href="index.php">Victor Kiplangat</a>
        
        <!-- Mobile Menu Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav" data-bs-auto-close="outside">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'index.php') ? 'active' : '' ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'about.php') ? 'active' : '' ?>" href="about.php">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'projects.php') ? 'active' : '' ?>" href="projects.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'services.php') ? 'active' : '' ?>" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($currentPage == 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>
