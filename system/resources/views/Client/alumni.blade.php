@extends('Client.template.base')

@section('content')

<!-- ======= Space ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container "></div>
        </section><!-- End Counts Section -->

        <section class="section">
            <div class="row">
              <div class="col-lg-12">
      
                <div class="card">
                  <div class="card-body" data-aos="zoom-in" data-aos-delay="500"> 
                    <center>
                    <h1 class="card-title">ALUMNI SISWA SDN 05</h1>
                    </center>
                    <form action="{{url('Client/alumni')}}" method="POST" style="float: right;">
                      @csrf
                      <div class="row">
                        <div class="form-group" style="width: 250px">
                          <select class="form-control" name="tahun_lulus">
                            <option hidden>--Pilih Tahun Lulus--</option>
                            @foreach($list_alumni as $alumni)
                              <option>{{$alumni->tahun_lulus}}</option>
                            @endforeach
                          </select>
                        </div>
                        <button type="submit" class="btn btn-success" style="width:100px">Jelajahi</button>
                      </div>
                    </form>
      
                    <!-- Table with stripped rows -->
                    <table class="table" id="dataTable">
                      <thead>
                        <tr>
                          <th scope="col">NO</th>
                          <th scope="col">Nama Siswa</th>
                          <th scope="col">NISN</th>
                          <th scope="col">Tahun Masuk</th>
                          <th scope="col">Tahun Lulus</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($list_alumni as $alumni)
                        <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$alumni->nama_siswa}}</td>
                          <td>{{$alumni->nisn}}</td>
                          <td>{{$alumni->tahun_masuk}}</td>
                          <td>{{$alumni->tahun_lulus}}</td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
      
                  </div>
                </div>
      
              </div>
            </div>
          </section>

@endsection
