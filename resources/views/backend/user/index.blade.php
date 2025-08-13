@extends('backend.layouts.master')

@section('css')
@endsection

@section('title', 'Admin List')
@section('main_menu', __('messages.home'))
@section('active_menu', 'Admin')

@section('content')

    <div class="row"> <!--begin::Row-->
        <div class="card">

            <div class="card-header d-flex justify-content-end">
                @if (Auth::guard('web')->user()->can('user.create'))
                    <a class="btn btn-success" href="{{ route('users.create') }}">Add User</a>
                @endif
            </div>
            <div class="card-body">
                {!! $dataTable->table([
                    'class' => 'table table-striped table-hover dt-responsive',
                    'width' => '100%',
                    'cellspacing' => '0',
                ]) !!}
            </div>
        </div>
    </div>

@section('script')
    {!! $dataTable->scripts() !!}
    <script>
        function confirmDelete(event, id) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('user-delete-form-' + id).submit();
                }
            });
        }
    </script>
@endsection
@endsection
