<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>User Dashboard - Incident Reports</title>
    <link rel="stylesheet" href="../../styles/user-css/user-dashboard.css">
</head>

<body>

<header>
  <nav aria-label="Primary navigation">
    <div class="logo" tabindex="0">IncidentReport</div>
    <div class="user-menu" tabindex="0" aria-label="User menu"><strong><a href="incident-reporting.php"> Report incident</a></strong></div>
    <div class="user-menu" tabindex="0" aria-label="User menu"><strong><a href="user-profile.php"> User Profile</a></strong></div>
    <div class="user-menu" tabindex="0" aria-label="User menu"><strong><a href="user-profile.php"> Log out</a></strong></div>

  </nav>
</header>

<main>
  <section class="hero" aria-labelledby="dashboard-title">
    <h1 id="dashboard-title">Your Incident Reports</h1>
    <p id="summary-text" aria-live="polite">You have <span id="totalReports">0</span> total reports with <span id="openReports">0</span> unresolved.</p>
  </section>

  <section class="metrics-grid" aria-label="Incident report metrics">
    <article class="card" tabindex="0" aria-describedby="total-reports-desc">
      <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 13h2v-2H3v2zm14 6h2v-2h-2v2zm0-16h2v-2h-2v2zM6 20h2v-2H6v2zm10-12h2v-2h-2v2zm-6 14h2v-2h-2v2z"/></svg>
      <strong id="total-reports-desc" class="card-value" aria-live="polite">0</strong>
      <p class="card-label">Total Reports</p>
    </article>

    <article class="card" tabindex="0" aria-describedby="open-reports-desc">
      <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <strong id="open-reports-desc" class="card-value" aria-live="polite">0</strong>
      <p class="card-label">Open</p>
    </article>

    <article class="card" tabindex="0" aria-describedby="resolved-reports-desc">
      <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4"/>
      </svg>
      <strong id="resolved-reports-desc" class="card-value" aria-live="polite">0</strong>
      <p class="card-label">Resolved</p>
    </article>

    <article class="card" tabindex="0" aria-describedby="pending-reports-desc">
      <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
        <path stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3"/>
      </svg>
      <strong id="pending-reports-desc" class="card-value" aria-live="polite">0</strong>
      <p class="card-label">Pending</p>
    </article>
  </section>

  <section aria-label="Incident Reports Table">
    <div class="table-container" tabindex="0" aria-describedby="table-desc">
      <table id="reportsTable" role="grid" aria-readonly="true" aria-label="Incident reports list">
        <caption id="table-desc" class="sr-only">List of incident reports</caption>
        <thead>
          <tr>
            <th role="columnheader" tabindex="0" aria-sort="none" data-key="id">ID <span class="sort-arrow"></span></th>
            <th role="columnheader" tabindex="0" aria-sort="none" data-key="title">Title <span class="sort-arrow"></span></th>
            <th role="columnheader" tabindex="0" aria-sort="none" data-key="date">Date <span class="sort-arrow"></span></th>
            <th role="columnheader" tabindex="0" aria-sort="none" data-key="type">Type <span class="sort-arrow"></span></th>
            <th role="columnheader" tabindex="0" aria-sort="none" data-key="status">Status <span class="sort-arrow"></span></th>
            <th role="columnheader" tabindex="0" aria-sort="none" data-key="actions">Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Rows rendered by JS -->
        </tbody>
      </table>
    </div>
    <nav class="pagination" aria-label="Table pagination">
      <button class="page-btn" id="prevPage" aria-label="Previous Page" disabled>Prev</button>
      <span id="pageIndicator" aria-live="polite" style="padding:0 1rem;">Page 1</span>
      <button class="page-btn" id="nextPage" aria-label="Next Page">Next</button>
    </nav>
  </section>
</main>

<footer>
  &copy; 2024 IncidentReport. All rights reserved.
</footer>

</body>
</html>

