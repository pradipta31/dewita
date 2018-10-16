<nav id="nav" class="navbar">
    <div class="container">

        <div class="navbar-header">
            <!-- Logo -->
            <div class="navbar-brand">
                <a href="index.html">
                    <img class="logo" src="{{asset('images/logo_dewita.png')}}" alt="logo">
                    <img class="logo-alt" src="{{asset('images/logo_dewita.png')}}" alt="logo">
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
            <li><a href="{{url('artikel')}}">Artikel</a></li>
            <li class="has-dropdown"><a href="javascript:void()">Products</a>
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