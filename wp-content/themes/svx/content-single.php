<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>
<div class="content_box blog_content">
  <div class="content_box_top">
    <div></div>
  </div>
  <div class="content_box_inner">
    <div class="content_box_content">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="box_header">
        	<header class="entry-header">
        		<div class="entry-meta">
        		  <?php
        				printf( __( '<time class="entry-date" datetime="%2$s" pubdate>%3$s</time>', 'toolbox' ),
        					get_permalink(),
        					get_the_date( 'c' ),
        					get_the_date()
        				);
        			?>
      				<span class="sep"> </span>
        			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'toolbox' ), __( '1 Comment', 'toolbox' ), __( '% Comments', 'toolbox' ) ); ?></span>
        		</div><!-- .entry-meta -->
        	</header><!-- .entry-header -->
        </div>
        <div class="box_content">
          <div class='single_column'>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php
      				printf( __( '<span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>', 'toolbox' ),
      					get_author_posts_url( get_the_author_meta( 'ID' ) ),
      					sprintf( esc_attr__( 'View all posts by %s', 'toolbox' ), get_the_author() ),
      					get_the_author()
      				);
      			?>
          	<div class="entry-content">
          		<?php the_content(); ?>
          		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
          	</div><!-- .entry-content -->

          	<footer class="entry-meta">
          	  <span class="cat-links"><span class="entry-utility-prep entry-utility-prep-cat-links">Categories</span><?php the_category( ', ' ); ?></span>
          		<?php the_tags( '<span class="tag-links">' . __( 'Tagged ', 'toolbox' ) . '</span>', ', ', '' ); ?>
          		<?php edit_post_link( __( 'Edit', 'toolbox' ), '<span class="sep">|</span> <span class="edit-link">', '</span>' ); ?>
          	</footer><!-- .entry-meta -->
          </div>
        </div>
      </article><!-- #post-<?php the_ID(); ?> -->
      </div>
    </div>
    <div class="content_box_bottom">
      <div></div>
    </div>
</div>