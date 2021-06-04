<?php /*Template Name: Home Page */  get_header(); ?>

<div class="bannerContaine">
	<div class="sliderContainerBanner">
		<?php if( have_rows('banner_container') ): while( have_rows('banner_container') ) : the_row(); ?>
			<div class="innercontainerSlider">
				<div class="imaheContainer">
					<img src="<?php the_sub_field('Bannerimage'); ?>">
				</div>
				<div class="container">
					<div class="contentContainerbanner">
						<h2><?php the_sub_field('banner_heading'); ?></h2>
					</div>
				</div>
			</div>
		<?php endwhile; else : endif; ?>
	</div>
</div>
<div class="catsContainer" id="services">
	<div class="container">
		<div class="headingContainer">
			<h2><?php the_field('headingCategory'); ?></h2>
		</div>
		<div class="catContainerInnenr">
			<div class="row">

				</div>
			</div>
		</div>
	</div>
	<div class="sliderdevelopment">
		<div class="container">
			<div class="row home-row">
				<div class="col">
					<div class="sliderCno">
						<?php if( have_rows('slider_development') ): while( have_rows('slider_development') ) : the_row(); ?>
							<div class="contentLeftSideslider">
								<h2><?php the_sub_field('headingSlider') ?></h2>
								<p><?php the_sub_field('contentSlider') ?></p>
								<ul>
									<?php if( have_rows('list_item') ): while( have_rows('list_item') ) : the_row(); ?>
										<li><img src="<?php echo get_template_directory_uri(); ?>/images/yesh.png"><?php the_sub_field('listSlider') ?></li>
									<?php endwhile; else : endif; ?>
								</ul>
								<a href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
							</div>
						<?php endwhile; else : endif; ?>
					</div>
				</div>
				<div class="col">
					<div class="contentRightSideslider">
						<?php if( have_rows('slider_development') ): while( have_rows('slider_development') ) : the_row(); ?>
							<div class="sliderInnerRIghtImage">
								<img src="<?php the_sub_field('imageSlider') ?>">
							</div>
						<?php endwhile; else : endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="fetureCars" id="featurecat">
		<div class="container">
			<div class="headingFetureCat">
				<h2>Featured Categories</h2>
			</div>
			<div class="sliderCOntainerFetureCars">
				<div class="fetureCatContainerInnenr">
					<div class="sliderFeatureProducts">

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="featureProduct" id="featurepro">
				<div class="container">
					<div class="hedaing">
						<h2><?php the_field('Fetureheading'); ?></h2>
					</div>
					<div class="sliderContainerProduct">
		
				</div>
			</div>
		</div>
		<div class="powerWorld">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="contentLeftContainerPower">
							<h2><?php the_field('powerHeading'); ?></h2>
							<p><?php the_field('powerContent'); ?></p>
							<a href="<?php the_field('button_linkPower'); ?>"><?php the_field('button_textPower'); ?></a>
						</div>
					</div>
					<div class="col-md-6">
						<img src="<?php the_field('imaegPower'); ?>">
					</div>
				</div>
			</div>
		</div>
		<div class="blog">
			<div class="container">
				<div class="headingBLog">
					<h2>BLOG & ARTICLES <a href="<?php echo site_url(); ?>/blog">All News</a></h2>
				</div>
				<div class="row sliderBlog">
					<?php 
					$args = array( 'posts_per_page' => 4);
					$loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post();  
					?>
					<div class="col-md-3 innerContainerSliderBlog">
						<a href="<?php the_permalink(); ?>">
							<div class="postImageSlider">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							</div>
							<div class="contentPostSlider">
								<span class="adateContainer"><?php echo get_the_date(); ?></span>
								<h6><?php the_title(); ?></h6>
								<?php  the_excerpt(); ?>
							</div>
						</a>
					</div>
				<?php  endwhile; wp_reset_query();  ?>
			</div>
		</div>
	</div>
	<div class="securoty" style="background-image: url('<?php the_field('securityImage'); ?>');">
		<div class="container">
			<div class="contentSecurity">
				<h2><?php the_field('securityheading'); ?></h2>
				<h6><?php the_field('securitySub_heading'); ?></h6>
				<p><?php the_field('securityContent'); ?></p>
			</div>
		</div>
	</div>





	<div class="yoSectionNew">
		<div class="container">
			<div class="followUs">
				<h2>Follow Us</h2>
				<ul class="socialItemsCopy">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>






	<?php get_footer(); ?>