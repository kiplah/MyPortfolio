<?php include 'includes/header.php'; ?>
<section class="hero d-flex align-items-center">
    <div class="container text-center">
        <h1 class="fw-bold">Hi, I'm Victor Kiplangat</h1>
        <p class="lead">A Full-Stack Developer | Database Expert | AI Enthusiast</p>
        <a href="projects.php" class="btn btn-primary btn-lg mt-3">View My Work</a>
    </div>
</section>

<!-- Custom CSS for Hero Section -->
<style>
.hero {
    height: 90vh; /* Makes it take almost full screen */
    background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
    color: white;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
<!-- About Me Section -->
<section class="about py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left: Text Content -->
            <div class="col-lg-6">
                <h2 class="fw-bold fade-in">About Me</h2>
                <p class="lead fade-in delay">
                    I'm Victor Kiplangat, a passionate Full-Stack Developer with expertise in PHP, JavaScript, and database management.
                    I specialize in creating **responsive and scalable** web applications, integrating advanced technologies for seamless user experiences.
                </p>
                <a href="about.php" class="btn btn-primary fade-in delay-btn">Read More</a>
            </div>
            <!-- Right: Profile Image -->
            <div class="col-lg-6 text-center">
                <img src="assets/img/profile.jpg" alt="Victor Kiplangat" class="profile-img fade-in">
            </div>
        </div>
    </div>
</section>

<main>
    <section class="hero">
        <div class="container">
            <h2>Welcome to My Portfolio</h2>
            <p>I'm Victor Kiplangat, a full-stack web developer and database expert.</p>
            <a href="projects.php" class="btn">View My Work</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
