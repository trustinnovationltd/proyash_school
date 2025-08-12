@extends('backend.layouts.master')
@section('title', __('messages.general_settings_list'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.general_settings_management'))

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">{{ __('messages.general_settings_list') }}</h3>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        <a href="{{ route('general-settings.create') }}" type="button" class="btn btn-success btn-sm"
                            style="color: white">
                            {{ __('messages.add_general_setting') }}
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
                            <th>{{ __('messages.general_present_sms') }}</th>
                            <th>{{ __('messages.general_leave_sms') }}</th>
                            <th>{{ __('messages.general_absent_sms') }}</th>
                            <th>{{ __('messages.general_fee_collection_sms') }}</th>
                            <th>{{ __('messages.general_admission_greeting_sms') }}</th>
                            <th>{{ __('messages.general_birthday_sms') }}</th>
                            <th>{{ __('messages.general_student_id_automatic') }}</th>
                            <th>{{ __('messages.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($generalSettings as $item)
                            <tr class="align-middle">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->institute->name }}</td>
                                <td>{{ $item->present_sms ? __('messages.general_settings_on') : __('messages.general_settings_off') }}</td>
                                <td>{{ $item->leave_sms ? __('messages.general_settings_on') : __('messages.general_settings_off') }}</td>
                                <td>{{ $item->absent_sms ? __('messages.general_settings_on') : __('messages.general_settings_off') }}</td>
                                <td>{{ $item->fee_collection_sms ? __('messages.general_settings_on') : __('messages.general_settings_off') }}</td>
                                <td>{{ $item->admission_greeting_sms ? __('messages.general_settings_on') : __('messages.general_settings_off') }}</td>
                                <td>{{ $item->birthday_sms ? __('messages.general_settings_on') : __('messages.general_settings_off') }}</td>
                                <td>{{ $item->student_id_automatic ? __('messages.general_settings_on') : __('messages.general_settings_off') }}</td>
                                <td>
                                    <a class="btn btn-sm btn-info p-2" href="{{ route('general-settings.edit', $item->id) }}"
                                        title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a class="btn btn-sm btn-danger p-2" href="#"
                                        onclick="confirmDelete(event, '{{ $item->id }}')" title="Delete"><i
                                            class="fa-solid fa-trash"></i></a>

                                    <form id="general-setting-delete-form-{{ $item->id }}"
                                        action="{{ route('general-settings.destroy', $item->id) }}" method="POST"
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
                    document.getElementById('general-setting-delete-form-' + id).submit();
                }
            });
        }
    </script>
@endsection
