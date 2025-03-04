<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects - Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">  <!-- Bootstrap -->
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        /* Navigation */
        .navbar {
            background-color: #343a40 !important;
            padding: 10px 20px;
        }

        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }

        /* Section Styling */
        .projects-section {
            padding: 60px 0;
        }

        .section-title {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 10px;
        }

        .section-subtitle {
            font-size: 1.2rem;
            text-align: center;
            color: #555;
            margin-bottom: 40px;
        }

        /* Project Cards */
        .project-card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .project-card:hover {
            transform: scale(1.05);
        }

        .project-card img {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 200px;
            object-fit: cover;
        }

        .project-card .card-body {
            text-align: center;
        }

        .tech-stack .badge {
            margin: 3px;
            font-size: 0.9rem;
        }

        /* Buttons */
        .btn-gold {
            background-color: #ffc107;
            color: #000;
            border-radius: 5px;
            font-weight: bold;
        }

        .btn-gold:hover {
            background-color: #e0a800;
        }

        .btn-outline-dark {
            font-weight: bold;
        }

        /* View More Button */
        .view-more {
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <?php include 'navbar.php'; ?>

    <!-- Projects Section -->
    <section id="projects" class="projects-section">
        <div class="container">
            <h2 class="section-title">My Projects</h2>
            <p class="section-subtitle">A showcase of my best work in Web Development, AI, and Databases.</p>

            <!-- Project Grid -->
            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-md-4">
                    <div class="card project-card">
                        <img src="assets/images/project1.jpg" class="card-img-top" alt="Restaurant Management System">
                        <div class="card-body">
                            <h5 class="card-title">Restaurant Management System</h5>
                            <p class="card-text">A PHP-based system for managing orders, menus, and payments.</p>
                            <div class="tech-stack">
                                <span class="badge bg-primary">PHP</span>
                                <span class="badge bg-warning">MySQL</span>
                                <span class="badge bg-dark">Bootstrap</span>
                            </div>
                            <div class="mt-3">
                                <a href="https://github.com/kiplah/restaurant-management" target="_blank" class="btn btn-outline-dark btn-sm">GitHub</a>
                                <a href="#" class="btn btn-gold btn-sm">Live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-4">
                    <div class="card project-card">
                        <img src="assets/images/project2.jpg" class="card-img-top" alt="Movie Ticket Booking System">
                        <div class="card-body">
                            <h5 class="card-title">Movie Ticket Booking System</h5>
                            <p class="card-text">A Flask-based system for booking movie tickets online.</p>
                            <div class="tech-stack">
                                <span class="badge bg-danger">Flask</span>
                                <span class="badge bg-info">HTML/CSS</span>
                                <span class="badge bg-secondary">SQLite</span>
                            </div>
                            <div class="mt-3">
                                <a href="https://github.com/kiplah/movie-booking" target="_blank" class="btn btn-outline-dark btn-sm">GitHub</a>
                                <a href="#" class="btn btn-gold btn-sm">Live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-4">
                    <div class="card project-card">
                        <img src="assets/images/project3.jpg" class="card-img-top" alt="Dairy Farm Management System">
                        <div class="card-body">
                            <h5 class="card-title">Dairy Farm Management System</h5>
                            <p class="card-text">A PostgreSQL-based system for dairy record-keeping and analysis.</p>
                            <div class="tech-stack">
                                <span class="badge bg-success">PostgreSQL</span>
                                <span class="badge bg-primary">Python</span>
                                <span class="badge bg-dark">Django</span>
                            </div>
                            <div class="mt-3">
                                <a href="https://github.com/kiplah/dairy-farm" target="_blank" class="btn btn-outline-dark btn-sm">GitHub</a>
                                <a href="#" class="btn btn-gold btn-sm">Live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View More Button -->
            <div class="text-center view-more">
                <a href="projects.php" class="btn btn-dark btn-lg">View More Projects</a>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
