{{-- Input Groups: inputs with attached text, icons and buttons. --}}
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <div class="input-group">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" placeholder="username">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Search</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search users…">
                <button class="btn btn-primary" type="button"><i class="ti ti-search"></i></button>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Amount</label>
            <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="number" class="form-control" value="99.00">
                <span class="input-group-text">.00</span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">Icon prefix</label>
            <div class="input-group">
                <span class="input-group-text"><i class="ti ti-lock"></i></span>
                <input type="password" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Large group</label>
            <div class="input-group input-group-lg">
                <span class="input-group-text">nexa.desk/</span>
                <input type="text" class="form-control" placeholder="path">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Small group</label>
            <div class="input-group input-group-sm">
                <span class="input-group-text">#</span>
                <input type="text" class="form-control" placeholder="tag">
            </div>
        </div>
    </div>
</div>