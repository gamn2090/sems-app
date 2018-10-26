<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{ asset('img/hsa-small.png') }}" alt="Hoteles San Agustin" class="brand-image"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{Auth::user()->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->username }}</a>
        </div>
      </div>
      @if(Auth::user()->hotel_id == 10)
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Usuarios
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a onclick="openModal('user')" href="#!" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Crear</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-eye"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Clientes
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href="#!" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Crear</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="nav-icon fa fa-eye"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Técnicos
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href="#!" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Crear</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-eye"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Productos
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#!" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Crear</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#!" class="nav-link">
                  <i class="nav-icon fa fa-eye"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-newspaper-o"></i>
              <p>
                Servicios
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#!" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Crear</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#!" class="nav-link">
                  <i class="nav-icon fa fa-eye"></i>
                  <p>Ver</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#!" class="nav-link">
                  <i class="fa fa-edit nav-icon"></i>
                  <p>Actualizar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#!" class="nav-link">
                  <i class="fa fa-trash nav-icon"></i>
                  <p>Eliminar</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">Recepción de Equipos</li>
          <li class="nav-item">
            <a href="#!" class="nav-link">
              <i class="nav-icon fa fa-edit "></i>
              <p>
                Recepción de Equipos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#!" class="nav-link">
              <i class="nav-icon fa fa-eye"></i>
              <p>
                Visualizar trabajos
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-newspaper-o"></i>
              <p>
                Trabajos por estatus
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#!" class="nav-link">
                  <i class="ion ion-clock nav-icon"></i>
                  <p>En proceso</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#!" class="nav-link">
                  <i class="nav-icon ion ion-checkmark"></i>
                  <p>Finalizados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#!" class="nav-link">
                  <i class="ion ion-android-cancel nav-icon"></i>
                  <p>Anulados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#!" class="nav-link">
                  <i class="ion-android-time nav-icon"></i>
                  <p>Retrasados</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#!" class="nav-link">
              <i class="nav-icon fa fa-list"></i>
              <p>
                Trabajos por técnicos
              </p>
            </a>
          </li>
        </ul>
      </nav>
      @else
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-user"></i>
              <p>
                Encuestas
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('Encuestas') }}" class="nav-link">
                  <i class="fa fa-eye nav-icon"></i>
                  <p>Ver</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      @endif

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>