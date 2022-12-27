      <!-- Sidebar Menu -->
      
      <nav class="mt-2 sidebar-light" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('gejala.index') }}" class="nav-link  {{ (request()->is('gejala.index')) ? 'active' : '' }}">
              <i class="nav-icon fa fa-plus-square"></i>
              <p>Gejala</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('klasifikasi.index') }}" class="nav-link  {{ (request()->is('klasifikasi.index')) ? 'active' : '' }}">
              <i class="nav-icon fa fa-heartbeat"></i>
              <p>Jenis Gangguan</p>
            </a>
            <li class="nav-item">
              <a href="{{ route('klasifikasiT.index') }}" class="nav-link  {{ (request()->is('klasifikasiT.index')) ? 'active' : '' }}">
                <i class="nav-icon fa  fa-list-ol"></i>
                <p>Tingkatan Gangguan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('nilai.index') }}" class="nav-link  {{ (request()->is('nilai.index')) ? 'active' : '' }}">
                <i class="nav-icon fa fa-eject"></i>
                <p>Bobot Parameter Gejala</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('solusi.index') }}" class="nav-link  {{ (request()->is('solusi.index')) ? 'active' : '' }}">
                <i class="nav-icon fa fa-medkit"></i>
                <p>Solusi</p>
              </a>
            </li>
          </li>
          <li class="nav-item">
            <a href="{{ route('rule.index') }}" class="nav-link  {{ (request()->is('rule.index')) ? 'active' : '' }}">
              <i class="nav-icon fa fa-list-alt"></i>
              <p>Aturan</p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{ route('diagnosa.output') }}" class="nav-link  {{ (request()->is('diagnosa.output')) ? 'active' : '' }}">
              <i class="nav-icon fa fa-server"></i>
              <p>Hasil Deteksi</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('riwayat.index') }}" class="nav-link  {{ (request()->is('riwayat.index')) ? 'active' : '' }}">
              <i class="nav-icon fa fa-history"></i>
              <p>Riwayat Deteksi</p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Logout
            </p>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
