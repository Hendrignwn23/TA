<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
      <div class="mdc-drawer__header">
        <a class="brand-logo" >
          <img src="{{url('public')}}/assets/img/Tutwurihandayani.png" style="width: 50px; height: 50px;" alt="logo">
        </a>
      </div>
      <div class="mdc-drawer__content">
        <div class="user-info">
          @if(Auth::check())
          <p class="name">{{request()->user()->username}}</p>
          <p class="email"> {{request()->user()->email}}</p>
          @else
            Silahkan Login
          @endif
        </div>

        <div class="mdc-list-group">
          <nav class="mdc-list mdc-drawer-menu">
             <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{url('admin/beranda')}}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
                Dashboard
              </a>
            </div>

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{url('admin/ruang-kelas')}}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">person</i>
                Kelas
              </a>
            </div>

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="ui-submenu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">book</i>
                Siswa
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="ui-submenu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('admin/siswa/kelas-1')}}">
                      Kelas 1
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('admin/siswa/kelas-2')}}">
                      Kelas 2
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('admin/siswa/kelas-3')}}">
                      Kelas 3
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('admin/siswa/kelas-4')}}">
                      Kelas 4
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('admin/siswa/kelas-5')}}">
                      Kelas 5
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('admin/siswa/kelas-6')}}">
                      Kelas 6
                    </a>
                  </div>
                </nav>
              </div>
            </div>

             <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{url('admin/guru')}}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">person</i>
                Guru
              </a>
            </div>

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="sample-page-submenu">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">info</i>
                Informasi
                <i class="mdc-drawer-arrow material-icons">chevron_right</i>
              </a>
              <div class="mdc-expansion-panel" id="sample-page-submenu">
                <nav class="mdc-list mdc-drawer-submenu">
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('admin/sejarah')}}">
                      Sejarah
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('admin/struktur')}}">
                      Struktur Sekolah
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('admin/visi_misi')}}">
                      Visi & Misi
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('admin/prestasi')}}">
                      Prestasi
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('admin/kolaborasi')}}">
                      Kolaborasi
                    </a>
                  </div>
                  <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{url('admin/lomba')}}">
                      Lomba
                    </a>
                  </div>
                </nav>
              </div>
            </div>
            
            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{url('admin/alumni')}}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">people</i>
                Alumni
              </a>
            </div>

            <div class="mdc-list-item mdc-drawer-item">
              <a class="mdc-drawer-link" href="{{url('admin/user')}}">
                <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">lock</i>
                Daftar Admin
              </a>
            </div>
          </nav>
        </div>
        <div class="profile-actions">
          <a href="javascript:;">Settings</a>
          <span class="divider"></span>
          <a href="{{url('Client/logout')}}">Logout</a>
        </div>
      </div>
    </aside>