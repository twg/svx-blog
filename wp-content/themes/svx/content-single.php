<?php
/**
 * @package WordPress
 * @subpackage Toolbox
 */
?>

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
    		<?php
    			$tag_list = get_the_tag_list( '', ', ' );
    			if ( '' != $tag_list ) {
    				$utility_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'toolbox' );
    			} else {
    				$utility_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'toolbox' );
    			}
    			printf(
    				$utility_text,
    				get_the_category_list( ', ' ),
    				$tag_list,
    				get_permalink(),
    				the_title_attribute( 'echo=0' )
    			);
    		?>

    		<?php edit_post_link( __( 'Edit', 'toolbox' ), '<span class="edit-link">', '</span>' ); ?>
    	</footer><!-- .entry-meta -->
    </div>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
