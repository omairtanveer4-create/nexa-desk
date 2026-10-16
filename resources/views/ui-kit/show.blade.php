@extends('tablar::page')

@section('title', $component['title'])

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        <a href="{{ route('ui-kit.index') }}" class="text-decoration-none text-muted">UI Kit</a>
                        / {{ \App\Http\Controllers\UiKitController::CATEGORIES[$component['category']] }}
                    </div>
                    <h2 class="page-title">{{ $component['title'] }}</h2>
                    <div class="text-muted mt-1">{{ $component['description'] }}</div>
                </div>
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('ui-kit.index') }}" class="btn btn-outline-secondary">
                            <span class="btn-icon"><i class="ti ti-layout-grid"></i></span>
                            <span>All components</span>
                        </a>
                        @if ($prev)
                            <a href="{{ route('ui-kit.show', $prev['slug']) }}" class="btn btn-outline-primary">
                                <span class="btn-icon"><i class="ti ti-chevron-left"></i></span>
                                <span>{{ $prev['title'] }}</span>
                            </a>
                        @endif
                        @if ($next)
                            <a href="{{ route('ui-kit.show', $next['slug']) }}" class="btn btn-outline-primary">
                                <span>{{ $next['title'] }}</span>
                                <span class="btn-icon"><i class="ti ti-chevron-right"></i></span>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            {{-- Live demo of the component --}}
            <div class="card mb-3">
                <div class="card-header">
                    <div class="card-title">Live demo</div>
                    <div class="card-actions">
                        <span class="badge bg-green-lt text-green">Fully interactive</span>
                    </div>
                </div>
                <div class="card-body">
                    @include('ui-kit.components.' . $component['slug'])
                </div>
            </div>

            {{-- Copyable Blade source --}}
            <div class="card mb-3">
                <div class="card-header">
                    <div class="card-title">Blade source</div>
                    <div class="card-actions">
                        <button type="button" class="btn btn-sm btn-outline-primary" id="copy-source-btn">
                            <span class="btn-icon"><i class="ti ti-copy"></i></span>
                            <span>Copy</span>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0">
                    <pre class="mb-0 p-3" style="max-height: 32rem; overflow: auto;"><code id="component-source">{{ $source }}</code></pre>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        document.getElementById('copy-source-btn')?.addEventListener('click', function () {
            var code = document.getElementById('component-source');
            navigator.clipboard.writeText(code.textContent).then(function () {
                var btn = document.getElementById('copy-source-btn');
                btn.innerHTML = '<span class="btn-icon"><i class="ti ti-check"></i></span><span>Copied!</span>';
                setTimeout(function () {
                    btn.innerHTML = '<span class="btn-icon"><i class="ti ti-copy"></i></span><span>Copy</span>';
                }, 1500);
            });
        });
    </script>
@endpush