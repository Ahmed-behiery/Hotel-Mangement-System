<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                @if (auth()->user()->hasRole('admin'))
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active bg-warning">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Manager Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="{{ route('dashboard.admins.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i> <p>Managers</p>
                                </a>
                            </li>
                        
                    </ul>
                </li>
                @endif

                @if (auth()->user()->hasRole(['admin','manager']))
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active bg-warning">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Receptionist Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        
                        <li class="nav-item">
                            <a href="{{ route('dashboard.receptionists.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i> <p> Receptionists </p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                @endif


                @if (auth()->user()->hasRole(['admin','manager','receptionist']))
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active bg-warning">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            User Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        
                        <li class="nav-item">
                            <a href="{{ route('dashboard.users.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i> <p> Users </p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                @endif




                <!-- menu for Floors -->
                @if (auth()->user()->hasRole('admin','manager'))
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active bg-warning">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Floor Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        
                            <li class="nav-item">
                                <a href="{{ route('dashboard.floors.index') }}" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i> <p>Floors</p>
                                </a>
                            </li>
                        
                    </ul>
                </li>
                @endif

                <!-- end menu for Floors -->
                @if (auth()->user()->hasRole(['admin','manager']))
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active bg-warning">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Room Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        
                        <li class="nav-item">
                            <a href="{{ route('dashboard.rooms.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i> <p> Rooms </p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                @endif

                @if (auth()->user()->hasRole(['admin','manager','receptionist']))
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active bg-warning">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Reservation Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        
                        <li class="nav-item">
                            <a href="{{ route('dashboard.reservations.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-th"></i> <p> Reservation </p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                @endif

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>