{{-- Charts: ApexCharts area, bar and donut charts (window.ApexCharts). --}}
<div class="row row-cards">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Area chart</div>
            </div>
            <div class="card-body">
                <div id="demo-chart-area"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Bar chart</div>
            </div>
            <div class="card-body">
                <div id="demo-chart-bar"></div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Donut chart</div>
            </div>
            <div class="card-body">
                <div id="demo-chart-donut"></div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        var apex = window.ApexCharts;

        new apex(document.querySelector('#demo-chart-area'), {
            chart: { type: 'area', height: 260, toolbar: { show: false } },
            series: [{ name: 'Signups', data: [31, 40, 28, 51, 42, 109, 100, 120, 96, 140, 170] }],
            xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'] },
            colors: ['#206bc4'],
            fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.4, opacityTo: 0.1 } },
            stroke: { curve: 'smooth', width: 2 },
            dataLabels: { enabled: false },
            grid: { borderColor: 'rgba(var(--tblr-body-color-rgb), .08)' },
            theme: { mode: document.documentElement.getAttribute('data-bs-theme') || 'light' },
        }).render();

        new apex(document.querySelector('#demo-chart-bar'), {
            chart: { type: 'bar', height: 260, toolbar: { show: false } },
            series: [{ name: 'Revenue', data: [44, 55, 57, 56, 61, 58, 63, 72, 84] }],
            xaxis: { categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'] },
            colors: ['#2f9e44'],
            plotOptions: { bar: { borderRadius: 4, columnWidth: '50%' } },
            dataLabels: { enabled: false },
            grid: { borderColor: 'rgba(var(--tblr-body-color-rgb), .08)' },
            theme: { mode: document.documentElement.getAttribute('data-bs-theme') || 'light' },
        }).render();

        new apex(document.querySelector('#demo-chart-donut'), {
            chart: { type: 'donut', height: 260 },
            series: [44, 22, 18, 16],
            labels: ['Direct', 'Organic', 'Referral', 'Social'],
            colors: ['#206bc4', '#2f9e44', '#f59f00', '#d63939'],
            legend: { position: 'bottom' },
            dataLabels: { enabled: true },
            theme: { mode: document.documentElement.getAttribute('data-bs-theme') || 'light' },
        }).render();
    </script>
@endpush