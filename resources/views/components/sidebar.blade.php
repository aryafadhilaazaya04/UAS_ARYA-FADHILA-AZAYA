<div class="sidebar list-group rounded-3 shadow-sm py-3 px-2">
    <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action d-flex align-items-center gap-2 mb-2 {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <i class="bi bi-speedometer2"></i>
        <span>Dashboard</span>
    </a>
    <a href="{{ route('products') }}" class="list-group-item list-group-item-action d-flex align-items-center gap-2 {{ request()->routeIs('products*') ? 'active' : '' }}">
        <i class="bi bi-box-seam"></i>
        <span>Produk</span>
    </a>
</div>
