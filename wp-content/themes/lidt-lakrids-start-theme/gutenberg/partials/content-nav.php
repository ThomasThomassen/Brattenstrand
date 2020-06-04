<?php
$navtitle = get_field('nav-title');
$title = get_field('title');
$txt = get_field('txt');
$addbtn = get_field('add-btn');
$btn = get_field('btn');
$btnstyle = get_field('btn-style');
$btnpos = get_field('btn-pos');
$img = get_field('img');
$contact = get_field('contact');
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
            <div class="btns <?= $btnpos ?>">
                <a href="<?= $btn['url'] ?: '#'; ?>"
                   class="btn <?= $btnstyle ?>"><?= $btn['title'] ?: 'Din knap vises her'; ?></a>
            </div>
            <?
        }
        if ($img) {
            ?>
            <div class="img-col">
                <img src="<?= $img['url'] ?>" alt="">
            </div>
            <?
        }if ($contact === true){
            ?>
            <div class="contactform">
                <?= do_shortcode("[contact-form-7 id=\"506\" title=\"Kontaktformular\"]");
                ?>
            </div>
        <?php
        }
        ?>

    </div>
</article>