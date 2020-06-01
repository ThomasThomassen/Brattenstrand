<?php
$email = get_field('email', 'option');
$tlf = get_field('tlf', 'option');
$adress = get_field('adress', 'option');


?>

</main>

<footer>
    <div class="container">
        <div class="footer-column">
            <span>Kontakt</span>
            <ul>
                <li><?= $email ?></li>
                <li><?= $tlf ?></li>
                <li><?= $adress ?></li>
            </ul>

        </div>
        <div class="footer-column">
            <span>Glade Venner</span>
            <?php wp_nav_menu(array('theme_location' => 'footer_nav_friends', 'container' => 'nav', 'menu_class' => '')); ?>
        </div>
        <div class="footer-column">
            <span>Praktisk</span>
            <?php wp_nav_menu(array('theme_location' => 'footer_nav_info', 'container' => 'nav', 'menu_class' => '')); ?>
        </div>
    </div>
    <div class="footer-row">
        <p>CopyRight - All Rights Reserved</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>