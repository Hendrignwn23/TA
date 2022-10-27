@extends('admin.template.base')
@section('content')


<div class="card">
	<div class="card-header">
		@include('admin.template.utils.notif')
		<h3>Halaman Kelas</h3>
		<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
			<i class="fa fa-plus"></i>
		  Kelas
		</button>

	</div>
	<div class="card-body">
		<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <h6 class="card-title card-padding pb-0">Tabel Kelas</h6>
                  <div class="table-responsive">
                    <table class="table table-hoverable">
                      <thead>
                        <tr>
                          <th class="text-left">Nomor</th>
                          <th>Aksi</th>
                          <th>Nama Kelas</th>
                          <th>Kode Kelas</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($daftar_kelas->sortBy('kelas') as $kelas)
                        <tr>
                          <td class="text-left">{{$loop->iteration}}</td>
                          <td>
                          	<div class="btn-group">
                          		<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$kelas->id}}" class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                          		@include('admin.template.utils.delete', ['url'=>url('admin/ruang-kelas', $kelas->id)])
                          	</div>
                          </td>
                          <td>{{$kelas->kelas}}</td>
                          <td>{{$kelas->kode}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
	</div>
</div>


<!-- Modal Tambah Kelas -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kelas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{url('admin/ruang-kelas')}}" method="post">
      	@csrf
	      <div class="modal-body">
	      	<div class="mb-3">
	      		<label for="exampleFormControlInput1" class="form-label">Kelas</label>
	      		<select id="exampleFormControlInput1" class="form-control" name="kelas">
	      			<option hidden>-- Pilih Kelas --</option>
	      			<option value="1">1</option>
	      			<option value="2">2</option>
	      			<option value="3">3</option>
	      			<option value="4">4</option>
	      			<option value="5">5</option>
	      			<option value="6">6</option>
	      		</select>
	      	</div>
	      	<div class="mb-3">
	      		<label for="exampleFormControlInput1" class="form-label">Kode Kelas</label>
	      		<select id="exampleFormControlInput1" class="form-control" name="kode">
	      			<option hidden>-- Pilih Kode Kelas --</option>
	      			<option value="A">A</option>
	      			<option value="B">B</option>
	      			<option value="C">C</option>
	      			<option value="D">D</option>
	      			<option value="E">E</option>
	      		</select>
	      	</div>
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit Kelas -->
@foreach($daftar_kelas as $kelas)
<div class="modal fade" id="exampleModal{{$kelas->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Kelas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{url('admin/ruang-kelas', $kelas->id)}}" method="post" enctype="multipart/form-data">
      	@csrf
      	@method("PUT")
      		<div class="modal-body">
	      	<div class="mb-3">
	      		<label for="exampleFormControlInput1" class="form-label">Kelas</label>
	      		<select id="exampleFormControlInput1" class="form-control" name="kelas">
	      			<option hidden value="{{$kelas->kelas}}">{{$kelas->kelas}}</option>
	      			<option value="1">1</option>
	      			<option value="2">2</option>
	      			<option value="3">3</option>
	      			<option value="4">4</option>
	      			<option value="5">5</option>
	      			<option value="6">6</option>
	      		</select>
	      	</div>
	      	<div class="mb-3">
	      		<label for="exampleFormControlInput1" class="form-label">Kode Kelas</label>
	      		<select id="exampleFormControlInput1" class="form-control" name="kode">
	      			<option hidden value="{{$kelas->kode}}">{{$kelas->kode}}</option>
	      			<option value="A">A</option>
	      			<option value="B">B</option>
	      			<option value="C">C</option>
	      			<option value="D">D</option>
	      			<option value="D">E</option>
	      		</select>
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

@endsection