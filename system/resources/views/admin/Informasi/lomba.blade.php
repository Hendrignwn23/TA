@extends('admin.template.base')
@section('content')
<div class="card">
	<div class="card-header">
		@include('admin.template.utils.notif')
		<h3>Halaman Lomba</h3>
		<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
			<i class="fa fa-plus"></i>
		  Lomba
		</button>

	</div>
	<div class="card-body">
		<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <h6 class="card-title card-padding pb-0">Tabel Daftar Lomba</h6>
                  <div class="table-responsive">
                    <table class="table table-hoverable">
                      <thead>
                        <tr>
                          <th class="text-left">Nomor</th>
                          <th>Aksi</th>
                          <th>Tanggal</th>
                          <th>Nama Kegiatan</th>
                          <th>Tingkat</th>
                          <th>Penyelenggara</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($list_lomba as $lomba)
                        <tr>
                          <td class="text-left">{{$loop->iteration}}</td>
                          <td>
                          	<div class="btn-group">
                          		<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$lomba->id}}" class="btn btn-warning" style="height:39px"><i class="fa fa-pencil"></i></button>
                          		@include('admin.template.utils.delete', ['url'=>url('admin/lomba', $lomba->id)])
                          	</div>
                          </td>
                          <td>{{$lomba->tanggal}}</td>
                          <td>{{$lomba->nama_kegiatan}}</td>
                          <td>{{$lomba->tingkat}}</td>
                          <td>{{$lomba->penyelenggara}}</td>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Lomba</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{url('admin/lomba')}}" method="post" enctype="multipart/form-data">
      	@csrf
	      <div class="modal-body">
	      	<div class="row">
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Tanggal</label>
		      			<input class="form-control" name="tanggal" type="date">
		      		</div>
		      	</div>
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Nama Kegiatan</label>
		      			<input class="form-control" name="nama_kegiatan" type="text">
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
		      			<label class="form-label">penyelenggara</label>
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
@foreach($list_lomba as $lomba)
<div class="modal fade" id="exampleModal{{$lomba->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Lomba</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{url('admin/lomba', $lomba->id)}}" method="post" enctype="multipart/form-data">
      	@csrf
      	@method("PUT")
	      <div class="modal-body">
	      	<div class="row">
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Tanggal</label>
		      			<input class="form-control" name="tanggal" type="date" value="{{$lomba->tanggal}}">
		      		</div>
		      	</div>
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Nama Kegiatan</label>
		      			<input class="form-control" name="nama_kegiatan" type="text" value="{{$lomba->nama_kegiatan}}">
		      		</div>
		      	</div>
		    </div>
		    <div class="row">
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Tingkat</label>
		      			<input class="form-control" name="tingkat" type="text" value="{{$lomba->tingkat}}">
		      		</div>
		      	</div>
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Penyelenggara</label>
		      			<input class="form-control" name="penyelenggara" type="text" value="{{$lomba->tingkat}}">
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