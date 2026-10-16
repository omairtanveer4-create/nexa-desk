{{-- Selects: native select elements with sizes and multiple. --}}
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Role</label>
            <select class="form-select">
                <option value="">Choose…</option>
                <option>Administrator</option>
                <option>Editor</option>
                <option>Viewer</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Small</label>
            <select class="form-select form-select-sm">
                <option>Small select</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Large</label>
            <select class="form-select form-select-lg">
                <option>Large select</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Disabled</label>
            <select class="form-select" disabled>
                <option>Not available</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Multiple (Ctrl/Cmd + click)</label>
            <select class="form-select" multiple size="4">
                <option>React</option>
                <option selected>Vue</option>
                <option>Angular</option>
                <option selected>Svelte</option>
                <option>Livewire</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Invalid state</label>
            <select class="form-select is-invalid">
                <option value="">Choose…</option>
                <option>One</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
        </div>
    </div>
</div>