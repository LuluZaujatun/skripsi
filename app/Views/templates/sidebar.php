<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <img class="img-profile rounded-circle" src="<?php echo base_url('sb admin') ?>/img/logo.svg">
        </div>
        <div class="sidebar-brand-text">BGES Telkom Bekasi</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <?php if (session()->level == 1) : ?>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/pages'); ?>">
                <i class="text-gray-900 fas fa-fw fa-tachometer-alt"></i>
                <span class="text-gray-900">Dashboard</span>
            </a>
        </li>

        <!-- Nav Item - Sales Order -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/pages/sales_order'); ?>">
                <i class="text-gray-900 fas fa-list fa-sm fa-fw"></i>
                <span class="text-gray-900">Sales Order</span></a>
        </li>

        <!-- Nav Item - Customer -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/pages/customers'); ?>">
                <i class="text-gray-900 fas fa-fw fa-table"></i>
                <span class="text-gray-900">Data Customers</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Data Sales -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/pages/data_sales'); ?>">
                <i class="text-gray-900 fas fa-fw fa-folder"></i>
                <span class="text-gray-900">Data Sales Force</span></a>
        </li>

        <!-- Nav Item - Rating Result -->

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - User -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/pages/user'); ?>">
                <i class="text-gray-900 fas fa-fw fa-wrench"></i>
                <span class="text-gray-900">User</span></a>
        </li>

        <!-- Nav Item - Setting Points -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/pages/setting'); ?>">
                <i class="text-gray-900 fas fa-fw fa-cog"></i>
                <span class="text-gray-900">Setting Points</span></a>
        </li>

    <?php endif; ?>

    <?php if (session()->level == 2) : ?>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/sales'); ?>">
                <i class="text-gray-900 fas fa-fw fa-tachometer-alt"></i>
                <span class="text-gray-900">Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Sales Order -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/sales/salesOrder'); ?>">
                <i class="text-gray-900 fas fa-list fa-sm fa-fw"></i>
                <span class="text-gray-900">Sales Order</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Customer -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/sales/custSales'); ?>">
                <i class="text-gray-900 fas fa-fw fa-table"></i>
                <span class="text-gray-900">Data Customers</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Customer -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/sales/addCustSales'); ?>">
                <i class="text-gray-900 fas fa-fw fa-plus"></i>
                <span class="text-gray-900">New Customers</span></a>
        </li>
    <?php endif; ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>