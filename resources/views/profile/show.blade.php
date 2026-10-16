@extends('tablar::page')

@section('title', 'Profile')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <div class="page-pretitle">Account</div>
                    <h2 class="page-title">Profile</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="container-xl">
            @if(session('status') === 'profile-updated')
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <div class="d-flex">
                        <div><i class="ti ti-check-circle alert-icon me-2"></i></div>
                        <div>Your profile has been updated.</div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row row-cards">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <span class="avatar avatar-xl avatar-rounded mx-auto mb-3" style="width: 96px; height: 96px; font-size: 2rem;">
                                {{ strtoupper(mb_substr($user->name, 0, 1)) }}
                            </span>
                            <h3 class="m-0 mb-1">{{ $user->name }}</h3>
                            <div class="text-secondary mb-3">{{ $user->email }}</div>
                            @if($user->email_verified_at)
                                <span class="badge bg-success-lt text-success">Email verified</span>
                            @else
                                <span class="badge bg-secondary-lt text-secondary">Email unverified</span>
                            @endif
                            <div class="text-secondary small mt-3">
                                Member since {{ $user->created_at?->format('F Y') ?? '—' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <form action="{{ route('profile.update') }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                           value="{{ old('name', $user->name) }}" placeholder="Your name">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" value="{{ $user->email }}" disabled>
                                    <div class="form-hint">Email changes are not supported yet.</div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection