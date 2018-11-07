@extends('layouts.master')

@section('css')
<link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
    </div>
    @if(session()->has('alert-success'))
        <div class="alert alert-success">
            {{ session()->get('alert-success') }}
        </div>
    @endif
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Data Artikel</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th width="25px"><center>No</center></th>
                  <th><center>Nama</center></th>
                  <th><center>Email</center></th>
                  <th><center>Komentar</center></th>
                  <th><center>Waktu</center></th>
                  <th><center>Status</center></th>
                  <th><center>Opsi</center></th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($comm as $c)
                    <tr>
                        <td><center> {{$no++}} </center></td>
                        <td><center> {{$c->name}} </center></td>
                        <td><center> {{$c->email}} </center></td>
                        <td><center> {{$c->comment}} </center></td>
                        <td><center> {{$c->created_at->format('d-m-Y')}} </center></td>
                        <td><center> 
                          @if ($c->status == 'approved')
                            <span class="label label-success">Approved</span>
                          @else
                            <span class="label label-warning">Not Approved</span>
                          @endif 
                        </center></td>
                        <td><center>
                            @if ($c->status == 'approved')
                              <button class="btn btn-success btn-sm" disabled>Approved</button>
                            @else
                              <a href="javascript:void(0);" class="btn btn-success btn-sm" onclick="approve('{{$c->id}}');">Approve</a> 
                              {{-- <a href="javascript:void(0)" class="btn btn-warning btn-sm"  onclick="disApprove('{{$c->id}}');">Disapprove</a>  --}}
                            @endif
                              <a href="javascript:void(0)" class="btn btn-danger btn-sm" onclick="deleteComment('{{$c->id}}');">Delete</a>
                        </center></td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<form class="hidden" action="" method="post" id="formApprove">
    {{ csrf_field() }}
</form>
<form class="hidden" action="" method="post" id="formDelete">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="delete">
</form>
<!-- /page content -->
@endsection

@section('js')
    <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>


    <script src="{{asset('plugins/bootbox/bootbox.min.js')}}"></script>
    <script type="text/javascript">

    function approve(id){
      bootbox.confirm("Apakah anda ingin menyetujui komentar ini ?", function(result){
        if (result) {
          $('#formApprove').attr('action', '{{Help::url('comment/approve')}}/'+id);
          $('#formApprove').submit();
        }
      });
    }

    function deleteComment(id){
      bootbox.confirm("Apakah anda ingin menghapus data ini ?", function(result){
          if (result) {
              $('#formDelete').attr('action', '{{Help::url('comment')}}/'+id);
              $('#formDelete').submit();
          }
      });
    }
    </script>
@endsection
