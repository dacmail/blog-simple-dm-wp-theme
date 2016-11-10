<?php get_header() ?>
<section id="container" class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <?php get_template_part('templates/loop', 'single'); ?>
		</div>
        <div class="col-sm-1">
            <?php get_template_part('templates/post-share'); ?>
        </div>
	</div>
</section>
<?php get_footer() ?>
