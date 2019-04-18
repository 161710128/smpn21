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
</script>
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Staf 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('staf.store') }}" method="post" enctype="multipart/form-data">
			  		@csrf

			  		<div class="form-group {{ $errors->has('nama_staf') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Staf</label>	
			  			<input type="text" name="nama_staf" class="form-control"  required>
			  			@if ($errors->has('nama_staf'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_staf') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Jabatan</label>	
			  			<select name="id_jabatan" class="form-control" id="id">
			  				<option>Pilih Kategori</option>
			  				@foreach($jabatans as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_jabatan }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
			  			<label for="cc-payment" class="control-label mb-1">Gambar</label>
			  			<input type="file" name="gambar" class="form-control" required>
			  			@if ($errors->has('gambar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gambar') }}</strong>
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
</div>
@endsection