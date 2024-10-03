@extends('master')


@section('content')
<td class="text-center" style="font-size: 5px;">

	<a href="dirput/admin/create" class="btn btn-sm btn-outline-light px-3 mb-2"><i class="lni lni-circle-plus"></i>Tambah Data</a>

</td>
<hr />
<div class="card">
	<!-- Notificatin -->
	@if (session('pesan'))
	<div class="alert border-0 alert-dismissible fade show py-2">
		<div class="d-flex align-items-center">
			<div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
			</div>
			<div class="ms-3">
				<h6 class="mb-0 text-white">Success Alerts</h6>
				<div class="text-white">{{ session('pesan') }} !!!</div>
			</div>
		</div>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
	@endif
	<div class="card-body">
		<div class="table-responsive">

			<table id="example2" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>No Perkara</th>
						<th>Jenis Perkara</th>
						<th>Tanggal Putus</th>
						<th>Putusan</th>
						<th>Upload</th>
						<th class="text-start" style="width: 150px;">ACTION</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1; ?>
					@foreach($dirput as $key => $value)
					<tr>
						<td class="text-center">{{$no++}}</td>
						<td>{{$value->no_banding}}</td>
						<td>{{$value->j_perkara}}</td>
						<td>{{$value->tgl_put_banding}}</td>
						<td>{{$value->putusan}}</td>
						<td>{{$value->created_at}}</td>
						<td class="text-center">
							<a href="dirput/admin/edit/{{$value->id}}" class="btn btn-sm btn-outline-warning px-3">edit</a>
							<a href="dirput/admin/delete/{{$value->id}}" class="btn btn-sm btn-outline-danger px-3">hapus</a>
						</td>
					</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>No</th>
						<th>No Perkara</th>
						<th>Jenis Perkara</th>
						<th>Tanggal Putus</th>
						<th>Putusan</th>
						<th>Upload</th>
						<th>Action</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
@endsection