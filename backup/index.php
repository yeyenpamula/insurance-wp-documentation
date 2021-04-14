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
 * @package Insurance_WP
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		// if ( have_posts() ) :

		// 	if ( is_home() && ! is_front_page() ) :
				?>
				<!-- <header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header> -->
				<?php
		// 	endif;

		// 	/* Start the Loop */
		// 	while ( have_posts() ) :
		// 		the_post();

		// 		/*
		// 		 * Include the Post-Type-specific template for the content.
		// 		 * If you want to override this in a child theme, then include a file
		// 		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		// 		 */
		// 		get_template_part( 'template-parts/content', get_post_type() );

		// 	endwhile;

		// 	the_posts_navigation();

		// else :

		// 	get_template_part( 'template-parts/content', 'none' );

		// endif;
		?>

<!-- Hero Section Start -->
<section class="container hero-section mt-5 mb-5">
  <div class="row">
    <div class="col-md-6">
      <div>
        <h1 class="page-heading">Small business insurance has never been easier</h1>
        <p class="subheading">Save up to 30% with instant coverage <br>designed for the self-employed.</p>
        <div class="row">
          <div class="col-md-4 col-sm-12 col-12">
            <div class="d-grid">
              <button class="btn btn-primary button-cta mt-4" type="button">Get a Quote</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5 offset-md-1 d-none d-sm-none d-md-block">
      <img src="http://www.free-insurance-websites.com/wp-content/uploads/2021/03/Hero-Picture.png" class="img-fluid">
    </div>
  </div>
</section>

<!-- Featured On Section Start -->
<section class="featured-on-section my-5">
  <div class="container py-4 my-4">
    <div class="row">
      <h3 class="text-center">Featured On</h3>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 col-6 my-3 text-center">
        <a href="#">
          <img src="http://www.free-insurance-websites.com/wp-content/uploads/2021/03/the-new-york-times-logo-white.png" class="img-fluid">
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-6 my-3 text-center">
        <a href="#">
          <img src="http://www.free-insurance-websites.com/wp-content/uploads/2021/03/the-new-york-times-logo-white.png" class="img-fluid">
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-6 my-3 text-center">
        <a href="#">
          <img src="http://www.free-insurance-websites.com/wp-content/uploads/2021/03/the-new-york-times-logo-white.png" class="img-fluid">
        </a>
      </div>
      <div class="col-md-3 col-sm-6 col-6 my-3 text-center">
        <a href="#">
          <img src="http://www.free-insurance-websites.com/wp-content/uploads/2021/03/the-new-york-times-logo-white.png" class="img-fluid">
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Two Column Section Start -->
<section class="container two-column-section my-5">
  <div class="row">
    <div class="col-md-5 mb-3">
      <img src="http://www.free-insurance-websites.com/wp-content/uploads/2021/03/Picture-A.png" class="img-fluid">
    </div>
    <div class="col-md-6 offset-md-1">
      <div>
        <h2>Next is 100% dedicated to <br>small businesses.</h2>
        <p>Whether you’re self-employed or have a team of 20, we offer affordable, painless insurance tailored specifically to your business. Get covered in 10 minutes or less, all from the convenience of your smartphone.</p>
        <a href="#">Learn More</a>
      </div>
    </div>
  </div>
</section>

<!-- Two Column Section Start -->
<section class="container two-column-section my-5">
  <div class="row">
    <div class="col-md-5 mb-3 offset-md-1 order-md-last">
      <img src="http://www.free-insurance-websites.com/wp-content/uploads/2021/03/Picture-B.png" class="img-fluid">
    </div>  
    <div class="col-md-6">
      <div>
        <h2>General Liability</h2>
        <p>Accidentally damaged customer property? General liability insurance makes those uh-oh moments okay by covering a wide range of incidents and basic risks. Contractors and cleaners can add tools and equipment coverage to protect their gear, as well.</p>
        <a href="#">Learn More</a>
      </div>
    </div> 
  </div>
</section>

