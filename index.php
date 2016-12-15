<?php get_header() ?>
<div id="container" class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<section id="content" class="clearfix">
				<?php if (is_search() || is_archive()): ?>
					<header>
	                    <?php the_archive_title( '<h1 class="term-title">', '</h1>' ); ?>
	                </header>
				<?php endif ?>
				<?php get_template_part( 'templates/loop', 'index' ); ?>
			</section>
			<div class="pagination-wrap">
				<?php ungrynerd_pagination(); ?>
			</div>
		</div>
	</div> <!-- /.row -->
</div>
<?php get_footer() ?>
