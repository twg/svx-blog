<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */

get_header(); ?>


				<?php the_post(); ?>
       <div class='main_content'>
        <div class="main_nav">
          <h2 class="page-title">Blog</h2>
          <?php rewind_posts(); ?>
					<nav id="nav-above">
						<h1 class="section-heading"><?php _e( 'Post navigation', 'toolbox' ); ?></h1>
						<div class="nav-home"><a href="/">see all posts</a></div>
						<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'toolbox' ) ); ?></div>
						<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'toolbox' ) ); ?></div>
					</nav><!-- #nav-above -->
        </div>
				<header class="page-header">
					<h3 class="page-title author"><?php printf( __( 'Author Archives: <span class="vcard">%s</span>', 'toolbox' ), "<a class='url fn n' href='" . get_author_posts_url( get_the_author_meta( 'ID' ) ) . "' title='" . esc_attr( get_the_author() ) . "' rel='me'>" . get_the_author() . "</a>" ); ?></h3>
				</header>
				
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
				
				<?php /* Display navigation to next/previous pages when applicable */ ?>
				<?php if (  $wp_query->max_num_pages > 1 ) : ?>
					<nav id="nav-below">
						<h1 class="section-heading"><?php _e( 'Post navigation', 'toolbox' ); ?></h1>
						<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'toolbox' ) ); ?></div>
						<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'toolbox' ) ); ?></div>
					</nav><!-- #nav-below -->
				<?php endif; ?>				
      </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>