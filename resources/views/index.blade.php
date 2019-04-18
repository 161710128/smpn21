@extends('layouts.guest')
@section('content')
<!-- slider-area-start -->
<div class="slider-area">
<div class="slider-active owl-carousel">
	<div class="slider-wrapper pt-215 pb-430 bg-opacity" style="background-image:url(frontend/img/slider/5.jpg)">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="slider-text slider-text-animation">
						<h1>Bone Of Nation Education</h1>
						<div class="slider-info">
							<p>Lorem ipsum consecteadipisicing elit, Im sed do eiusmo magna aliqua. siconsectetur adipisicing elit, seUt enim ad minim.</p>
						</div>
						<a href="courses-grid.html" class="button">Start A Course</a>
					</div>	
				</div>
			</div>						
		</div>
	</div>
	<div class="slider-wrapper pt-215 pb-430 bg-opacity" style="background-image:url(frontend/img/slider/6.jpg)">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="slider-text slider-text-animation">
						<h1>Bone Of Nation Education</h1>
						<div class="slider-info">
							<p>Lorem ipsum consecteadipisicing elit, Im sed do eiusmo magna aliqua. siconsectetur adipisicing elit, seUt enim ad minim.</p>
						</div>
						<a href="courses-grid.html" class="button">Start A Course</a>
					</div>	
				</div>
			</div>						
		</div>
	</div>
	<div class="slider-wrapper pt-215 pb-430 bg-opacity" style="background-image:url(frontend/img/slider/1.jpg)">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="slider-text slider-text-animation">
						<h1>Bone Of Nation Education</h1>
						<div class="slider-info">
							<p>Lorem ipsum consecteadipisicing elit, Im sed do eiusmo magna aliqua. siconsectetur adipisicing elit, seUt enim ad minim.</p>
						</div>
						<a href="courses-grid.html" class="button">Start A Course</a>
					</div>	
				</div>
			</div>						
		</div>
	</div>
</div>
</div>
<!-- slider-area-end -->
<!-- campus-area-start -->
<div class="campus-area">
<div class="container">
	<div class="inner-campus">
		<div class="campus">
			<div class="row">					
				<div class="col-md-6 p-0">
					<div class="campus-video-wrapper ptb-180" style="background-image:url(frontend/img/campus/1.jpg)" >
						<div class="campus-text text-center">
							<div class="campus-icon">
								<a class="video-popup" href="https://www.youtube.com/watch?v=5IfKTuUH0HU"><i class="fa fa-play"></i></a>
							</div>
							<h4>Take a Video Tour of Our Campus</h4>
						</div>
					</div>
				</div>
				<div class="col-md-6 p-0">
					<div class="tab-wrapper">
						<div>
						<!-- Nav tabs -->
						<ul class="campus-tab" role="tablist">
							<li role="presentation" class="active">
								<a href="#home" aria-controls="home" role="tab" data-toggle="tab">
									<div class="campus-info">
										<h4>about us</h4>
									</div>
								</a>
							</li>
							<li role="presentation">
								<a href="#profile" aria-controls="home" role="tab" data-toggle="tab">
									<div class="campus-list">
										<div class="campus-info">
											<h4>mission</h4>
										</div>
									</div>
								</a>
							</li>
							<li role="presentation">
								<a href="#messages" aria-controls="home" role="tab" data-toggle="tab">
									<div class="campus-list">
										<div class="campus-info">
											<h4>vision</h4>
										</div>
									</div>
								</a>
							</li>
						</ul>
						</div>					
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="home">
								<div class="campus-wrapper">
									<div class="campus-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididunba t ut laboraliqua. </p>
										<p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididuLorem ipsum dolor siconsectetur adipisicing elit, sed do eiusmod tempor idunt ut labore et dolore magna aliqua. Ut enim ad minim.  </p>
										<a href="about.html">read more</a>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="profile">
								<div class="campus-wrapper">
									<div class="campus-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididunba t ut laboraliqua. </p>
										<p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididuLorem siconsectetur adipisicing elit, sed do eiusmod tempor idunt ut labore et dolore magna aliqua. Ut enim ad minim.  </p>
										<a href="about.html">read more</a>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="messages">
								<div class="campus-wrapper">
									<div class="campus-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididunba t ut laboraliqua. </p>
										<p>Lorem ipsum dolor sit amet, consectetur adipising elit, eiusmod tempor incididuLorem ipsum dolor siconsectetur adipisicing elit, sed do eiusmod tempor idunt ut labore et dolore magna aliqua. Ut enim ad minim.  </p>
										<a href="#">read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- campus-area-end -->
