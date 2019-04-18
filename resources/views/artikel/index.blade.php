@extends('layouts.admin')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12"><br>
			<div class="panel panel-primary">
			  <div class="panel-heading">Artikel
			  	<div class="panel-title pull-right">
			  		<a href="{{ route('artikel.create') }}">Tambah Data</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
			  		  <th>Judul</th>
                      <th>Kategori</th>
					  <th>Gambar</th>
					  <th>Deskripsi</th>
					  <th>Tag</th>
					  <th>Tanggal Buat</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($artikels as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
						<td>{{ $data->judul }}</td>
				    	<td>
				    		{{ $data->Kategoriartikel->nama_artikel }}
						</td>
				    	<td><img src="{{ asset('/assets/img/gambar/' .$data->gambar)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;"></td>
				    	<td>{!! str_limit($data->deskripsi,50) !!}</td>

						<td>
                        @foreach($data->Tag as $id)
                            {{ $id->nama }}
                        @endforeach
                    	</td>

						<td>{{ $data->created_at}}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('artikel.edit',$data->id) }}">Edit</a>
						</td>
						<!-- <td>
							<a href="{{ route('artikel.show',$data->id) }}" class="btn btn-success">Show</a>
						</td> -->
						<td>
							<form method="post" action="{{ route('artikel.destroy',$data->id) }}">
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
</div>

@endsection