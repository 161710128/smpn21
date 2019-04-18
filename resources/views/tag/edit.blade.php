@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<center><h1>Tag</h1></center>
			  <div class="panel-heading">
			  	<div class="panel-title pull-right"><a href="{{ route('tag.index') }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('tag.update',$tags->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Tag</label>	
						  <input type="text" value="{{ $tags->nama }}" name="nama" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" placeholder="Masukan tag" required>
						  @if ($errors->has('nama'))
							  <span class="invalid-feedback" role="alert">
								  <strong>{{ $errors->first('nama') }}</strong>
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