<?php
/*
	@package WordPress
	@subpackage SiteSkeleton
*/
get_header(); ?>

<main class="content clearfix" role="main">

	<div class="content-block"><div class="wrapper">
		
	<?php if ( have_posts() ) : ?>
	
   	<header>     
		<h1><?php single_cat_title(); ?></h1>
  	</header>      
  	
	<?php while ( have_posts() ) : the_post(); ?>
	
		<div class="entry">
		
			<article <?php post_class(); ?>>
			
				<header>
					<h1 class="heading2"><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

					<b class="heading6">Posted by <?php the_author_link(); ?> on <time datetime="<?php the_time( 'c' ); ?>"><?php the_time( get_option( 'date_format' ) ) ?></time></b>
				</header>
				
				<?php the_excerpt(); ?>
				
			</article><!--/end article-->					
			
			<p class="heading6"><?php the_tags( 'Tags: ', ', ', '<br />' ); ?> Posted in <?php the_category( ', ' ) ?> | <?php edit_post_link( 'Edit', '', ' | ' ); ?>  <?php comments_popup_link( 'No Comments &#187;', '1 Comment &#187;', '% Comments &#187;' ); ?></p>
			
		</div><!--/end .entry-->
	
	<?php endwhile; ?>

	<div class="clearfix">
		<p class="right"><?php previous_posts_link( 'Newer Entries &raquo;' ) ?></p>
		<p class="left"><?php next_posts_link( '&laquo; Older Entries' ) ?></p>
	</div>

	<?php else : ?>
	
    		<header>
    			<h1>Sorry nothing here yet...</h1>
    		</header>
    		
        	<p>Please check back later for future updates.</p>
        	
    <?php endif; ?>

	</div></div><!--/end .content-block-->

</main><!--/end .content-->
<?php get_footer(); ?>