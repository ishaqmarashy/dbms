<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SB Admin 2</title>
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home')}}">
                <div class="sidebar-brand-text mx-3">FOOD DB</div>
            </a>
            <hr class="sidebar-divider my-0">
         
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Interface
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Table Views</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Table Views:</h6>
                        <a class="collapse-item" href="{{ route('allCustomers')}}">All Customers</a>
                        <a class="collapse-item" href="{{ route('allRestaurants')}}">All Restaurants</a>
                        <a class="collapse-item" href="{{ route('allProducts')}}">All Products</a>
                        <a class="collapse-item" href="{{ route('allOrders')}}">All Orders</a>
                        <a class="collapse-item" href="{{ route('allCustomerLoyalty')}}">All Customer Loyalty</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Add to Tables</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Add to Tables:</h6>
                        <a class="collapse-item"href="{{ route('addCustomer')}}">Add Customer</a>
                        <a class="collapse-item"href="{{ route('addOrders')}}">Add An Order</a>
                        <a class="collapse-item"href="{{ route('addProductToOrder')}}">Add Products To An Order</a>
                        <a class="collapse-item"href="{{ route('addCard')}}">Add Card To A Customer</a>
                        <a class="collapse-item"href="{{ route('addRestaurant')}}">Add Restaurant</a>
                        <a class="collapse-item"href="{{ route('addRestaurantLocation')}}">Add Restaurant Location</a>
                        <a class="collapse-item"href="{{ route('addProduct')}}">Add Products</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#cca" aria-expanded="true"
                    aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Get from Tables</span>
                </a>
                <div id="cca" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Get from Tables:</h6>
                        <a class="collapse-item" href="{{ route('customerAccount')}}">Get A Customers By Name</a>
                        <a class="collapse-item" href="{{ route('restaurantProducts')}}">Find Product</a>
                    </div>
                </div>
            </li>
            
            <hr class="sidebar-divider">
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column bg-dark">
                <div class="py-3 collapse-inner rounded my-auto">
                    <div id="content">
                        <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright">
                        <span>Copyright © Online-Store 2019</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
</body>

</html>
