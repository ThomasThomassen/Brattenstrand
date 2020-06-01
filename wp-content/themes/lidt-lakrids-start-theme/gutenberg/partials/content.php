<?php
$contents = get_field('content');
$shadow = get_field('shadow');
if($shadow === true){
    $shadow = 'box';
} else {
    $shadow = '';
}
?>

<?php
if($contents){
?>
<section class="content">
    <div class="container">
    <?
    if (isset($contents[1])){
    ?>
        <div class="columns <?= $shadow ?>">
    <?
    }
    foreach ($contents as $content) {
        ?>
        <div class="contents">
            <? if($content['title']){ 
                ?>
            <div class="title-col <?= $content['position'] ?>">
                        <span class="title">
            <?= $content['title'] ?: 'Din overskrift her' ?>
        </span>
            </div>
            <?
            }
            if($content['txt']){
            ?>
            <div class="txt-col <?= $content['position']?>">
                <span class="txt">
                    <?= $content['txt'] ?: 'Din tekst her' ?>
                </span>
            </div>
                <?
            }
                if($content['add-btn'] === true){
                    ?>
                    <a href="<?= $content['btn']['url'] ?: '#'; ?>" class="btn <?= $content['btn-style'] ?>"><?= $content['btn']['title'] ?: 'Din knap vises her'; ?></a>
                    <?
                }
                if($content['img']){
                ?>
                <div class="img-col">
                    <img src="<?= $content['img']['url'] ?>" alt="">
                </div>
                    <?
                }
                    ?>
        </div>
        <?
    } if (isset($contents[1])){
    ?>
        </div>
    <?
    }
    ?>
    </div>
</section>
<?php
}