@extends('backend.layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card card-info card-outline mb-4">
                    <div class="card-header d-flex justify-content-center">
                        <div class="card-title text-info">User Information</div>
                    </div>

                    <div class="card-body">
                        <!-- Navigation Pills -->
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">Profile</button>
                            <button class="nav-link" id="v-pills-edit_profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-edit_profile" type="button" role="tab" aria-controls="v-pills-edit_profile" aria-selected="false">Edit Profile</button>
                            <button class="nav-link" id="v-pills-password_change-tab" data-bs-toggle="pill" data-bs-target="#v-pills-password_change" type="button" role="tab" aria-controls="v-pills-password_change" aria-selected="false">Change Password</button>
                        </div>

                        <!-- Tab Content -->
                        <div class="tab-content" id="v-pills-tabContent">
                            <!-- Profile Tab -->
                            <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <td>User Name</td>
                                        <td>{{ $user->name ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $user->email ?? '' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Member Since</td>
                                        <td>{{ $user->created_at ? $user->created_at->format('d-m-Y') : '' }}</td>
                                    </tr>
                                </table>
                            </div>

                            <!-- Edit Profile Tab -->
                            <div class="tab-pane fade" id="v-pills-edit_profile" role="tabpanel" aria-labelledby="v-pills-edit_profile-tab">
                                <form method="POST" action="{{ route('profile.update', $user->id) }}" class="needs-validation">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-md-12">
                                                <label for="name" class="form-label">User Name</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-12">
                                                <label for="email" class="form-label">User Email</label>
                                                <input type="email" class="form-control" id="email" value="{{ $user->email }}" name="email" disabled>
                                            </div>
                                            <div class="text-end">
                                                <button class="btn btn-info" type="submit">Update Profile</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Change Password Tab -->
                            <div class="tab-pane fade" id="v-pills-password_change" role="tabpanel" aria-labelledby="v-pills-password_change-tab">
                                <form method="POST" action="{{ route('profile.changePassword') }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="current_password">Current Password</label>
                                        <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required>
                                        @error('current_password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="new_password">New Password</label>
                                        <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required>
                                        @error('new_password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="new_password_confirmation">Confirm New Password</label>
                                        <input type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" name="new_password_confirmation" required>
                                        @error('new_password_confirmation')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="text-end">
                                        <button class="btn btn-info" type="submit">Update Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
