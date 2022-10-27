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
              <h2 class="card-title">KOLABORASI SEKOLAH</h2>
            </center>
              <!-- Dark Table -->
              <table class="table table-warning">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Kegiatan</th>
                    <th scope="col">Instansi/Lembaga</th>
                  </tr>
                </thead>
                @foreach($list_kolaborasi as $kolaborasi)
                <tbody>
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$kolaborasi->tanggal}}</td>
                    <td>{{$kolaborasi->nama_kegiatan}}</td>
                    <td>{{$kolaborasi->instansi_lembaga}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>
              <!-- End Dark Table -->

            </div>
          </div>
  </div><!-- End Default Card -->