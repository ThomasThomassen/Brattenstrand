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
        <div class="overlay"></div>
        <img src="<?= $image['url'] ?: 'http://via.placeholder.com/1920x1080' ?>" alt="<?= $image['alt'] ?>">
        <div class="container">
            <div class="content">
                <div class="title-col">
                        <span class="title">
            <?= $title ?>
        </span>
                </div>
                <div class="txt-col">
                <span class="subtitle">
                    <?= $subtitle ?>
                </span>
                    <p><?= $text ?></p>
                    <?
                    if ($addbtn === true) {
                        $btn = get_field('btn');
                        $btnstyle = get_field('btn-style');
                        ?>
                        <div class="btns">
                            <a href="<?= $btn['url'] ?: '#'; ?>"
                               class="btn <?= $btnstyle ?>"><?= $btn['title'] ?: 'Din knap vises her'; ?></a>
                        </div>
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
                foreach ($swiperimages as $swiperimage) {
                    ?>
                    <div class="swiper-slide">
                        <img src="<?= $swiperimage['img']['url'] ?>" alt="<?= $swiperimage['img']['alt'] ?>">
                        <div class="title-col">
                        <span class="title">
            <?= $swiperimage['title'] ?>
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
    <?php
    if ($type === 'event-banner') {
        $events = tribe_get_events([
            'posts_per_page' => 1,
            'start_date' => 'now',
        ]);

        foreach ($events as $event) {
            ?>
            <div class="overlay"></div>
            <?= tribe_event_featured_image($event->ID, 'full'); ?>
            <div class="container">
                <div class="content">
                    <div class="title-col">
                        <span class="title">
            SÆSONENS ARRANGEMENTER
        </span>
                        <div class="btns middle">
                            <a href="<?= tribe_get_events_link() ?>" class="btn blue">Se alle arrangementer</a>
                        </div>
                    </div>
                    <div class="txt-col">
                <span class="subtitle">
                    <?= $event->post_title ?>
                </span>
                        <?= tribe_events_get_the_excerpt($event->ID); ?>
                        <div class="btns">
                            <a href="<?= tribe_get_event_link($event->ID) ?>" class="btn blue">Læs mere
                                om <?= $event->post_title ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?
        }
    }
    ?>
</section>
