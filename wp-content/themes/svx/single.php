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
  					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'toolbox' ) . '</span>' ); ?></div>
					  <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'toolbox' ) . '</span> %title' ); ?></div>
					</nav><!-- #nav-above -->
        </div>

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', 'single' ); ?>
        
				<nav id="nav-below">
					<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'toolbox' ) . '</span>' ); ?></div>
				  <div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'toolbox' ) . '</span> %title' ); ?></div>
				</nav><!-- #nav-below -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>