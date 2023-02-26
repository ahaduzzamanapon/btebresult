<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item">
            <a href="{{url('/forthcst')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>4th CST</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{url('/forthcstmanage')}}">Manage Result</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('/forthcstpdf')}}">Add result with pdf</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('/forthcstmanual')}}">Add result Manual</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('/forthcstfees')}}">All Fees</a>
                </li>
                

            </ul>

        </li>
        
        <li class="sidebar-item ">
            <a href="{{url('/logout')}}" class='sidebar-link'>

                <span>Logout</span>
            </a>
        </li>
    </ul>

</div>
