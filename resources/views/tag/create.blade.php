@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="container">
	<div class="col-md-12"><br>
	  <div class="panel panel-primary">
		<div class="panel-heading">Tambah Data Tag
		  <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
		  </div>
		</div>
		<div class="panel-body">
		  <form action="{{ route('tag.store') }}" method="post" enctype="multipart/form-data">
				  @csrf
				  <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
					  	
					<input type="text" name="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="Masukan tag" required>
					@if ($errors->has('nama'))
							<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('nama') }}</strong>
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