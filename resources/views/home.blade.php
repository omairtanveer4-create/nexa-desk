@extends('tablar::page')

@section('title', 'Dashboard')

@section('css')
    <style>
        .stat-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);
        }

        .stat-card .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .stat-card .stat-label {
            font-size: 0.85rem;
            font-weight: 500;
            opacity: 0.7;
        }

        .stat-card .stat-value {
            font-size: 1.75rem;
            font-weight: 700;
            letter-spacing: -0.02em;
        }

        .stat-card .stat-sublabel {
            font-size: 0.78rem;
            opacity: 0.6;
        }

        .activity-item {
            padding: 0.85rem 0;
            border-bottom: 1px solid rgba(var(--tblr-body-color-rgb), 0.08);
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-item .activity-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.95rem;
            color: #fff;
            font-weight: 600;
            flex-shrink: 0;
        }

        .activity-item .activity-name {
            font-weight: 600;
            font-size: 0.92rem;
            line-height: 1.2;
        }

        .activity-item .activity-email {
            font-size: 0.8rem;
            opacity: 0.6;
            line-height: 1.2;
        }

        .activity-item .activity-time {
            font-size: 0.75rem;
            opacity: 0.5;
            white-space: nowrap;
        }
    </style>
@endsection

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Overview</div>
                    <h2 class="page-title">Dashboard</h2>
                </div>
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('home') }}" class="btn btn-outline-primary">
                            <span class="btn-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="9 6 15 12 9 18"/></svg>
                            </span>
                            <span>Refresh</span>
                        </a>
                        <a href="{{ route('settings') }}" class="btn btn-outline-secondary">
                            <span class="btn-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="16" height="16" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"/><circle cx="12" cy="12" r="3"/></svg>
                            </span>
                            <span>Settings</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            {{-- Stat cards --}}
            <div class="row row-deck row-cards mb-3">
                @foreach($stats as $stat)
                    <div class="col-sm-6 col-lg-3">
                        <div class="card stat-card h-100">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <span class="stat-icon bg-{{ $stat['color'] }}-lt text-{{ $stat['color'] }}">
                                        <i class="{{ $stat['icon'] }}"></i>
                                    </span>
                                    @if($stat['change'] !== null)
                                        <span class="badge bg-{{ $stat['change_type'] === 'increase' ? 'success' : 'danger' }}-lt text-{{ $stat['change_type'] === 'increase' ? 'success' : 'danger' }}">
                                            {{ $stat['change'] }}
                                        </span>
                                    @endif
                                </div>
                                <div class="stat-label mb-1">{{ $stat['label'] }}</div>
                                <div class="stat-value mb-1">{{ $stat['value'] }}</div>
                                <div class="stat-sublabel">{{ $stat['sublabel'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row row-deck row-cards">
                {{-- Signups chart --}}
                <div class="col-lg-7">
                    <div class="card h-100">
                        <div class="card-header">
                            <div>
                                <h3 class="card-title">User Signups</h3>
                                <div class="text-secondary small">Daily registrations — last 14 days</div>
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div id="chart-signups"></div>
                        </div>
                    </div>
                </div>

                {{-- Recent activity --}}
                <div class="col-lg-5">
                    <div class="card h-100">
                        <div class="card-header">
                            <div>
                                <h3 class="card-title">Recent Registrations</h3>
                                <div class="text-secondary small">Latest users to join</div>
                            </div>
                        </div>
                        <div class="card-body py-2">
                            @forelse($recentUsers as $activity)
                                <div class="activity-item d-flex align-items-center gap-3">
                                    <div class="activity-avatar bg-{{ $activity['color'] }}">
                                        {{ $activity['initials'] ?: '?' }}
                                    </div>
                                    <div class="flex-fill min-width-0">
                                        <div class="activity-name text-truncate">
                                            {{ $activity['name'] }}
                                            @if($activity['trashed'])
                                                <span class="badge bg-danger-lt text-danger ms-1">Deleted</span>
                                            @elseif($activity['verified'])
                                                <span class="badge bg-success-lt text-success ms-1">Verified</span>
                                            @else
                                                <span class="badge bg-secondary-lt text-secondary ms-1">Unverified</span>
                                            @endif
                                        </div>
                                        <div class="activity-email text-truncate">{{ $activity['email'] }}</div>
                                    </div>
                                    <div class="activity-time">{{ $activity['time'] }}</div>
                                </div>
                            @empty
                                <div class="py-4 text-center text-secondary">
                                    No registrations yet.
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var chartEl = document.getElementById('chart-signups');
            if (!chartEl || typeof ApexCharts === 'undefined') return;

            var isDark = document.documentElement.getAttribute('data-bs-theme') === 'dark';

            var options = {
                chart: {
                    type: 'area',
                    height: 300,
                    toolbar: { show: false },
                    fontFamily: 'inherit',
                    foreColor: isDark ? 'rgba(255,255,255,0.65)' : 'rgba(0,0,0,0.55)',
                },
                series: [{
                    name: 'Signups',
                    data: @json($chartValues),
                }],
                xaxis: {
                    categories: @json($chartLabels),
                    axisBorder: { show: false },
                    axisTicks: { show: false },
                },
                yaxis: {
                    min: 0,
                    tickAmount: 3,
                    labels: {
                        formatter: function (value) { return Math.round(value); },
                    },
                },
                dataLabels: { enabled: false },
                stroke: { curve: 'smooth', width: 2.5 },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.4,
                        opacityTo: 0.05,
                    },
                },
                colors: [isDark ? '#4494f8' : '#206bc4'],
                grid: {
                    borderColor: isDark ? 'rgba(255,255,255,0.08)' : 'rgba(0,0,0,0.06)',
                    strokeDashArray: 4,
                },
                tooltip: { theme: isDark ? 'dark' : 'light' },
            };

            new ApexCharts(chartEl, options).render();
        });
    </script>
@endsection