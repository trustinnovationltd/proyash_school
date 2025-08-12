@extends('backend.layouts.master')
@section('title', __('messages.subject_list'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.subject_management'))

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">{{ __('messages.subject_list') }}</h3>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        <a href="{{ route('subjects.create') }}" type="button" class="btn btn-success btn-sm"
                            style="color: white">
                            {{ __('messages.add_subject') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>{{ __('messages.serial') }}</th>
                            <th>{{ __('messages.title') }}</th>
                            <th>{{ __('messages.code') }}</th>
                            <th>{{ __('messages.status') }}</th>
                            <th>{{ __('messages.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $item)
                            <tr class="align-middle">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->code ?? 'N/A' }}</td>
                                <td>
                                    {{ $item->status ? __('messages.active') : __('messages.inactive') }}
                                </td>

                                <td>
                                    <a class="btn btn-sm btn-info p-2" href="{{ route('subjects.edit', $item->id) }}"
                                        title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a class="btn btn-sm btn-danger p-2" href="#"
                                        onclick="confirmDelete(event, '{{ $item->id }}')" title="Delete"><i
                                            class="fa-solid fa-trash"></i></a>

                                    <form id="subject-delete-form-{{ $item->id }}"
                                        action="{{ route('subjects.destroy', $item->id) }}" method="POST"
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
                title: '{{ __("messages.are_you_sure") }}',
                text: "{{ __('messages.you_wont_be_able_to_revert_this') }}",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{ __("messages.yes_delete_it") }}'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('subject-delete-form-' + id).submit();
                }
            });
        }
    </script>
@endsection
