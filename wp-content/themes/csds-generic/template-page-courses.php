<?php
/**
 * Template Name: Courses
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
?>

<?php get_header(); ?>
<main class="main" role="main">
	<link rel="stylesheet" href="wp-content/themes/csds-generic/template_parts/blocks/card/card.scss">
	<section class="qld__body">
		<div id="courses" class="template-page">
			<div class="headline parallax-window" data-parallax="scroll" data-image-src="<?= get_stylesheet_directory_uri() ?>/assets/images/bg-ls-headline.jpg">
				<div class="overlay"></div>
			</div>
			<div class="search-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="content">
								<form>
									<h3>What course are you looking for?</h3>
									<?php echo do_shortcode("[csds-course-search]"); ?>
									<div class="search-links">
		
									<div class="desktop">
										<a href="<?= $courseUrl.'/calendar' ?>" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'searchCalendar'});">Browse course calendar</a>
										|
										<a href="<?= $courseUrl ?>" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'searchAllCourses'});">Browse all courses</a>
										</div>
									</div>
									<div class="mobile">
										<a class="gridlove-button button-inline" href="<?= $courseUrl.'/calendar' ?>" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'searchCalendar'});"><i class="fa fa-calendar"></i>  Browse course calendar</a>
										<a class="gridlove-button button-inline" href="<?= $courseUrl ?>" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'searchAllCourses'});"><i class="fa fa-list"></i> Browse all courses</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php if(!empty($courseData)) : ?>
			<section class="qld__card--wrapper qld__card--wrapper-bg-colour">
				<?php if(count($courseData->featuredCourses) > 0) : ?>
					<div class="section courses-section featured four">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-12">
									<h4>Featured courses</h4>
								</div>
								<ul class="qld__card-list qld__card-list--matchheight">
									<?php foreach ($courseData->featuredCourses as 	$featuredCourse) : ?>
										<li class="col-sm-12 col-md-6 col-lg-4 col-xl-3 course-card  <?php if (!empty($featuredCourse->courseClass)) { echo $featuredCourse->courseClass;} ?>">
												<div class="qld__card qld__card--image qld__card__action">
												<a href="<?= $featuredCourse->URL ?>" target="_blank" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'featuredCourses'});">

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

												</div>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</section>
				<?php if(count($courseData->featuredCourses) === 1) : ?>
					<div class="section courses-section featured one">
						<div class="container">
							<div class="row">
								<div class="col-sm-12 course-card <?php if ($courseData->featuredCourses[0]->courseClass) { echo $courseData->featuredCourses[0]->courseClass;} ?>">
									<a href="<?= $courseData->featuredCourses[0]->URL ?>" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'featuredCourses'});">
										<div class="container">
											<div class="col section-title">
												<h2>Featured course</h2>
											</div>
											<?php foreach ($courseData->featuredCourses as $featuredCourse) : ?>
												<div class="col course-image">
													<div class="image" style="<?php if ($featuredCourse->courseImageURL) { echo 'background-image: url('.$featuredCourse->courseImageURL.');';} ?>"></div>
												</div>
												<div class="col course-info">
													<div class="content">
														<p class="course-name"><?= $featuredCourse->courseName ?> <span class="course-code"><?= $featuredCourse->courseCode ?></span></p>
														<p><?= $featuredCourse->priceString ?></p>
														<p class="course-type"><?= $featuredCourse->upcoming ?></p>
													</div>
												</div>
											<?php endforeach; ?>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<?php if(count($courseData->featuredCourses) === 2) : ?>
					<div class="section courses-section featured two">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
								<h4>Featured courses</h4>
								</div>
								<?php foreach ($courseData->featuredCourses as $featuredCourse) : ?>
									<div class="col-md-6 col-lg-6 course-card <?php if ($featuredCourse->courseClass) { echo $featuredCourse->courseClass;} ?>">
										<a href="<?= $featuredCourse->URL ?>" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'featuredCourses'});">
											<div class="container">
												<div class="image" style="<?php if ($featuredCourse->courseImageURL) { echo 'background-image: url('.$featuredCourse->courseImageURL.');';} ?>"></div>
												<div class="content">
													<p class="course-name"><?= $featuredCourse->courseName ?> <span class="course-code"><?= $featuredCourse->courseCode ?></span></p>
													<p><?= $featuredCourse->priceString ?></p>
													<p class="course-type"><?= $featuredCourse->upcoming ?></p>
												</div>
											</div>
										</a>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<?php if(count($courseData->featuredCourses) === 3) : ?>
					<div class="section courses-section featured three">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
								<h4>Featured courses</h4>
								</div>
								<?php foreach ($courseData->featuredCourses as $featuredCourse) : ?>
									<div class="col-sm-12 col-md-6 col-lg-4 course-card <?php if ($featuredCourse->courseClass) { echo $featuredCourse->courseClass;} ?>">
										<a href="<?= $featuredCourse->URL ?>" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'featuredCourses'});">
											<div class="container">
												<div class="date"><?= $featuredCourse->upcoming ?></div>
												<div class="image" style="<?php if ($featuredCourse->courseImageURL) { echo 'background-image: url('.$featuredCourse->courseImageURL.');';} ?>"></div>
		
												<div class="content">
													<p class="course-name"><?= $featuredCourse->courseName ?> <span class="course-code"><?= $featuredCourse->courseCode ?></span></p>
													<p><?= $featuredCourse->priceString ?></p>
												</div>
											</div>
										</a>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<div class="section courses-section upcoming">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
							<h4>Upcoming courses</h4>
							</div>
							<?php foreach ($courseData->upcomingCourses as $upcomingCourse) : ?>
								<div class="col-sm-12 col-md-6 col-lg-3 course-card <?php if (!empty($upcomingCourse->courseClass)) { echo $upcomingCourse->courseClass;} ?>">
									<a href="<?= $upcomingCourse->URL ?>" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'upcomingCourses'});">
										<div class="container">
											<div class="date"><?= $upcomingCourse->upcoming ?></div>
											<div class="image" style="<?php if ($upcomingCourse->courseImageURL) { echo 'background-image: url('.$upcomingCourse->courseImageURL.');';} ?>"></div>
		
											<div class="content">
												<p class="course-name"><?= $upcomingCourse->courseName ?> <span class="course-code"><?= $upcomingCourse->courseCode ?></span></p>
												<p><?= $upcomingCourse->priceString ?></p>
											</div>
										</div>
									</a>
								</div>
							<?php endforeach; ?>
							<div class="col-sm-12 col-md-6 col-lg-3 course-card course-card-link">
								<div class="container">
									<div style="display: table; height: 100%; width: 100%;">
										<div class="content" style="vertical-align: middle; display: table-cell;">
											<a href="<?= $courseUrl.'/calendar' ?>" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'upcomingCoursesCalendar'});">
												<h3 style="margin-bottom: 0px;">Browse calendar on Central <i class="fa fa-external-link"></i></h3>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section occupation-section">
					<div class="container">
						<h4>Explore our courses by occupation stream</h4>
						<div class="row">
							<div class="col-md-5ths col-lg-5ths card">
								<a href='<?= $courseUrl.'?per-page=10&filters=%5B%7B"name":"courseCategories","value":%5B2%5D,"operator":"IN"%7D%5D&page=1&sort=courseNameSort' ?>' onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'occupationAllied'});">
									<div class="container">
										<div class="content">
											<h4>Allied Health</h4>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-5ths col-lg-5ths card">
								<a href='<?= $courseUrl.'?per-page=10&filters=%5B%7B"name":"courseCategories","value":%5B3%5D,"operator":"IN"%7D%5D&page=1&sort=courseNameSort' ?>' onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'occupationNursing'});">
									<div class="container">
										<div class="content">
											<h4>Nursing and Midwifery</h4>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-5ths col-lg-5ths card">
								<a href='<?= $courseUrl.'?per-page=10&filters=%5B%7B"name":"courseCategories","value":%5B5%5D,"operator":"IN"%7D%5D&page=1&sort=courseNameSort' ?>' onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'occupationSimulationProvider'});">
									<div class="container">
										<div class="content">
											<h4>Simulation Provider</h4>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-5ths col-lg-5ths card">
								<a href='<?= $courseUrl.'?per-page=10&filters=%5B%7B"name":"courseCategories","value":%5B4%5D,"operator":"IN"%7D%5D&page=1&sort=courseNameSort' ?>' onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'occupationMedical'});">
									<div class="container">
										<div class="content">
											<h4>Medical</h4>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-5ths col-lg-5ths card">
								<a href='<?= $courseUrl.'?per-page=10&filters=%5B%7B"name":"courseCategories","value":%5B1%5D,"operator":"IN"%7D%5D&page=1&sort=courseNameSort' ?>' onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'occupationOther'});">
									<div class="container">
										<div class="content">
											<h4>Other</h4>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			<div class="section courses-section newest">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						<h4>Popular online courses</h4>
						</div>
						<?php foreach ($courseData->popularElearning as $popElearning) : ?>
							<div class="col-sm-12 col-md-6 col-lg-3 course-card <?php if ($popElearning->courseClass) { echo $popElearning->courseClass;} ?>">
								<a href="<?= $popElearning->URL ?>" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'popularOnline'});">
									<div class="container">
										<div class="date"><?= $popElearning->upcoming ?></div>
										<div class="image" style="<?php if ($popElearning->courseImageURL) { echo 'background-image: url('.$popElearning->courseImageURL.');';} ?>"></div>
		
										<div class="content">
											<p class="course-name"><?= $popElearning->courseName ?> <span class="course-code"><?= $popElearning->courseCode ?></span></p>
											<p><?= $popElearning->priceString ?></p>
										</div>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="section courses-section most-popular">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						<h4>Popular face-to-face courses</h4>
						</div>
						<?php foreach ($courseData->popularF2f as $popF2f) : ?>
							<div class="col-sm-12 col-md-6 col-lg-3 course-card <?php if (!empty($popF2f->courseClass)) { echo $popF2f->courseClass;} ?>">
								<a href="<?= $popF2f->URL ?>" onClick="gtag('event', 'click', { event_category: 'coursesLandingClick', event_label: 'upcomingCoursesCalendar'});">
									<div class="container">
										<div class="date"><?= $popF2f->upcoming ?></div>
										<div class="image" style="<?php if ($popF2f->courseImageURL) { echo 'background-image: url('.$popF2f->courseImageURL.');';} ?>"></div>
		
										<div class="content">
											<p class="course-name"><?= $popF2f->courseName ?> <span class="course-code"><?= $popF2f->courseCode ?></span></p>
											<p><?= $popF2f->priceString ?></p>
										</div>
									</div>
								</a>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		</div>
	</section>

</main>

<?php get_footer('page'); ?>