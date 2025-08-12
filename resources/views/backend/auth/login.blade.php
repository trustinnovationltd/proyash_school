@extends('backend.layouts.auth')

@section('css')
@endsection

@section('content')
    <div class="login-box">
        <div class="login-logo"> <a href="#"><b>Admin</b> Login</a> </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <form action="{{ route('admin.login.store') }}" method="post">
                    @csrf
                    <div class="input-group"> <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-text"> <span class="bi bi-envelope"></span> </div>
                    </div>
                    @error('email')
                        <div class="invalid text-danger">{{ $message }}</div>
                    @enderror

                    <div class="input-group mt-3"> <input type="password" name="password" class="form-control"
                            placeholder="Password">
                        <div class="input-group-text"> <span class="bi bi-lock-fill"></span> </div>
                    </div>
                    @error('password')
                        <div class="invalid text-danger">{{ $message }}</div>
                    @enderror

                    <div class="row mt-3">
                        <div class="col-4">
                            {{-- <div class="form-check"> <input class="form-check-input" name="remember" type="checkbox" value="true" id="flexCheckDefault"> <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                </label> </div> --}}
                        </div>
                        <div class="col-4">
                            <div class="d-grid gap-2"> <button type="submit" class="btn btn-primary">Sign In</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
