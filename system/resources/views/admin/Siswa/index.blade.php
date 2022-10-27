@extends('admin.template.base')
@section('content')


<div class="card">
	<div class="card-header">
		<h3>Jumlah Siswa Perkelas</h3>
	</div>
	<div class="card-body">
		<div class="mdc-layout-grid__inner">
			@foreach($list_kelas_all as $kelas)
			@php
				$siswa = \App\Models\Siswa::where('kelas_id', $kelas->id)->where('status', 'Aktif')->get();
			@endphp
			<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet shadow">
				<div class="mdc-card info-card info-card--info">
					<div class="card-inner">
						<h5 class="card-title">Kelas {{$kelas->kelas}} / {{$kelas->kode}}</h5>
						<h5 class="font-weight-light pb-2 mb-1 border-bottom"><b>{{$siswa->count()}}</b> Siswa</h5>
						<p class="tx-12 text-muted">dari <b>{{$list_kelas->count()}}</b> Siswa kelas {{$kelas->kelas}}</p>
						<div class="card-icon-wrapper">
							<i class="material-icons">dvr</i>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

<div class="card">
	<div class="card-header">
		@include('admin.template.utils.notif')
		<h3>Data Siswa</h3>
		<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
			<i class="fa fa-plus"></i>
			Siswa
		</button>
	</div>
	<div class="card-body">
		<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
			<div class="mdc-card p-0">
				<div class="table-responsive">
					<table class="table table-hoverable" id="tabeladacari">
						<thead>
							<tr>
								<th class="text-left">Nomor</th>
								<th>Aksi</th>
								<th>Nama Siswa</th>
								<th>NISN</th>
								<th>Kelas</th>
								<th>Tahun Masuk</th>
							</tr>
						</thead>
						<tbody>
						@foreach($list_kelas->sortBy('nama_siswa')->sortBy('kode') as $siswa)
							<tr>
								<td class="text-center" style="width: 20px">{{$loop->iteration}}</td>
								<td class="text-left">
									<div class="btn-group">
										<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$siswa->ids}}" class="btn btn-warning" style="height:30px"><i class="fa fa-pencil"></i></button>
										@include('admin.template.utils.delete', ['url'=>url('admin/siswa', $siswa->ids)])
									</div>
								</td>
								<td class="text-left">{{$siswa->nama_siswa}}</td>
								<td class="text-left">{{$siswa->nisn}}</td>
								<td class="text-left">{{$siswa->kelas}} {{$siswa->kode}}</td>
								<td class="text-left">{{$siswa->tahun_masuk}}</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Modal Tambah Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="{{url('admin/siswa')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="exampleFormControlInput1" class="form-label">Kelas</label>
							<select id="exampleFormControlInput1" class="form-control" name="kelas_id">
								<option hidden>-- Pilih Kelas --</option>
								@foreach($list_kelas_all->sortByDesc('kelas') as $kelas)
								<option value="{{$kelas->id}}">{{$kelas->kelas}} {{$kelas->kode}}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Nama Siswa</label>
								<input class="form-control" name="nama_siswa" type="text">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">NISN</label>
								<input class="form-control" name="nisn" type="text" maxlength="10" minlength="10">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Alamat</label>
								<input class="form-control" name="alamat" type="text">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Tempat Lahir</label>
								<input class="form-control" name="tempat_lahir" type="text">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Tanggal Lahir</label>
								<input class="form-control" name="tanggal_lahir" type="date">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Jenis Kelamin</label>
								<select class="form-control" name="jenis_kelamin">
									<option hidden>-- Pilih Jenis Kelamin --</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Agama</label>
								<select class="form-control" name="agama">
									<option hidden>-- Pilih Agama --</option>
									<option value="Islam">Islam</option>
									<option value="Protestan">Protestan</option>
									<option value="Katolik">Katolik</option>
									<option value="Hindu">Hindu</option>
									<option value="Buddha">Buddha</option>
									<option value="Konghucu">Konghucu</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Foto Siswa</label>
								<input class="form-control" id="foto" onchange="readFoto(event)" name="foto" type="file" accept="image/*">
							</div>
							<div class="form-group mt-3">
								<label class="form-label" for="">Tahun Masuk</label>
								<input type="number" class="form-control" name="tahun_masuk" maxlength="4" minlength="4">
							</div>
							<div class="form-group mt-3">
								<label class="form-label" for="">Status Mahasiswa</label>
								<select class="form-control" name="status">
									<option hidden>--Pilih Status Siswa--</option>
									<option value="AKTIF">Aktif</option>
									<option value="ALUMNI">Alumni</option>
								</select>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<img id="output" width="100%">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Modal Tambah Data -->

