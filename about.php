<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">ABOUT ME</span>
        <h1>Professional Profile</h1>
        <p>Accounting professional focused on accuracy, organization and reliable financial recordkeeping.</p>
    </div>
</section>

<section class="section">
    <div class="container about-grid">
        <div class="about-image">
            <div class="profile-big">
                <?php if (file_exists($site['profile_image'])): ?>
                    <img src="<?= htmlspecialchars($site['profile_image']) ?>" alt="<?= htmlspecialchars($site['name']) ?>">
                <?php else: ?>
                    <span>NF</span>
                <?php endif; ?>
            </div>
        </div>

        <div class="about-content">
            <span class="eyebrow">WHO I AM</span>
            <h2>Detail-oriented Accountant</h2>
            <p><?= htmlspecialchars($site['summary']) ?></p>
            <p>Skilled in maintaining accurate records, organizing accounting data, record keeping, reconciliation and supporting day-to-day accounting operations.</p>

            <div class="info-list">
                <div><span>Name</span><strong><?= htmlspecialchars($site['name']) ?></strong></div>
                <div><span>Location</span><strong><?= htmlspecialchars($site['location']) ?></strong></div>
                <div><span>Email</span><strong><?= htmlspecialchars($site['email']) ?></strong></div>
                <div><span>Phone</span><strong><?= htmlspecialchars($site['phone']) ?></strong></div>
            </div>
        </div>
    </div>
</section>

<section class="dark-section">
    <div class="container">
        <div class="section-heading light">
            <span>EDUCATION</span>
            <h2>Academic Background</h2>
        </div>

        <div class="timeline">
            <?php foreach ($site['education'] as $education): ?>
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div>
                        <span><?= htmlspecialchars($education['period']) ?></span>
                        <h3><?= htmlspecialchars($education['qualification']) ?></h3>
                        <p><?= htmlspecialchars($education['school']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
