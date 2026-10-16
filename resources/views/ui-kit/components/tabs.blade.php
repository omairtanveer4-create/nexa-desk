{{-- Tabs: tabbed navigation with content panes. --}}
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#demo-tab-home">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-profile">Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#demo-tab-messages">Messages</a>
    </li>
</ul>
<div class="tab-content">
    <div class="tab-pane active show" id="demo-tab-home">
        <p class="text-muted py-3 mb-0">Home tab content. Tabs use Bootstrap's <code>data-bs-toggle="tab"</code> — no extra JS needed.</p>
    </div>
    <div class="tab-pane" id="demo-tab-profile">
        <p class="text-muted py-3 mb-0">Profile tab content.</p>
    </div>
    <div class="tab-pane" id="demo-tab-messages">
        <p class="text-muted py-3 mb-0">Messages tab content.</p>
    </div>
</div>

<div class="mt-4">
    <ul class="nav nav-pills" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#demo-pill-a">Overview</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#demo-pill-b">Activity</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#demo-pill-c">Settings</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active show" id="demo-pill-a">
            <p class="text-muted py-3 mb-0">Pills variant — same markup, use <code>nav-pills</code>.</p>
        </div>
        <div class="tab-pane" id="demo-pill-b"><p class="text-muted py-3 mb-0">Activity pane.</p></div>
        <div class="tab-pane" id="demo-pill-c"><p class="text-muted py-3 mb-0">Settings pane.</p></div>
    </div>
</div>