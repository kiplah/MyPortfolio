<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects - Portfolio</title>
    <link rel="stylesheet" href="assets/css/styles.css">  <!-- Correct CSS path -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">  <!-- Bootstrap -->
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
            <div class="row">
                <!-- Project 1 -->
                <div class="col-md-4">
                    <div class="card project-card">
                        <img src="assets/images/project1.jpg" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">Restaurant Management System</h5>
                            <p class="card-text">A complete PHP-based system for managing orders, menus, and payments.</p>
                            <div class="tech-stack">
                                <span class="badge bg-primary">PHP</span>
                                <span class="badge bg-warning">MySQL</span>
                                <span class="badge bg-dark">Bootstrap</span>
                            </div>
                            <div class="project-links">
                                <a href="https://github.com/kiplah/restaurant-management" target="_blank" class="btn btn-outline-dark">GitHub</a>
                                <a href="#" class="btn btn-gold">Live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-4">
                    <div class="card project-card fade-in">
                        <img src="assets/images/project2.jpg" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Movie Ticket Booking System</h5>
                            <p class="card-text">A Flask-based system for booking movie tickets online.</p>
                            <div class="tech-stack">
                                <span class="badge bg-danger">Flask</span>
                                <span class="badge bg-info">HTML/CSS</span>
                                <span class="badge bg-secondary">SQLite</span>
                            </div>
                            <div class="project-links">
                                <a href="https://github.com/kiplah/movie-booking" target="_blank" class="btn btn-outline-dark">GitHub</a>
                                <a href="#" class="btn btn-gold">Live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-4">
                    <div class="card project-card fade-in delay">
                        <img src="assets/images/project3.jpg" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">Dairy Farm Management System</h5>
                            <p class="card-text">A PostgreSQL-based system for dairy record-keeping and analysis.</p>
                            <div class="tech-stack">
                                <span class="badge bg-success">PostgreSQL</span>
                                <span class="badge bg-primary">Python</span>
                                <span class="badge bg-dark">Django</span>
                            </div>
                            <div class="project-links">
                                <a href="https://github.com/kiplah/dairy-farm" target="_blank" class="btn btn-outline-dark">GitHub</a>
                                <a href="#" class="btn btn-gold">Live Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View More Button -->
            <div class="text-center mt-4">
                <a href="projects.php" class="btn btn-dark btn-lg">View More Projects</a>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
