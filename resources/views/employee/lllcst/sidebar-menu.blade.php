<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item">
            <a href="{{url('/thirdcst')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>3rd CST</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{url('/thirdcstmanage')}}">Manage Result</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('/thirdcstpdf')}}">Add result with pdf</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('/thirdcstmanual')}}">Add result Manual</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('/thirdcstfees')}}">All Fees</a>
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
