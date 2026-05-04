 <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu active">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="index.html" class="active">Admin Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Brands</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('brands.index') }}">Brand List</a></li>
                                <li><a href="{{route('brands.create') }}">Brand Add</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Categories</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('categories.index') }}">Category List</a></li>
                                <li><a href="{{route('categories.create') }}">Category Add</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Products</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('products.index') }}">Product List</a></li>
                                <li><a href="{{route('products.create') }}">Product Add</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Suppliers</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('suppliers.index') }}">Supplier List</a></li>
                                <li><a href="{{route('suppliers.create') }}">Supplier Add</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Customers</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('customers.index') }}">Customer List</a></li>
                                <li><a href="{{route('customers.create') }}">Customer Add</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Purchases</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('purchases.index') }}">Purchase List</a></li>
                                <li><a href="{{route('purchases.create') }}">Purchase Add</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Current Stock</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('current-stock.index') }}">Stock List</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>