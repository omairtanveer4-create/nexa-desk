{{-- Text Inputs: text, password, textarea, sizes and validation states. --}}
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Full name</label>
            <input type="text" class="form-control" placeholder="John Doe">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="john@example.com">
            <label class="form-label text-muted fst-italic mt-1">We'll never share your email.</label>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" value="secret123">
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">Small</label>
                <input type="text" class="form-control form-control-sm" placeholder="Small">
            </div>
            <div class="col">
                <label class="form-label">Default</label>
                <input type="text" class="form-control" placeholder="Default">
            </div>
            <div class="col">
                <label class="form-label">Large</label>
                <input type="text" class="form-control form-control-lg" placeholder="Large">
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Textarea</label>
            <textarea class="form-control" rows="4" placeholder="Write something…"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label is-valid">Valid state</label>
            <input type="text" class="form-control is-valid" value="Looks good!">
        </div>
        <div class="mb-3">
            <label class="form-label is-invalid">Invalid state</label>
            <input type="text" class="form-control is-invalid" value="Not good">
            <div class="invalid-feedback">This field is required.</div>
        </div>
        <div class="mb-3">
            <label class="form-label">Disabled</label>
            <input type="text" class="form-control" placeholder="Disabled" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Readonly</label>
            <input type="text" class="form-control" value="Read only value" readonly>
        </div>
    </div>
</div>

<div class="mb-3">
    <label class="form-label">Floating label</label>
    <div class="form-floating">
        <input type="text" class="form-control" placeholder="Floating label">
        <label>Floating label</label>
    </div>
</div>