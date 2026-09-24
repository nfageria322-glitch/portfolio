<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">EXPERTISE</span>
        <h1>Accounting Skills</h1>
        <p>Accounting software, financial recordkeeping, data management and professional skills.</p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="skills-large">
            <?php foreach ($site['skills'] as $index => $skill): ?>
                <div class="large-skill-card">
                    <span class="skill-index"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?></span>
                    <div>
                        <h3><?= htmlspecialchars($skill) ?></h3>
                        <p>
                            <?php
                            if (in_array($skill, ['Tally ERP / Prime', 'Busy', 'Marg ERP'])) {
                                echo 'Accounting software and business accounting operations.';
                            } elseif ($skill === 'MS Excel') {
                                echo 'Spreadsheet management, accounting data and organized records.';
                            } elseif ($skill === 'Financial Reconciliation') {
                                echo 'Financial data accuracy and reconciliation.';
                            } elseif ($skill === 'Problem Solving') {
                                echo 'Problem solving and complaint handling.';
                            } elseif ($skill === 'Client Support') {
                                echo 'Effective communication and client support.';
                            } else {
                                echo 'Professional accounting and data management capability.';
                            }
                            ?>
                        </p>
                    </div>
                    <span class="skill-arrow">→</span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="dark-section">
    <div class="container">
        <div class="section-heading light">
            <span>LANGUAGES</span>
            <h2>Communication</h2>
        </div>

        <div class="language-grid">
            <?php foreach ($site['languages'] as $language => $level): ?>
                <div class="language-card">
                    <h3><?= htmlspecialchars($language) ?></h3>
                    <span><?= htmlspecialchars($level) ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
