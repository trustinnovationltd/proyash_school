@extends('backend.layouts.master')
@section('title', __('messages.subject_setup'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.subject_setup_management'))

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">{{ __('messages.subject_setup_list') }}</h3>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        <a href="{{ route('subject_setup.create') }}" type="button" class="btn btn-success btn-sm"
                            style="color: white">
                            {{ __('messages.add_subject_setup') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>{{ __('messages.serial') }}</th>
                            <th>{{ __('messages.institute') }}</th>
                            <th>{{ __('messages.medium') }}</th>
                            <th>{{ __('messages.class') }}</th>
                            <th>{{ __('messages.department') }}</th>
                            <th>{{ __('messages.subject') }}</th>
                            <th>{{ __('messages.subject_type') }}</th>
                            <th>{{ __('messages.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjectSetups as $item)
                            <tr class="align-middle">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->institute->name ?? 'N/A'}}</td>
                                <td>{{ $item->medium->title ?? 'N/A' }}</td>
                                <td>{{ $item->class->title ?? 'N/A' }}</td>
                                <td>{{ $item->department->title  ?? 'N/A' }}</td>
                                <td>{{ $item->subject->title  ?? 'N/A' }}</td>
                                <td>{{ $item->subject_type ?? 'N/A' }}</td>


                                <td>
                                    <a class="btn btn-sm btn-info p-2" href="{{ route('subject_setup.edit', $item->id) }}"
                                        title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a class="btn btn-sm btn-danger p-2" href="#"
                                        onclick="confirmDelete(event, '{{ $item->id }}')" title="Delete"><i
                                            class="fa-solid fa-trash"></i></a>

                                    <form id="subject-delete-form-{{ $item->id }}"
                                        action="{{ route('subject_setup.destroy', $item->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
                    document.getElementById('subject-delete-form-' + id).submit();
                }
            });
        }
    </script>
@endsection
