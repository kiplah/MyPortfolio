<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero d-flex align-items-center">
    <div class="container text-center">
        <!-- Static Hello Text and Typing Effect -->
        <div class="hero-text">
            <h1 class="fw-bold mb-0">Hello, there!</h1> <!-- Static text -->
            <div class="typing-container">
                <span id="typed-text"></span> <!-- Typing effect -->
            </div>
        </div>
    </div>

    <!-- Buttons Container -->
    <div class="fixed-button">
        <a href="projects.php" class="btn btn-primary btn-lg">View My Work</a>
        <a href="assets/My Resume.pdf" class="btn btn-outline-light btn-lg resume-button" download>Download My Resume</a>
    </div>
</section>

<!-- About Me Section -->
<section class="about py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left: Text Content -->
            <div class="col-lg-6">
                <h2 class="fw-bold fade-in">About Me</h2>
                <p class="lead fade-in delay">
                    I'm Victor Kiplangat, a passionate <strong>Full-Stack Developer</strong> with expertise in PHP, JavaScript, and database management.
                    I specialize in creating <strong>responsive and scalable</strong> web applications, integrating advanced technologies for seamless user experiences.
                </p>
                <a href="about.php" class="btn btn-primary fade-in delay-btn">Read More</a>
            </div>
            <!-- Right: Profile Image -->
            <div class="col-lg-6 text-center">
                <img src="assets/images/profile.jpeg" alt="Victor Kiplangat" class="profile-img fade-in">
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- Typed.js for Typing Effect -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        new Typed("#typed-text", {
            strings: [
                "I'm Victor Kiplangat",
                "A Full-Stack Developer",
                "A Machine Learning Enthusiast",
                "I like coding and playing chess",
                "Let's get in touch!"
            ],
            typeSpeed: 80,
            backSpeed: 50,
            loop: true,
            showCursor: true,
            cursorChar: "|"
        });
    });
</script>

<!-- Custom CSS -->
<style>
/* Hero Section */
.hero {
    height: 90vh;
    background: url('assets/images/background.jpeg') no-repeat center center/cover;
    position: relative;
    color: white;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

/* Dark overlay for readability */
.hero::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
}

/* Ensure content appears above overlay */
.hero .container {
    position: relative;
    z-index: 2;
}

/* Fix Hello There and Typing Effect Position */
.hero-text {
    font-size: 50px;
    font-weight: bold;
    color:rgb(247, 8, 139);
}

/* Typing Effect Styling */
.typing-container {
    font-size: 30px;
    font-weight: bold;
    color: white;
}

/* Fix View My Work & Resume Button Position */
.fixed-button {
    position: absolute;
    bottom: 15%;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    text-align: center;
}

/* Style for Resume Button */
.resume-button {
    margin-top: 50%; /* Spacing below View My Work */
    margin-left: -50%; /* Slightly shift left */
    display: inline-block;
    padding: 12px 20px;
    font-size: 16px;
    border-radius: 5px;
    transition: 0.3s;
    font-weight: bold;
    color: white;
    border: 2px solid white;
}

.resume-button:hover {
    background: white;
    color: black;
}

/* Responsive Font Size */
@media (max-width: 768px) {
    .hero-text {
        font-size: 40px;
    }
}

@media (max-width: 480px) {
    .hero-text {
        font-size: 30px;
    }
}

/* Profile Image Styling */
.profile-img {
    width: 80%;
    max-width: 350px;
    border-radius: 50%;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease-in-out;
}

.profile-img:hover {
    transform: scale(1.05);
}

/* Smooth Fade-in Effect */
.fade-in {
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 1s ease-out forwards;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
