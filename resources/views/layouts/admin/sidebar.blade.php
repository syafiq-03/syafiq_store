<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">Teknik Informatika | KSI</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">RPL</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>

            <!-- Dashboard menu -->
            <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Produk menu -->
            <li class="{{ Request::is('product*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.product') }}">
                    <i class="fas fa-box"></i>
                    <span>Produk</span>
                </a>
            </li>

            <!-- Distributor menu -->
            <li class="{{ Route::is('admin.distributor.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.distributor.index') }}">
                    <i class="fas fa-truck"></i>
                    <span>Distributor</span>
                </a>
            </li>

            <!-- Flash Sale menu -->
            <li class="{{ Request::is('flash-sale*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.flash_sale.index') }}">
                    <i class="fas fa-bolt"></i>
                    <span>Flash Sale</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
