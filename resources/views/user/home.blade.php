@extends('user.layouts.app')

@section('main-content')
<div class="top-baner swiper-animate arrows">
	<div class="swiper-container main-slider" data-autoplay="5000" data-loop="1" data-speed="900" data-center="0" data-slides-per-view="1">
		<div class="swiper-wrapper">
			<div class="swiper-slide active" data-val="0"> 
				<div class="clip">
					<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/main_slide_1.jpg') }})">
					</div>
				</div>
				<div class="vertical-align">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="main-title vert-title">
									<h1 class="color-white delay-1">amazing santorini<br> 7 days tour</h1>
									<p class="color-white-op delay-2">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo elementum.</p>
									<a href="#" class="c-button bg-aqua hv-transparent delay-2"><span>view our tours</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-slide" data-val="1"> 
				<div class="clip">
					<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/main_slide_1.jpg') }})">
					</div>
				</div>
				<div class="vertical-align">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="main-title vert-title">
									<h1 class="color-white delay-1">amazing santorini<br> 7 days tour</h1>
									<p class="color-white-op delay-2">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi quis leo elementum.</p>
									<a href="#" class="c-button bg-aqua hv-transparent delay-2"><span>view our tours</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>    
		<div class="pagination pagination-hidden poin-style-1"></div>
	</div>
	<div class="arrow-wrapp m-200">
		<div class="cont-1170">
			<div class="swiper-arrow-left sw-arrow"><span class="fa fa-angle-left"></span></div>
			<div class="swiper-arrow-right sw-arrow"><span class="fa fa-angle-right"></span></div>
		</div>
	</div>                 
</div> 

<div class="main-wraper padd-90">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="second-title">
					<h2>Choose your next tour</h2>
					<p class="color-grey">Life is too beautiful.</p>
				</div>
			</div>
		</div>
		<a href="{{ route('home.tours') }}" class="btn btn-primary">All tours</a><br><br>
		<div class="row">
			@foreach ($tours as $tour)
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="radius-mask tour-block hover-aqua">
						<div class="clip">
							<div class="bg bg-bg-chrome act" style="background-image:url({{ Storage::disk('local')->url($tour->image) }})">
							</div>
						</div>
						<div class="tour-layer delay-1"></div>
						<div class="tour-caption">
							<div class="vertical-align">
								<h3 class="hover-it">{{ $tour->title }}</h3>
							</div>
							<div class="vertical-bottom">
								<div class="fl">
									<div class="tour-info">
										<img src="img/calendar_icon.png" alt="">
										<span class="font-style-2 color-grey-4">{{ $tour->created_at->diffForHumans() }}</span>
									</div>
								</div>   
								<a href="{{ route('single.tour', $tour->slug) }}" class="c-button b-50 bg-aqua hv-transparent fr"><img src="{{ asset('user/img/flag_icon.png') }}" alt=""><span>view more</span></a>
							</div>
						</div>
					</div>					
				</div>
			@endforeach
		</div>
	</div>
</div> 

<div class="main-wraper">
	<div class="clip">
		<div class="bg bg-bg-chrome" style="background-image:url({{ asset('user/img/home_1/tour_slider_bg.jpg') }})">
		</div>
	</div>
	<div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-slides-per-view="1" id="tour-slide">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-tour padd-90-90">
								<h3>from $960</h3>
								<div class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
								</div>
								<h2>Maldives Vacation Packages</h2> 
								<h5>july <b>19th</b> to july <b>26th</b></h5>
							</div>    
						</div>
					</div>
				</div> 
			</div>
			<div class="swiper-slide">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-tour padd-94-94">
								<h3>from $960</h3>
								<div class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
								<h2>Maldives Vacation Packages</h2> 
								<h5>july <b>19th</b> to july <b>26th</b></h5>
							</div>    
						</div>
					</div>
				</div> 
			</div>
			<div class="swiper-slide">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-tour padd-94-94">
								<h3>from $960</h3>
								<div class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
								</div>
								<h2>Maldives Vacation Packages</h2> 
								<h5>july <b>19th</b> to july <b>26th</b></h5>
							</div>    
						</div>
					</div>
				</div> 
			</div>
			<div class="swiper-slide">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="slider-tour padd-94-94">
								<h3>from $960</h3>
								<div class="rate">
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star color-yellow"></span>
									<span class="fa fa-star"></span>
								</div>
								<h2>Maldives Vacation Packages</h2> 
								<h5>july <b>19th</b> to july <b>26th</b></h5>
							</div>    
						</div>
					</div>
				</div> 
			</div>
		</div>
		<div class="pagination poin-style-1"></div>
	</div>
