
</main>
<footer class="footer">
    <div class="container footer-grid">
        <div>
            <h3><?= htmlspecialchars($site['short_name']) ?></h3>
            <p><?= htmlspecialchars($site['title']) ?></p>
        </div>

        <div>
            <h4>Quick Links</h4>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="skills.php">Skills</a>
            <a href="certifications.php">Certifications</a>
            <a href="contact.php">Contact</a>
        </div>

        <div>
            <h4>Contact</h4>
            <a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a>
            <a href="tel:<?= htmlspecialchars($site['phone']) ?>"><?= htmlspecialchars($site['phone']) ?></a>
        </div>
    </div>

    <div class="footer-bottom">
        © <?= date('Y') ?> <?= htmlspecialchars($site['name']) ?>. All Rights Reserved.
    </div>
</footer>
<script src="assets/js/script.js"></script>
</body>
</html>
