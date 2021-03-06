<?php get_header(); ?>

	<!-- main -->
	<main role="main" class="content">

		<!-- section -->
		<section class="container">

			<!-- row -->
			<div class="row">

				<!-- col-lg-8 -->
				<div class="col-lg-8">
					<h1><?php single_cat_title(); ?></h1>

					<?php get_template_part('loop'); ?>

					<?php get_template_part('pagination'); ?>
				</div>
				<!-- /col-lg-8 -->

				<!-- col-lg-4 -->
				<div class="col-lg-4">
					<?php get_sidebar(); ?>
				</div>
				<!-- /col-lg-4 -->

			</div>
			<!-- /row -->

		</section>
		<!-- /section -->

	</main>
	<!-- /main -->

<?php get_footer(); ?>