<!-- Two Column Section Start -->
<section class="container two-column-section my-5">
  <div class="row">
    <div class="col-md-5 mb-3">
      <img src="http://www.free-insurance-websites.com/wp-content/uploads/2021/03/Picture-B.png" class="img-fluid">
    </div>
    <div class="col-md-6 offset-md-1">
      <div>
        <h2>Workers' Compensation</h2>
        <p>Here’s the deal: If you have employees, most states require workers’ comp coverage. But unlike most insurance companies, our coverage is 100% designed for small businesses. So like your doting mother reminding you to bring a jacket, we’re here to make sure you always have the right coverage.</p>
        <a href="#">Learn More</a>
      </div>
    </div>
  </div>
</section>

<!-- Product Section Start -->
<section class="container py-5 product-section">
  <div class="row">
    <div class="col-md-6">
      <h2>We’ve got tailored policies for thousands of professions</h2>
      <p class="subheading">(You could say we have a thing for small business)</p>
    </div>
    <div class="col-md-6"></div>
  </div>
  <div class="row mt-5">
    <div class="col-md-4 mb-4">
      <div class="product-list">
        <div class="product-thumbnail">
          <img src="http://www.free-insurance-websites.com/wp-content/uploads/2021/03/accounting.png" class="img-fluid">
        </div>
        <h3 class="product-title">Accountant</h3>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="product-list">
        <div class="product-thumbnail">
          <img src="http://www.free-insurance-websites.com/wp-content/uploads/2021/03/carpenter.png" class="img-fluid">
        </div>
        <h3 class="product-title">Carpenter</h3>
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="product-list">
        <div class="product-thumbnail">
          <img src="http://www.free-insurance-websites.com/wp-content/uploads/2021/03/catering.png" class="img-fluid">
        </div>
        <h3 class="product-title">Caterer</h3>
      </div>
    </div>
  </div>
</section>

<!-- Testimonial Section Start -->
<section class="py-5 testimonial-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>What our clients says about us</h2>
        <p class="sub-title"><strong>Testimonials</strong></p>
        <div class="testimonial-decription">
          Master has a 4.7 out of 5 rating from 100,000+ people across a variety of industries, so you can trust that you’re getting the reliable, simple and incredible service you deserve.
        </div>
          <div class="row">
            <div class="col-md-4 col-sm-12 col-12">
              <div class="d-grid">
                <button class="btn btn-primary button-cta mt-4" type="button">Get a Quote</button>
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-6"></div>
    </div>
  </div>
  <div class="container mt-5 owl-carousel owl-theme">
  <?php
            $args = array(
                'post_type'           => 'testimonial',
                'orderby'             => 'rand',
                'ignore_sticky_posts' => 1,
            );
            // The Query
            $the_query = new WP_Query( $args );
            
            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post(); ?>
                    <div class="item">
                      <div class="testimonial-item">
                        <?php $rating = get_post_meta(get_the_ID(), 'iwp_testimonial_rating', true); ?>
                        <div class="star-rating mb-3">
                          <?php 
                            if($rating == 1) echo '<span class="fa fa-star"></span>';
                            if($rating == 2) echo '<span class="fa fa-star"></span><span class="fa fa-star"></span>';
                            if($rating == 3) echo '<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>';
                            if($rating == 4) echo '<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>';
                            if($rating == 5) echo '<span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>';
                          ?>
                        </div>
                        <p><?php the_content(); ?></p>
                        <p class="testimonial-client"><?php the_title(); ?> / <?php echo get_post_meta(get_the_ID(), 'iwp_position_of_client', true); ?></p>
                      </div>
                    </div>
                <?php } ?>
            <?php } else {
                // no posts found
                echo "<p>No Testimonial Found !</p>";
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        ?> 
  </div>
</section>

<!-- One Column Section -->
<section class="container-fluid my-5 one-column-section text-center ">
  <div class="row">
    <div class="col-md-12">
      <h2 class="one-column-title text-md-center text-start">Need a fast certificate of insurance?</h2>
      <p class="subheading text-md-center text-start">Get covered in minutes and have your COI in hand</p>
      <div class="row justify-content-center">
          <div class="col-md-2 col-sm-12 col-12 text-center">
            <div class="d-grid">
              <button class="btn btn-primary button-cta" type="submit">Get a Quote</button>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();