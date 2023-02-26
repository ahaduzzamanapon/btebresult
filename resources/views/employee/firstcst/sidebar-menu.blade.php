<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item">
            <a href="{{url('/employeefirstcst')}}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>7th cst</span>
            </a>
            <ul class="submenu ">
                <li class="submenu-item ">
                    <a href="{{url('/firstcstmanage')}}">Manage Result</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('/firstcstpdf')}}">Add result with pdf</a>
                </li>
                <li class="submenu-item ">
                    <a href="{{url('/firstcstfees')}}">All Fees</a>
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