<!-- courses-area-start -->
<div class="courses-area pt-130 pb-100">
<div class="container">
	<div class="section-title mb-45">
		<h4>our courses</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="courses-wrapper mb-30">
				<div class="courses-img">
					<a href="courses-details.html"><img src="{{ asset('frontend/img/courses/1.jpg') }}" alt="" />
						<span>Engineering</span>
					</a>
				</div>
				<div class="courses-content">
					<h4><a href="courses-details.html">Aeronautical Engineering</a></h4>
					<p>Lorem ipsum dolor sit adipisicing elit, eiusmod tempor incididunt ut aliqua.</p>
					<a href="courses-details.html">apply now</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="courses-wrapper mb-30">
				<div class="courses-img">
					<a href="courses-details.html"><img src="{{ asset('frontend/img/courses/2.jpg') }}" alt="" />
						<span>Engineering</span>
					</a>
				</div>
				<div class="courses-content">
					<h4><a href="courses-details.html">Complet Guied of Business</a></h4>
					<p>Lorem ipsum dolor sit adipisicing elit, eiusmod tempor incididunt ut aliqua.</p>
					<a href="courses-details.html">apply now</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="courses-wrapper mb-30">
				<div class="courses-img">
					<a href="courses-details.html"><img src="{{ asset('frontend/img/courses/3.jpg') }}" alt="" />
						<span>Engineering</span>
					</a>
				</div>
				<div class="courses-content">
					<h4><a href="courses-details.html">Learning Ui&Ux Design</a></h4>
					<p>Lorem ipsum dolor sit adipisicing elit, eiusmod tempor incididunt ut aliqua.</p>
					<a href="courses-details.html">apply now</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- courses-area-end -->
<!-- choose-area-start -->
<div class="choose-area">
<div class="col-md-7 p-0 col-7 col-md ">
	<div class="choose-wrapper blue-bg">
		<div class="section-title mb-40 white-text">
			<h4>why choose us</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
		</div>
		<div class="row custom-row">
			<div class="col-md-6 col-sm-6 choose-space">
				<div class="choose-content-wrapper mb-50 text-center">
					<div class="choose-categories-img">
						<img src="{{ asset('frontend/img/categories/5.png') }}" alt="">
					</div>
					<div class="choose-categories-content">
						<h5>Technology</h5>
						<p>Lorem ipsum dolor sit amet, conadipng elit, sed do eiusmod tempor incidilabore</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 choose-space">
				<div class="choose-content-wrapper mb-50 text-center">
					<div class="choose-categories-img">
						<img src="{{ asset('frontend/img/categories/6.png') }}" alt="">
					</div>
					<div class="choose-categories-content">
						<h5>design</h5>
						<p>Lorem ipsum dolor sit amet, conadipng elit, sed do eiusmod tempor incidilabore</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 choose-space">
				<div class="choose-content-wrapper mb-50 text-center">
					<div class="choose-categories-img">
						<img src="{{ asset('frontend/img/categories/7.png') }}" alt="">
					</div>
					<div class="choose-categories-content">
						<h5>music</h5>
						<p>Lorem ipsum dolor sit amet, conadipng elit, sed do eiusmod tempor incidilabore</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 choose-space">
				<div class="choose-content-wrapper mb-50 text-center">
					<div class="choose-categories-img">
						<img src="{{ asset('frontend/img/categories/8.png') }}" alt="">
					</div>
					<div class="choose-categories-content">
						<h5>languagfe</h5>
						<p>Lorem ipsum dolor sit amet, conadipng elit, sed do eiusmod tempor incidilabore</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-5 col-5 p-0 col-md choose-img ptb-100" style="background-image:url(frontend/img/bg/1.jpg)"></div>
