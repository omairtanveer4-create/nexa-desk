{{-- Modals: dialogs and confirmation windows. --}}
<div class="btn-list mb-3">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#demo-modal">Launch modal</button>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#demo-modal-confirm">Delete item</button>
    <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#demo-modal-lg">Large modal</button>
</div>

<div class="modal fade" id="demo-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                This is a standard modal. Add any component inside the body —
                forms, tables, or other demos from this catalog.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-sm fade" id="demo-modal-confirm" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center py-4">
                <i class="ti ti-alert-triangle text-danger" style="font-size: 48px;"></i>
                <div class="h3 mt-3">Are you sure?</div>
                <p class="text-muted">This action cannot be undone.</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Yes, delete</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="demo-modal-lg" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Large modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Use <code>modal-sm</code>, <code>modal-lg</code> or <code>modal-xl</code> on the
                <code>.modal-dialog</code> to change the width.
            </div>
        </div>
    </div>
</div>