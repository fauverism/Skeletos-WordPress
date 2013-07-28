<?php
/*
	@package WordPress
	@subpackage SiteSkeleton
*/
get_header(); ?>

<main class="content clearfix" role="main">

	<div class="content-block"><div class="wrapper">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article <?php post_class(); ?>>
		
			<header>
				<h1><?php the_title(); ?></h1>

				<b class="heading6">Posted by <cite><?php the_author_link(); ?></cite> on <time datetime="<?php the_time('c'); ?>"><?php the_time( get_option( 'date_format' ) ) ?></time></b>
			</header>
			
			<?php the_content(); ?>
		
		</article>

		<p class="heading6"><?php the_tags( 'Tags: ', ', ', '<br />' ); ?> Posted in <?php the_category( ', ' ) ?> | <?php edit_post_link( 'Edit', '', ' | ' ); ?>  <?php comments_popup_link( 'No Comments &#187;', '1 Comment &#187;', '% Comments &#187;' ); ?></p>

		<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div></div><!--/end .content-block-->

</main><!--/end .content-->
<?php get_footer(); ?>
