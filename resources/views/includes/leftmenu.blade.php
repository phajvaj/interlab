<!-- menu prile quick info -->
<div class="profile">
    <div class="profile_pic">
        <img src="{{ asset('/images/img.jpg') }}" alt="{{Auth::user()->name}}" class="img-circle profile_img">
    </div>
    <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{Auth::user()->name}}</h2>
    </div>
</div>
<!-- /menu prile quick info -->

<br />

<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="{{ url('/users') }}">ผู้ใช้งาน</a>
                    </li>
                    <li><a href="index2.html">Dashboard2</a>
                    </li>
                    <li><a href="index3.html">Dashboard3</a>
                    </li>
                </ul>
            </li>
            
            <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="tables.html">Tables</a>
                    </li>
                    <li><a href="tables_dynamic.html">Table Dynamic</a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </div>
    <div class="menu_section">
        <h3>Live On</h3>
        <ul class="nav side-menu">                                
            <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="page_404.html">404 Error</a>
                    </li>
                    <li><a href="page_500.html">500 Error</a>
                    </li>
                    <li><a href="plain_page.html">Plain Page</a>
                    </li>
                    <li><a href="login.html">Login Page</a>
                    </li>
                    <li><a href="pricing_tables.html">Pricing Tables</a>
                    </li>

                </ul>
            </li>
            <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
            </li>
        </ul>
    </div>

</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a href="{{ url('/logout') }}" data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->
