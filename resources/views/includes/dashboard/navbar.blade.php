<!-- Navbar -->
<nav class="main-header pt-0 pb-0 navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>



    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">
        <div class="user-panel mt-3 pb-1 mb-2 d-flex">
            <div class="image">
                <img src="{{ Auth::user()->image_path }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"></a>
                <a class="d-block" href="javascript:void(0)"
                    onclick="document.getElementById('logout-form').submit();">
                    <i class="ft-power"></i> <span>{{Auth::user()->name}}</span>
                </a>
                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </ul>
</nav>
<!-- /.navbar -->
