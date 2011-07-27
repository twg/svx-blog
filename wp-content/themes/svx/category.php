<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>

      <div class='main_content'>
        <div class="main_nav">
          <h2 class="page-title">Blog</h2>
  					<nav id="nav-above">
  						<h1 class="section-heading"><?php _e( 'Post navigation', 'toolbox' ); ?></h1>
  						<div class="nav-home"><a href="/">see all posts</a></div>
  						<div class="nav-previous"><?php next_posts_link( __( 'previons', 'toolbox' ) ); ?></div>
  						<div class="nav-next"><?php previous_posts_link( __( 'next', 'toolbox' ) ); ?></div>
  					</nav><!-- #nav-above -->
        </div>
        <header class="page-header">
					<h1 class="page-title">   <?php printf( __( 'Category Archives: %s', 'toolbox' ), '<span>' . single_cat_title( '', false ) . '</span>' );	?></h1>
          <?php $categorydesc = category_description(); if ( ! empty( $categorydesc ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>
        </header>
				
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
				
				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<div class="divider"></div>
			  <?php wp_pagenavi(); ?>
			  
			</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>