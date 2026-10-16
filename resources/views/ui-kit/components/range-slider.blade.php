{{-- Range Slider: single and double-handle value sliders (noUiSlider). --}}
<div class="row">
    <div class="col-md-6">
        <div class="mb-4">
            <label class="form-label">Single value: <span id="demo-slider-single-val" class="text-primary fw-bold">40</span></label>
            <div id="demo-slider-single"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-4">
            <label class="form-label">
                Range: <span id="demo-slider-range-val" class="text-primary fw-bold">20 – 60</span>
            </label>
            <div id="demo-slider-range"></div>
        </div>
    </div>
</div>

<p class="text-muted small">
    Requires <code>window.nouislider</code> (already imported in <code>resources/js/app.js</code>).
</p>

@push('js')
    <script>
        var single = document.getElementById('demo-slider-single');
        var singleVal = document.getElementById('demo-slider-single-val');

        window.nouislider.create(single, {
            start: [40],
            connect: [true, false],
            range: { min: 0, max: 100 },
            step: 5,
        });

        single.noUiSlider.on('update', function (values) {
            singleVal.textContent = Math.round(values[0]);
        });

        var range = document.getElementById('demo-slider-range');
        var rangeVal = document.getElementById('demo-slider-range-val');

        window.nouislider.create(range, {
            start: [20, 60],
            connect: [false, true, false],
            range: { min: 0, max: 100 },
            step: 10,
        });

        range.noUiSlider.on('update', function (values) {
            rangeVal.textContent = Math.round(values[0]) + ' – ' + Math.round(values[1]);
        });
    </script>
@endpush