</div>
<!-- choose-area-end -->
<!-- upcoming-event-area-start -->
<div class="upcoming-event-area pt-100 pb-100">
<div class="container">
	<div class="section-title mb-45">
		<h4>upcoming event</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
	</div>
	<div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="upcoming-event-wrapper mb-30">
				<div class="upcoming-event-img">
					<a href="#"><img src="{{ asset('frontend/img/event/13.jpg') }}" alt="" /></a>
				</div>
				<div class="upcoming-content">
					<div class="upcoming-info">
						<h6 class="upcoming-left"><span>16</span>th</h6>
						<h6 class="upcoming-right">Oct ,2017</h6>
					</div>
					<h4><a href="#">Motivational Workshop for Gender discrimination</a></h4>
					<p>Lorem ipsum dolor sadipisicing elit, seeius moid tempor incididunt ut laboag.</p>
					<div class="upcoming-event-meta">
						<span> <i class="ti-timer"></i> 9.00 am - 5.00 pm</span>
						<span> <i class="ti-location-pin"></i> Bosundhora city</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="upcoming-event-wrapper mb-30">
				<div class="upcoming-event-img">
					<a href="#"><img src="{{ asset('frontend/img/event/14.jpg') }}" alt="" /></a>
				</div>
				<div class="upcoming-content">
					<div class="upcoming-info">
						<h6 class="upcoming-left"><span>18</span>th</h6>
						<h6 class="upcoming-right">Oct ,2017</h6>
					</div>
					<h4><a href="#">Motivational Workshop for Gender discrimination</a></h4>
					<p>Lorem ipsum dolor sadipisicing elit, seeius moid tempor incididunt ut laboag.</p>
					<div class="upcoming-event-meta">
						<span> <i class="ti-timer"></i> 9.00 am - 5.00 pm</span>
						<span> <i class="ti-location-pin"></i> Bosundhora city</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="upcoming-event-wrapper mb-30">
				<div class="upcoming-event-img">
					<a href="#"><img src="{{ asset('frontend/img/event/15.jpg') }}" alt="" /></a>
				</div>
				<div class="upcoming-content">
					<div class="upcoming-info">
						<h6 class="upcoming-left"><span>20</span>th</h6>
						<h6 class="upcoming-right">Oct ,2017</h6>
					</div>
					<h4><a href="#">Motivational Workshop for Gender discrimination</a></h4>
					<p>Lorem ipsum dolor sadipisicing elit, seeius moid tempor incididunt ut laboag.</p>
					<div class="upcoming-event-meta">
						<span> <i class="ti-timer"></i> 9.00 am - 5.00 pm</span>
						<span> <i class="ti-location-pin"></i> Bosundhora city</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- upcoming-event-area-end -->
<!-- news-blog-area-start -->
<div class="news-blog-area pb-100">
<div class="container">
	<div class="section-title mb-45">
		<h4>news blog</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
	</div>
	<div class="row d-felx">
		<div class="col-md-4 col-sm-6">
			<div class="news-blog-wrapper mb-30">
				<div class="news-blog-img">
					<a href="blog-details.html"><img src="{{ asset('frontend/img/blog/1.jpg') }}" alt="" /></a>
				</div>
				<div class="news-blog-content">
					<h4><a href="blog-details.html">Support Girl’s Education</a></h4>
					<div class="news-blog-meta">
						<span>By : Halen Alone</span>
						<span>16 th Sep, 2017</span>
					</div>							
					<p>Lorem ipsum dolor sit adipisicing elit, eiusmod tempor incididunt ut aliqua ad minim.</p>
					<a href="blog-details.html">read more</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="news-blog-wrapper mb-30">
				<div class="news-blog-img">
					<a href="blog-details.html"><img src="{{ asset('frontend/img/blog/4.jpg') }}" alt="" /></a>
				</div>
				<div class="news-blog-content">
					<h4><a href="blog-details.html">The Value of Education</a></h4>
					<div class="news-blog-meta">
						<span>By : Halen Alone</span>
						<span>16 th Sep, 2017</span>
					</div>							
					<p>Lorem ipsum dolor sit adipisicing elit, eiusmod tempor incididunt ut aliqua ad minim.</p>
					<a href="blog-details.html">read more</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="news-blog-wrapper mb-30">
				<div class="news-blog-img">
					<a href="blog-details.html"><img src="{{ asset('frontend/img/blog/3.jpg') }}" alt="" /></a>
				</div>
				<div class="news-blog-content">
					<h4><a href="blog-details.html">Bone of Nation Education</a></h4>
					<div class="news-blog-meta">
						<span>By : Halen Alone</span>
						<span>16 th Sep, 2017</span>
					</div>							
					<p>Lorem ipsum dolor sit adipisicing elit, eiusmod tempor incididunt ut aliqua ad minim.</p>
					<a href="blog-details.html">read more</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- news-blog-area-end -->
@endsection