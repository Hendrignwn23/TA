@extends('admin.template.base')
@section('content')

<div class="card">
	<div class="card-header">
		@include('admin.template.utils.notif')
		<h3>Halaman Data Guru</h3>
		<button type="button" class="btn btn-primary border-0" style="float: right; background-color: #17A589; border-radius: 10px" data-bs-toggle="modal" data-bs-target="#exampleModal">
			<i class="fa fa-plus"></i>
			Guru
		</button>

	</div>
	<div class="card-body">
		<div class="row">
		@foreach($list_guru as $guru)
			<div class="col-md-4 mt-4 text-center">
				<div class="card" style="width: 18rem;">
					<img src="{{url('public', $guru->foto)}}" class="card-img-top" alt="..." style="width: 100%; height: 250px">
					<div class="card-body">
						<h5 class="card-title">{{$guru->nama_guru}}</h5>
						<ul class="list-group list-group-flush mb-3" style="font-size: 11pt">
						  <li class="list-group-item">NIP : {{$guru->nip}}</li>
						  <li class="list-group-item">NUPTK : {{$guru->nuptk}}</li>
						  <li class="list-group-item">Pangkat : {{$guru->pangkat}}</li>
						  <li class="list-group-item">Golongan : {{$guru->golongan}}</li>
						</ul>
						<div class="btn-group">
							<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$guru->id}}" class="btn btn-warning" style="height:30px; border-radius: 5px; margin-right: 10px"><i class="fa fa-pencil"></i></button>
							@include('admin.template.utils.delete', ['url'=>url('admin/guru', $guru->id)])
						</div>
					</div>
				</div>
			</div>
		@endforeach
		</div>	 
	</div>
</div>


<!-- Modal Tambah Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="{{url('admin/guru')}}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Nama Guru</label>
								<input class="form-control" name="nama_guru" type="text">
							</div>
						</div> 
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">NIP</label>
								<input class="form-control" name="nip" type="text">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">NUPTK</label>
								<input class="form-control" name="nuptk" type="text">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Pangkat</label>
								<input class="form-control" name="pangkat" type="text">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Golongan</label>
								<input class="form-control" name="golongan" type="text">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Jabatan</label>
								<input class="form-control" name="jabtan" type="text">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Alamat Rumah</label>
								<input class="form-control" name="alamat" type="text">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">E-mail</label>
								<input class="form-control" name="email" type="text">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Foto Guru</label>
								<input class="form-control" id="foto" onchange="readFoto(event)" name="foto" type="file" accept="image/*">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
									<label class="form-label">Jenis Kelamin</label>
									<select id="exampleFormControlInput1" class="form-control" name="jenis_kelamin">
										<option hidden>-- Pilih Jenis Kelamin --</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
							</div>
						</div>
					</div>
					<div class="row">
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
@foreach($list_guru as $guru)
<div class="modal fade" id="exampleModal{{$guru->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Data Guru</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form action="{{url('admin/guru', $guru->id)}}" method="post" enctype="multipart/form-data">
				@csrf
				@method("PUT")
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Nama Guru</label>
								<input class="form-control" name="nama_guru" type="text" value="{{$guru->nama_guru}}">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">NIP</label>
								<input class="form-control" name="nip" type="text" value="{{$guru->nip}}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">NUPTK</label>
								<input class="form-control" name="nuptk" type="text" value="{{$guru->nuptk}}">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Pangkat</label>
								<input class="form-control" name="pangkat" type="text" value="{{$guru->pangkat}}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Golongan</label>
								<input class="form-control" name="golongan" type="text" value="{{$guru->golongan}}">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Jabatan</label>
								<input class="form-control" name="jabtan" type="text" value="{{$guru->jabatan}}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Alamat Rumah</label>
								<input class="form-control" name="alamat" type="text" value="{{$guru->alamat}}">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">E-mail</label>
								<input class="form-control" name="email" type="text" value="{{$guru->email}}">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Foto Guru</label>
								<input class="form-control" id="foto" name="foto" onchange="readFoto(event)" type="file" accept="image/*">
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Jenis Kelamin</label>
									<select id="exampleFormControlInput1" class="form-control" name="jenis_kelamin">
										<option value="{{$guru->jenis_kelamin}}">{{$guru->jenis_kelamin}}</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 mb-3">
							<div class="form-group">
								<label class="form-label">Priview Foto</label>
								<img id="output_out" width="100%" src="{{url('public')}}/{{$guru->foto}}">
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







