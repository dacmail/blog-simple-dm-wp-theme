<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('listing'); ?> id="post-<?php the_ID(); ?>">
        <?php the_post_thumbnail('col-8') ?>
        <h2 class="post-title">
            <a href="<?php the_permalink() ?>" title="Enlace a <?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <p class="post-date"><i class="icon-ico_calendario"></i>  <?php the_time(get_option('date_format')); ?></p>
        <p class="post-author"><i class="icon-ico_autor"></i> <?php get_template_part('templates/post-author'); ?></p>
        <div class="post-content">
            <?php if (has_excerpt()): ?>
                <?php the_excerpt(); ?>
                <p><a href="<?php the_permalink() ?>">Leer más</a></p>
            <?php else: ?>
                <?php the_content( 'Sigue leyendo ...' ); ?>
            <?php endif ?>

        </div>
        <?php get_template_part('templates/post-share'); ?>
    </article>
<?php endwhile; ?>
