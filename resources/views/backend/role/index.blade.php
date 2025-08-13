@extends('backend.layouts.master')

@section('css')
@endsection
@section('title', 'Role Edit')
@section('main_menu', __('messages.home'))
@section('active_menu', 'Role')

@section('content')
    <div class="row"> <!--begin::Row-->
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                @if (Auth::guard('web')->user()->can('role.create'))
                    <a class="btn btn-success" href="{{ route('role.create') }}">Add Role</a>
                @endif
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Role</th>
                            <th>Permission</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                            <tr class="align-middle">
                                <td> {{ $loop->iteration }}</td>
                                <td>{{ $role->name ?? '' }}</td>
                                <td>
                                    @foreach ($role->permissions as $permission)
                                        <span class="badge rounded-pill bg-info text-dark me-1">
                                            {{ $permission->name }}
                                        </span>
                                    @endforeach
                                </td>
                                <td>
                                    <a class="btn btn-info p-2" title="edit" href="{{ route('role.edit', $role->id) }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a>


                                    <a class="btn btn-danger p-2" title="delete" href="#"
                                        onclick="confirmDelete(event, {{ $role->id }})">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>

                                    <form id="rank-delete-form-{{ $role->id }}"
                                        action="{{ route('role.destroy', $role->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div> <!--end::Container-->
@endsection

@section('script')
    <script>
        let table = new DataTable('#myTable', {
            responsive: true
        });

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
                    document.getElementById('rank-delete-form-' + id).submit();
                }
            });
        }
    </script>
@endsection
