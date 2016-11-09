<?php get_header() ?>
<div id="container" class="container">
	<div class="row">
		<div class="col-sm-8">
			<section id="content" class="clearfix">
				<?php get_template_part( 'templates/loop', 'index' ); ?>
			</section>
			<div class="pagination-wrap">
				<?php ungrynerd_pagination(); ?>
			</div>
		</div>
		<?php get_sidebar() ?>
	</div> <!-- /.row -->
</div>
<?php get_footer() ?>
