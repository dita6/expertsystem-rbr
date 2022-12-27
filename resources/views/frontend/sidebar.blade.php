      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('homee') }}" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('diagnosa') }}" class="nav-link  {{ (request()->is('diagnosa')) ? 'active' : '' }}}}">
              <i class="nav-icon fas fa-stethoscope"></i>
              <p>
                Deteksi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('hasil') }}" class="nav-link  {{ (request()->is('hasil')) ? 'active' : '' }}}}">
              <i class="nav-icon fa fa-server"></i>
              <p>
                Hasil Deteksi
              </p>
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

