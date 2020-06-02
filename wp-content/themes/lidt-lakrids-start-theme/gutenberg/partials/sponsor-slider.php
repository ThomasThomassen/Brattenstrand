<?php
$sponsors = get_posts(array(
        'post_type' => 'sponsors',
        'post_status' => 'publish',
        'posts_per_page' => -1
    )
);

$title = get_field('title');
$subtitle = get_field('subtitle');
$btn = get_field('btn');
?>
<section class="sponsors-overview">
    <div class="container">
        <span class="title">
            <?= $title ?: 'Din overskrift her' ?>
        </span>
        <span class="subtitle">
            <?= $subtitle ?: 'Din manchet her' ?>
        </span>
        <div class="sponsor-swiper">
            <div class="swiper-wrapper">
                <?php
                foreach ($sponsors as $sponsor) {
                    $image = get_field('image', $sponsor);
                    if($image){
                    ?>
                    <div class="swiper-slide">
                        <img src="<?= $image['sizes']['large'] ?>" alt="<?= $image['alt'] ?>">
                    </div>
                    <?php
                    }
                }
                ?>
            </div>
        </div>
        <div class="btns">
            <a href="<?= $btn['url'] ?: '#'; ?>" class="btn white"><?= $btn['title'] ?: 'Din knap vises her'; ?></a>
        </div>
    </div>
</section>
