<?php get_header(); ?>
<p>soy single.php</p>

<div class="container">
	<div class="row">
		<div class="col-md-8">
		
	

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    	<?php  the_post_thumbnail('large');  ?>
       	<h2> <?php the_title() ?> </h2>
		<p> <?php the_content() ?> </p>
		<p><?php next_post_link() ?></p>
		<p><?php previous_post_link() ?></p>
		<p><?php the_category() ?></p>	
		<p><?php the_tags()  ?></p>


    <?php endwhile; ?>
<?php endif; ?>
</div>
<div class="col-md-3 offset-md-1">
	<?php get_sidebar() ?>
</div>
</div>
</div>

<?php get_footer() ?>