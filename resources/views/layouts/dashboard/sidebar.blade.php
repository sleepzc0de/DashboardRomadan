<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Sidebar header -->
        <div class="sidebar-section">
            <div class="sidebar-section-body d-flex justify-content-center">
                <h6 class="sidebar-resize-hide flex-grow-1 my-auto"><i class="ph-activity ph-1x"></i> DASHBOARD ROMADAN</h6>

                <div>
                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                        <i class="ph-arrows-left-right"></i>
                    </button>

                    <button type="button" class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                        <i class="ph-x"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- /sidebar header -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                <!-- Main -->

                 <li class="nav-item-header pt-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Dashboard Romadan</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                 <li class="nav-item ">
                    <a href="{{url('/')}}" class="nav-link {{Request::is('/')?'active':''}}">
                        <i class="ph-monitor"></i>
                        <span>
                            HOME
                        </span>
                    </a>
                </li>


                <li class="nav-item-header pt-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Interface Dashboard</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item ">
                    <a href="{{url('/dams')}}" class="nav-link {{Request::is('dams')?'active':''}}">
                        <i class="ph-aperture"></i>
                        <span>
                            DAMS
                        </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('ipa')}}" class="nav-link {{Request::is('ipa')?'active':''}}">
                        <i class="ph-cloud-rain"></i>
                        <span>
                            Indeks Pengelolaan Aset (IPA)
                        </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="https://ebmn.kemenkeu.go.id/dashboard" target="_blank" class="nav-link">
                        <i class="ph-cpu"></i>
                        <span>
                            BMN
                        </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('itkp')}}" class="nav-link {{Request::is('itkp')?'active':''}}">
                        <i class="ph-egg-crack"></i>
                        <span>
                            Indeks Tata Kelola Pengadaan (ITKP)
                        </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('weekly-report')}}" class="nav-link {{Request::is('weekly-report')?'active':''}}">
                        <i class="ph-graph"></i>
                        <span>
                            Weekly Report
                        </span>
                    </a>
                </li>
                 <li class="nav-item ">
                    <a href="{{url('iku')}}" class="nav-link {{Request::is('iku')?'active':''}}">
                        <i class="ph-briefcase"></i>
                        <span>
                            Iku
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->