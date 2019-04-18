@extends('layouts.admin')
@section('content')

@section('js')
<script src="{{asset('/assets/js/components/datatables-init.js')}}"></script>
@endsection
<div class="row">
	<div class="container">
		<div class="col-12"><br>
			<div class="panel panel-primary">
			  <div class="panel-heading"><h4> Tag</h4>
			  	<div class="panel-title pull-right">
			  		<a href="{{ route('tag.create') }}">Tambah Data</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Tag</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($tags as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td> 
						<td>
							<a class="btn btn-warning" href="{{ route('tag.edit',$data->id) }}">Edit</a>
						</td>
						<!-- <td>
							<a href="{{ route('tag.show',$data->id) }}" class="btn btn-outline-success">Show</a>
						</td> -->
						<td>
							<form method="post" action="{{ route('tag.destroy',$data->id) }}">
								@csrf
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"  onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Delete</button>
							</form>
						</td>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection
