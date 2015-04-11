
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
    <?php edit_post_link( __( 'Edit', 'newswire' ), '<span class="edit-link">', '</span>' ); ?>
        <div class="entry-meta">
			
			<?php 
if( get_post_meta($post->ID, 'jb_imprint', true) ) {

echo get_post_meta($post->ID, 'jb_imprint', true);
echo ('&nbsp;');
}
?><?php newswire_posted_on(); ?> <!-- byline moved to bottom of article -->			<?php
$postlicensecatid=0;

if(in_category(466)) {
$postlicensecatid=466;
} elseif(in_category(467)) {
$postlicensecatid=467;
} elseif(in_category(468)) {
$postlicensecatid=468;
} elseif(in_category(469)) {
$postlicensecatid=469;
} elseif(in_category(470)) {
$postlicensecatid=470;
} elseif(in_category(471)) {
$postlicensecatid=471;
} else {
$postlicensecatid=469;
}


if ($postlicensecatid!=0) {
	
?>
<?php $licence= category_description($postlicensecatid ); ?>
<?php echo 'and is ', $licence ?><?php
}
?>
    <br/><?php
        /* translators: used between list items, there is a space after the comma */
        $tag_list = get_the_tag_list( '', ', ' );

        // This blog only has 1 category so we just need to worry about tags in the meta text
        if ( '' != $tag_list ) {
            printf ( __( '<span class="tag-meta">Tagged %s</span>', 'newswire' ), $tag_list);
        }
    ?>
		</div><!-- .entry-meta -->
    </footer><!-- .entry-meta -->
         
	
</article><!-- #post-<?php the_ID(); ?> -->
