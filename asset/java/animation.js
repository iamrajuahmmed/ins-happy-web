
document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll('.animation');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible'); // Add visible class
                observer.unobserve(entry.target); // Optional: Stop observing once animation triggers
            }
        });
    }, {
        threshold: 0.1 // Trigger when 10% of the element is visible
    });

    elements.forEach(el => observer.observe(el));
});
