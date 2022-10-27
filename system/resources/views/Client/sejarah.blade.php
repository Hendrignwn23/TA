@extends('Client.template.base')
@section('content')

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
      <h1 class="card-title">SEJARAH</h1>
    </center>
    @foreach($daftar_sejarah as $sejarah)
    <center>
      <iframe src="{{url('public')}}/{{$sejarah->file}}" style="width:80%; height: 1000px;"></iframe>
    </center>
    @endforeach
    </div>
  </div>
  <!-- End Default Card -->

@endsection