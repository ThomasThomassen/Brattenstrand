<?php
$navtitle = get_field('nav-title');
$title = get_field('title');
$txt = get_field('txt');
$addbtn = get_field('add-btn');
$btn = get_field('btn');
$btnstyle = get_field('btn-style');
$img = get_field('img');
?>

<article class="aside">
    <? if ($navtitle) {
        ?>
        <span class="nav-title">
                <?= $navtitle ?: 'Navigationspunkt' ?>
            </span>
        <?
    }

    ?>
    <div class="contents">
        <? if ($title) {
            ?>
            <div class="title-col">
                        <span class="title">
            <?= $title ?: 'Din overskrift her' ?>
        </span>
            </div>
            <?
        }
        if ($txt) {
            ?>
            <div class="txt-col">
                <span class="txt">
                    <?= $txt ?: 'Din tekst her' ?>
                </span>
            </div>
            <?
        }
        if ($addbtn === true) {
            ?>
            <a href="<?= $btn['url'] ?: '#'; ?>"
               class="btn <?= $btnstyle ?>"><?= $btn['title'] ?: 'Din knap vises her'; ?></a>
            <?
        }
        if ($img) {
            ?>
            <div class="img-col">
                <img src="<?= $img['url'] ?>" alt="">
            </div>
            <?
        }
        ?>
    </div>
</article>