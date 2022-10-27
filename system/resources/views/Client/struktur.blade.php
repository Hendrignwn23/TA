@extends('Client.template.base')

<!-- ======= Space ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container "></div>
        </section><!-- End Counts Section -->
      <!-- ======= Space ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container"></div>
        </section><!-- End Counts Section -->
        

<!-- Default Card -->
<div class="card">
    <div class="card-body" data-aos="zoom-in" data-aos-delay="500">
    <center>
      <h1 class="card-title">STRUKTUR SEKOLAH</h1>
        @foreach($daftar_struktur as $struktur)
        <center>
            <iframe src="{{url('public')}}/{{$struktur->file}}" style="width:80%; height: 1000px;"></iframe>
        </center>
        @endforeach
    </center>
    </div>
  </div>
  <!-- End Default Card -->