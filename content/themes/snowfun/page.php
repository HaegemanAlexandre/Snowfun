<?php
get_header() ?>
<div class="page">

                <h1><?= the_title() ?></h1>

<?php if (have_posts()): while(have_posts()): the_post(); ?>

            <div class="page__content">
                <?= the_content() ?>
            </div>
            <?php endwhile; endif; ?>

        </div>
</div>
<?php get_footer() ?>

