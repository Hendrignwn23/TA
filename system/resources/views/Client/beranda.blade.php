@extends('Client.template.base')

  <!-- ======= Hero Section ======= -->
  @yield('section')
    <!-- ======= Space ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container"></div>
    </section><!-- End Counts Section -->
  <section id="counts" class="counts section-bg">
  <section id="hero" class="d-flex align-items-center">

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"></div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box shadow" style="width: 230px">
            <div class="icon"><i class="ri-group-line"></i></div>
              <div class="col-lg-12 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <span data-purecounter-start="0" data-purecounter-end="{{$jumlah_siswa}}" data-purecounter-duration="2" class="purecounter"></span>
                  <h1 class="title"><a href="statistik_siswa">Siswa</a></h1>
                </div>
              </div>
            <p class="description">Jumlah Siswa Aktif</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="500">
          <div class="icon-box shadow" style="width: 230px">
            <div class="icon"><i class="ri-group-fill"></i></div>
              <div class="col-lg-12 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <span data-purecounter-start="0" data-purecounter-end="{{$jumlah_guru}}" data-purecounter-duration="2" class="purecounter"></span>
                  <h1 class="title"><a href="statistik_guru">Guru</a></h1>
                </div>
              </div>
            <p class="description">Jumlah Guru</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0"></div>


  </section><!-- End Hero -->
  </section><!-- End Counts Section -->

  @yield('barchart')
  <section class="section">
    <div class="row"> 

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Grafik Jumlah Siswa</h5>

              <!-- Bar Chart Siswa-->
              <div id="barChart1" style="min-height: 300px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#barChart1")).setOption({
                    xAxis: {
                      type: 'category',
                      data: ['Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas 4', 'Kelas 5', 'Kelas 6']
                    },
                    yAxis: {
                      type: 'value'
                    },
                    series: [{
                      data: [{{$jumlah_siswa_1}}, {{$jumlah_siswa_2}}, {{$jumlah_siswa_3}}, {{$jumlah_siswa_4}}, {{$jumlah_siswa_5}}, {{$jumlah_siswa_6}}],
                      type: 'bar'
                    }]
                  });
                });
              </script>
              <!-- End Bar Chart -->

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Grafik Jumlah Guru</h5>

              <!-- Bar Chart Guru-->
              <div id="barChart2" style="min-height: 300px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#barChart2")).setOption({
                    xAxis: {
                      type: 'category',
                      data: ['Guru PNS', 'Guru Honorer']
                    },
                    yAxis: {
                      type: 'value'
                    },
                    series: [{
                      data: [13, 8],
                      type: 'bar'
                    }]
                  });
                });
              </script>
              <!-- End Bar Chart -->

          </div>
        </div>
      </div>

    </div>
  </section>