@extends('backend.layouts.master')

@section('css')
@endsection

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Profile</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Profile
                        </li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->

    </div>
    <!--end::App Content Header-->

    <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->

            <div class="row justify-content-center">
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card card-info card-outline mb-4">
                        <div class="m-2">
                            <a class="btn btn-success" href="{{ route('rank.index') }}">Edit Profile</a>
                        </div>

                        <div class="card-header d-flex justify-content-center">
                            <div class="card-title text-info">User Information</div>
                        </div>

                        {{-- <div class="card-body">

                            <div class="d-flex align-items-start">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">

                                    <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                                    <button class="nav-link" id="v-pills-edit_profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-edit_profile" type="button" role="tab"
                                        aria-controls="v-pills-edit_profile" aria-selected="false">Edit Profile</button>
                                    <button class="nav-link" id="v-pills-password_change-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-password_change" type="button" role="tab"
                                        aria-controls="v-pills-password_change" aria-selected="false">Change
                                        Password</button>
                                </div>
                                <div class="tab-content" id="v-pills-tabContent">

                                    profile Table
                                    <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">
                                        <table class="table table-striped table-hover">
                                            <tr>
                                                <td>User Name </td>
                                                <td>{{ $user->name ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email </td>
                                                <td>{{ $user->email ?? '' }}</td>
                                            </tr>

                                            <tr>
                                                <td>Member Science </td>
                                                <td>{{ $user->created_at ? $user->created_at->format('d-m-Y ') : '' }}</td>
                                            </tr>
                                        </table>

                                    </div>

                                    Edit profile 
                                    <div class="tab-pane fade" id="v-pills-edit_profile" role="tabpanel"
                                        aria-labelledby="v-pills-edit_profile-tab">

                                        <form class="needs-validation" method="post" action="">
                                            @csrf
                                            @method('PUT')

                                            <div class="card-body">
                                                <div class="row g-3">

                                                    <div class="col-md-12">
                                                        <label for="name" class="form-label">User Name</label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $user->name ?? '' }}" id="name" name="name">
                                                        @error('name')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="email" class="form-label">User Email</label>
                                                        <input type="text" class="form-control" id="email"
                                                            value="{{ $user->email ?? '' }}" name="email" disabled>
                                                        @error('email')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>


                                                    <div class="text-end">
                                                        <button class="btn btn-info" type="submit">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    Password Change
                                    <div class="tab-pane fade" id="v-pills-password_change" role="tabpanel"
                                        aria-labelledby="v-pills-password_change-tab">
                                        <form class="needs-validation" method="post" action="">
                                            @csrf
                                            @method('PUT')
                                        
                                            <div class="card-body">
                                                <div class="row g-3">
                                        
                                                    <div class="col-md-12">
                                                        <label for="current_password" class="form-label">Current Password</label>
                                                        <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                                            id="current_password" name="current_password" required>
                                                        @error('current_password')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                        
                                                    <div class="col-md-12">
                                                        <label for="new_password" class="form-label">New Password</label>
                                                        <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                                            id="new_password" name="new_password" required>
                                                        @error('new_password')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                        
                                                    <div class="col-md-12">
                                                        <label for="new_password_confirmation" class="form-label">Confirm Password</label>
                                                        <input type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror"
                                                            id="new_password_confirmation" name="new_password_confirmation" required>
                                                        @error('new_password_confirmation')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                        
                                                    <div class="text-end">
                                                        <button class="btn btn-info" type="submit">Update Password</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        

                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="card-body">

                            <div class="d-flex align-items-start">
                                <!-- Navigation Pills -->
                                <div class="col-md-4 ">
                                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-profile" type="button" role="tab"
                                            aria-controls="v-pills-profile" aria-selected="true">Profile</button>
                                        <button class="nav-link" id="v-pills-edit_profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-edit_profile" type="button" role="tab"
                                            aria-controls="v-pills-edit_profile" aria-selected="false">Edit Profile</button>
                                        <button class="nav-link" id="v-pills-password_change-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-password_change" type="button" role="tab"
                                            aria-controls="v-pills-password_change" aria-selected="false">Change
                                            Password</button>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <!-- Tab Content -->
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <!-- Profile Tab -->
                                            <div class="tab-pane fade show active align-items-center" id="v-pills-profile"
                                                role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                <div class="col-md-12">
                                                    <table class="table table-success table-striped table-hover ">
                                                        <tr class="">
                                                            <td>User Name</td>
                                                            <td>{{ $user->name ?? '' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td>{{ $user->email ?? '' }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Member Since</td>
                                                            <td>{{ $user->created_at ? $user->created_at->format('d-m-Y') : '' }}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>

                                            <!-- Edit Profile Tab -->
                                            <div class="tab-pane fade" id="v-pills-edit_profile" role="tabpanel"
                                                aria-labelledby="v-pills-edit_profile-tab">
                                                <div class="col-md-12">
                                                <form method="POST" action="{{ route('profile.update', $user->id) }}"
                                                    class="needs-validation">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="card-body">
                                                        <div class="row g-3">
                                                            <div class="col-md-12">
                                                                <label for="name" class="form-label">User Name</label>
                                                                <input type="text"
                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                    id="name" name="name"
                                                                    value="{{ old('name', $user->name) }}" required>
                                                                @error('name')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="email" class="form-label">User Email</label>
                                                                <input type="email" class="form-control" id="email"
                                                                    value="{{ $user->email ?? '' }}" name="email"
                                                                    disabled>
                                                            </div>
                                                            <div class="text-end">
                                                                <button class="btn btn-info" type="submit">Update
                                                                    Profile</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            </div>

                                            <!-- Change Password Tab -->
                                            <div class="tab-pane fade" id="v-pills-password_change" role="tabpanel"
                                                aria-labelledby="v-pills-password_change-tab">
                                                <div class="col-md-12">

                                                    <form method="POST" action="{{ route('profile.changePassword') }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="current_password">Current Password</label>
                                                            <input type="password" class="form-control"
                                                                name="current_password" required>
                                                            @error('current_password')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
    
                                                        <div class="form-group">
                                                            <label for="new_password">New Password</label>
                                                            <input type="password" class="form-control" name="new_password"
                                                                required>
                                                            @error('new_password')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
    
                                                        <div class="form-group">
                                                            <label for="new_password_confirmation">Confirm New Password</label>
                                                            <input type="password" class="form-control"
                                                                name="new_password_confirmation" required>
                                                            @error('new_password_confirmation')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
    
                                                        <button type="submit" class="btn btn-primary">Change
                                                            Password</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div> <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection

@section('script')
@endsection
