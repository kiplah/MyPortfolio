<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero d-flex align-items-center">
    <div class="container text-center">
        <!-- Static Hello Text -->
        <h1 class="fw-bold mb-0">Hello, there!</h1> <!-- mb-0 to remove default margin -->

        <!-- Typing Animation Below -->
        <div class="typing-container mt-3"> <!-- Added mt-3 for spacing -->
            <span id="typed-text"></span> <!-- Holds the typing effect -->
        </div>

        <!-- Fixed Button Below Typing Animation -->
        <div class="mt-4"> <!-- Added mt-4 for spacing -->
            <a href="projects.php" class="btn btn-primary btn-lg">View My Work</a>
        </div>
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
                    I'm Victor Kiplangat, a passionate **Full-Stack Developer** with expertise in PHP, JavaScript, and database management.
                    I specialize in creating **responsive and scalable** web applications, integrating advanced technologies for seamless user experiences.
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

/* Typing Effect Styling */
.typing-container {
    font-size: 50px; /* Increased font size */
    font-weight: bold;
    color: white;
    margin-top: 100px; /* Space below "Hello, there!" */
}

/* Fixed Button Position */
.mt-4 {
    margin-top: 20px; /* Ensures proper spacing */
}

/* Responsive Font Size */
@media (max-width: 768px) {
    .typing-container {
        font-size: 40px;
    }
}

@media (max-width: 480px) {
    .typing-container {
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