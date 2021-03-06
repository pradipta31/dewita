<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="{{asset('images/logo_pembaruan.png')}}" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{Auth::user()->name}}</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">

          <!-- NAVIGATION ADMIN -->
          @if (Auth::user()->role == 'admin')
          <li><a href="{{Help::url('dashboard')}}"><i class="fa fa-home"></i> Dashboard </a></li>
          <li><a><i class="fa fa-book"></i> Artikel <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{Help::url('article/create')}}">Tambah Artikel</a></li>
              <li><a href="{{Help::url('article')}}">Artikel</a></li>
            </ul>
          </li>
          <li><a href="{{Help::url('comment')}}"><i class="fa fa-users"></i> Komentar </a></li>
          {{-- <li><a><i class="fa fa-gift"></i> Produk <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{url('article/create')}}">Tambah Produk</a></li>
              <li><a href="{{url('article')}}">Produk</a></li>
            </ul>
          </li> --}}
          <li><a href="#"><i class="fa fa-user"></i> Profile </a></li>
          @elseif(Auth::user()->role == 'master')
          <li><a href="{{Help::url('dashboard')}}"><i class="fa fa-home"></i> Dashboard </a></li>
          <li><a><i class="fa fa-book"></i> Pulsa <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{Help::url('article/create')}}">Tambah Utang</a></li>
              <li><a href="{{Help::url('article')}}">Pulsa</a></li>
            </ul>
          </li>
          <li><a href="{{Help::url('comment')}}"><i class="fa fa-users"></i> Komentar </a></li>
          @endif
        </ul>
      </div>

    </div>
    <!-- /sidebar menu -->
  </div>
</div>
