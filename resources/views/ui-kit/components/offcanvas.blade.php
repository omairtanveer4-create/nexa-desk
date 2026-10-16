{{-- Offcanvas: hidden side panels that slide into view. --}}
<div class="btn-list mb-3">
    <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#demo-offcanvas-end">Right panel</button>
    <button class="btn btn-secondary" data-bs-toggle="offcanvas" data-bs-target="#demo-offcanvas-start">Left panel</button>
    <button class="btn btn-outline-success" data-bs-toggle="offcanvas" data-bs-target="#demo-offcanvas-bottom">Bottom sheet</button>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="demo-offcanvas-end" aria-hidden="true">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Filters</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p class="text-muted">Offcanvas panels are perfect for filters, side details or mobile navigation.</p>
        <div class="mb-3">
            <label class="form-label">Status</label>
            <select class="form-select">
                <option>All</option>
                <option>Active</option>
                <option>Inactive</option>
            </select>
        </div>
        <button class="btn btn-primary w-100" data-bs-dismiss="offcanvas">Apply filters</button>
    </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="demo-offcanvas-start" aria-hidden="true">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        Use <code>offcanvas-start</code>, <code>offcanvas-end</code> or <code>offcanvas-bottom</code>
        to change the slide direction.
    </div>
</div>

<div class="offcanvas offcanvas-bottom" tabindex="-1" id="demo-offcanvas-bottom" aria-hidden="true">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Bottom sheet</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        Great for consent banners and quick actions on mobile.
    </div>
</div>