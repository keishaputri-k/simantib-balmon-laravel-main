<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">{{ str_replace('-', ' ', Request::path()) }}</li>
            </ol>
            <h6 class="font-weight-bolder mb-0 text-capitalize">{{ str_replace('-', ' ', Request::path()) }}</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 d-flex justify-content-end" id="navbar"> 
            {{-- <div class="ms-md-3 pe-md-3 d-flex align-items-center">
                <div class="col-auto">
                    <div class="bg-white border-radius-lg d-flex me-2">
                        <i class="fas fa-search align-self-lg-center px-2" aria-hidden="true"></i>
                      <input type="text" class="form-control border-0 ps-3" placeholder="Type here...">
                      <button class="btn bg-gradient-info my-1 me-1">Search</button>
                    </div>
                  </div>
            </div> --}}
            <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
                <a href="{{ url('/logout')}}" class="nav-link text-body font-weight-bold px-0">
                    <em class="fa fa-user me-sm-1"></em>
                    <span class="d-sm-inline d-none">Sign Out</span>
                </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                    <em class="sidenav-toggler-line"></em>
                    <em class="sidenav-toggler-line"></em>
                    <em class="sidenav-toggler-line"></em>
                </div>
                </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                <em class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></em>
                </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <em class="fa fa-bell cursor-pointer"></em>
                </a>
                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">   
                <li>
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                   
                    </a>
                </li>
                </ul>
            </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->