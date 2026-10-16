{{-- Vector Maps: interactive world map powered by jsVectorMap. --}}
<div class="card">
    <div class="card-header">
        <div class="card-title">World map</div>
        <div class="card-actions">
            <span class="text-muted small">Hover a country to see its name</span>
        </div>
    </div>
    <div class="card-body">
        <div id="demo-world-map" style="width: 100%; height: 380px;"></div>
    </div>
</div>

@push('js')
    <script>
        (function initWorldMap(attempt) {
            var lib = window.jsVectorMap;

            // The world map data registers itself asynchronously after the
            // main bundle loads; retry briefly until it is available.
            if (!lib || !lib.maps || !lib.maps.world) {
                if (attempt < 50) {
                    setTimeout(function () { initWorldMap(attempt + 1); }, 100);
                }
                return;
            }

            new lib({
                selector: '#demo-world-map',
                map: 'world',
                backgroundColor: 'transparent',
                zoomButtons: false,
                regionStyle: {
                    initial: {
                        fill: 'rgba(var(--tblr-body-color-rgb), .15)',
                        stroke: 'transparent',
                    },
                    hover: { fill: '#206bc4' },
                },
                visualizeData: {
                    labels: { render: false },
                },
            });
        })(0);
    </script>
@endpush