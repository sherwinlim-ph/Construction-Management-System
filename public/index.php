<?php

// Load the shared page header.
require __DIR__ . '/includes/header.php';
?>
<!-- Main landing page content. -->
<main>
    <section class="hero">
        <div class="hero-copy">
            <span class="eyebrow">Construction management, made clearer</span>
            <h1>Build better projects, from the ground up.</h1>
            <p>Keep plans, progress, and people moving in the same direction with one clear view of your work.</p>
            <div class="hero-actions">
                <a class="button" href="#">Discover SkyBuild</a>
                <a class="button secondary" href="#contact">Get in touch</a>
            </div>

        </div>
        <!-- Featured development image card. -->
        <article class="project-card" role="group" tabindex="0" aria-roledescription="carousel" aria-label="Project image gallery. Click or press Enter to show the next image.">
            <img id="project-image" src="./assets/featured-development.png" alt="Steel frame construction on an urban building site">
            <div class="project-card-caption">
                <span id="project-caption">Featured development</span>
                <div class="project-pagination" role="group" aria-label="Choose a project image">
                    <button class="active" type="button" aria-label="Show image 1 of 3" aria-pressed="true" data-image="./assets/featured-development.png" data-alt="Steel frame construction on an urban building site" data-caption="Featured development"></button>
                    <button type="button" aria-label="Show image 2 of 3" aria-pressed="false" data-image="./assets/development-frame.png" data-alt="Concrete frame of a building under construction" data-caption="Building in progress"></button>
                    <button type="button" aria-label="Show image 3 of 3" aria-pressed="false" data-image="./assets/building-progress.png" data-alt="High-rise construction site viewed from below" data-caption="Rising with purpose"></button>
                </div>
            </div>
        </article>
    </section>

    <section class="features" id="features">
        <div class="section-heading" id="approach">
            <span class="eyebrow">A stronger way to work</span>
            <h2>Every project. A clearer picture.</h2>
            <p>Bring the essential parts of construction management together so your team can focus on the work ahead.</p>
        </div>
        <div class="feature-grid">
            <article class="feature-card">
                <span>01</span>
                <h3>Plan with purpose</h3>
                <p>Organize project details and make the next steps easy to understand.</p>
            </article>
            <article class="feature-card">
                <span>02</span>
                <h3>Follow progress</h3>
                <p>See what is moving forward and where your team may need attention.</p>
            </article>
            <article class="feature-card">
                <span>03</span>
                <h3>Stay aligned</h3>
                <p>Give everyone a shared view of the goals, updates, and priorities.</p>
            </article>
        </div>
    </section>

</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
<!-- Switch the featured photo and caption when a pagination dot is selected. -->
 
<script>

    const projectCard = document.querySelector('.project-card');
    const projectImage = document.querySelector('#project-image');
    const projectCaption = document.querySelector('#project-caption');
    const projectDots = [...document.querySelectorAll('.project-pagination button')];

    // Find and display the next project image.
    function showNextProject() {
        const currentIndex = projectDots.findIndex((dot) => dot.classList.contains('active'));
        showProject(projectDots[(currentIndex + 1) % projectDots.length]);
    }

    // Update the card image and its selected pagination dot.
    function showProject(button) {
        projectImage.src = button.dataset.image;
        projectImage.alt = button.dataset.alt;
        projectCaption.textContent = button.dataset.caption;

        projectDots.forEach((dot) => {
            const selected = dot === button;
            dot.classList.toggle('active', selected);
            dot.setAttribute('aria-pressed', selected);
        });
    }

    projectDots.forEach((button) => {
        button.addEventListener('click', () => {
            showProject(button);
        });
    });

    // Clicking the card advances to the next image; pagination dots select directly.
    projectCard.addEventListener('click', (event) => {
        if (event.target.closest('.project-pagination')) return;
        showNextProject();
    });

    projectCard.addEventListener('keydown', (event) => {
        if (event.target !== projectCard || !['Enter', ' '].includes(event.key)) return;
        event.preventDefault();
        showNextProject();
    });

    // Automatically advance every five seconds, pausing while the card is in use.
    window.setInterval(() => {
        if (document.hidden || projectCard.matches(':hover, :focus-within')) return;
        showNextProject();
    }, 5000);
</script>

</body>
</html>
