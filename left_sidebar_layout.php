<?php /* Template name: Left Sidebar */ ?>

<?php get_header(); ?>
<!-- left_sidebar_layout.php -->
<div class="mdl-grid">
    <?php get_sidebar('left'); ?>
    <div class="mdl-cell mdl-cell--8-col mdl-cell--6-col-tablet">
        <div <?php post_class('mdl-card mdl-shadow--2dp'); ?>>
            <?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text"><?php the_title(); ?></h2>
            </div>
            <div class="mdl-card__supporting-text">
                <?php the_content(); ?>
            </div>
            <?php endwhile; else: ?>
            <div class="mdl-card__supporting-text">
                Nessun contenuto trovato!
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>