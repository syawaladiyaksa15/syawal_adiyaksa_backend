<!DOCTYPE html>
<html class="no-js " lang="en">
<head>
    @include('layouts.dashboard.partials.meta')
    <title>@yield('title')</title>
    @include('layouts.dashboard.partials.link')
    @yield('link')
</head>
<body>
    <div id="layout-h" class="theme-red">
        @include('layouts.dashboard.partials.sidebar')
        <div class="main">
            @include('layouts.dashboard.partials.navbar')
            @yield('content')
            @include('layouts.dashboard.partials.footer')
        </div>
        <!-- Modal: Layout -->
        <div class="modal fade" id="LayoutModal" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-vertical modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ready to build Layouts</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body custom_scroll">
                        <div class="mb-4">Customize your overview page layout. Choose the one that best fits your needs.</div>
                        <h5 class="mt-5 pb-2">Left sidebar with icon</h5>
                        <div class="row g-3">
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-default.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Default</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/index-mini-sidebar.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-mini-sidebar.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Default + Menu Collapse</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-c/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-c.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Menu + Tab view</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-g/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-g.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Icon menu with Grid view</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-i/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-i.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Dual tone icon + menu list</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <h5 class="mt-5 pb-2">Header top menu</h5>
                        <div class="row g-3">
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-d/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-d.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Header <span class="text-muted small">(Fluid)</span></h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-d-container/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-d-container.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Header <span class="text-muted small">(Container)</span></h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-d-sub-header/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-d-sub-header.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Header + Sub menu <span class="text-muted small">(Fluid)</span></h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-d-sub-header-container/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-d-sub-header-container.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Header + Submenu <span class="text-muted small">(Container)</span></h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-f/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-f.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Header + Submenu, Overlay <span class="text-muted small">(Fluid)</span></h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-f-container/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-f-container.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Header + Submenu, Overlay <span class="text-muted small">(Container)</span></h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-l/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-l.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Megamenu + Animation Overlay</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-q/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-q.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Header + Megamenu sticky</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <h5 class="mt-5 pb-2">Content Combinations</h5>
                        <div class="row g-3">
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-b/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-b.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Default</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-e/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-e.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Default</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift border border-primary bg-primary text-light" href="index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-h.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Default</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-k/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-k.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Default</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-p/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-p.svg" alt="" />
                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-0">Default</h6>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <a class="card lift" href="https://alui.thememakker.com/html/main/dist/layout-n/index.html">
                                    <img class="card-img-top" src="https://alui.thememakker.com/html/assets/images/layout/layout-n.svg" alt="" />
                                    <div class="card-body text-center">
                                      <h6 class="card-title mb-0">Sidebar with Tab</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal: Setting -->
        <div class="modal fade" id="SettingsModal" tabindex="-1">
            <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">AL-UI Setting</h5>
                    </div>
                    <div class="modal-body custom_scroll">
                        <!-- Settings: Font -->
                        <div class="setting-font">
                            <small class="card-title text-muted">Google font Settings</small>
                            <ul class="list-group font_setting mb-3 mt-1">
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans" checked="">
                                        <label class="form-check-label" for="font-opensans">
                                            Open Sans Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-quicksand" value="font-quicksand">
                                        <label class="form-check-label" for="font-quicksand">
                                            Quicksand Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-nunito" value="font-nunito">
                                        <label class="form-check-label" for="font-nunito">
                                            Nunito Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-Raleway" value="font-raleway">
                                        <label class="form-check-label" for="font-Raleway">
                                            Raleway Google Font
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Settings: Color -->
                        <div class="setting-theme">
                            <small class="card-title text-muted">Theme Color Settings</small>
                            <ul class="list-unstyled d-flex justify-content-between choose-skin mb-2 mt-1">
                                <li data-theme="indigo"><div class="indigo"></div></li>
                                <li data-theme="blue"><div class="blue"></div></li>
                                <li data-theme="cyan"><div class="cyan"></div></li>
                                <li data-theme="green"><div class="green"></div></li>
                                <li data-theme="orange"><div class="orange"></div></li>
                                <li data-theme="blush"><div class="blush"></div></li>
                                <li data-theme="red" class="active"><div class="red"></div></li>
                                <li data-theme="dynamic"><div class="dynamic"><i class="fa fa-paint-brush"></i></div></li>
                            </ul>
                            <div class="form-check form-switch gradient-switch mb-1">
                                <input class="form-check-input" type="checkbox" id="CheckGradient">
                                <label class="form-check-label" for="CheckGradient">Enable Gradient! ( Sidebar )</label>
                            </div>
                        </div>
                        <!-- Settings: bg image -->
                        <div class="setting-img mb-3">
                            <div class="form-check form-switch imagebg-switch mb-1">
                                <input class="form-check-input" type="checkbox" id="CheckImage">
                                <label class="form-check-label" for="CheckImage">Set Background Image (Sidebar)</label>
                            </div>
                            <div class="bg-images">
                                <ul class="list-unstyled d-flex justify-content-between">
                                    <li class="sidebar-img-1 sidebar-img-active"><a class="rounded sidebar-img" id="img-1" href="#"><img src="{{ asset('app-assets/dashboard/assets/images/sidebar-bg/sidebar-1.jpg') }}" alt="" /></a></li>
                                    <li class="sidebar-img-2"><a class="rounded sidebar-img" id="img-2" href="#"><img src="{{ asset('app-assets/dashboard/assets/images/sidebar-bg/sidebar-2.jpg') }}" alt="" /></a></li>
                                    <li class="sidebar-img-3"><a class="rounded sidebar-img" id="img-3" href="#"><img src="{{ asset('app-assets/dashboard/assets/images/sidebar-bg/sidebar-3.jpg') }}" alt="" /></a></li>
                                    <li class="sidebar-img-4"><a class="rounded sidebar-img" id="img-4" href="#"><img src="{{ asset('app-assets/dashboard/assets/images/sidebar-bg/sidebar-4.jpg') }}" alt="" /></a></li>
                                    <li class="sidebar-img-5"><a class="rounded sidebar-img" id="img-5" href="#"><img src="{{ asset('app-assets/dashboard/assets/images/sidebar-bg/sidebar-5.jpg') }}" alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Settings: Theme dynamics -->
                        <div class="dt-setting">
                            <small class="card-title text-muted">Dynamic Color Settings</small>
                            <ul class="list-group list-unstyled mb-3 mt-1">
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label>Primary Color</label>
                                    <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label>Secondary Color</label>
                                    <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 1</label>
                                    <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 2</label>
                                    <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 3</label>
                                    <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 4</label>
                                    <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted small">Chart Color 5</label>
                                    <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                </li>
                            </ul>
                        </div>
                        <!-- Settings: Light/dark -->
                        <div class="setting-mode">
                            <small class="card-title text-muted">Light/Dark & Contrast Layout</small>
                            <ul class="list-group list-unstyled mb-0 mt-1">
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-switch mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-switch">
                                        <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-high-contrast mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                        <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-rtl mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-rtl">
                                        <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-start text-center">
                        <button type="button" class="btn flex-fill btn-primary lift">Save Changes</button>
                        <button type="button" class="btn flex-fill btn-white border lift" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.dashboard.partials.script')
    @yield('script')

</body>
</html>