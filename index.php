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
 * @package iphoneshop
 */

get_header(); ?>
<!-- header-section -->
<section class="header-section">

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h2>Сумасшедшая распродажа</h2>
							<h1>iPhone 7</h1>
							<p>Всего за 44 000 рублей</p>
							<a class="btn" href="card.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Перейти к покупке</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h2>Сумасшедшая распродажа</h2>
							<h1>iPhone 7</h1>
							<p>Всего за 44 000 рублей</p>
							<a class="btn" href="card.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Перейти к покупке</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<h2>Сумасшедшая распродажа</h2>
							<h1>iPhone 7</h1>
							<p>Всего за 44 000 рублей</p>
							<a class="btn" href="card.html"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Перейти к покупке</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- header-section -->
</header>
<section class="section-1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<!-- item -->
				<div class="wrapper-item item-1">
					<div class="wrapper-text-item">
						<h2>iPhone 8</h2>
						<p>Уже в продаже!</p>
					</div>
					<img src="img/sec1.png" alt="">
				</div>
				<!-- end item -->
			</div>
			<div class="col-lg-4 col-md-4">
				<!-- item -->
				<div class="wrapper-item item-2">
					<div class="wrapper-text-item">
						<h2>Apple
						Watch 3</h2>
						<p>В продаже <br>
						с 10 октября</p>
					</div>
					<img src="img/sec2.png" alt="">
				</div>
			</div>
			<!-- end item -->
			<div class="col-lg-4 col-md-4">
				<!-- item -->
				<div class="wrapper-item item-3">
					<div class="wrapper-text-item">
						<h2>iPhone Х</h2>
						<p>В продаже с 3 ноября</p>

					</div>
					<img src="img/sec3.png" alt="">
				</div>
			</div>
			<!-- end item -->
		</div>
	</div>
</section>
<!-- end section-1 -->
<section class="section-2">
	<div class="container">
		<?php
		$meta = new stdClass;
		$counter = 0;
		$colnSumm = 0;
		$args = array( 'numberposts' => -1,
			'nopaging' => 1	
		);
		$myposts = get_posts($args);
		foreach( $myposts as $post ){ setup_postdata($post);

			if ($colnSumm == 12) :
						$colnSumm = 0;
            echo "</div>"; // close div if it's not the first
            echo "<div class='row'>";
            
          endif;
         if($counter == 0)
         {
         
            echo "<div class='row'>";
         }
         
      			
          $categories = get_the_category();
          if($categories)
          {
          	foreach($categories as $category) 
          	{
          		$getCatNam =  $category->cat_name ;
          	}
          }
          if($getCatNam == "good-item")
          {
          		$colnSumm = $colnSumm + 3;
          	?>

          	<div class="col-lg-3 col-md-3">
          		<div class="item-good"	id="post-<?php the_ID(); ?>">
          			<div class="good-img-blc view overlay hm-zoom">
          				<?php the_post_thumbnail(); ?>
          			</div>

          			<h3><?php the_title(); ?></h3>

          			<p><?php the_content(); ?></p>
          			<a class="btn" href="<?php the_permalink(); ?>">Перейти к покупке</a>
          		</div>
          	</div>
          	<?php
          	 }
          	else if($getCatNam == "wide-good-item")
          	{ 
          			$colnSumm = $colnSumm + 6;
          		foreach( (array) get_post_meta( $post->ID ) as $k => $v ) $meta->$k = $v[0];

          		?>
          		<!-- wide-good item -->
          		<div class="col-lg-6 col-md-6">
          			<div class="item-good-wide ">
          				<div class="good-wide-img-blc view overlay hm-zoom">
          					<?php the_post_thumbnail(); ?>
          				</div>
          				<div class="good-wide-wrapper-action ">
          					<span><?php echo $meta->price; ?></span>
          					<a class="btn" href="<?php the_permalink(); ?>"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Оформить</a>
          				</div>
          				<div class="good-wide-wrapper-text ">

          					<h3><?php the_title(); ?></h3>
          					<span><?php echo $meta->subTitle; ?></span>
          					<p><?php the_content(); ?></p>
          				</div>
          			</div>
          		</div>
          		<!-- end wide-good item -->
          		<?php  }
          		$counter++; }
wp_reset_postdata(); // сбрасываем переменную $post
?>






</div></div></section>
<?php get_footer();



?>

</div></div></section>
<?php get_footer();
