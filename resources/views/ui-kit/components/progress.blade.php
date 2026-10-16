{{-- Progress bars: colors, labels, stripes and stacked segments. --}}
<div class="mb-3">
    <div class="progress mb-1">
        <div class="progress-bar" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
    </div>
    <div class="progress mb-1">
        <div class="progress-bar bg-success" style="width: 45%" role="progressbar">Success</div>
    </div>
    <div class="progress mb-1">
        <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" style="width: 60%" role="progressbar">Animated</div>
    </div>
    <div class="progress mb-1" style="height: 4px">
        <div class="progress-bar bg-info" style="width: 80%" role="progressbar">Thin</div>
    </div>
</div>

<div class="progress mb-3">
    <div class="progress-bar" style="width: 30%" role="progressbar">Segment 1</div>
    <div class="progress-bar bg-success" style="width: 25%" role="progressbar">Segment 2</div>
    <div class="progress-bar bg-danger" style="width: 20%" role="progressbar">Segment 3</div>
</div>

<div class="d-flex align-items-center gap-3">
    <span class="spinner-border spinner-border-sm text-primary" role="status" aria-hidden="true"></span>
    <div class="flex-fill">
        <div class="progress">
            <div class="progress-bar progress-bar-indeterminate" style="width: 100%" role="progressbar"></div>
        </div>
    </div>
</div>