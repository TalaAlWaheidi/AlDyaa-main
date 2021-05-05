<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image">
                    <img src="{{asset('melody/images/faces/face5.jpg')}}" alt="image" />
                </div>
                <div class="profile-name">
                    <p class="name">
                        {{ auth()->user()->name ?? '' }}
                    </p>
                    <p class="designation">
                        {{ auth()->user()->role ?? '' }}
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index-2.html">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/widgets.html">
                <i class="fa fa-puzzle-piece menu-icon"></i>
                <span class="menu-title">Widgets</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false"
                aria-controls="page-layouts">
                <i class="fab fa-trello menu-icon"></i>
                <span class="menu-title">Admins</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="{{ route('admins.users.all') }}">Users</a>
                    </li>
                </ul>

                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="{{ route('delivaryman.all') }}">Delivery Man</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item d-none d-lg-block">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false"
                aria-controls="sidebar-layouts">
                <i class="fas fa-columns menu-icon"></i>
                <span class="menu-title">Setup</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
                <ul class="nav flex-column sub-menu">
                    {{-- <li class="nav-item"><a class="nav-link" href="{{ route('setups.app-config.all') }}">App
                    Configs</a> --}}
        </li>
        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('setups.category.all') }}">Categories</a> --}}
        </li>
        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('setups.payment.all') }}">Payment Method</a> --}}
        </li>
        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('setups.sub.category.all') }}">Sub
        Category</a></li> --}}
        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('setups.units.all') }}">Units</a></li> --}}
    </ul>
    </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="far fa-compass menu-icon"></i>
            <span class="menu-title">Products</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">Addon Items</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Addons</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Offers</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Product Images</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Weights</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false"
            aria-controls="ui-advanced">
            <i class="fas fa-clipboard-list menu-icon"></i>
            <span class="menu-title">Orders</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-advanced">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">Customer Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Fillment </a></li>
                <li class="nav-item"><a class="nav-link" href="#">Loyalty Points</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="false"
            aria-controls="form-elements">
            <i class="fab fa-wpforms menu-icon"></i>
            <span class="menu-title">Engagement</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">Advertisements</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Coupons</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Notifications</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
            <i class="fas fa-pen-square menu-icon"></i>
            <span class="menu-title">Delivery</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="editors">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('city.all') }}">Cities</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('area.all') }}">Areas</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="{{ route('delivery.branches.all') }}">Branches</a>
    </li> --}}
    <li class="nav-item"><a class="nav-link" href="{{ route('delivaryline.all') }}">Delivary Line</a></li>
    {{-- <li class="nav-item"><a class="nav-link" href="{{ route('delivery.discounts.all') }}">Delivery
    Discount</a>
    </li>--}}
    {{-- <li class="nav-item"><a class="nav-link" href="{{ route('delivery.localities.all') }}">Localities</a></li>
    --}}
    </ul>
    </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
            <i class="fas fa-chart-pie menu-icon"></i>
            <span class="menu-title">Customers</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="#">Customers</a></li>
            </ul>
        </div>
    </li>
    </ul>
</nav>
