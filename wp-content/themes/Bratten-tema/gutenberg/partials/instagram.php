<?php

$title = get_field('titel');
$subtitle = get_field('subtitle');
$img = get_field('img');

?>

<section class="instagram">
<div class="container">
    <div class="content">
        <img src="<?= $img['url'] ?>" alt="">
        <div class="text">
    <span class="title">
        <?= $title ?: 'Din overskrift her'?>
    </span>
    <span class="subtitle">
        <?= $subtitle ?: 'Din manchet her'?>
    </span>
        </div>
    </div>
    <?php
    echo do_shortcode('[jr_instagram id="2"]');
    ?>
    </div>
</section>