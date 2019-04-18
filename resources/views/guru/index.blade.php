@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="panel panel-primary">
			  <div class="panel-heading">Guru
			  	<div class="panel-title pull-right">
			  		<a href="{{ route('guru.create') }}">Tambah Data</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		<th>No</th>
			  		<th>Nama Guru</th>
						<th>Nama Jabatan</th>
						<th>Gambar</th>
           				<th>Mata Pelajaran</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($gurus as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
						<td>{{ $data->nama_guru }}</td>
				    	<td>
				    		{{ $data->Jabatan->nama_jabatan }}
						</td>
				    	<td><img src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;"></td>
				    	<td>{{ $data->mata_pelajaran }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('guru.edit',$data->id) }}">Edit</a>
						</td>
						<!-- <td>
							<a href="{{ route('guru.show',$data->id) }}" class="btn btn-success">Show</a>
						</td> -->
						<td>
							<form method="post" action="{{ route('guru.destroy',$data->id) }}">
								@csrf
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger"  onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')">Delete</button>
							</form>
						</td>
				      </tr>
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