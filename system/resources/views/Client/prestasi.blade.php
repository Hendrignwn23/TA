@extends('Client.template.base')

<!-- ======= Space ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container "></div>
        </section><!-- End Counts Section -->
      <!-- ======= Space ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container"></div>
        </section><!-- End Counts Section -->
        
        <div class="card">
            <div class="card-body" data-aos="zoom-in" data-aos-delay="500">
            <center>
              <h2 class="card-title">PRESTASI SEKOLAH</h2>
            </center>
              <!-- Dark Table -->
              <table class="table table-primary">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kegiatan</th>
                    <th scope="col">Prestasi</th>
                    <th scope="col">Tingkat</th>
                    <th scope="col">Penyelenggara</th>
                  </tr>
                </thead>
                @foreach($list_prestasi as $prestasi)
                <tbody>
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$prestasi->nama_kegiatan}}</td>
                    <td>{{$prestasi->prestasi_sekolah}}</td>
                    <td>{{$prestasi->tingkat}}</td>
                    <td>{{$prestasi->penyelenggara}}</td>
                  </tr> 
                </tbody>
                @endforeach
              </table>
              <!-- End Dark Table -->

            </div>
          </div>
  </div><!-- End Default Card -->