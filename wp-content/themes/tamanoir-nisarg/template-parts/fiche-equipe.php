<?php
/*
Template Name: Fiche Equipe
Template Post Type: post
*/
?>
<article id="post-<?php the_ID(); ?>"  <?php post_class( 'post-content' ); ?>>
<div class="equipe-card">
	<div class="equipe-pic-box">
		<div class="bio-cross">
			<img src="../wp-content/uploads/2018/06/cross.png">
		</div>
		<h2 class="equipe-bio-name"><?php the_title();?></h2>
		<div class="equipe-pic-circle">
			<img src="<?php the_post_thumbnail();?>">
		</div>
	</div>

	<div class="equipe-triangle-box"></div>

	<div class="equipe-name-box"><?php the_title();?></div>

	<div class="equipe-bio-content">
			<ul>
				<h3>Statut</h3>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'a-statut', true ); ?></p>
				</li>
				<h3>Poste(s)</h3>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'b-poste1', true ); ?></p>
				</li>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'b-poste2', true ); ?></p>
				</li>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'b-poste3', true ); ?></p>
				</li>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'b-poste4', true ); ?></p>
				</li>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'b-poste5', true ); ?></p>
				</li>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'b-poste6', true ); ?></p>
				</li>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'b-poste7', true ); ?></p>
				</li>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'b-poste8', true ); ?></p>
				</li>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'b-poste9', true ); ?></p>
				</li>
				<h3>Diplômes</h3>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'c-diplome1', true ); ?></p>
				</li>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'c-diplome2', true ); ?></p>
				</li>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'c-diplome3', true ); ?></p>
				</li>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'c-diplome4', true ); ?></p>
				</li>
				<li>
					<p><?php echo get_post_meta( $post->ID, 'c-diplome5', true ); ?></p>
				</li>
			</ul>
			<div>

				<?php
				the_content( '...<p class="read-more"><a class="btn btn-default" href="'. esc_url( get_permalink( get_the_ID() ) ) . '">' . __( ' Read More', 'nisarg' ) . '<span class="screen-reader-text"> '. __( ' Read More', 'nisarg' ).'</span></a></p>' );
				?>





			</div>
	</div>
</div>
		</article><!-- #post-## -->



