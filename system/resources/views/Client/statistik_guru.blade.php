@extends('Client.template.base')

<!-- ======= Space ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container "></div>
        </section><!-- End Counts Section -->
      <!-- ======= Space ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container"></div>
        </section><!-- End Counts Section -->
        

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
  
          <div class="section-title">
            <h2>BIODATA GURU</h2>
          </div>
          
          @foreach($list_guru as $guru)
          <hr>
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="{{url('public', $guru->foto)}}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h2>{{$guru->nama_guru}}</h2>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>NIP:</strong> <span>{{$guru->nip}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>NUPTK:</strong> <span>{{$guru->nuptk}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span>{{$guru->alamat}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Jabatan:</strong> <span>{{$guru->jabatan}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Pangkat/Golongan:</strong> <span>{{$guru->pangkat}}/{{$guru->golongan}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Tugas Mengajar:</strong> <span>Available</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$guru->email}}</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2 mt-5 float-right">
            {{$list_guru->links()}}
            </div>
          </div>

        </div>
      </section><!-- End About Section -->
  </section><!-- End Call To Action Section -->
