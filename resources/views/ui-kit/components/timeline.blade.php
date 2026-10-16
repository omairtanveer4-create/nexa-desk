{{-- Timeline: vertical activity timelines. --}}
<ul class="timeline">
    <li class="timeline-event">
        <div class="timeline-event-icon">
            <span class="avatar" style="background-color: #206bc4; color: #fff;"><i class="ti ti-user-plus"></i></span>
        </div>
        <div class="timeline-event-card card">
            <div class="card-body">
                <div class="text-muted">Today at 09:12</div>
                <div class="h4 mt-1">New user registered</div>
                <p class="text-muted mb-0">John Doe created an account via email invitation.</p>
            </div>
        </div>
    </li>
    <li class="timeline-event">
        <div class="timeline-event-icon">
            <span class="avatar" style="background-color: #2f9e44; color: #fff;"><i class="ti ti-credit-card"></i></span>
        </div>
        <div class="timeline-event-card card">
            <div class="card-body">
                <div class="text-muted">Yesterday at 18:44</div>
                <div class="h4 mt-1">Payment received</div>
                <p class="text-muted mb-0">Invoice #1042 was paid — $249.00.</p>
            </div>
        </div>
    </li>
    <li class="timeline-event">
        <div class="timeline-event-icon">
            <span class="avatar" style="background-color: #d63939; color: #fff;"><i class="ti ti-alert-triangle"></i></span>
        </div>
        <div class="timeline-event-card card">
            <div class="card-body">
                <div class="text-muted">Mon 11:03</div>
                <div class="h4 mt-1">Server warning</div>
                <p class="text-muted mb-0">Disk usage on node-2 reached 85%.</p>
            </div>
        </div>
    </li>
</ul>

<style>
    .timeline {
        --tblr-timeline-color: rgba(var(--tblr-body-color-rgb), .15);
    }
    .timeline-event + .timeline-event {
        margin-top: 1rem;
    }
    .timeline-event-card {
        box-shadow: none;
    }
</style>