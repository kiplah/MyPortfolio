<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | Victor Kiplangat</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <style>
        /* Hero Section */
        .hero {
            background: linear-gradient(to right, #001f3f, #0056b3);
            color: white;
            text-align: center;
            padding: 100px 20px;
        }

        /* Service Card */
        .service-card {
            background: #1e293b;
            color: #f8f9fa;
            border-radius: 12px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0px 10px 20px rgba(0, 140, 255, 0.5);
        }

        .service-icon {
            font-size: 50px;
            margin-bottom: 15px;
            color: #00c6ff;
        }

        /* Service Button */
        .service-btn {
            display: inline-block;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 25px;
            background: linear-gradient(to right, #007bff, #00c6ff);
            color: white;
            text-decoration: none;
            transition: background 0.3s ease-in-out, transform 0.2s ease-in-out;
        }

        .service-btn:hover {
            background: linear-gradient(to right, #0056b3, #008fb3);
            transform: scale(1.05);
        }

        /* CTA Section */
        .cta {
            background: #000814;
            color: white;
            text-align: center;
            padding: 60px 20px;
        }
    </style>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1 class="fw-bold">My Services</h1>
        <p class="lead">Delivering top-notch solutions in web development, AI, software, and more.</p>
    </div>
</section>

<!-- Services Section -->
<div class="container my-5">
    <div class="row g-4">

        <!-- Service Cards -->
        <?php 
        $services = [
            ["icon" => "🖥", "title" => "Web Development", "desc" => "Building responsive and user-friendly websites using PHP, Flask, and modern frameworks."],
            ["icon" => "🤖", "title" => "AI & Data Science", "desc" => "Creating intelligent systems for medical diagnosis, expert systems, and business analytics."],
            ["icon" => "🛠", "title" => "Software Development", "desc" => "Developing scalable applications for businesses using Python, PHP, and more."],
            ["icon" => "🗄", "title" => "Database Management", "desc" => "Designing efficient database systems using PostgreSQL, MySQL, and MongoDB."],
            ["icon" => "🔒", "title" => "Cybersecurity & Networking", "desc" => "Securing systems and analyzing networks using Wireshark, Packet Tracer, and more."],
            ["icon" => "📞", "title" => "IT Consultation", "desc" => "Providing expert guidance on IT solutions, system design, and project management."],
            ["icon" => "📱", "title" => "Mobile App Development", "desc" => "Building Android & iOS apps with Flutter and React Native."],
            ["icon" => "🎨", "title" => "UI/UX Design", "desc" => "Designing intuitive and engaging user experiences with Figma & Adobe XD."],
            ["icon" => "☁️", "title" => "DevOps & Cloud", "desc" => "Optimizing workflows and deploying on AWS, Azure, and Google Cloud."]
        ];
        
        foreach ($services as $service) {
            echo '
            <div class="col-md-6 col-lg-4">
                <div class="card text-center p-4 shadow-sm border-0 service-card">
                    <div class="service-icon">'.$service["icon"].'</div>
                    <h4 class="mt-3 fw-bold">'.$service["title"].'</h4>
                    <p class="text-light">'.$service["desc"].'</p>
                    <a href="#" class="service-btn mt-3">Learn More</a>
                </div>
            </div>';
        }
        ?>
        
    </div>
</div>

<!-- CTA Section -->
<section class="cta">
    <div class="container">
        <h3 class="fw-bold">Let's Work Together!</h3>
        <p class="lead">Interested in any of my services? Get in touch today.</p>
        <a href="contact.php" class="btn btn-primary btn-lg mt-3">Contact Me</a>
    </div>
</section>

</body>
</html>
