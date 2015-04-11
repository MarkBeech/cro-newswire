
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		
	</header><!-- .entry-header -->

	<div class="entry-content post-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'newswire' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
			
		<div class="colorbar"></div>
   
    <footer class="entry-meta">
    <?php
        /* translators: used between list items, there is a space after the comma */
        $tag_list = get_the_tag_list( '', ', ' );

        // This blog only has 1 category so we just need to worry about tags in the meta text
        if ( '' != $tag_list ) {
            printf ( __( '<span class="tag-meta">Tagged %s</span>', 'newswire' ), $tag_list);
        }
    ?>
    <?php edit_post_link( __( 'Edit', 'newswire' ), '<span class="edit-link">', '</span>' ); ?>
        <div class="entry-meta">
			<?php newswire_posted_on(); ?> <!-- byline moved to bottom of article -->
		</div><!-- .entry-meta -->
    </footer><!-- .entry-meta -->
         
	
</article><!-- #post-<?php the_ID(); ?> -->
