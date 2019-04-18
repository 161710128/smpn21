@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Fasilitas
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('fasilitas.update',$fasilitass->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			@csrf

        			<div class="form-group {{ $errors->has('nama_fasilitas') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Fasilitas</label>	
			  			<input type="text" name="nama_fasilitas" class="form-control" value="{{ $fasilitass->nama_fasilitas }}"  required>
			  			@if ($errors->has('nama_fasilitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_fasilitas') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_kategorifasilitas') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Kategori</label>	
			  			<select name="id_kategorifasilitas" class="form-control">
			  				@foreach($kategorifasilitass as $data)
			  				<option value="{{ $data->id }}" {{ $selectkategorifasilitass == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_kategorifasilitas }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_kategorifasilitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kategorifasilitas') }}</strong>
                            </span>
                        @endif
					  </div>

					  
					  

					  <div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
                    	<label class="cc-payment" class="control-label mb-1">Gambar</label>
			  			@if (isset ($fasilitass) && $fasilitass->gambar)
			  			<p>
			  				<br>
			  				<img src="{{ asset('assets/img/gambar/' .$fasilitass->gambar)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;" alt="">
			  			</p>
			  			@endif
			  			<input type="file" name="gambar" value="{{ $fasilitass->gambar }}">
                    </div>



			  		<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>
			  			<textarea id="text" type="ckeditor" name="deskripsi" class="ckeditor" required>{{ $fasilitass->deskripsi }}</textarea>	
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