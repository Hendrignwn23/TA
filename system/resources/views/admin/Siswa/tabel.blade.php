<tbody>
	<tr style="text-align: left !important;">
		<td>{{$loop->iteration}}</td>
		<td>
			<div class="btn-group">
				<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$siswa->ids}}" class="btn btn-warning" style="height:30px"><i class="fa fa-pencil"></i></button>
				@include('admin.template.utils.delete', ['url'=>url('admin/siswa', $siswa->ids)])
			</div>
		</td>
		<td>{{$siswa->nama_siswa}}</td>
		<td>{{$siswa->nisn}}</td>
		<td>{{$siswa->kelas}} {{$siswa->kode}}</td>
	</tr>
</tbody>