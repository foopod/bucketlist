<?php get_header(); ?>


<?php get_sidebar(); ?>


    <div class="content container">
      <?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; ?>
            <?php next_posts_link( 'Previous' ); ?>
            <?php previous_posts_link( 'Next' ); ?>
           <? endif;  ?>
			



    </div>
<?php get_footer(); ?>