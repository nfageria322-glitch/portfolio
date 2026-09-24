<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>
<section class="hero">
    <div class="container hero-grid">
        <div class="hero-content">
            <div class="eyebrow">ACCOUNTING PROFESSIONAL</div>
            <h1><?= htmlspecialchars($site['name']) ?></h1>
            <h2><?= htmlspecialchars($site['tagline']) ?></h2>
            <p class="hero-description"><?= htmlspecialchars($site['summary']) ?></p>

            <div class="hero-buttons">
                <a href="about.php" class="btn btn-gold">Explore Profile</a>
                <a href="<?= htmlspecialchars($site['resume']) ?>" target="_blank" class="btn btn-outline">View Resume</a>
            </div>

            <div class="hero-contact">
                <span>📍 <?= htmlspecialchars($site['location']) ?></span>
                <span>✉ <?= htmlspecialchars($site['email']) ?></span>
            </div>
        </div>

        <div class="hero-card">
            <div class="card-glow"></div>
            <div class="profile-placeholder">
                <?php if (file_exists($site['profile_image'])): ?>
                    <img src="<?= htmlspecialchars($site['profile_image']) ?>" alt="<?= htmlspecialchars($site['name']) ?>">
                <?php else: ?>
                    <span>NF</span>
                <?php endif; ?>
            </div>
            <div class="hero-card-info">
                <span>PROFESSIONAL</span>
                <h3>ACCOUNTANT</h3>
                <p>Tally • Excel • Ledger • Reconciliation</p>
            </div>
        </div>
    </div>
</section>

<section class="stats-section">
    <div class="container stats-grid">
        <div class="stat"><strong>04+</strong><span>Accounting Software</span></div>
        <div class="stat"><strong>12th</strong><span>Higher Secondary</span></div>
        <div class="stat"><strong>A+</strong><span>TallyEssential Level 3</span></div>
        <div class="stat"><strong>02</strong><span>Professional Certifications</span></div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading">
            <span>CORE EXPERTISE</span>
            <h2>Accounting Skills</h2>
            <p>Focused on accuracy, organized financial records and reliable accounting operations.</p>
        </div>

        <div class="skills-preview">
            <?php foreach (array_slice($site['skills'], 0, 6) as $index => $skill): ?>
                <div class="skill-card">
                    <div class="skill-number"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?></div>
                    <h3><?= htmlspecialchars($skill) ?></h3>
                    <span class="arrow">↗</span>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="center-button">
            <a href="skills.php" class="text-button">View All Skills →</a>
        </div>
    </div>
</section>

<section class="certificate-highlight">
    <div class="container certificate-grid">
        <div>
            <span class="eyebrow">PROFESSIONAL CERTIFICATION</span>
            <h2>TallyEssential Level 3</h2>
            <p>Taxation and Compliance</p>
            <div class="grade"><span>GRADE</span><strong>A+</strong></div>
        </div>
        <div>
            <p>Successfully completed training covering GST, Tax Deducted at Source, business data management and moving to the next financial year.</p>
            <a href="certifications.php" class="btn btn-gold">View Certificate</a>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <span class="eyebrow">LET'S CONNECT</span>
        <h2>Looking for a reliable accounting professional?</h2>
        <a href="contact.php" class="btn btn-gold">Get In Touch</a>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
