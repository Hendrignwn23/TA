@extends('admin.template.base')
@section('content')


<div class="card">
	<div class="card-header">
		@include('admin.template.utils.notif')
		<h3>Halaman Admin</h3>
		<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
			<i class="fa fa-plus"></i>
		  Admin
		</button>

	</div>
	<div class="card-body">
		<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <h6 class="card-title card-padding pb-0">Tabel Admin</h6>
                  <div class="table-responsive">
                    <table class="table table-hoverable">
                      <thead>
                        <tr>
                          <th class="text-left">Nomor</th>
                          <th>Aksi</th>
                          <th>Nama</th>
                          <th>Username</th>
                          <th>E-mail</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($daftar_user->sortBy('user') as $user)
                        <tr>
                          <td class="text-left">{{$loop->iteration}}</td>
                          <td>
                          	<div class="btn-group">
                          		<button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}" class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                          		@include('admin.template.utils.delete', ['url'=>url('admin/user', $user->id)])
                          	</div>
                          </td>
                          <td>{{$user->nama}}</td>
                          <td>{{$user->username}}</td>
                          <td>{{$user->email}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
	</div>
</div>


<!-- Modal Tambah Admin -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{url('admin/user')}}" method="post">
      	@csrf
	      <div class="modal-body">
	      	<div class="row">
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Nama</label>
		      			<input class="form-control" name="nama" type="text" required>
		      		</div>
		      	</div>
		      		<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Username</label>
		      			<input class="form-control" name="username" type="text" required>
		      		</div>
		      	</div>
	      	</div>
	      	<div class="row">
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">E-mail</label>
		      			<input class="form-control" name="email" type="email" required>
		      		</div>
		      	</div>
		      		<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Password</label>
		      			<input class="form-control" name="password" type="password" required>
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

<!-- Modal Edit Kelas -->
@foreach($daftar_user as $user)
<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{url('admin/user', $user->id)}}" method="post" enctype="multipart/form-data">
      	@csrf
      	@method("PUT")
      	<div class="modal-body">
	      	
		      	<div class="col-md-12 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Nama</label>
		      			<input class="form-control" name="nama" type="text" value="{{$user->nama}}">
		      		</div>
		      	</div>
		      	<div class="row">
		      		<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Username</label>
		      			<input class="form-control" name="username" type="text" value="{{$user->username}}">
		      		</div>
		      	</div>
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">E-mail</label>
		      			<input class="form-control" name="email" type="email" value="{{$user->email}}">
		      		</div>
		      	</div>
		      	</div>
		      		<div class="col-md-12 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Password</label>
		      			<input class="form-control" name="password" type="password">
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

@endsection