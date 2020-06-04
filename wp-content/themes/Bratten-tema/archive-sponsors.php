<?php get_header(); ?>
    <section class="content first">
        <div class="container">
            <div class="columns">
                <div class="contents">
                    <div class="title-col">
                        <span class="title">
                            Bliv sponsor
                        </span>
                    </div>
                    <div class="txt-col">
                        <span class="txt">
                            <p>Sponsorerne for Glade venner får blandt andet tilbudt et skilt med deres logo, på købmandsbutikken, udover eksponering på vores tilhørende undersider for lokalområdet.</p>
                            <p>Er i interesseret, og vil høre mere om det at være sponsor for Glade venner, så udfyld formularen, så kontakter vi jer snarest!</p>
                        </span>
                    </div>
                </div>
                <div class="contents">
                    <div class="contactform">
                        <?= do_shortcode("[contact-form-7 id=\"506\" title=\"Kontaktformular\"]");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sponsor-archive">
        <div class="container">
            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php renderSponsors(get_post()) ;?>

                <?php endwhile; wp_reset_query(); ?>
            <?php endif; ?>

        </div>
    </section>


<?php get_footer(); ?>