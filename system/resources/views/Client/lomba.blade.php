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
              <h2 class="card-title">LOMBA SEKOLAH</h2>
            </center>
              <!-- Dark Table -->
              <table class="table table-success">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Kegiatan</th>
                    <th scope="col">Tingkat</th>
                    <th scope="col">Penyelenggara</th>
                  </tr>
                </thead>
                @foreach($list_lomba as $lomba)
                <tbody>
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$lomba->tanggal}}</td>
                    <td>{{$lomba->nama_kegiatan}}</td>
                    <td>{{$lomba->tingkat}}</td>
                    <td>{{$lomba->penyelenggara}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>
              <!-- End Dark Table -->

            </div>
          </div>
  </div><!-- End Default Card -->