<?php
require_once __DIR__ . '/../bootstrap.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A clearer way to plan and manage construction projects.">
    <title>SkyBuild | Construction, clearly managed</title>
    
    <link rel="stylesheet" href="<?= CSS_URL ?>index.css">
    <link rel="stylesheet" href="<?= CSS_URL ?>header.css">
    <link rel="stylesheet" href="<?= CSS_URL ?>footer.css">

</head>

<body>

<!-- header. -->
<header class="navbar">
    <div class="logo"  aria-label="SkyBuild home">
        <span class="logo-mark" aria-hidden="true">S</span> SKYBUILD
    </div>
    <nav aria-label="Main navigation">
        <a href="#features">Features</a>
        <a href="#approach">Our approach</a>
        <a href="#contact">Contact</a>
    </nav>
    <a class="header-cta" href="#features">Explore SkyBuild</a>
</header>