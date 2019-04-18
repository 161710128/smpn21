@extends('layouts.admin')
@section('content')

@section('css')
<link rel="stylesheet" href="{{asset('select2/dist/css/select2.min.css')}}">
@endsection
@section('js')
<script src="{{asset('select2/dist/js/select2.min.js')}}"></script>
<script src="{{ asset('select2/tinymce/js/tinymce/tinymce.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
  selector: 'textarea',
  height: 300,
  theme: 'modern',
  plugins: 'print preview fullpage  searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount   imagetools  contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });

</script>
<script type="text/javascript">
        $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('#lfm').filemanager('image');
    $('#lfm').filemanager('file');

</script>
@endsection
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Artikel
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('artikel.update',$artikels->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			@csrf

        			<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $artikels->judul }}"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_kategoriartikel') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Kategori</label>	
			  			<select name="id_kategoriartikel" class="form-control">
			  				@foreach($kategoriartikels as $data)
			  				<option value="{{ $data->id }}" {{ $selectkategoriartikels == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_artikel }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_kategoriartikel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kategoriartikel') }}</strong>
                            </span>
                        @endif
			  		</div>

					  <div class="form-group">
					  <label>Tag</label>
					   <select class="form-control js-example-basic-multiple" name="tag[]" id="" required multiple="multiple">
						  @foreach($tags as $data)
						  <option value="{{ $data->id }}"{{ (in_array($data->id, $selected)) ? ' selected="selected"' : '' }}>{{ $data->nama }}</option>
						  @endforeach()
					  </select>
				  </div>

			  		<div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
                    	<label class="cc-payment" class="control-label mb-1">Gambar</label>
			  			@if (isset ($artikels) && $artikels->gambar)
			  			<p>
			  				<br>
			  				<img src="{{ asset('assets/img/gambar/' .$artikels->gambar)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;" alt="">
			  			</p>
			  			@endif
			  			<input type="file" name="gambar" value="{{ $artikels->gambar }}">
                    </div>

			  		<!-- <div class="form-group {{ $errors->has('tgl_pinjam') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Pinjam</label>	
			  			<input type="date" name="tgl_pinjam" class="form-control" value="{{ $artikels->tgl_pinjam }}"  required>
			  			@if ($errors->has('tgl_pinjam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_pinjam') }}</strong>
                            </span>
                        @endif
			  		</div> -->

			  		<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>
			  			<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor" required>{{ $artikels->deskripsi }}</textarea>	
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
	<script type="text/javascript" src="{{asset ('ckeditor/ckeditor.js')}}"></script>
</div>
@endsection
