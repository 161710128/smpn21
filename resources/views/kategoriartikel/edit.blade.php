@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Kategori Artikel
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('kategoriartikel.update',$kategoriartikels->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
        			@csrf

			  		<div class="form-group {{ $errors->has('nama_artikel') ? ' has-error' : '' }}">
			  			<label class="control-label">Kategori Artikel</label>	
			  			<input type="text" name="nama_artikel" class="form-control" value="{{ $kategoriartikels->nama_artikel }}"  required>
			  			@if ($errors->has('nama_artikel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_artikel') }}</strong>
                            </span>
                        @endif
                    </div>

                    

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection