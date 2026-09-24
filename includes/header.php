<?php
if (!isset($site)) {
    require_once __DIR__ . '/config.php';
}
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($site['name']) ?> | <?= htmlspecialchars($site['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($site['summary']) ?>">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="gold-line"></div>
<header class="navbar">
    <div class="container nav-container">
        <a href="index.php" class="logo">
            <span class="logo-mark">N</span>
            <span><?= htmlspecialchars($site['short_name']) ?></span>
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="Open menu">☰</button>

        <nav id="mainNav">
            <a href="index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">Home</a>
            <a href="about.php" class="<?= $currentPage == 'about.php' ? 'active' : '' ?>">About</a>
            <a href="skills.php" class="<?= $currentPage == 'skills.php' ? 'active' : '' ?>">Skills</a>
            <a href="certifications.php" class="<?= $currentPage == 'certifications.php' ? 'active' : '' ?>">Certifications</a>
            <a href="contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>">Contact</a>
            <a href="<?= htmlspecialchars($site['resume']) ?>" class="nav-resume" target="_blank">Resume</a>
        </nav>
    </div>
</header>
<main>
