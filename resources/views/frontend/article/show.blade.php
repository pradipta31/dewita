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

		<!-- Nav -->
		<nav id="nav" class="navbar">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="img/logo.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="#article">Artikel</a></li>
                    <li class="has-dropdown"><a href="#products">Products</a>
                        <ul class="dropdown">
                            <li><a href="blog-single.html">Morvey</a></li>
                            <li><a href="blog-single.html">Dewita</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">About Us</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->
        <div class="header-wrapper sm-padding bg-grey">
                <div class="container">
                    <h2>Blog Page</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.html#blog">Blog</a></li>
                        <li class="breadcrumb-item active">Single Post</li>
                    </ul>
                </div>
            </div>

	</header>
	<!-- /Header -->
	

	</div>
    <!-- Blog -->
    <!-- Blog -->
	<div id="blog" class="section md-padding">

            <!-- Container -->
            <div class="container">
    
                <!-- Row -->
                <div class="row">
    
                    <!-- Main -->
                    <main id="main" class="col-md-9">
                        <div class="blog">
                            <div class="blog-img">
                                <img class="img-responsive" src="{{asset('frontend/img/blog-post.jpg')}}" alt="">
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i>John doe</li>
                                    <li><i class="fa fa-clock-o"></i>18 Oct</li>
                                    <li><i class="fa fa-comments"></i>57</li>
                                </ul>
                                <h3>Morbi mattis felis at nunc. Duis viverra</h3>
                                <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                            </div>
    
                            <!-- blog tags -->
                            <div class="blog-tags">
                                <h5>Tags :</h5>
                                <a href="#"><i class="fa fa-tag"></i>Web</a>
                                <a href="#"><i class="fa fa-tag"></i>Design</a>
                                <a href="#"><i class="fa fa-tag"></i>Marketing</a>
                                <a href="#"><i class="fa fa-tag"></i>Development</a>
                                <a href="#"><i class="fa fa-tag"></i>Branding</a>
                                <a href="#"><i class="fa fa-tag"></i>Photography</a>
                            </div>
                            <!-- blog tags -->
    
                            <!-- blog author -->
                            <div class="blog-author">
                                <div class="media">
                                    <div class="media-left">
                                        <img class="media-object" src="./img/author.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <h3>Joe Doe</h3>
                                            <div class="author-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /blog author -->
    
                            <!-- blog comments -->
                            <div class="blog-comments">
                                <h3 class="title">(13) Comments</h3>
    
                                <!-- comment -->
                                <div class="media">
                                    <div class="media-left">
                                        <img class="media-object" src="./img/perso2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
                                        <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                                    </div>
                                </div>
                                <!-- /comment -->
    
                                <!-- comment -->
                                <div class="media">
                                    <div class="media-left">
                                        <img class="media-object" src="./img/perso1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
                                        <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                                    </div>
    
                                    <!-- author reply comment -->
                                    <div class="media author">
                                        <div class="media-left">
                                            <img class="media-object" src="./img/perso2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
                                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                                        </div>
                                    </div>
                                    <!-- /comment -->
    
                                    <!-- reply comment -->
                                    <div class="media">
                                        <div class="media-left">
                                            <img class="media-object" src="./img/perso2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
                                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                                        </div>
                                    </div>
                                    <!-- /comment -->
    
                                </div>
                                <!-- /comment -->
    
    
                                <!-- comment -->
                                <div class="media">
                                    <div class="media-left">
                                        <img class="media-object" src="./img/perso.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">Joe Doe<span class="time">2 min ago</span><a href="#" class="reply">Reply <i class="fa fa-reply"></i></a></h4>
                                        <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                                    </div>
                                </div>
                                <!-- /comment -->
    
                            </div>
                            <!-- /blog comments -->
    
                            <!-- reply form -->
                            <div class="reply-form">
                                <h3 class="title">Leave a reply</h3>
                                <form>
                                    <input class="input" type="text" placeholder="Name">
                                    <input class="input" type="email" placeholder="Email">
                                    <textarea placeholder="Add Your Commment"></textarea>
                                    <button type="submit" class="main-btn">Submit</button>
                                </form>
                            </div>
                            <!-- /reply form -->
                        </div>
                    </main>
                    <!-- /Main -->
    
    
                    <!-- Aside -->
                    <aside id="aside" class="col-md-3">
    
                        <!-- Search -->
                        <div class="widget">
                            <div class="widget-search">
                                <input class="search-input" type="text" placeholder="search">
                                <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <!-- /Search -->
    
                        <!-- Category -->
                        <div class="widget">
                            <h3 class="title">Category</h3>
                            <div class="widget-category">
                                <a href="#">Web Design<span>(7)</span></a>
                                <a href="#">Marketing<span>(142)</span></a>
                                <a href="#">Web Development<span>(74)</span></a>
                                <a href="#">Branding<span>(60)</span></a>
                                <a href="#">Photography<span>(5)</span></a>
                            </div>
                        </div>
                        <!-- /Category -->
    
                        <!-- Posts sidebar -->
                        <div class="widget">
                            <h3 class="title">Populare Posts</h3>
    
                            <!-- single post -->
                            <div class="widget-post">
                                <a href="#">
                                    <img src="./img/post1.jpg" alt=""> Blog title goes here
                                </a>
                                <ul class="blog-meta">
                                    <li>Oct 18, 2017</li>
                                </ul>
                            </div>
                            <!-- /single post -->
    
                            <!-- single post -->
                            <div class="widget-post">
                                <a href="#">
                                    <img src="./img/post2.jpg" alt=""> Blog title goes here
                                </a>
                                <ul class="blog-meta">
                                    <li>Oct 18, 2017</li>
                                </ul>
                            </div>
                            <!-- /single post -->
    
    
                            <!-- single post -->
                            <div class="widget-post">
                                <a href="#">
                                    <img src="./img/post3.jpg" alt=""> Blog title goes here
                                </a>
                                <ul class="blog-meta">
                                    <li>Oct 18, 2017</li>
                                </ul>
                            </div>
                            <!-- /single post -->
    
                        </div>
                        <!-- /Posts sidebar -->
    
                        <!-- Tags -->
                        <div class="widget">
                            <h3 class="title">Tags</h3>
                            <div class="widget-tags">
                                <a href="#">Web</a>
                                <a href="#">Design</a>
                                <a href="#">Graphic</a>
                                <a href="#">Marketing</a>
                                <a href="#">Development</a>
                                <a href="#">Branding</a>
                                <a href="#">Photography</a>
                            </div>
                        </div>
                        <!-- /Tags -->
    
                    </aside>
                    <!-- /Aside -->
    
                </div>
                <!-- /Row -->
    
            </div>
            <!-- /Container -->
    
        </div>
        <!-- /Blog -->
	<!-- /Blog -->

	<!-- Contact -->


	<!-- Footer -->
	@include('frontend.layouts.footer')

	
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/jquery.magnific-popup.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
	@yield('js1')
	<div id="products">
	</div>
</body>

</html>
