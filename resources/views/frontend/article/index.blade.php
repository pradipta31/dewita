<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dewita Web Page</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	@yield('css1')
</head>

<body>
	<header>
		@include('frontend.layouts.navigation')
        <div class="header-wrapper sm-padding bg-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-9">
							<h2>Semua Artikel</h2>
						</div>
						<div class="col-md-3">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
								<li class="breadcrumb-item active">Semua Artikel</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="article" class="section sm-padding bg-grey">
		<div class="container">
			<div class="row">
	
				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Baca Semua Artikel</h2>
				</div>
				<!-- /Section header -->
			
				<!-- blog -->
				@foreach ($news as $article)
					@if ($article->status == 'published')
						<div class="col-md-4">
							<div class="blog">
								@php
									$descs = strip_tags($article->desc);
									$gambar = $article->file;
								@endphp
								<div class="blog-img">
									<img class="img-responsive" src="{{ asset('images/article/'.$gambar) }}" alt="{{$article->title}}">
								</div>
								<div class="blog-content">
									<ul class="blog-meta">
										<li><i class="fa fa-clock-o"></i>{{$article->created_at->format('d-m-Y')}}</li>
									</ul>
									<a href="{{url('article/'.$article->slug)}}"><h3>{{$article->title}}</h3></a>
									<p>{!! str_limit($descs, 100) !!}</p>
									<a href="{{url('article/'.$article->slug)}}" class="btn btn-info">Read more</a>
								</div>
							</div>
						</div>
					@endif
				@endforeach
				<!-- /blog -->
			
			</div>
		</div>
	</div>
	@include('frontend.layouts.footer')
	<div id="back-to-top"></div>
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
	@yield('js1')
</body>

</html>
