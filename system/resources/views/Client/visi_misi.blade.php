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
      <h1 class="card-title">VISI & MISI</h1>
    </center>
      @foreach($daftar_visi_misi as $visi_misi)
      <center>
      <iframe src="{{url('public')}}/{{$visi_misi->file}}" style="width:80%; height: 1000px;"></iframe>
      </center>
      @endforeach
    </div>
  </div>
  <!-- End Default Card -->