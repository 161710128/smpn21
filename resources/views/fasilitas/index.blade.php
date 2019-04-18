@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="panel panel-primary">
			  <div class="panel-heading">Fasilitas
			  	<div class="panel-title pull-right">
			  		<a href="{{ route('fasilitas.create') }}">Tambah Data</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
						<th>Nama Fasilitas</th>
						<th>Nama Kategori</th>
					  <th>Deskripsi</th>
					  <th>Gambar</th>
					  <th>Tanggal Buat</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($fasilitass as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
						<td>{{ $data->nama_fasilitas }}</td>
            <td>
				    		{{ $data->Kategorifasilitas->nama_kategorifasilitas }}
						</td>
						<td>{!! str_limit($data->deskripsi,50) !!}</td>
						<td><img src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;"></td>
						<td>{{ $data->created_at}}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('fasilitas.edit',$data->id) }}">Edit</a>
						</td>
						<!-- <td>
							<a href="{{ route('fasilitas.show',$data->id) }}" class="btn btn-success">Show</a>
						</td> -->
						<td>
							<form method="post" action="{{ route('fasilitas.destroy',$data->id) }}">
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