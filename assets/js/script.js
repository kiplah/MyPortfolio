document.addEventListener("DOMContentLoaded", function () {
    let fadeElements = document.querySelectorAll(".fade-in");

    let observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.2 }
    );

    fadeElements.forEach((el) => observer.observe(el));
});
