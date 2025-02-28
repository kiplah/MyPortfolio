<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | Victor Kiplangat</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Professional Color Scheme */
        :root {
            --primary-color: #1F3A93;
            --secondary-color: #2C3E50;
            --accent-color: #F5B041;
            --background-color: #F8F9FA;
            --text-color: #333;
        }

        /* Body Styling */
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
        }

        /* Hero Section */
        .hero {
            background: var(--primary-color);
            color: white;
            text-align: center;
            padding: 100px 20px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* About Section */
        .about-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 50px;
            padding: 80px 20px;
        }

        .about-img {
            width: 270px;
            border-radius: 50%;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease-in-out;
        }

        .about-img:hover {
            transform: scale(1.08);
        }

        .about-text {
            max-width: 600px;
            font-size: 1.2rem;
            color: var(--secondary-color);
            text-align: justify;
        }

        /* Section Headers */
        .section-header {
            color: var(--primary-color);
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Cards */
        .card-custom {
            background: white;
            border: 1px solid var(--secondary-color);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card-custom:hover {
            transform: scale(1.05);
        }

        /* Skills Section */
        .skills {
            background: var(--secondary-color);
            color: white;
            padding: 60px 20px;
            text-align: center;
        }

        .skill-item {
            display: inline-block;
            background: var(--accent-color);
            color: white;
            padding: 12px 18px;
            margin: 10px;
            border-radius: 25px;
            font-weight: bold;
            transition: transform 0.3s ease-in-out, background 0.3s;
        }

        .skill-item:hover {
            transform: translateY(-5px);
            background: #D8902B;
        }

        /* CTA Section */
        .cta {
            background: var(--primary-color);
            color: white;
            text-align: center;
            padding: 60px 20px;
        }

        /* Buttons */
        .btn-custom {
            background: var(--accent-color);
            color: white;
            font-weight: bold;
            padding: 12px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s ease-in-out, transform 0.2s;
        }

        .btn-custom:hover {
            background: #D8902B;
            transform: scale(1.05);
        }
    </style>

</head>
<body>

<?php include 'navbar.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1 class="fw-bold">About Me</h1>
        <p class="lead">Innovative IT Professional | Full-Stack Developer | Chess Enthusiast</p>
    </div>
</section>

<!-- About Section -->
<section class="container about-container">
    <img src="assets/images/victor.jpeg" alt="Victor Kiplangat" class="about-img">
    <div class="about-text">
        <p>I am Victor Kiplangat, a passionate IT specialist with expertise in web development, database management, and artificial intelligence. With a strong background in technology, I thrive on solving complex problems and building innovative solutions that drive business growth.</p>
    </div>
</section>

<!-- Education Section -->
<section class="container my-5">
    <h2 class="section-header">Education</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="card-custom">
                <h4>Karatina University</h4>
                <p>Bachelor of Science in Information Technology</p>
                <small>2022 - Present</small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-custom">
                <h4>Kericho Day Secondary School</h4>
                <p>Kenya Certificate of Secondary Education (KCSE)</p>
                <small>2018 - 2021</small>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="skills">
    <h2 class="fw-bold">Technical Skills</h2>
    <div>
        <span class="skill-item">PHP & Laravel</span>
        <span class="skill-item">Flask & Python</span>
        <span class="skill-item">Machine Learning</span>
        <span class="skill-item">PostgreSQL & MySQL</span>
        <span class="skill-item">Cybersecurity</span>
        <span class="skill-item">UI/UX Design</span>
        <span class="skill-item">Odoo Development</span>
        <span class="skill-item">DevOps & Cloud</span>
    </div>
</section>

<!-- Call-To-Action Section -->
<section class="cta">
    <div class="container">
        <h3 class="fw-bold">Let's Connect!</h3>
        <p class="lead">Looking for a tech expert? Let's collaborate!</p>
        <a href="contact.php" class="btn-custom">Contact Me</a>
    </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

</body>
</html>
