{{-- Input Mask: phone, date and currency masks (iMAsk). --}}
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label">Phone (US)</label>
            <input type="text" id="demo-imask-phone" class="form-control" placeholder="(555) 000-0000">
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="text" id="demo-imask-date" class="form-control" placeholder="dd/mm/yyyy">
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label class="form-label">Money</label>
            <input type="text" id="demo-imask-money" class="form-control" placeholder="$ 0,000.00">
        </div>
    </div>
</div>

<p class="text-muted small">
    Requires <code>window.IMask</code> (already imported in <code>resources/js/app.js</code>).
</p>

@push('js')
    <script>
        window.IMask(document.getElementById('demo-imask-phone'), {
            mask: '(000) 000-0000',
        });

        window.IMask(document.getElementById('demo-imask-date'), {
            mask: Date,
            min: new Date(1970, 0, 1),
            max: new Date(2030, 11, 31),
            lazy: false,
            format: function (date) {
                var dd = String(date.getDate()).padStart(2, '0');
                var mm = String(date.getMonth() + 1).padStart(2, '0');
                return dd + '/' + mm + '/' + date.getFullYear();
            },
            parse: function (str) {
                var parts = str.split('/');
                return new Date(parts[2], parts[1] - 1, parts[0]);
            },
        });

        window.IMask(document.getElementById('demo-imask-money'), {
            mask: Number,
            thousandsSeparator: ',',
            scale: 2,
            radix: '.',
            padFractionalZeros: true,
            normalizeZeros: true,
            prefix: '$ ',
        });
    </script>
@endpush