@extends('admin.template.base')
@section('content')
<div class="card">
	<div class="card-header">
		@include('admin.template.utils.notif')
		<h3>Halaman Prestasi</h3>
		<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
			<i class="fa fa-plus"></i>
		  Prestasi
		</button>

	</div>
	<div class="card-body">
		<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <h6 class="card-title card-padding pb-0">Tabel Daftar Prestasi</h6>
                  <div class="table-responsive">
                    <table class="table table-hoverable">
                      <thead>
                        <tr>
                          <th class="text-left">Nomor</th>
                          <th>Aksi</th>
                          <th>Nama Kegiatan</th>
                          <th>Prestasi</th>
                          <th>Tingkat</th>
                          <th>Penyelenggara</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($list_prestasi as $prestasi)
                        <tr>
                          <td class="text-left">{{$loop->iteration}}</td>
                          <td>
                          	<div class="btn-group">
                          		<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$prestasi->id}}" class="btn btn-warning" style="height:39px"><i class="fa fa-pencil"></i></button>
                          		@include('admin.template.utils.delete', ['url'=>url('admin/prestasi', $prestasi->id)])
                          	</div>
                          </td>
                          <td>{{$prestasi->nama_kegiatan}}</td>
                          <td>{{$prestasi->prestasi_sekolah}}</td>
                          <td>{{$prestasi->tingkat}}</td>
                          <td>{{$prestasi->penyelenggara}}</td>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Prestasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{url('admin/prestasi')}}" method="post" enctype="multipart/form-data">
      	@csrf
	      <div class="modal-body">
	      	<div class="row">
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Nama Kegiatan</label>
		      			<input class="form-control" name="nama_kegiatan" type="text">
		      		</div>
		      	</div>
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Prestasi</label>
		      			<input class="form-control" name="prestasi_sekolah" type="text">
		      		</div>
		      	</div>
		    </div>
		    <div class="row">
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Tingkat</label>
		      			<input class="form-control" name="tingkat" type="text">
		      		</div>
		      	</div>
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Penyelenggara</label>
		      			<input class="form-control" name="penyelenggara" type="text">
		      		</div>
		      	</div>
		    </div>
		    <div class="col-md-6 mb-3">
		      	<div class="form-group">
		      		<img id="output" width="100%">
		      	</div>
		    </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary">Simpan</button>
		      </div>
	    </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal Tambah Data -->

<!-- Modal Edit Data -->
@foreach($list_prestasi as $prestasi)
<div class="modal fade" id="exampleModal{{$prestasi->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Prestasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{url('admin/prestasi', $prestasi->id)}}" method="post" enctype="multipart/form-data">
      	@csrf
      	@method("PUT")
	      <div class="modal-body">
	      	<div class="row">
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Nama Kegiatan</label>
		      			<input class="form-control" name="nama_kegiatan" type="text" value="{{$prestasi->nama_kegiatan}}">
		      		</div>
		      	</div>
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Prestasi</label>
		      			<input class="form-control" name="prestasi_sekolah" type="text" value="{{$prestasi->prestasi_sekolah}}">
		      		</div>
		      	</div>
		    </div>
		    <div class="row">
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Tingkat</label>
		      			<input class="form-control" name="tingkat" type="text" value="{{$prestasi->tingkat}}">
		      		</div>
		      	</div>
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Penyelenggara</label>
		      			<input class="form-control" name="penyelenggara" type="text" value="{{$prestasi->penyelenggara}}">
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