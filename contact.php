<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me | Victor Kiplangat</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .contact-container {
            width: 50%;
            max-width: 600px;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #0d6efd;
            font-weight: 600;
        }
        .contact-info a {
            display: block;
            margin: 12px 0;
            padding: 12px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
        }
        .whatsapp { background: #25D366; color: white; }
        .sms { background: #007BFF; color: white; }
        .call { background: #28A745; color: white; }
        .email { background: #FF5722; color: white; }
        .contact-info a:hover {
            opacity: 0.8;
            transform: scale(1.05);
        }
        .social-icons a {
            margin: 10px;
            display: inline-block;
            transition: transform 0.3s ease-in-out;
        }
        .social-icons img {
            width: 35px;
        }
        .social-icons a:hover {
            transform: scale(1.2);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="contact-container">
    <h2>Let's Connect</h2>
    <p>Feel free to reach out via any of the options below.</p>

    <div class="contact-info">
        <a href="https://wa.me/254703924936" class="whatsapp">📱 WhatsApp: +254 703 924 936</a>
        <a href="sms:+254703924936" class="sms">📩 Send an SMS</a>
        <a href="tel:+254703924936" class="call">📞 Call Me</a>
        <a href="mailto:vicktechsolutions4@gmail.com" class="email">📧 Email Me</a>
    </div>

    <h3 class="mt-4">Follow Me</h3>
    <div class="social-icons">
        <a href="https://www.facebook.com/victor.collins.589583/" target="_blank">
            <img src="assets/icons/facebook.png" alt="Facebook">
        </a>
        <a href="https://wa.me/254703924936" target="_blank">
            <img src="assets/icons/whatsapp.png" alt="WhatsApp">
        </a>
        <a href="https://x.com/kiplah001" target="_blank">
            <img src="assets/icons/twitter.png" alt="Twitter">
        </a>
        <a href="https://www.instagram.com/kiplah_1/" target="_blank">
            <img src="assets/icons/instagram.png" alt="Instagram">
        </a>
        <a href="https://www.linkedin.com/in/victor-kiplangat-03b2b3350/" target="_blank">
            <img src="assets/icons/linkedin.png" alt="LinkedIn">
        </a>
        <a href="https://github.com/kiplah" target="_blank">
            <img src="assets/icons/github.png" alt="GitHub">
        </a>
    </div>
</div>

</body>
</html>
