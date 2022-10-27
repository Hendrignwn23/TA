@extends('Client.template.base')

	  <!-- ======= Space ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container "></div>
        </section><!-- End Counts Section -->
      <!-- ======= Space ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container"></div>
        </section><!-- End Counts Section -->

        <section class="section">
            <div class="row">
              <div class="col-lg-12">
      
                <div class="card">
                  <div class="card-body">
                    <center>
                    <h1 class="card-title">SISWA KELAS ENAM</h1>
                    </center>
                    <form action="{{url('Client/siswakelas_6')}}" method="POST" style="float: right;">
                      @csrf
                      <div class="row">
                        <div class="form-group" style="width: 150px">
                          <select class="form-control" name="kode">
                            <option hidden>--Pilih Kelas--</option>
                            @foreach($list_kelas_all as $kelas)
                              <option>{{$kelas->kode}}</option>
                            @endforeach
                          </select>
                        </div>
                        <button type="submit" class="btn btn-success" style="width:100px">Jelajahi</button>
                      </div>
                    </form>
                    <table class="table table-bordered border-primary" style="margin-top: 30px;">
                        <thead>
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">NISN</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Kelas</th>
                          </tr>
                        </thead>
                        @foreach($list_kelas->sortBy('nama_siswa')->sortBy('kode') as $siswa)
                        <tbody>
                          <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$siswa->nama_siswa}}</td>
                            <td>{{$siswa->nisn}}</td>
                            <td>{{$siswa->jenis_kelamin}}</td>
                            <td>{{$siswa->kelas}} {{$siswa->kode}}</td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                      <!-- End Primary Color Bordered Table -->
      
                  </div>
                </div>
      
              </div>
            </div>
          </section>