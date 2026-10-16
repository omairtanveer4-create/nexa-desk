{{-- Star Rating: clickable star rating widgets (star-rating.js). --}}
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Rate your experience</label>
            <select class="star-rating" id="demo-star-rating">
                <option value="">Select…</option>
                <option value="1">1 star</option>
                <option value="2">2 stars</option>
                <option value="3">3 stars</option>
                <option value="4">4 stars</option>
                <option value="5">5 stars</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Read-only display (4 / 5)</label>
            <div class="star-rating readonly-stars"></div>
        </div>
    </div>
</div>

<p class="text-muted small">
    Requires <code>window.StarRating</code> (already imported in <code>resources/js/app.js</code>).
</p>

@push('js')
    <script>
        new window.StarRating(document.getElementById('demo-star-rating'), {
            tooltip: function (value) { return value + (value === 1 ? ' star' : ' stars'); },
        });

        var readonly = new window.StarRating(document.querySelector('.readonly-stars'), {
            initialRating: 4,
            readonly: true,
            onClick: null,
        });

        readonly.setRating(4);
    </script>
@endpush