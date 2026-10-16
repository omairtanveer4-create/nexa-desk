@extends('tablar::page')

@section('title', 'Settings')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Account</div>
                    <h2 class="page-title">Settings</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            @if(session('status') === 'password-updated')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <div class="d-flex">
                        <div><i class="ti ti-check-circle alert-icon me-2"></i></div>
                        <div>Your password has been changed.</div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row row-cards">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Change Password</h3>
                        </div>
                        <form action="{{ route('settings.password') }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Current password</label>
                                    <input type="password" name="current_password"
                                           class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                                           autocomplete="current-password">
                                    @error('current_password', 'updatePassword')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">New password</label>
                                    <input type="password" name="password"
                                           class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                                           autocomplete="new-password">
                                    @error('password', 'updatePassword')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-0">
                                    <label class="form-label">Confirm new password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                           autocomplete="new-password">
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">Update password</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card border-danger">
                        <div class="card-header">
                            <h3 class="card-title text-danger">Danger Zone</h3>
                        </div>
                        <form action="{{ route('settings.destroy') }}" method="POST"
                              onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.');">
                            @csrf
                            @method('DELETE')
                            <div class="card-body">
                                <p class="text-secondary">
                                    Deleting your account removes your personal data and signs you out
                                    permanently. This cannot be undone.
                                </p>
                                <label class="form-label">Confirm with your password</label>
                                <input type="password" name="password"
                                       class="form-control @error('password', 'deleteAccount') is-invalid @enderror"
                                       autocomplete="current-password">
                                @error('password', 'deleteAccount')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-danger">Delete account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection