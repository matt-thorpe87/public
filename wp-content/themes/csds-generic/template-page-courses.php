<?php
/**
 * Template Name: CSDS Courses
 */
// localdev = 'https://localdev.central.sdc.qld.edu.au'
// prod = 'https://central.csds.qld.edu.au'

$baseUrl = 'https://central.csds.qld.edu.au';
$requestUrl = 'https://central.csds.qld.edu.au/api/v2/courses/fetch-landing';

// Uncomment this section if your local copy isn't working
/*
if ($_SERVER['SERVER_NAME'] !== 'csds.qld.edu.au') {
	$baseUrl = 'https://localdev.central.sdc.qld.edu.au';
	$requestUrl = 'https://192.168.56.102/api/v2/courses/fetch-landing';
}
*/

$courseUrl = $baseUrl . '/central/courses';

$request = wp_remote_get( $requestUrl, array(
    'sslverify' => false
));
if( is_wp_error( $request ) ) {
	return false;
}
$fetchedJSON = wp_remote_retrieve_body( $request );
$courseData = json_decode( $fetchedJSON );



get_header(); ?>
<main class="main" role="main">
	<?php
$type = get_field('banner_type');
$show = get_field('show_page_title');

if( $type == 'basic') {
include 'template_parts/blocks/banner-basic/banner-basic.php';
} 
elseif ( $type == 'int') {
include 'template_parts/blocks/banner-intermediate/banner-intermediate.php';
}
elseif ( $type == 'ad') {
include 'template_parts/blocks/banner-advanced/banner-advanced.php';
} 
elseif ($type == 'default') { 
    include 'inc/page-banner.php';
} 
?>
	<link rel="stylesheet" href="wp-content/themes/csds-generic/template_parts/blocks/card/card.scss">
	<section class="qld__body">
		<div id="courses" class="template-page">
			<div class="search-section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="content">
								<h3>What course are you looking for?</h3>
								<form id="courses-search-form">
									<input type="text" id="search-input" placeholder="Search courses..." required>
									<button type="submit" class="qld__btn qld__btn--search">Search</button>
								</form>

							<script>
								document.querySelector('#courses-search-form').addEventListener('submit', function (e) {
									e.preventDefault(); // Prevent the form from submitting the usual way
									
									var searchValue = document.querySelector('#search-input').value;
									
									// Construct the filters JSON and encode it
									var filters = encodeURIComponent(JSON.stringify([{
										"name": "searchField",
										"value": searchValue,
										"operator": "="
									}]));

									// Construct the full URL
									var url = "https://central.csds.qld.edu.au/central/courses?per-page=20&filters=" + filters + "&page=1&sort=courseNameSort";

									// Redirect the user to the constructed URL
									window.open(url, 'blank');
								});
							</script>



								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
	
				<?php  while(have_posts()){
							the_post(); ?>
		
						<?php }  ?>
						<p><?php the_content();?></p>
	
			</div>

		<?php if(!empty($courseData)) : ?>

			<!-- Featured courses -->
			<section class="qld__card--wrapper qld__card--wrapper-bg-colour qld__courses__wrapper">
				<?php if(count($courseData->featuredCourses) > 0) : ?>
					<div class="section courses-section featured four">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-12">
									<h3>Featured courses</h3>
								</div>
								<ul class="qld__card-list qld__card-list--matchheight">
									<?php foreach ($courseData->featuredCourses as 	$featuredCourse) : ?>
										<li class="col-sm-12 col-md-6 col-lg-4 col-xl-3 course-card  <?php if (!empty($featuredCourse->courseClass)) { echo $featuredCourse->courseClass;} ?>">
												<a class="qld__card qld__card--image qld__card__action" href="<?= $featuredCourse->URL ?>" target="_blank" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'featuredCourses'});">

													<div class="qld__responsive-media-img--bg image" style="<?php if (!empty($featuredCourse->courseImageURL)) { echo 'background-image: url('.$featuredCourse->courseImageURL.');';} ?>"></div>

													<div class="qld__card__inner">
														<div class="qld__card__content">
															<div class="qld__course__date qld__card__tags qld__tag__list"><p class="qld__tag qld__tag--link qld__date__tag"><?= $featuredCourse->upcoming ?></p></div>
															<div class="qld__card__content-inner">
																<h3 class="qld__card__title course-name"><?= $featuredCourse->courseName ?> <span class="course-code"><?= $featuredCourse->courseCode ?></span></h3>
																<?php if(!empty($featuredCourse->shortDescription)) : ?><p class="qld__card__description"><?= $featuredCourse->shortDescription ;endif ?></p>
															</div>
															<div class="qld__card__footer">
																<hr class="qld__horizontal-rule">
																<div class="qld__card__footer-inner">
																	<div class="qld__card__tags qld__tag-list">
																		<p class="qld__tag qld__tag--link"><?= $featuredCourse->priceString ?>
																		</p>
																	</div>
																</div>
															</div>
															
														</div>
													</div>
												</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</section>

			<!-- Upcoming courses -->
			<section class="qld__card--wrapper qld__card--wrapper-bg-colour qld__courses__wrapper">
				<?php if(count($courseData->upcomingCourses) > 0) : ?>
					<div class="section courses-section upcoming">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-12">
									<h3>Upcoming courses</h3>
								</div>
								<ul class="qld__card-list qld__card-list--matchheight">
									<?php foreach ($courseData->upcomingCourses as 	$upcomingCourse) : ?>
										<li class="col-sm-12 col-md-6 col-lg-4 col-xl-4 course-card  <?php if (!empty($upcomingCourse->courseClass)) { echo $upcomingCourse->courseClass;} ?>">
												<a class="qld__card qld__card--image qld__card__action" href="<?= $upcomingCourse->URL ?>" target="_blank" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'featuredCourses'});">
													
													<div class="qld__responsive-media-img--bg image" style="<?php if (!empty($upcomingCourse->courseImageURL)) { echo 'background-image: url('.$upcomingCourse->courseImageURL.');';} ?>"></div>

													<div class="qld__card__inner">
														<div class="qld__card__content">
															<div class="qld__course__date qld__card__tags qld__tag__list"><p class="qld__tag qld__tag--link qld__date__tag"><?= $upcomingCourse->upcoming ?></p></div>
															<div class="qld__card__content-inner">
																<h3 class="qld__card__title course-name"><?= $upcomingCourse->courseName ?> <span class="course-code"><?= $upcomingCourse->courseCode ?></span></h3>
																<?php if(!empty($upcomingCourse->shortDescription)) : ?><p class="qld__card__description"><?= $upcomingCourse->shortDescription ;endif ?></p>
															</div>
															<div class="qld__card__footer">
																<hr class="qld__horizontal-rule">
																<div class="qld__card__footer-inner">
																	<div class="qld__card__tags qld__tag-list">
																		<p class="qld__tag qld__tag--link"><?= $upcomingCourse->priceString ?>
																		</p>
																	</div>
																</div>
															</div>
															
														</div>
													</div>
												</a>

										</li>
									<?php endforeach; ?>
									
								</ul>
								<h3 class="qld__view__all col-sm-12">
									<a href="<?= $courseUrl.'/calendar' ?>" target="_blank" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'upcomingCoursesCalendar'});">Browse calendar on Central  &nbsp;<i class="fa-light fa-circle-arrow-right" style="color:var(--QLD-color-dark-background);"></i></a>
								</h3>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</section>

			<!-- Occupation Stream -->
			<section class="qld__card--wrapper qld__card--wrapper-bg-colour qld__courses__wrapper">
					<div class="section occupation-section">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-12">
									<h3>Explore our courses by occupation stream
									</h3>
								</div>
								<ul class="qld__card-list qld__card-list--matchheight">
									<li class="col-sm-12 col-md-6 col-lg-3 col-xl-3 course-card">
										<a class="qld__card qld__card--image qld__card__action" href='<?= $courseUrl.'?per-page=10&filters=%5B%7B"name":"courseCategories","value":%5B2%5D,"operator":"IN"%7D%5D&page=1&sort=courseNameSort' ?>' target="_blank" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'occupationAllied'});">
											<div class="qld__responsive-media-img--bg image" style="background-image: url(' <?php echo content_url("/themes/csds-generic/src/assets/images/category-allied-health.jpg"); ?>')">
												<div class="qld__card__inner occupation">
													<div class="qld__card__content">
														<div class="qld__card__content-inner">
															<h4 class="qld__card__title course-name">Allied Health</h4>
														</div>
													</div>
												</div>
											</div>
										</a>
									</li>
									<li class="col-sm-12 col-md-6 col-lg-3 col-xl-3 course-card">
										<a class="qld__card qld__card--image qld__card__action" href='<?= $courseUrl.'?per-page=10&filters=%5B%7B"name":"courseCategories","value":%5B3%5D,"operator":"IN"%7D%5D&page=1&sort=courseNameSort#_ga=2.48657838.967872739.1722207076-1771258261.1721351324&_gl=1*1e8n1td*_ga*MTc3MTI1ODI2MS4xNzIxMzUxMzI0*_ga_VYT0QC26KX*MTcyMjM4NTk4MC4yMC4wLjE3MjIzODU5ODAuMC4wLjA.' ?>' target="_blank" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'occupationAllied'});">
											<div class="qld__responsive-media-img--bg image" style="background-image: url(' <?php echo content_url("/themes/csds-generic/src/assets/images/category-nursing.jpg"); ?>')">
												<div class="qld__card__inner occupation">
													<div class="qld__card__content">
														<div class="qld__card__content-inner">
															<h4 class="qld__card__title course-name">Nursing and Midwifery</h4>
														</div>
													</div>
												</div>
											</div>
										</a>
									</li>
									<li class="col-sm-12 col-md-6 col-lg-3 col-xl-3 course-card">
										<a class="qld__card qld__card--image qld__card__action" href='<?= $courseUrl.'?per-page=10&filters=%5B%7B"name":"courseCategories","value":%5B5%5D,"operator":"IN"%7D%5D&page=1&sort=courseNameSort#_ga=2.86597136.967872739.1722207076-1771258261.1721351324&_gl=1*1gh00dm*_ga*MTc3MTI1ODI2MS4xNzIxMzUxMzI0*_ga_VYT0QC26KX*MTcyMjM4NTk4MC4yMC4wLjE3MjIzODU5ODQuMC4wLjA.' ?>' target="_blank" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'occupationAllied'});">
											<div class="qld__responsive-media-img--bg image" style="background-image: url(' <?php echo content_url("wp-content/themes/csds-generic/src/assets/images/category-simulation-provider.jpg"); ?>')">
												<div class="qld__card__inner occupation">
													<div class="qld__card__content">
														<div class="qld__card__content-inner">
															<h4 class="qld__card__title course-name">Simulation Provider</h4>
														</div>
													</div>
												</div>
											</div>
										</a>
									</li>
									<li class="col-sm-12 col-md-6 col-lg-3 col-xl-3 course-card">
										<a class="qld__card qld__card--image qld__card__action" href='<?= $courseUrl.'?per-page=10&filters=%5B%7B"name":"courseCategories","value":%5B4%5D,"operator":"IN"%7D%5D&page=1&sort=courseNameSort#_ga=2.258498050.967872739.1722207076-1771258261.1721351324&_gl=1*1p1nojp*_ga*MTc3MTI1ODI2MS4xNzIxMzUxMzI0*_ga_VYT0QC26KX*MTcyMjM4NTk4MC4yMC4xLjE3MjIzODYxNjYuMC4wLjA.' ?>' target="_blank" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'occupationAllied'});">
											<div class="qld__responsive-media-img--bg image" style="background-image: url(' <?php echo content_url("wp-content/themes/csds-generic/src/assets/images/category-medical.jpg"); ?>')">
												<div class="qld__card__inner occupation">
													<div class="qld__card__content">
														<div class="qld__card__content-inner">
															<h4 class="qld__card__title course-name">Medical</h4>
														</div>
													</div>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
			</section>
	
			<!-- Popular online courses -->
			<section class="qld__card--wrapper qld__card--wrapper-bg-colour qld__courses__wrapper">
				<?php if(count($courseData->popularElearning) > 0) : ?>
					<div class="section courses-section featured four">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-12">
									<h3>Popular online courses</h3>
								</div>
								<ul class="qld__card-list qld__card-list--matchheight">
									<?php foreach ($courseData->popularElearning as $popElearning) : ?>
										<li class="col-sm-12 col-md-6 col-lg-4 col-xl-3 course-card  <?php if (!empty($popElearning->courseClass)) { echo $popElearning->courseClass;} ?>">
												<a class="qld__card qld__card--image qld__card__action" href="<?= $popElearning->URL ?>" target="_blank" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'featuredCourses'});">

													<div class="qld__responsive-media-img--bg image" style="<?php if (!empty($popElearning->courseImageURL)) { echo 'background-image: url('.$popElearning->courseImageURL.');';} ?>"></div>

													<div class="qld__card__inner">
														<div class="qld__card__content">
															<div class="qld__course__date qld__card__tags qld__tag__list"><p class="qld__tag qld__tag--link qld__date__tag"><?= $popElearning->upcoming ?></p></div>
															<div class="qld__card__content-inner">
																<h3 class="qld__card__title course-name"><?= $popElearning->courseName ?> <span class="course-code"><?= $popElearning->courseCode ?></span></h3>
																<?php if(!empty($popElearning->shortDescription)) : ?><p class="qld__card__description"><?= $popElearning->shortDescription ;endif ?></p>
															</div>
															<div class="qld__card__footer">
																<hr class="qld__horizontal-rule">
																<div class="qld__card__footer-inner">
																	<div class="qld__card__tags qld__tag-list">
																		<p class="qld__tag qld__tag--link"><?= $popElearning->priceString ?>
																		</p>
																	</div>
																</div>
															</div>
															
														</div>
													</div>
												</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</section>

			<!-- Popular face-to-face courses -->
			<section class="qld__card--wrapper qld__card--wrapper-bg-colour qld__courses__wrapper">
				<?php if(count($courseData->popularF2f) > 0) : ?>
					<div class="section courses-section featured four">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-12">
									<h3>Popular face-to-face courses</h3>
								</div>
								<ul class="qld__card-list qld__card-list--matchheight">
									<?php foreach ($courseData->popularF2f as $popF2f) : ?>
										<li class="col-sm-12 col-md-6 col-lg-4 col-xl-3 course-card  <?php if (!empty($popF2f->courseClass)) { echo $popF2f->courseClass;} ?>">
												<a class="qld__card qld__card--image qld__card__action" href="<?= $popF2f->URL ?>" target="_blank" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'featuredCourses'});">

													<div class="qld__responsive-media-img--bg image" style="<?php if (!empty($popF2f->courseImageURL)) { echo 'background-image: url('.$popF2f->courseImageURL.');';} ?>"></div>

													<div class="qld__card__inner">
														<div class="qld__card__content">
															<div class="qld__course__date qld__card__tags qld__tag__list"><p class="qld__tag qld__tag--link qld__date__tag"><?= $popF2f->upcoming ?></p></div>
															<div class="qld__card__content-inner">
																<h3 class="qld__card__title course-name"><?= $popF2f->courseName ?> <span class="course-code"><?= $popF2f->courseCode ?></span></h3>
																<?php if(!empty($popF2f->shortDescription)) : ?><p class="qld__card__description"><?= $popF2f->shortDescription ;endif ?></p>
															</div>
															<div class="qld__card__footer">
																<hr class="qld__horizontal-rule">
																<div class="qld__card__footer-inner">
																	<div class="qld__card__tags qld__tag-list">
																		<p class="qld__tag qld__tag--link"><?= $popF2f->priceString ?>
																		</p>
																	</div>
																</div>
															</div>
															
														</div>
													</div>
												</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</section>
		<?php endif; ?>
		</div>
	</section>

</main>

<?php get_footer('page'); ?>