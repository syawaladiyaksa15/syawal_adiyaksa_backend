<div class="header sticky-top shadow-sm">
    <nav class="navbar navbar-light py-2 py-md-3 px-lg-5 px-md-2">
        <div class="container-fluid">

            <!-- Brand -->
            {{-- <a href="{{ route('author.home') }}" class="me-3 me-lg-4 brand-icon">
            </a> --}}

            <!-- header rightbar icon -->
            <div class="h-right flex-grow-1 justify-content-end d-flex align-items-center">
                <div class="dropdown notifications">
                    <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <span class="pulse-ring"></span>
                    </a>
                </div>
                <div class="dropdown user-profile ms-2 ms-sm-3">
                    <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown">
                        <img class="avatar rounded-circle img-thumbnail" src="{{ asset('app-assets/dashboard/assets/images/profile_av.png') }}" alt="">
                    </a>
                    <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                        <div class="card border-0 w240">
                            <div class="card-body border-bottom">
                                <div class="d-flex py-1">
                                    <img class="avatar rounded-circle" src="{{ asset('app-assets/dashboard/assets/images/profile_av.png') }}" alt="">
                                    <div class="flex-fill ms-3">
                                        <p class="mb-0 text-muted"><span class="fw-bold">{{ Auth::user()->name }}</span></p>
                                        <small class="text-muted">{{ Auth::user()->email }}</small>
                                        <div>
                                            <a href="{{ route('logout') }}" class="card-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Keluar</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group m-2">
                                <a href="profile.html" class="list-group-item list-group-item-action border-0"><i class="w30 fa fa-user"></i>Profil</a>
                                <a href="#" class="list-group-item list-group-item-action border-0"><i class="w30 fa fa-gear"></i>Pengaturan</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="nav-link ml d-block d-xl-none menu-toggle" href="#"><i class="fa fa-bars"></i></a>
            </div>

        </div>
    </nav>
</div>