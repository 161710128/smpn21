@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Guru
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('guru.update',$gurus->id) }}" method="post" enctype="multipart/form-data" >
			  		<input name="_method" type="hidden" value="PATCH">
        			@csrf

        			<div class="form-group {{ $errors->has('nama_guru') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Guru</label>	
			  			<input type="text" name="nama_guru" class="form-control" value="{{ $gurus->nama_guru }}"  required>
			  			@if ($errors->has('nama_guru'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_guru') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('id_jabatan') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Jabatan</label>	
			  			<select name="id_jabatan" class="form-control">
			  				@foreach($jabatans as $data)
			  				<option value="{{ $data->id }}" {{ $selectjabatans == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_jabatan }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_jabatan') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
                    	<label class="cc-payment" class="control-label mb-1">Gambar</label>
			  			@if (isset ($gurus) && $gurus->gambar)
			  			<p>
			  				<br>
			  				<img src="{{ asset('assets/img/gambar/' .$gurus->gambar)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;" alt="">
			  			</p>
			  			@endif
			  			<input type="file" name="gambar" value="{{ $gurus->gambar }}">
                    </div>

			  		<div class="form-group {{ $errors->has('mata_pelajaran') ? ' has-error' : '' }}">
			  			<label class="control-label">Mata Pelajaran</label>	
			  			<input type="text" name="mata_pelajaran" class="form-control" value="{{ $gurus->mata_pelajaran }}"  required>
			  			@if ($errors->has('mata_pelajaran'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mata_pelajaran') }}</strong>
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
</div>
@endsection