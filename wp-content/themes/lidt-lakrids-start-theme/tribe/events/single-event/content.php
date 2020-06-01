<?php
/**
 * Single Event Content Template Part
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/single-event/content.php
 *
 * See more documentation about our Blocks Editor templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 4.7
 *
 */
global $post;

$content = get_field('content');
$facts = get_field('facts');

$events = tribe_get_events( [ 'posts_per_page' => 3 ] );
?>

<?php $event_id = $this->get('post_id'); ?>
<div id="post-<?php echo absint($event_id); ?>" <?php post_class(); ?>>
    <?php tribe_the_content(null, false, $event_id);
    ?>
    <div class="content">
        <div class="txt-col">
            <div class="description"><?= $content ?></div>
            <?php
            if ($facts) {
                ?>
                <div class="facts">
                    <span class="fact-title">FAKTA</span>
                    <div class="fact-content"><?= $facts ?></div>
                </div>
                <?php
            }
            ?>
        </div>
        <div class="img-col">
            <?= tribe_event_featured_image($event_id, 'full', false); ?>
        </div>
    </div>
    <div class="related-title">
        <h3>Kommende arrangementer</h3>
    </div>
    <div class="tribe-events-calendar-list">
        <?php
        foreach ($events as $post) {
            $event_classes = tribe_get_post_class(['tribe-events-calendar-list__event', 'tribe-common-g-row', 'tribe-common-g-row--gutters'], $post->ID)
            ?>
            <div class="tribe-common-g-row  tribe-events-calendar-list__event-row">
                <div class="tribe-events-calendar-list__event-wrapper tribe-common-g-col related-wrapper">
                    <article <?php tribe_classes($event_classes) ?>>
                        <?= tribe_event_featured_image($post->ID, 'full');
                        ?>
                        <h3 class="tribe-events-calendar-list__event-title">
                            <?= $post->post_title ?>
                        </h3>
                        <div class="contents">
                            <a href="<?= tribe_get_event_link($post->ID) ?>" class="btn blue">LÆS MERE</a>
                            <div class="tribe-events-calendar-list__event-description tribe-common-b2 tribe-common-a11y-hidden">
                                <?= tribe_events_get_the_excerpt($post->ID); ?>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <?
        }
        ?>
    </div>
    <div class="go-back">
        <a href="<?= tribe_get_events_link() ?>" class="btn white">Tilbage til oversigten</a>
    </div>
</div>
