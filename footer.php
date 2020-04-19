<footer>
<div class="fade-name"><?= get_theme_mod('firstname', 'non renseigné')?> <?= get_theme_mod('lastname', 'non renseigné'); ?></div>
<div class="footer-container">
    <div class="contact">
        <div class="left">
            <div class="name"><?= get_theme_mod('firstname', 'non renseigné')?> <?= get_theme_mod('lastname', 'non renseigné'); ?></div>
            <div class="street"><?= get_theme_mod('adress', 'non renseigné')?></div>
            <div class="postal"><?= get_theme_mod('post', 'non renseigné')?></div>
        </div>
        <div class="right">
            <div class="mail"><?= get_theme_mod('mail', 'non renseigné')?></div>
            <div class="num"><?= get_theme_mod('phone', 'non renseigné')?></div>
        </div>
    </div>
    <div class="launch-info">
        Design et lancement : Alexandre Petot
    </div>
</div>
</footer>

    <?php wp_footer(); ?>
</body>
</html>