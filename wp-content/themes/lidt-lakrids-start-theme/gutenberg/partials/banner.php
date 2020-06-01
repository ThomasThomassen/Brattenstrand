<?php
$type = get_field('type');
?>

<section class="banner <?= $type ?>">
    <?
    if ($type === 'standard-banner') {
        $image = get_field('image');
        $title = get_field('title');
        $subtitle = get_field('subtitle');
        $text = get_field('text');
        $addbtn = get_field('add-btn');
        ?>
        <img src="<?= $image['sizes']['large'] ?: 'http://via.placeholder.com/1920x1080' ?>" alt="<?= $image['alt'] ?>">
        <div class="container">
            <div class="content">
            <div class="title-col">
                        <span class="title">
            <?= $title ?: 'Din overskrift her' ?>
        </span>
            </div>
            <div class="txt-col">
                <span class="subtitle">
                    <?= $subtitle ?: 'Din Manchet her' ?>
                </span>
                <p><?= $text ?: 'din brødtekst her' ?></p>
                <?
                if($addbtn === true){
                    $btn = get_field('btn');
                    $btnstyle = get_field('btn-style');
                ?>
                <a href="<?= $btn['url'] ?: '#'; ?>" class="btn <?= $btnstyle ?>"><?= $btn['title'] ?: 'Din knap vises her'; ?></a>
                <?
                }
                ?>
            </div>
            </div>
        </div>
        <?
    }
    ?>

    <?
    if ($type === 'swiper-banner') {
        $swiperimages = get_field('swiper-images');
    ?>
        <div class="swiper-navigation">
        <div class="swiper-wrapper">
            <?
            foreach ($swiperimages as $swiperimage){
            ?>
                <div class="swiper-slide">
                    <img src="<?= $swiperimage['img']['sizes']['large'] ?>" alt="<?= $swiperimage['img']['alt']?>">
                    <div class="title-col">
                        <span class="title">
            <?= $swiperimage['title'] ?: 'Din overskrift her' ?>
        </span>
                    </div>
                </div>
                <?
            }
            ?>
        </div>
        <div class="swiper-pagination"></div>
        </div>
    <?
    }
    ?>
</section>
