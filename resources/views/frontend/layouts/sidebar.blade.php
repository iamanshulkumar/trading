<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="treeview">
                        <a href="#">
                            
                            <span>Derivatives (Option-Chain)</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ URL::to('nifty') }}"><i class="ti-more"></i>NIFTY</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('banknifty') }}"><i class="ti-more"></i>BANKNIFTY</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('finnifty') }}"><i class="ti-more"></i>FINNIFTY</a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</aside>

{{-- <div class="app-sidebar sidebar-shadow"> --}}
{{-- <div class="app-header__logo">
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div> --}}
{{-- <div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu"> --}}
            <!-- <li>
                    <a href="{{ URL::to('/admin/dashboard') }}">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/admin/users') }}">
                        <i class="metismenu-icon pe-7s-users"></i>
                        Users
                    </a>
                </li>
                <li>
                    <a href="{{ URL::to('/admin/blogs') }}">
                        <i class="metismenu-icon pe-7s-bookmarks"></i>
                        Blogs
                    </a>
                </li> -->

            {{-- <li>
                <a href="#">
                    <i class="metismenu-icon pe-7s-menu"></i>
                    Derivatives (Option-Chain)
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li class="treeview">
                        <a href="{{ URL::to('nifty') }}">
                            <i class="metismenu-icon"></i><span>NIFTY</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="{{ URL::to('banknifty') }}">
                            <i class="metismenu-icon"></i><span>BANKNIFTY</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="{{ URL::to('finnifty') }}">
                            <i class="metismenu-icon"></i><span>FINNIFTY</span>
                        </a>
                    </li>
                </ul>
            </li>



            <li>

                <a href="#">
                    <i class="metismenu-icon pe-7s-menu"></i>
                    Indices Sectoral
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li class="treeview">
                        <a href="{{ URL::to('niftItSectoral') }}">
                            <i class="metismenu-icon"></i><span>Nifty It</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="{{ URL::to('#') }}">
                            <i class="metismenu-icon"></i><span>Nifty Auto</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="{{ URL::to('#') }}">
                            <i class="metismenu-icon"></i><span>Nifty Bank </span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="{{ URL::to('#') }}">
                            <i class="metismenu-icon"></i><span>Nifty Fmcg</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="{{ URL::to('#') }}">
                            <i class="metismenu-icon"></i><span>Nifty Pharma</span>
                        </a>
                    </li>
                </ul>
            </li> --}}



            {{-- <li>
                <a href="{{ URL::to('/ ') }}">
                    <i class="metismenu-icon pe-7s-bookmarks"></i>
                    Marketstack API --}}
                    <!-- (https://marketstack.com/) -->
                {{-- </a>
            </li>


            <li>
                <a href="{{ URL::to('/optionChain') }}">
                    <i class="metismenu-icon pe-7s-bookmarks"></i> --}}
                    Testing- Option Chain
                    <!-- (https://marketstack.com/) -->
                {{-- </a>
            </li> --}}
            <!-- <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-diamond"></i>
                        Admin Settings
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ URL::to('/admin/roles') }}">
                                <i class="metismenu-icon"></i>
                                Roles
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/admin/permissions') }}">
                                <i class="metismenu-icon"></i>
                                Permission
                            </a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/admin/settings') }}">
                                <i class="metismenu-icon pe-7s-tools"></i>
                                Settings
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="{{ URL::to('/admin/backups') }}">
                                <i class="metismenu-icon pe-7s-download"></i><span>Backup</span>
                            </a>
                        </li>
                    </ul>
                </li> -->
            <!-- <li>
                    <a href="{{ URL::to('/admin_login/logout') }}">
                        <i class="metismenu-icon pe-7s-upload"></i>
                        Logout
                    </a>
                </li> -->
        {{-- </ul>
    </div>
</div>
</div>

</aside> --}}

<!-- /.sidebar -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.app-sidebar__inner ul li').each(function() {
            if (window.location.href.indexOf($(this).find('a:first').attr('href')) > -1) {
                $(this).closest('ul').closest('li').attr('class', 'mm-active');
                $(this).addClass('mm-active').siblings().removeClass('mm-active');
            }
        });
    });
</script>
