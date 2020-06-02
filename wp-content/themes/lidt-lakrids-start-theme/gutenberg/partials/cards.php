<?php

$information = get_field('info');

?>


<section class="cards">
    <div class="container">
        <?
        foreach ($information as $info) {
            ?>
            <div class="flipper-container">
                <div class="flipper">
                    <div class="flipper-front">
                        <img src="<?= $info['card-img']['url'] ?>">
                        <span class="title"><?= $info['title'] ?></span>
                    </div>
                    <div class="flipper-back">
                        <img src="<?= $info['card-img']['url'] ?>">
                        <span class="subtitle"><?= $info['subtitle'] ?></span>
                        <span class="shortdesc"><?= $info['short_desc'] ?></span>
                        <div class="btns">
                            <a href="<?= $info['btn']['url'] ?: '#'; ?>"
                               class="btn <?= $info['btn-style'] ?>"><?= $info['btn']['title'] ?: 'Din knap vises her'; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?
        }
        ?>
    </div>
</section>