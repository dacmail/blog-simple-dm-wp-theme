<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <h1 class="post-title">
        <?php the_title(); ?>
    </h1>
    <div class="row">
        <div class="col-sm-9 pull-right">
            <?php the_post_thumbnail('col-8') ?>
            <div class="post-content">
                <?php the_content( __('Leer m&aacute;s &raquo;', 'ungrynerd')); ?>
                <?php wp_link_pages(); ?>
            </div>
        </div>
        <div class="col-sm-3 push-left post-meta">
            <?php get_template_part('templates/post-share'); ?>
            <p class="post-category"><?php the_category(', '); ?></p>
            <p class="post-date"><?php the_time(get_option('date_format')); ?></p>
            <p class="post-author"><?php get_template_part('templates/post-author'); ?></p>
            <?php the_tags('<div class="post-tags">', ', ', '</div>'); ?>
            <a href="<?php echo add_query_arg(array('articulo' => get_bloginfo('name') . ' - '. get_the_title()), get_blog_permalink(1, 7294)); ?>" target="_blank" class="post-report">Comunicar error en la información</a>
        </div>
    </div>
</article>
<?php endwhile; ?>
