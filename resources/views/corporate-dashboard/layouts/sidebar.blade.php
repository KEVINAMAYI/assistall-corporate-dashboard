<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/index">
    <div class="sidebar-brand-icon">
        <img style="border:2px solid blue; border-radius:100%;" src="corporate-dashboard/img/kra_logo.png" height="50" width="50" alt="Corporate Logo">
    </div>
    <div class="sidebar-brand-text mx-3">KRA</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/employees">
        <i class="fas fa-fw fa-user"></i>
        <span>Employees</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/branches">
        <i class="fas fa-fw fa-building"></i>
        <span>Branches</span>
    </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/manage_account">
        <i class="fas fa-fw fa-dollar-sign"></i>
        <span>Manage Account</span>
    </a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/wallet-access-control">
        <i class="fas fa-fw fa-wallet"></i>
        <span>Wallet Access Control</span>
    </a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="/reports">
        <i class="fas fa-fw fa-file"></i>
        <span>Reports</span>
    </a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('logout') }}"
          onclick="event.preventDefault();
           document.getElementById('logout-form').submit();">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </a>
</li>

</ul>
<!-- End of Sidebar -->