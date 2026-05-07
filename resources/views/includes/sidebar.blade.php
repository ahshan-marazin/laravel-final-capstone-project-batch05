 <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu {{ set_active(['dashboard']) }}">
                            <a href="{{ route('dashboard') }}"><i class="feather-grid"></i> <span> Dashboard</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('dashboard') }}">Admin Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu {{ set_active(['brands.index', 'brands.create']) }}">
                            <a href="{{ route('brands.index') }}"><i class="fas fa-graduation-cap"></i> <span> Brands</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ set_active('brands.index') }}" href="{{ route('brands.index') }}">Brand List</a></li>
                                <li><a class="{{ set_active('brands.create') }}" href="{{route('brands.create') }}">Brand Add</a></li>
                            </ul>
                        </li>

                        <li class="submenu {{ set_active(['categories.index', 'categories.create']) }}">
                            <a href="{{ route('categories.index') }}"><i class="fas fa-graduation-cap"></i> <span> Categories</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ set_active('categories.index') }}" href="{{ route('categories.index') }}">Category List</a></li>
                                <li><a class="{{ set_active('categories.create') }}" href="{{route('categories.create') }}">Category Add</a></li>
                            </ul>
                        </li>

                        <li class="submenu {{ set_active(['products.index', 'products.create']) }}">
                            <a href="{{ route('products.index') }}"><i class="fas fa-graduation-cap"></i> <span> Products</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ set_active('products.index') }}" href="{{ route('products.index') }}">Product List</a></li>
                                <li><a class="{{ set_active('products.create') }}" href="{{route('products.create') }}">Product Add</a></li>
                            </ul>
                        </li>

                        <li class="submenu {{ set_active(['suppliers.index', 'suppliers.create']) }}">
                            <a href="{{ route('suppliers.index') }}"><i class="fas fa-graduation-cap"></i> <span> Suppliers</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ set_active('suppliers.index') }}" href="{{ route('suppliers.index') }}">Supplier List</a></li>
                                <li><a class="{{ set_active('suppliers.create') }}" href="{{route('suppliers.create') }}">Supplier Add</a></li>
                            </ul>
                        </li>

                        <li class="submenu {{ set_active(['customers.index', 'customers.create']) }}">
                            <a href="{{ route('customers.index') }}"><i class="fas fa-graduation-cap"></i> <span> Customers</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ set_active('customers.index') }}" href="{{ route('customers.index') }}">Customer List</a></li>
                                <li><a class="{{ set_active('customers.create') }}" href="{{route('customers.create') }}">Customer Add</a></li>
                            </ul>
                        </li>
                        <li class="submenu {{ set_active(['purchases.index', 'purchases.create']) }}">
                            <a href="{{ route('purchases.index') }}"><i class="fas fa-graduation-cap"></i> <span> Purchases</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ set_active('purchases.index') }}" href="{{ route('purchases.index') }}">Purchase List</a></li>
                                <li><a class="{{ set_active('purchases.create') }}" href="{{route('purchases.create') }}">Purchase Add</a></li>
                            </ul>
                        </li>
                        <li class="submenu {{ set_active(['sales.index', 'sales.create']) }}">
                            <a href="{{ route('sales.index') }}"><i class="fas fa-graduation-cap"></i> <span> Sales</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ set_active('sales.index') }}" href="{{ route('sales.index') }}">Sale List</a></li>
                                <li><a class="{{ set_active('sales.create') }}" href="{{route('sales.create') }}">Sale Add</a></li>
                            </ul>
                        </li>

                        <li class="submenu {{ set_active(['current-stock.index']) }}">
                            <a href="{{ route('current-stock.index') }}"><i class="fas fa-graduation-cap"></i> <span> Current Stock</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a class="{{ set_active('current-stock.index') }}" href="{{ route('current-stock.index') }}">Stock List</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>