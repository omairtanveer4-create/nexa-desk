@extends('tablar::page')

@section('title', 'Component Catalog')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">UI Kit</div>
                    <h2 class="page-title">Component Catalog</h2>
                    <div class="text-muted mt-1">
                        Every Tablar component with a live demo and copy-ready Blade source.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            @foreach ($groups as $group)
                @if (count($group['components']))
                    <div class="mb-4">
                        <div class="h3 mb-3">{{ $group['label'] }}</div>
                        <div class="row row-cards">
                            @foreach ($group['components'] as $entry)
                                <div class="col-sm-6 col-lg-3">
                                    <a href="{{ route('ui-kit.show', $entry['slug']) }}"
                                       class="card h-100 text-decoration-none component-card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="avatar avatar-lg bg-primary-lt text-primary">
                                                    <i class="{{ $entry['icon'] }} fs-2"></i>
                                                </span>
                                                <i class="ti ti-arrow-right text-muted"></i>
                                            </div>
                                            <div class="h4 mb-1">{{ $entry['title'] }}</div>
                                            <div class="text-muted small">{{ $entry['description'] }}</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection