<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">CREDENTIALS</span>
        <h1>Certifications</h1>
        <p>Professional certifications and accounting credentials.</p>
    </div>
</section>

<section class="section">
    <div class="container certification-grid">
        <?php foreach ($site['certifications'] as $certificate): ?>
            <div class="certificate-card">
                <div class="certificate-top">
                    <span class="certificate-icon">✓</span>
                    <span>CERTIFICATION</span>
                </div>

                <h2><?= htmlspecialchars($certificate['title']) ?></h2>
                <h3><?= htmlspecialchars($certificate['subtitle']) ?></h3>

                <?php if (!empty($certificate['grade'])): ?>
                    <div class="certificate-grade">
                        <span>GRADE</span>
                        <strong><?= htmlspecialchars($certificate['grade']) ?></strong>
                    </div>
                <?php endif; ?>

                <p><?= htmlspecialchars($certificate['description']) ?></p>

                <?php if ($certificate['file'] !== '#'): ?>
                    <a href="<?= htmlspecialchars($certificate['file']) ?>" target="_blank" class="btn btn-gold full">View Certificate</a>
                <?php else: ?>
                    <span class="certificate-note">Certification listed on resume</span>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="certificate-viewer">
    <div class="container">
        <div class="section-heading light">
            <span>DOCUMENT</span>
            <h2>Tally Certificate</h2>
            <p>Open the certificate directly from the portfolio.</p>
        </div>

        <div class="pdf-box">
            <iframe src="assets/certificates/tally.pdf" title="Tally Certificate"></iframe>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
