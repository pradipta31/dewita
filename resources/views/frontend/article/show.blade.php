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
        @include('frontend.layouts.breadcrumbs')
	</header>
    <div id="blog" class="section md-padding">

            <!-- Container -->
            <div class="container">
                    <!-- Row -->
                <div class="row">
    
                        <!-- Main -->
                        <main id="main" class="col-md-9">
                            <div class="blog">
                                    {{-- <h3>{{$news->title}}</h3> --}}
                                <div class="blog-img">
                                    <img class="img-responsive" src="{{ Storage::url($news->file) }}" alt="">
                                </div>
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        {{-- <li><i class="fa fa-user"></i>John doe</li> --}}
                                        <li><i class="fa fa-clock-o"></i>{{$news->created_at->format('d-m-Y')}}</li>
                                    </ul>
                                    <p>{!! $news->desc !!}</p>
                                </div>
                            </div>
                        </main>
                        <!-- /Main -->
        
                    </div>
                    <!-- /Row -->
    
            </div>
            <!-- /Container -->
    
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
