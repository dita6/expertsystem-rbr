      <!-- Sidebar Menu -->
      
      <nav class="mt-2 sidebar-light" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="{{ route('hom') }}" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('gejala.indexp') }}" class="nav-link  {{ (request()->is('gejala.indexp')) ? 'active' : '' }}">
              <i class="nav-icon fa fa-plus-square"></i>
              <p>Gejala</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('klasifikasi.indexp') }}" class="nav-link  {{ (request()->is('klasifikasi.indexp')) ? 'active' : '' }}">
              <i class="nav-icon fa fa-heartbeat"></i>
              <p>Jenis Gangguan</p>
            </a>
            <li class="nav-item">
              <a href="{{ route('klasifikasiT.indexp') }}" class="nav-link  {{ (request()->is('klasifikasiT.indexp')) ? 'active' : '' }}">
                <i class="nav-icon fa  fa-list-ol"></i>
                <p>Tingkatan Gangguan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('nilai.indexp') }}" class="nav-link  {{ (request()->is('nilai.indexp')) ? 'active' : '' }}">
                <i class="nav-icon fa fa-eject"></i>
                <p>Bobot Parameter Gejala</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('solusi.indexp') }}" class="nav-link  {{ (request()->is('solusi.indexp')) ? 'active' : '' }}">
                <i class="nav-icon fa fa-medkit"></i>
                <p>Solusi</p>
              </a>
            </li>
          </li>
          <li class="nav-item">
            <a href="{{ route('rule.indexp') }}" class="nav-link  {{ (request()->is('rule.indexp')) ? 'active' : '' }}">
              <i class="nav-icon fa fa-list-alt"></i>
              <p>Aturan</p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{ route('user.index') }}" class="nav-link  {{ (request()->is('user.index')) ? 'active' : '' }}">
              <i class="nav-icon fa fa-cogs"></i>
              <p>Kelola User</p>
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
