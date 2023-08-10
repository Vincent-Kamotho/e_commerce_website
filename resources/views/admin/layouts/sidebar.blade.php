<div class="sidebar">
    <div class="logo"></div>
    <ul class="menu">
        <li class="active">
            <a href="">
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{url('admin/products/show-products')}}">
                <i class="fas fa-list"></i>
                <span>Products</span>
            </a>
        </li>
        <li>
            <a href="{{url('admin/shopping/list-shopping')}}">
                <i class="fas fa-bar-chart"></i>
                <span>Shopping</span>
            </a>
        </li>
        {{-- <li>
            <a href="#">
                <i class="fas fa-users"></i>
                <span>Users</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-question-circle"></i>
                <span>Leads/Inquiries</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-bar-chart"></i>
                <span>Analytics</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-credit-card-alt"></i>
                <span>Transactions</span>
            </a>
        </li>
        
        <li>
            <a href="#">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </a>
        </li>

        <li class="logout">
            <a href="#">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
        </li>
        
        <li class="logout">
            <a href="" class="dropdown-item"
            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}>

                
                
            </a>
            <form id="logout-form" action="" method="POST" class="d-none">
                @csrf
            </form>
        </li> --}}



        
    </ul>
</div>