<!-- Modal Edit Data -->
@foreach($list_kelas as $siswa)
<div class="modal fade" id="exampleModal{{$siswa->ids}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="{{url('admin/siswa', $siswa->ids)}}" method="post" enctype="multipart/form-data">
				@csrf
				@method("PUT")
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 mb-3">
							<label for="exampleFormControlInput1" class="form-label">Kelas</label>
							<select id="exampleFormControlInput1" class="form-control" name="kelas_id">
								<option hidden value="{{$siswa->kelas_id}}">{{$siswa->kelas}} {{$siswa->kode}}</option>
								@foreach($list_kelas_edit->sortByDesc('kelas') as $kelas)
									<option value="{{$kelas->id}}">{{$kelas->kelas}} {{$kelas->kode}}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Nama Siswa</label>
								<input class="form-control" name="nama_siswa" type="text" value="{{$siswa->nama_siswa}}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">NISN</label>
								<input class="form-control" name="nisn" type="text" value="{{$siswa->nisn}}" maxlength="10" minlength="10">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Alamat</label>
								<input class="form-control" name="alamat" type="text" value="{{$siswa->alamat}}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Tempat Lahir</label>
								<input class="form-control" name="tempat_lahir" type="text" value="{{$siswa->tempat_lahir}}">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Tanggal Lahir</label>
								<input class="form-control" name="tanggal_lahir" type="date" value="{{$siswa->tanggal_lahir}}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Jenis Kelamin</label>
								<select id="exampleFormControlInput1" class="form-control" name="jenis_kelamin">
									<option value="{{$siswa->jenis_kelamin}}">{{$siswa->jenis_kelamin}}</option>
									<option value="Laki-laki">Laki-laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Agama</label>
								<select class="form-control" name="agama">
									<option value="{{$siswa->agama}}">{{$siswa->agama}}</option>
									<option value="Islam">Islam</option>
									<option value="Protestan">Protestan</option>
									<option value="Katolik">Katolik</option>
									<option value="Hindu">Hindu</option>
									<option value="Buddha">Buddha</option>
									<option value="Konghucu">Konghucu</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Foto Siswa</label>
								<input class="form-control" id="foto" onchange="readFoto(event)" name="foto" type="file" accept="image/*">
							</div>
							<div class="form-group mt-3">
								<label class="form-label" for="">Tahun Masuk</label>
								<input type="number" class="form-control" name="tahun_masuk" value="{{$siswa->tahun_masuk}}" maxlength="4" minlength="4">
							</div>
							@if($siswa->kelas == 6)
							<div class="form-group mt-3">
								<label class="form-label" for="">Tahun Lulus</label>
								<input type="number" class="form-control" name="tahun_lulus" maxlength="4" minlength="4">
							</div>
							@endif
							<div class="form-group mt-3">
								<label class="form-label" for="">Status Siswa</label>
								<select class="form-control" name="status">
									<option hidden value="{{$siswa->status}}">--Pilih Status Siswa--</option>
									<option value="AKTIF">Aktif</option>
									<option value="ALUMNI">Alumni</option>
								</select>
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Priview Foto</label>
								<img id="output_out" width="100%" src="{{url('public')}}/{{$siswa->foto}}">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endforeach
<!-- End Modal Edit Data -->		

@endsection
<script type="text/javascript">
	var readFoto= function(event) {
		var input = event.target;
		var reader = new FileReader();
		reader.onload = function(){
			var dataURL = reader.result;
			var output = document.getElementById('output');
			output.src = dataURL;
		};
		reader.readAsDataURL(input.files[0]);
	};
</script>

<script type="text/javascript">
	var readFoto= function(event) {
		var input = event.target;
		var reader = new FileReader();
		reader.onload = function(){
			var dataURL = reader.result;
			var output = document.getElementById('output_out');
			output.src = dataURL;
		};
		reader.readAsDataURL(input.files[0]);
	};
</script>