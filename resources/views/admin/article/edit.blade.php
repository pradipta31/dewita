@extends('layouts.master')

@section('css')

@endsection

@section('content')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    @if (session('message'))
        <div class="alert alert-success" style="margin-top: 75px; margin-bot: -50px">
            {{ session('message') }}
        </div>
    @endif
    
    <div class="page-title">
      <div class="title_left">
        <h3>Edit Artikel </h3>
      </div>
    </div>
    {{-- <div class="row"> --}}
      <form role="form" action="{{Help::url('article')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="col-md-9 col-sm-9 col-xs-9">
                  <textarea name="desc" rows="13">{{$data->desc}}</textarea>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" name="title" id="" class="form-control" placeholder="Masukan judul artikel..." value="{{$data->title}}">
                  </div>
                  <div class="form-group">
                    <label for="">Tempat</label>
                    <input type="text" name="place" id="" class="form-control" placeholder="Masukan tempat artikel..." value="{{$data->place}}">
                  </div>
                  <button type="submit" class="btn btn-primary btn-md">Simpan</button>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="">Cover</label>
                    <input type="file" name="file" id="" value="{{$data->file}}">
                  </div>
                </div>
              </div>
          </div>
      </form>
    {{-- </div> --}}
    <div class="clearfix"></div>
  </div>
</div>
@endsection
@section('js')
  <script src="{{asset('plugins/tinymce/jquery.tinymce.min.js')}}"></script>
  <script src="{{asset('plugins/tinymce/tinymce.min.js')}}"></script>
  <script type="text/javascript">
  tinymce.init({
                selector: "textarea",
                plugins: [
                        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "table contextmenu directionality emoticons template textcolor paste fullpage textcolor"
                ],
 
                toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
                toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | inserttime preview | forecolor backcolor",
                toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",
                toolbar_items_size: 'small',
 
                style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ],
 
                templates: [
                        {title: 'Test template 1', content: 'Test 1'},
                        {title: 'Test template 2', content: 'Test 2'}
                ]
        });
  </script>
@endsection