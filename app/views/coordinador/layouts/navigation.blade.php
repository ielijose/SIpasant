<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="menu-medium" class="sidebar-toggle tooltips">
                <i class="fa fa-outdent"></i>
            </a>
            <a class="navbar-brand" href="index.html"></a>
        </div>
        <div class="navbar-center">Coordinador - Pasantias LICOM</div>
        <div class="navbar-collapse collapse">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <ul class="nav navbar-nav pull-right header-menu">

                <!-- BEGIN USER DROPDOWN -->
                <li class="dropdown" id="user-header">
                    <a href="#" class="dropdown-toggle c-white" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img src="/assets/img/avatars/avatar2.png" alt="user avatar" width="30" class="p-r-5">
                        <span class="username">{{ Auth::user()->nombre }}</span>
                        <i class="fa fa-angle-down p-r-10"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profil.html">
                                <i class="glyph-icon flaticon-account"></i> My Profile
                            </a>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="glyph-icon flaticon-calendar"></i> My Calendar
                            </a>
                        </li>
                        <li>
                            <a href="profil_edit.html">
                                <i class="glyph-icon flaticon-settings21"></i> Account Settings
                            </a>
                        </li>
                        <li class="dropdown-footer clearfix">
                            <a href="javascript:;" class="toggle_fullscreen" title="Fullscreen">
                                <i class="glyph-icon flaticon-fullscreen3"></i>
                            </a>                            
                            <a href="/logout" title="Logout">
                                <i class="fa fa-power-off"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- END USER DROPDOWN -->


            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
</nav>