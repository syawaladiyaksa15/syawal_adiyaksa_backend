<div class="sidebar px-3 py-2 py-md-3 border-end gradient">
    <div class="d-flex flex-column h-100">
        <div class="d-flex align-items-center mb-4 mt-2">
            <h4 class="sidebar-title mb-0 flex-grow-1 text-center">Article<span>- CMS</span></h4>
        </div>

        <div class="mb-lg-5 mb-md-4 mb-2 smt-2 text-center">
            <a href="#"><img src="{{ asset('storage/avatars/'.Auth::user()->avatar) }}" alt="User" class="rounded-circle img-thumbnail w90"></a>
            <h6 class="mb-0 mt-2">{{ Auth::user()->name }}</h6>
            <small class="text-muted">{{ ucwords(Auth::user()->role) }}</small>
        </div>

        <!-- Menu: main menu ul -->
        <div class="flex-grow-1">

            @component('layouts.dashboard.components.who')
            @endcomponent

        </div>

        <div class="px-3">
            <a class="py-2 d-flex justify-content-between align-items-center text-muted text-center" href="{{ route('/') }}"><span>Website</span></a>
        </div>

    </div>
</div>