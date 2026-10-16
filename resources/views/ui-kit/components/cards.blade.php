{{-- Cards: flexible content containers with headers, footers and colors. --}}
<div class="row row-cards">
    <div class="col-md-6 col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Basic card</div>
            </div>
            <div class="card-body">
                Cards are flexbox containers. Put any content inside <code>.card-body</code> —
                text, forms, tables, or other components.
            </div>
            <div class="card-footer d-flex justify-content-between">
                <span class="text-muted small">Updated 2 min ago</span>
                <a href="#" class="card-link">Read more</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card card-md">
            <div class="card-body">
                <div class="avatar avatar-lg mb-3" style="background-color: rgba(var(--tblr-primary-rgb), .15); color: var(--tblr-primary);">
                    <i class="ti ti-rocket fs-1"></i>
                </div>
                <div class="h3 mb-1">Card with media</div>
                <p class="text-muted mb-3">Combine avatars, icons and any Bootstrap utilities inside a card.</p>
                <a href="#" class="btn btn-primary">Launch</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <div class="card-title text-white">Colored card</div>
                <p class="text-white mb-3">Use any <code>bg-*</code> utility to color the whole card.</p>
                <a href="#" class="btn btn-white">Learn more</a>
            </div>
        </div>
    </div>
</div>