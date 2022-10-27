<header id="header" class="fixed-top">
    <nav class="navbar navbar-light bg-light">
      <div class="container d-flex mt-6">
        <a class="navbar-brand" href="#">
          <img src="{{url('public')}}/assets/img/Tutwurihandayani.png" alt="" width="100" height="100" class="d-inline-block align-text-top">
        </a>
        <span class="navbar-text d-none d-lg-block">
          <h2><center>PANGKALAN DATA</center></h2>
          <br/>
          <h2>SDN 05 KEC. BENUA KAYONG KAB. KETAPANG</h2>
        </span>

    <!-- ======= Search Form ======= -->
    <form class="d-flex">
        <div class="search-form-wrap js-search-form-wrap">
          <form action="search-result.html" class="search-form">
          <input type="text" placeholder="Search" class="form-control">
          </form>
        </div>
    </form><!-- End Search Form -->

        <div class="container d-flex align-items-center justify-content-between">
          <nav id="navbar" class="navbar">

            <ul>
              <li><a class="nav-link scrollto {{request()->is('Client/beranda*') ? 'active' : ''}}" href="{{url('Client/beranda')}}">Beranda</a></li>
              <li class="dropdown"><a class="{{request()->is('Client/statistik_siswa*','Client/statistik_guru*') ? 'active' : ''}}" href="#"><span>Statistik</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a class="{{request()->is('Client/statistik_siswa*') ? 'active' : ''}}" href="{{url('Client/statistik_siswa')}}">Siswa</a></li>
                  <li><a class="{{request()->is('Client/statistik_guru*') ? 'active' : ''}}" href="{{url('Client/statistik_guru')}}">Guru</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="/Client/sejarah">Sejarah</a></li>
                  <li><a href="/Client/struktur">Struktur Sekolah</a></li>
                  <li><a href="/Client/visi_misi">Visi & Misi</a></li>
                  <li><a href="/Client/prestasi">Prestasi</a></li>
                  <li><a href="/Client/kolaborasi">Kolaborasi</a></li>
                  <li><a href="/Client/lomba">Lomba</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto {{request()->is('Client/alumni*') ? 'active' : ''}}" href="{{url('Client/alumni')}}">Alumni</a></li> 
            </ul>

          </nav><!-- .navbar -->
        </div>
      </div>
    </nav>
  </header><!-- End Header -->