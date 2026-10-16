{{-- Dropdowns: toggleable menus with items, dividers and icons. --}}
<div class="btn-list">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown button
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#"><i class="ti ti-user me-2"></i>Profile</a>
            <a class="dropdown-item" href="#"><i class="ti ti-settings me-2"></i>Settings</a>
            <a class="dropdown-item" href="#"><i class="ti ti-bell me-2"></i>Notifications</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="#"><i class="ti ti-logout me-2"></i>Sign out</a>
        </div>
    </div>

    <div class="dropdown">
        <button class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            With header
        </button>
        <div class="dropdown-menu" style="min-width: 220px">
            <div class="dropdown-header text-muted">Account</div>
            <a class="dropdown-item" href="#">Billing</a>
            <a class="dropdown-item" href="#">Security</a>
            <div class="dropdown-header text-muted">Team</div>
            <a class="dropdown-item" href="#">Members</a>
            <a class="dropdown-item" href="#">Permissions</a>
        </div>
    </div>

    <div class="btn-group">
        <button class="btn btn-secondary">Action</button>
        <button class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="visually-hidden">Toggle dropdown</span>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
        </div>
    </div>
</div>