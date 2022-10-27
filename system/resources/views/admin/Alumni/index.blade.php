@extends('admin.template.base')
@section('content')

<div class="card">
	<div class="card-header">
		@include('admin.template.utils.notif')
		<h3>Halaman Alumni Siswa</h3>
	</div>
	<div class="card-body">
		<div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                <div class="mdc-card p-0">
                  <h6 class="card-title card-padding pb-0">Tabel Daftar Alumni Siswa</h6>
                  <div class="table-responsive">
                    <table class="table table-hoverable">
                      <thead>
                        <tr>
                          <th class="text-left">Nomor</th>
                          <th>Nama Siswa</th>
                          <th>NISN</th>
                          <th>Kelas</th>
                          <th>Tahun Masuk</th>
                          <th>Tahun Lulus</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@foreach($list_alumni as $alumni)
                        <tr>
                          <td class="text-left">{{$loop->iteration}}</td>
                          <td>{{$alumni->nama_siswa}}</td>
                          <td>{{$alumni->nisn}}</td>
                          <td>{{$alumni->kelas->kelas}} {{$alumni->kelas->kode}}</td>
                          <td>{{$alumni->tahun_masuk}}</td>
                          <td>{{$alumni->tahun_lulus}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
	</div>
</div>


	

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
