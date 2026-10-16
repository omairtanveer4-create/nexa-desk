{{-- Toasts: lightweight notifications. Click the buttons to show them. --}}
<div class="btn-list mb-3">
    <button class="btn btn-primary" data-bs-toggle="toast" data-bs-target="#demo-toast-info">Show info toast</button>
    <button class="btn btn-success" data-bs-toggle="toast" data-bs-target="#demo-toast-success">Show success toast</button>
    <button class="btn btn-danger" data-bs-toggle="toast" data-bs-target="#demo-toast-danger">Show error toast</button>
</div>

<div class="toast-container position-static p-3">
    <div class="toast fade" id="demo-toast-info" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <i class="ti ti-info-circle text-primary me-2"></i>
            <strong class="me-auto">Notification</strong>
            <small class="text-muted">just now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">Someone mentioned you in #general.</div>
    </div>

    <div class="toast fade" id="demo-toast-success" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <i class="ti ti-check-circle text-success me-2"></i>
            <strong class="me-auto">Success</strong>
            <small class="text-muted">2 min ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">Your changes have been saved.</div>
    </div>

    <div class="toast fade" id="demo-toast-danger" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <i class="ti ti-x-circle text-danger me-2"></i>
            <strong class="me-auto">Error</strong>
            <small class="text-muted">10 min ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">Upload failed. The file is too large.</div>
    </div>
</div>