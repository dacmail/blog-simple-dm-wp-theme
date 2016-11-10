<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <?php the_post_thumbnail('col-4-square') ?>
        <div class="post-wrapper">
            <h2 class="post-title">
                <a href="<?php the_permalink() ?>" title="Enlace a <?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p class="post-date"><?php the_time(get_option('date_format')); ?></p>
            <p class="post-author"><?php get_template_part('templates/post-author'); ?></p>
            <div class="post-content">
                <?php the_excerpt(); ?>
            </div>
        </div>
    </article>
<?php endwhile; ?>
