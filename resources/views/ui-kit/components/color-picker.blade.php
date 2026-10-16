{{-- Color Picker: popover color pickers powered by Coloris. --}}
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Brand color</label>
            <input type="text" id="demo-coloris-1" class="form-control form-control-color-picker w-100" value="#206bc4">
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Accent color (with swatches)</label>
            <input type="text" id="demo-coloris-2" class="form-control form-control-color-picker w-100" value="#2f9e44">
        </div>
    </div>
</div>

<p class="text-muted small">
    Requires <code>window.Coloris</code> (already imported in <code>resources/js/app.js</code>).
</p>

@push('js')
    <script>
        window.Coloris({
            el: '#demo-coloris-1',
            alpha: false,
            format: 'hex',
        });

        window.Coloris({
            el: '#demo-coloris-2',
            alpha: false,
            format: 'hex',
            swatches: ['#206bc4', '#2f9e44', '#f59f00', '#d63939', '#7048e8', '#000000'],
        });
    </script>
@endpush