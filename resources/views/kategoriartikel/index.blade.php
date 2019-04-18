@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-12"><br>
			<div class="panel panel-primary">
				<div class="panel-heading"><h4> Kategori Artikel</h4>
				<script src="{{ asset ('js/sweet.min.js')}}" type="text/javascript"></script>
@include('sweet::alert')
					<div class="panel-title pull-right">
						<a href="{{ route('kategoriartikel.create') }}">Tambah Data</a>
					</div>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
					<table class="table">
						<thead>
						<tr>
							<th>No</th>
						<th>Nama Artikel</th>
						<th colspan="3">Action</th>
						</tr>
						</thead>
						<tbody>
							@php $no = 1; @endphp
							@foreach($kategoriartikels as $data)
							<tr>
							<td>{{ $no++ }}</td>
							<td>{{ $data->nama_artikel }}</td> 
						<td>
							<a class="btn btn-warning" href="{{ route('kategoriartikel.edit',$data->id) }}">Edit</a>
						</td>
						<!-- <td>
							<a href="{{ route('kategoriartikel.show',$data->id) }}" class="btn btn-outline-success">Show</a>
						</td> -->
						<td>
							<form method="post" action="{{ route('kategoriartikel.destroy',$data->id) }}">
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
