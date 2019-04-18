@extends('layouts.admin')
@section('content')
@section('css')
<link rel="stylesheet" href="{{asset('select2/dist/css/select2.min.css')}}">
@endsection
@section('js')
<script src="{{asset('select2/dist/js/select2.min.js')}}"></script>
<script type="text/javascript">
        $(document).ready(function() {
    $('#id').select2();
});
</script>
@endsection
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Fasilitas 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('fasilitas.store') }}" method="post" enctype="multipart/form-data" >
			  		@csrf

			  		<div class="form-group {{ $errors->has('nama_fasilitas') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Fasilitas</label>	
			  			<input type="text" name="nama_fasilitas" class="form-control"  required>
			  			@if ($errors->has('nama_fasilitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_fasilitas') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_kategorifasilitas') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Kategori</label>	
			  			<select name="id_kategorifasilitas" class="form-control js-example-basic-multiple" id="id">
			  				<option>Pilih Kategori</option>
			  				@foreach($kategorifasilitass as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_kategorifasilitas }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_kategorifasilitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kategorifasilitas') }}</strong>
                            </span>
                        @endif
			  		</div>

					

			  		<div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
			  			<label for="cc-payment" class="control-label mb-1">gambar</label>
			  			<input type="file" name="gambar" class="form-control" required>
			  			@if ($errors->has('gambar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gambar') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>
			  			<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor" required ></textarea>	
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
	<script type="text/javascript" src="{{asset ('ckeditor/ckeditor.js')}}"></script>
</div>
@endsection