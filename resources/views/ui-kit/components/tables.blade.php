{{-- Tables: data tables with stripes, hover states and statuses. --}}
<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table table-striped table-hover">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Status</th>
                    <th>Role</th>
                    <th>Progress</th>
                    <th class="w-1"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <span class="avatar me-2">J</span>
                            <div>
                                <div class="text-strong">John Doe</div>
                                <div class="text-muted small">john@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td><span class="badge bg-success-lt text-success">Active</span></td>
                    <td>Admin</td>
                    <td>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-success" style="width: 78%" role="progressbar"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-sm btn-ghost-primary">Manage</button></td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <span class="avatar me-2">M</span>
                            <div>
                                <div class="text-strong">Mary Smith</div>
                                <div class="text-muted small">mary@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td><span class="badge bg-warning-lt text-warning">Pending</span></td>
                    <td>Editor</td>
                    <td>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-warning" style="width: 42%" role="progressbar"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-sm btn-ghost-primary">Manage</button></td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <span class="avatar me-2">K</span>
                            <div>
                                <div class="text-strong">Kate Wilson</div>
                                <div class="text-muted small">kate@example.com</div>
                            </div>
                        </div>
                    </td>
                    <td><span class="badge bg-danger-lt text-danger">Blocked</span></td>
                    <td>Viewer</td>
                    <td>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-danger" style="width: 12%" role="progressbar"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-sm btn-ghost-primary">Manage</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>