</div>

<div class="main-wraper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="second-title">
					<h2>Beautiful Trips</h2>
					<p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla</p>
				</div>
			</div>
		</div>
		<div class="row col-no-padd">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_1.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							<a class="hover-it" href="#"><h3>promotional trip</h3></a>
							<h5 class="delay-1">Orlando, Air/3 Nights</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_2.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							<a class="hover-it" href="#"><h3>promotional trip</h3></a>
							<h5 class="delay-1">Orlando, Air/3 Nights</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_3.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							<a class="hover-it" href="#"><h3>promotional trip</h3></a>
							<h5 class="delay-1">Orlando, Air/3 Nights</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_4.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							<a class="hover-it" href="#"><h3>promotional trip</h3></a>
							<h5 class="delay-1">Orlando, Air/3 Nights</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_5.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							<a class="hover-it" href="#"><h3>promotional trip</h3></a>
							<h5 class="delay-1">Orlando, Air/3 Nights</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_6.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							<a class="hover-it" href="#"><h3>promotional trip</h3></a>
							<h5 class="delay-1">Orlando, Air/3 Nights</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_7.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							<a class="hover-it" href="#"><h3>promotional trip</h3></a>
							<h5 class="delay-1">Orlando, Air/3 Nights</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_8.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							<a class="hover-it" href="#"><h3>promotional trip</h3></a>
							<h5 class="delay-1">Orlando, Air/3 Nights</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="photo-block hover-aqua">
					<div class="tour-layer delay-1"></div>
					<img src="{{ asset('user/img/home_1/photo_9.jpg') }}" alt="">
					<div class="vertical-align">
						<div class="photo-title">
							<h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
							<a class="hover-it" href="#"><h3>promotional trip</h3></a>
							<h5 class="delay-1">Orlando, Air/3 Nights</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="main-wraper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="second-title">
					<h2>Special Offers</h2>
					<p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.</p>
				</div>
			</div>
		</div>
		<a href="{{ route('home.tours.special') }}" class="btn btn-primary">All tours</a><br><br>
		<div class="row">
			<div class="top-baner arrows">
				<div class="swiper-container offers-slider" data-autoplay="5000" data-loop="1" data-speed="500" data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2" data-md-slides="3" data-lg-slides="3" data-add-slides="3">
					<div class="swiper-wrapper">
					@foreach ($specialTours as $specialTour)
						<div class="swiper-slide" data-val="0">
							<div class="offers-block radius-mask">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ Storage::disk('local')->url($specialTour->image) }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-top">
									<h3>{{ $specialTour->title }}</h3>
								</div>
								<div class="vertical-bottom">
									<a href="{{ route('singleSpecial.tour', $specialTour->slug) }}" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
								</div>
							</div> 
						</div>
					@endforeach
					</div>
					<div class="pagination  poin-style-1 pagination-hidden"></div>
				</div>
				<div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span></div>
				<div class="swiper-arrow-right offers-arrow"><span class="fa fa-angle-right"></span></div>
			</div>
		</div>
	</div>
</div>

