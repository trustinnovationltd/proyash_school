@extends('backend.layouts.master')
@section('title', __('messages.event_settings_list'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.event_settings_management'))

@section('content')
<div class="row">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">{{ __('messages.event_settings_list') }}</h3>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        <a href="{{ route('event-settings.create') }}" class="btn btn-success btn-sm" style="color: white">
                            {{ __('messages.add_event_setting') }}
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
                            <th>{{ __('messages.start_date') }}</th>
                            <th>{{ __('messages.end_date') }}</th>
                            <th>{{ __('messages.class_status') }}</th>
                            <th>{{ __('messages.status') }}</th>
                            <th>{{ __('messages.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($eventSettings as $event)
                            <tr class="align-middle">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $event->title }}</td>
                                <td>{{ $event->start_date }}</td>
                                <td>{{ $event->end_date }}</td>
                                <td>{{ $event->class_status ? __('messages.event_settings_on') : __('messages.event_settings_off') }}</td>
                                <td>{{ $event->status ? __('messages.active') : __('messages.inactive') }}</td>
                                <td>
                                    <a href="{{ route('event-settings.edit', $event->id) }}" class="btn btn-sm btn-info p-2" title="{{ __('messages.edit') }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger p-2" onclick="confirmDelete(event, '{{ $event->id }}')" title="{{ __('messages.delete') }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>

                                    <form id="event-setting-delete-form-{{ $event->id }}" action="{{ route('event-settings.destroy', $event->id) }}" method="POST" style="display: none;">
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
            confirmButtonText: '{{ __("messages.yes_delete_it") }}',
            cancelButtonText: '{{ __("messages.cancel") }}'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('event-setting-delete-form-' + id).submit();
            }
        });
    }
</script>
@endsection
