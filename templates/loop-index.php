<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('listing'); ?> id="post-<?php the_ID(); ?>">
        <p class="post-category"><?php the_category(', '); ?></p>
        <h1 class="post-title">
            <a href="<?php the_permalink() ?>" title="Enlace a <?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
        <p class="post-date"><?php the_time(get_option('date_format')); ?></p>
        <p class="post-author"><?php get_template_part('templates/post-author'); ?></p>
        <?php the_post_thumbnail('col-8') ?>
        <div class="post-content">
            <?php the_excerpt(); ?>
        </div>
        <?php get_template_part('templates/post-share'); ?>
    </article>
<?php endwhile; ?>