<div class="main-wraper padd-90">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="second-title">
					<h2>Most Popular Travel Countries</h2>
					<p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-6 col-md-push-6 col-sm-12">
				<div class="popular-desc text-left">
					<div class="clip">
						<div class="bg bg-bg-chrome act bg-contain" style="background-image:url({{ asset('user/img/home_1/map_1.png') }})">
						</div>
					</div>
					<div class="vertical-align">
						<h3>italy, europe</h3>
						<p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi Praesent at vestibulum tortor. Praesent condimentum efficitur massa, nec congue sem dapibus sed. </p>
						<h4>best cities</h4>
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-4">
								<ul>
									<li><a href="#">Rome</a></li>
									<li><a href="#">Venice</a></li>
									<li><a href="#">Pisa</a></li>
									<li><a href="#">Naples</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<ul>
									<li><a href="#">Bologna</a></li>
									<li><a href="#">Florence</a></li>
									<li><a href="#">Genoa</a></li>
									<li><a href="#">Turin</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4">
								<ul>
									<li><a href="#">Milan</a></li>
									<li><a href="#">Capri</a></li>
									<li><a href="#">Matera</a></li>
									<li><a href="#">Pompeii</a></li>
								</ul>
							</div>
						</div>
						<a href="#" class="c-button bg-aqua hv-transparent b-50 custom-icon">
							<img class="img-hide" src="{{ asset('user/img/flag_icon.png') }}" alt="">
							<img class="img-hov" src="{{ asset('user/img/flag_icon_aqua.png') }}" alt="" >
							<span>view all places</span></a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-md-pull-6 col-sm-12">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_1.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Maecenas sit amet</a></h4>
									<h5><b class="color-aqua">from $235</b> per person</h5>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_2.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Aenean iaculis enim</a></h4>
									<h5><b class="color-aqua">from $180</b> per person</h5>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_3.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Pellentesque tempus</a></h4>
									<h5><b class="color-aqua">from $195</b> per person</h5>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_4.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Donec id maximus</a></h4>
									<h5><b class="color-aqua">from $350</b> per person</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-md-6 col-sm-12">
					<div class="popular-desc text-right">
						<div class="clip">
							<div class="bg bg-bg-chrome act bg-contain" style="background-image:url({{ asset('user/img/home_1/map_2.png') }})">
							</div>
						</div>
						<div class="vertical-align">
							<h3>france, europe</h3>
							<p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla. Suspendisse id pharetra lacus, et hendrerit mi Praesent at vestibulum tortor. Praesent condimentum efficitur massa, nec congue sem dapibus sed. </p>
							<h4>best cities</h4>
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4">
									<ul>
										<li><a href="#">Rome</a></li>
										<li><a href="#">Venice</a></li>
										<li><a href="#">Pisa</a></li>
										<li><a href="#">Naples</a></li>
									</ul>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">
									<ul>
										<li><a href="#">Bologna</a></li>
										<li><a href="#">Florence</a></li>
										<li><a href="#">Genoa</a></li>
										<li><a href="#">Turin</a></li>
									</ul>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-4">
									<ul>
										<li><a href="#">Milan</a></li>
										<li><a href="#">Capri</a></li>
										<li><a href="#">Matera</a></li>
										<li><a href="#">Pompeii</a></li>
									</ul>
								</div>
							</div>
							<a href="#" class="c-button bg-aqua hv-transparent b-50 custom-icon">
								<img class="img-hide" src="{{ asset('user/img/flag_icon.png') }}" alt="">
								<img class="img-hov" src="{{ asset('user/img/flag_icon_aqua.png') }}" alt="">
								<span>view all places</span>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-6 col-sm-12">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_5.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Donec id maximus</a></h4>
									<h5><b class="color-aqua">from $215</b> per person</h5>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_6.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Pellentesque tempus</a></h4>
									<h5><b class="color-aqua">from $175</b> per person</h5>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_7.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Aenean iaculis enim</a></h4>
									<h5><b class="color-aqua">from $150</b> per person</h5>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="radius-mask popular-img">
								<div class="clip">
									<div class="bg bg-bg-chrome act" style="background-image:url({{ asset('user/img/home_1/popular_travel_img_8.jpg') }})">
									</div>
								</div>
								<div class="tour-layer delay-1"></div>
								<div class="vertical-bottom">
									<h4><a href="#">Maecenas sit amet</a></h4>
									<h5><b class="color-aqua">from $290</b> per person</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>        
@endsection