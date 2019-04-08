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
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
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
          <a href="{{Help::url('article/create')}}" class="btn btn-primary">Tambah Artikel</a>
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th width="25px"><center>No</center></th>
                  <th><center>Judul</center></th>
                  <th><center>Author</center></th>
                  <th><center>Tempat</center></th>
                  <th><center>Cover</center></th>
                  <th><center>Waktu</center></th>
                  <th><center>Status</center></th>
                  <th><center>Opsi</center></th>
                </tr>
              </thead>
              <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($articles as $article)
                    <tr>
                        <td><center> {{$no++}} </center></td>
                        <td><center> {{$article->title}} </center></td>
                        <td><center> {{$article->user->name}} </center></td>
                        <td><center> {{$article->place}} </center></td>
                        <td><center> <button class="btn btn-sm btn-success" onClick="showImage('{{$article->file}}');">Lihat Cover</button></center></td>
                        <td><center> {{$article->created_at->format('d-m-Y')}} </center></td>
                        <td><center> 
                          @if ($article->status == 'published')
                            <span class="label label-success">Published</span>
                          @else
                            <span class="label label-warning">Archived</span>
                          @endif 
                        </center></td>
                        <td><center>
                            <a href="{{Help::url('article/'.$article->id.'/edit')}}" class="fa fa-pencil"></a>
                            {{--  <a href="javascript:void(0)" class="fa fa-pencil" onclick="editModal('{{json_encode($periode)}}')"></a>  --}}
                            <a href="javascript:void(0)" class="fa fa-trash" onclick="deleteArticle('{{$article->id}}')"></a>
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
<form class="hidden" action="" method="post" id="formDelete">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="delete">
</form>
<!-- /page content -->
@endsection

@section('js')
    <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    {{-- <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script> --}}
    {{-- <script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script> --}}
    {{-- <script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script> --}}
    {{-- <script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script> --}}
    {{-- <script src="{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script> --}}


    <script src="{{asset('plugins/bootbox/bootbox.min.js')}}"></script>
    <script type="text/javascript">

    function showImage(file){
      bootbox.dialog({
        message: '<img src="{{asset('images/article')}}/'+file+'" class="img-responsive">',
        closeButton: true,
        size: 'small'
      });
    }

    function deleteArticle(id){
        bootbox.confirm("Apakah anda ingin menghapus data ini ?", function(result){
            if (result) {
                $('#formDelete').attr('action', '{{Help::url('article')}}/'+id);
                $('#formDelete').submit();
            }
        });
    }
    </script>
@endsection
