@extends('admin.template.base')
@section('content')

<div class="card">
	<div class="card-header">
		@include('admin.template.utils.notif')
		<h3>Halaman Sejarah Sekolah</h3>
		<button type="button" class="btn btn-primary" style="float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">
			<i class="fa fa-plus"></i>
		  Upload
		</button>
	</div>
	<div class="card-body">
		@foreach($daftar_sejarah as $sejarah)
		<div style="float: right;" class="mb-2">
		@include('admin.template.utils.delete', ['url'=>url('admin/sejarah', $sejarah->id)])
		</div>
			<iframe src="{{url('public')}}/{{$sejarah->file}}" style="width:100%; height: 1000px;"></iframe>
		@endforeach
		
	</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{url('admin/sejarah')}}" method="post" enctype="multipart/form-data">
      	@csrf
      	<input type="hidden" name="status" value="Aktif">
	      <div class="modal-body">
	      	<div class="row">
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">Judul</label>
		      			<input class="form-control" name="judul" type="text">
		      		</div>
		      	</div>
		      	<div class="col-md-6 mb-3">
		      		<div class="form-group">
		      			<label class="form-label">File</label>
		      			<input class="form-control" id="foto" name="file" type="file" accept=".pdf">
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

@endsection

