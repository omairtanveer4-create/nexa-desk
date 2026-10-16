{{-- Date Picker: single and range pickers powered by Litepicker. --}}
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Single date</label>
            <input type="text" id="demo-lp-single" class="form-control" placeholder="Pick a date…">
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Date range</label>
            <input type="text" id="demo-lp-range" class="form-control" placeholder="Pick a range…">
        </div>
    </div>
</div>

<p class="text-muted small">
    Requires <code>window.Litepicker</code> (already imported in <code>resources/js/app.js</code>).
</p>

@push('js')
    <script>
        new window.Litepicker({
            element: document.getElementById('demo-lp-single'),
            singleMode: true,
            dropdowns: { minDate: null, maxDate: null },
            buttonText: { 'prev': '<i class="ti ti-chevron-left"></i>', 'next': '<i class="ti ti-chevron-right"></i>' },
        });

        new window.Litepicker({
            element: document.getElementById('demo-lp-range'),
            singleMode: false,
            delimiter: ' → ',
            dropdowns: { minDate: null, maxDate: null },
            buttonText: { 'prev': '<i class="ti ti-chevron-left"></i>', 'next': '<i class="ti ti-chevron-right"></i>' },
        });
    </script>
@endpush