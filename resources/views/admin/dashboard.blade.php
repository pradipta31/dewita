@extends('layouts.master')

@section('css')

@endsection

@section('content')
	<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <div class="row tile_count">
    
  </div>
  <!-- /top tiles -->
  <br />
  <div class="alert alert-success" role="alert">
	  <h3 class="alert-heading">Selamat Datang {{ Auth::user()->name }}!</h3>
	  <p>Selamat datang di halaman Admin Dewita.co</p>
	  <hr>
	  <p class="mb-0">Mohon untuk menggunakan Sistem ini sebaik-baiknya agar menciptakan kenyamanan bersama</p>
	</div>
</div>
<!-- /page content -->
@endsection