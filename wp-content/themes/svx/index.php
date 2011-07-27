<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>
    

      
      <div class='main_content'>
        <div class="main_nav">
          <h2>Blog</h2>
        </div>
				
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					
					<div class="content_box blog_content">
            <div class="content_box_top">
              <div></div>
            </div>
            <div class="content_box_inner">
              <div class="content_box_content">
                <?php get_template_part( 'content', get_post_format() ); ?>
              </div>
            </div>
            <div class="content_box_bottom">
              <div></div>
            </div>
        </div>

				<?php endwhile; ?>
				
				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<div class="divider"></div>
			  <?php wp_pagenavi(); ?>
		
      </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>