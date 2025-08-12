@extends('backend.layouts.master')
@section('title', __('messages.holiday_settings_list'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.holiday_settings_management'))

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">{{ __('messages.holiday_settings_list') }}</h3>
                </div>
                <div class="col-md-6" style="text-align: right">
                    <a href="{{ route('holiday-settings.create') }}" type="button" class="btn btn-success btn-sm"
                        style="color: white">
                        {{ __('messages.add_holiday_setting') }}
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
                        <th>{{ __('messages.academic_year') }}</th>
                        <th>{{ __('messages.medium') }}</th>
                        <th>{{ __('messages.holiday_type') }}</th>
                        <th>{{ __('messages.start_date') }}</th>
                        <th>{{ __('messages.end_date') }}</th>
                        <th>{{ __('messages.status') }}</th>
                        <th>{{ __('messages.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($holidaySettings as $holidaySetting)
                        <tr class="align-middle">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $holidaySetting->institute->name }}</td>
                            <td>{{ $holidaySetting->academicYear->title }}</td>
                            <td>{{ $holidaySetting->medium->title }}</td>
                            <td>{{ $holidaySetting->holiday_type }}</td>
                            <td>{{ $holidaySetting->start_date }}</td>
                            <td>{{ $holidaySetting->end_date }}</td>
                            <td>{{ $holidaySetting->status ? __('messages.active') : __('messages.inactive') }}</td>
                            <td>
                                <a href="{{ route('holiday-settings.edit', $holidaySetting->id) }}"
                                    class="btn btn-sm btn-info p-2" title="Edit"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a class="btn btn-sm btn-danger p-2" href="#"
                                    onclick="confirmDelete(event, '{{ $holidaySetting->id }}')" title="Delete"><i
                                        class="fa-solid fa-trash"></i></a>

                                <form id="holiday-setting-delete-form-{{ $holidaySetting->id }}"
                                    action="{{ route('holiday-settings.destroy', $holidaySetting->id) }}" method="POST"
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
            text: '{{ __("messages.you_wont_be_able_to_revert_this") }}',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '{{ __("messages.yes_delete_it") }}',
            cancelButtonText: '{{ __("messages.cancel") }}'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('holiday-setting-delete-form-' + id).submit();
            }
        });
    }
</script>
@endsection