<?php
// Build the stylesheet URL from this file's own folder so the link works
// no matter how deep the page that includes this partial is.
$topbarCss = str_replace(rtrim($_SERVER['DOCUMENT_ROOT'], '/'), '', __DIR__) . '/css/topbar.css';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>

  <link rel="stylesheet" href="<?= htmlspecialchars($topbarCss) ?>">

</head>
<body>

  <!-- Navbar -->
  <header class="navbar">
    
    <!-- Left: Logo & Navigation Links -->
    <div class="nav-left">
      <a href="#" class="logo-link">
        <div class="logo-icon">
          <svg viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd" />
          </svg>
        </div>
        <span class="logo-text">clever</span>
      </a>

      <ul class="nav-links">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Features</a></li>
        <li><a href="#">Pricing</a></li>
      </ul>
    </div>

    <!-- Right: Search & User Profile -->
    <div class="nav-right">
      <div class="search-container">
        <svg class="search-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
        <input type="text" class="search-input" placeholder="Search">
      </div>

      <div class="user-profile">
        <div class="avatar">
          <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80" alt="Magda">
        </div>
        <span class="user-name">Magda</span>
        <svg class="dropdown-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
        </svg>
      </div>
    </div>

  </header>

