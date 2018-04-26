<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package built
 */
 global $redux_demo;
get_header();
?>

	<main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
		
		
		
		<?php 
		
		$sliderposts = new WP_Query(array(
			'post_type'		=> 'post',
		));
		
		while($sliderposts->have_posts()): $sliderposts->the_post(); ?>
          <div class="carousel-item">
           <?php the_post_thumbnail(); ?>
			 <div class="layer"> </div>
            <div class="container">
              <div class="carousel-caption">
                 <h2><?php the_category(', ',' ',''); ?></h2>
                <h1><?php echo wp_trim_words(get_the_title(), 6, false); ?></h1>
                <a class="btn btn-lg btn-custom" href="<?php the_permalink(); ?>" role="button"><?php echo $redux_demo['readmore']; ?></a>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
		  
		  
		  
		  
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		<i class="fas fa-angle-left slider-cont"></i>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
         <i class="fas fa-angle-right slider-cont"></i>
        </a>
      </div>
	  
	  
	  
	  
	<div class="blog-section">
		<div class="container marketing">
		
			<div class="search-form"> 
				<form method="GET" action="<?php echo bloginfo('home'); ?>"> 
					<i class="fas fa-search"></i>
					<input name="s" id="s" type="search" placeholder="Search.." />
					
				</form>
			</div>
			<!-- Three columns of text below the carousel -->
			<div class="row">

		<?php
		if ( have_posts() ) :

			

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		
			</div>
			 <div class="load-more"> 
				 <a class="btn btn-lg btn-custom" href="#" role="button">Read more</a>
			   </div>
		</div>
	</div>

	
	
	
	<div class="carousel-slider-blog"> 
	  
		<h2><?php echo $redux_demo['carouselslider']; ?></h2>
		<div class="owl-carousel owl-theme">
		
		
		<?php 
		
		$sliderpost = new WP_Query(array(
			'post_type'		=> 'post',
		));
		
		while($sliderpost->have_posts()): $sliderpost->the_post(); ?>
			<div class="item">
				<div class="feature-image"> 
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
				<h4><?php the_category(', ',' ',''); ?></h4>
				<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 6, false); ?></a></h2>
			</div> 
		<?php endwhile; ?>
			
			
			
			
			
			
			
		</div>
		
		<div class="trigger-control"> 
			<a class="trigger-control-prev customPrevBtn">
			<i class="fas fa-angle-left trigger-cont"></i>
			</a>
			<a class="trigger-control-next customNextBtn">
			 <i class="fas fa-angle-right trigger-cont"></i>
			</a>
		</div>
	  </div>
	
	
	
<?php
get_footer();
