{{-- Checks, Radios & Switches: checkboxes, radios and toggle switches. --}}
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Checkboxes</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="chk-1" checked>
                <label class="form-check-label" for="chk-1">Remember me</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="chk-2">
                <label class="form-check-label" for="chk-2">Subscribe to newsletter</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="chk-3" disabled>
                <label class="form-check-label" for="chk-3">Disabled option</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Inline</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inl-1">
                <label class="form-check-label" for="inl-1">One</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inl-2" checked>
                <label class="form-check-label" for="inl-2">Two</label>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Radios</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="plan" id="rad-1" checked>
                <label class="form-check-label" for="rad-1">Monthly — $9/mo</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="plan" id="rad-2">
                <label class="form-check-label" for="rad-2">Yearly — $79/yr</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Switches</label>
            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" id="sw-1" checked>
                <label class="form-check-label" for="sw-1">Email notifications</label>
            </div>
            <div class="form-check form-switch mb-1">
                <input class="form-check-input" type="checkbox" id="sw-2">
                <label class="form-check-label" for="sw-2">SMS notifications</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="sw-3" disabled>
                <label class="form-check-label" for="sw-3">Disabled switch</label>
            </div>
        </div>
    </div>
</div>