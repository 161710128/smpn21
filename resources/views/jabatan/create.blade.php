@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Jabatan
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('jabatan.store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group {{ $errors->has('nama_jabatan') ? ' has-error' : '' }}">
                      <label class="control-label">Nama Jabatan</label>	
                      <input type="text" name="nama_jabatan" class="form-control" required>
                      @if ($errors->has('nama_jabatan'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nama_jabatan') }}</strong>
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