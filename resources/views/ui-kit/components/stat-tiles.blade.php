{{-- Statistic Tiles: KPI cards with animated counters (CountUp.js). --}}
<div class="row row-cards">
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="avatar bg-primary-lt text-primary"><i class="ti ti-users fs-2"></i></span>
                    <span class="badge bg-success-lt text-success"><i class="ti ti-trending-up me-1"></i>+12%</span>
                </div>
                <div class="h1 mb-0"><span data-countup="12540">0</span></div>
                <div class="text-muted">Total users</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="avatar bg-green-lt text-green"><i class="ti ti-credit-card fs-2"></i></span>
                    <span class="badge bg-success-lt text-success"><i class="ti ti-trending-up me-1"></i>+8%</span>
                </div>
                <div class="h1 mb-0">$<span data-countup="48290">0</span></div>
                <div class="text-muted">Revenue</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="avatar bg-yellow-lt text-yellow"><i class="ti ti-shopping-cart fs-2"></i></span>
                    <span class="badge bg-danger-lt text-danger"><i class="ti ti-trending-down me-1"></i>-3%</span>
                </div>
                <div class="h1 mb-0"><span data-countup="837">0</span></div>
                <div class="text-muted">Orders</div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <span class="avatar bg-red-lt text-red"><i class="ti ti-activity fs-2"></i></span>
                    <span class="badge bg-success-lt text-success"><i class="ti ti-trending-up me-1"></i>+19%</span>
                </div>
                <div class="h1 mb-0"><span data-countup="94">0</span>%</div>
                <div class="text-muted">Uptime</div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        document.querySelectorAll('[data-countup]').forEach(function (el) {
            new window.CountUp(el, parseInt(el.dataset.countup, 10), {
                separator: ',',
                duration: 1.5,
                startVal: 0,
            }).start();
        });
    </script>
@endpush