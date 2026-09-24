<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">CONTACT</span>
        <h1>Let's Connect</h1>
        <p>Feel free to get in touch for professional opportunities.</p>
    </div>
</section>

<section class="section">
    <div class="container contact-grid">
        <div class="contact-info">
            <span class="eyebrow">GET IN TOUCH</span>
            <h2>Have an opportunity?</h2>
            <p>Contact me directly using the details below.</p>

            <div class="contact-item">
                <span class="contact-icon">✉</span>
                <div>
                    <span>Email</span>
                    <a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a>
                </div>
            </div>

            <div class="contact-item">
                <span class="contact-icon">☎</span>
                <div>
                    <span>Phone</span>
                    <a href="tel:<?= htmlspecialchars($site['phone']) ?>"><?= htmlspecialchars($site['phone']) ?></a>
                </div>
            </div>

            <div class="contact-item">
                <span class="contact-icon">⌖</span>
                <div>
                    <span>Location</span>
                    <strong><?= htmlspecialchars($site['location']) ?></strong>
                </div>
            </div>
        </div>

        <div class="contact-card">
            <h3>Send an Email</h3>
            <p>Click below to contact Naresh directly.</p>

            <a href="mailto:<?= htmlspecialchars($site['email']) ?>?subject=Professional%20Opportunity" class="btn btn-gold full">Email Me</a>
            <a href="tel:<?= htmlspecialchars($site['phone']) ?>" class="btn btn-outline full">Call Me</a>
            <a href="<?= htmlspecialchars($site['resume']) ?>" target="_blank" class="btn btn-dark full">View Resume</a>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
