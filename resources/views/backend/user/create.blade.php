@extends('backend.layouts.master')

@section('css')
@endsection
@section('title', 'Admin Create')
@section('main_menu', __('messages.home'))
@section('active_menu', 'Admin')

@section('content')
    <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        @include('backend.layouts.partials.notifications')
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-end">
                            @if (Auth::guard('web')->user()->can('user.view'))
                                <a class="btn btn-success" href="{{ route('users.index') }}">User List</a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <form class="needs-validation" method="post"
                                                action="{{ route('users.store') }}">
                                                @csrf
                                                <div class="card-body">

                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="name"
                                                            class="form-label">Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text"
                                                                class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                                id="name" name="name">
                                                            @error('name')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="email"
                                                            class="form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="email"
                                                                class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                                                id="email" name="email">
                                                            @error('email')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="phone"
                                                            class="form-label">Phone</label>
                                                        <div class="col-sm-10">
                                                            <input type="text"
                                                                class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                                                id="phone" name="phone">
                                                            @error('phone')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="password"
                                                            class="form-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password"
                                                                class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                                id="password" name="password">
                                                            @error('password')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="password_confirmation"
                                                            class="form-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password"
                                                                class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                                                id="password_confirmation" name="password_confirmation"
                                                                placeholder="Confirm Password">
                                                            @error('password_confirmation')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label class="col-sm-2 col-form-label" for="role"
                                                            class="form-label">Role</label>
                                                        <div class="col-sm-10">
                                                            <select
                                                                class="form-select {{ $errors->has('role') ? 'is-invalid' : '' }}"
                                                                id="role" name="role">
                                                                <option selected disabled value="">Select one
                                                                </option>
                                                                @foreach ($roles as $role)
                                                                    <option value="{{ $role->id ?? '' }}">
                                                                        {{ $role->name ?? '' }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('role')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-end">
                                                    <button class="btn btn-info" type="submit">Save</button>
                                                </div>
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
@endsection
