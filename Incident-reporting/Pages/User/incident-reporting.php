<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Incident Reporting Platform</title>
    <link rel="stylesheet" href="../../styles/user-css/incident-reporting.css">
</head>

<body>
  <header id="header">
    <nav aria-label="Primary navigation">
      <div class="logo" tabindex="0">IncidentReport</div>
      <div class="nav-links">
        <a href="#features" tabindex="0">Features</a>
        <a href="#report" tabindex="0">Report Incident</a>
        <a href="user-dashboard.php" tabindex="0">User Dashboard</a>
      </div>
    </nav>
  </header>
  <main>
    <section class="hero" role="banner" aria-label="Hero section">
      <h1>Report Incidents Quickly &amp; Efficiently</h1>
      <p>Streamline your incident reporting with our intuitive platform that makes logging, tracking, and resolving issues seamless and fast.</p>
      <button class="btn-primary" id="report-button" aria-label="Scroll to report incident form">Report an Incident</button>
    </section>

    <section id="features" class="features" aria-label="Platform features">

      <article class="feature-card" tabindex="0" aria-labelledby="feature1-title" aria-describedby="feature1-desc">
        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" >
          <circle cx="12" cy="12" r="10" />
          <path d="M12 8v4" stroke-linecap="round" stroke-linejoin="round"/>
          <circle cx="12" cy="16" r="1" fill="currentColor" stroke="none"/>
        </svg>
        <h3 class="feature-title" id="feature1-title">Fast &amp; Easy Reporting</h3>
        <p class="feature-description" id="feature1-desc">Create detailed incident reports in seconds with an intuitive, user-friendly form.</p>
      </article>

      <article class="feature-card" tabindex="0" aria-labelledby="feature2-title" aria-describedby="feature2-desc">
        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor">
          <rect x="3" y="11" width="18" height="6" rx="1" ry="1"/>
          <path d="M6 9v2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M10 7v4" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M14 5v6" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M18 3v8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <h3 class="feature-title" id="feature2-title">Track Progress</h3>
        <p class="feature-description" id="feature2-desc">Monitor incidents and get updates until they’re resolved.</p>
      </article>

      <article class="feature-card" tabindex="0" aria-labelledby="feature3-title" aria-describedby="feature3-desc">
        <svg class="feature-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-linecap="round">
          <path d="M12 2a10 10 0 0 0-7.246 17.171l.746.579a6.002 6.002 0 0 1 8.628-8.628l.579.746A10 10 0 0 0 12 2Z"/>
          <circle cx="12" cy="12" r="1" fill="currentColor" stroke="none"/>
        </svg>
        <h3 class="feature-title" id="feature3-title">Secure &amp; Reliable</h3>
        <p class="feature-description" id="feature3-desc">Data is encrypted and securely stored with strict access controls.</p>
      </article>

    </section>

    <section id="report" class="report-form-section" aria-label="Incident report form">
      <h2>Report an Incident</h2>
      <p>Please provide detailed information below to help us address the issue swiftly.</p>

      <form class="report-form" action="#" method="POST" novalidate enctype="multipart/form-data">

        <div>
          <label for="incident-title">Incident Title</label>
          <input type="text" id="incident-title" name="incident-title" placeholder="Brief title describing the incident" required aria-required="true" />
        </div>

        <div>
          <label for="incident-date">Date of Incident</label>
          <input type="date" id="incident-date" name="incident-date" required aria-required="true" />
        </div>

        <div>
          <label for="incident-type">Incident Type</label>
          <select id="incident-type" name="incident-type" required aria-required="true">
            <option value="" disabled selected>Select type</option>
            <option value="Safety">Safety</option>
            <option value="Security">Security</option>
            <option value="Operational">Operational</option>
            <option value="Environmental">Environmental</option>
          </select>
        </div>

        <div>
          <label for="incident-description">Description</label>
          <textarea id="incident-description" name="incident-description" placeholder="Detailed description of the incident" required aria-required="true"></textarea>
        </div>

        <div>
          <label for="incident-image">Upload Photo (optional)</label>
          <input type="file" id="incident-image" name="incident-image" accept="image/*" aria-describedby="image-help" />
          <small id="image-help" style="color: var(--color-text-muted); font-size: 0.85rem;">Supported formats: JPG, PNG, GIF.</small>
        </div>
        
        <button type="submit" aria-label="Submit Incident Report">Submit Report</button>
      </form>
    </section>
  </main>
  <footer>
    &copy; 2024 IncidentReport. All rights reserved.
  </footer>

  <script>
    // Smooth scroll for "Report an Incident" button (+ focus first form input)
    const reportButton = document.getElementById('report-button');
    const reportSection = document.getElementById('report');
    reportButton.addEventListener('click', () => {
      if (reportSection) {
        reportSection.scrollIntoView({ behavior: 'smooth', block: 'center' });
        const firstInput = reportSection.querySelector('input, select, textarea');
        if (firstInput) firstInput.focus({ preventScroll: true });
      }
    });

    // IntersectionObserver for fade-in on scroll
    const observerOptions = {
      threshold: 0.15
    };

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    // Observe feature cards and report form section
    document.querySelectorAll('.feature-card').forEach(el => observer.observe(el));
    const reportFormSection = document.querySelector('.report-form-section');
    if (reportFormSection) observer.observe(reportFormSection);
    const heroSection = document.querySelector('.hero');
    if (heroSection) observer.observe(heroSection);
  </script>
</body>
</html>

