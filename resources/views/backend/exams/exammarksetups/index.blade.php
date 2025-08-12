@extends('backend.layouts.master')

@section('title', __('messages.exam_marks_setup_list'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.exam_marks_setup_management'))

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">{{ __('messages.exam_marks_setup_list') }}</h3>
                </div>
                <div class="col-md-6" style="text-align: right">
                    <a href="{{ route('exam-marks-setups.create') }}" type="button" class="btn btn-success btn-sm"
                        style="color: white">
                        {{ __('messages.add_exam_marks_setup') }}
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="examMarksTable">
                <thead>
                    <tr>
                        <th>{{ __('messages.serial') }}</th>
                        <th>{{ __('messages.institute') }}</th>
                        <th>{{ __('messages.academic_year') }}</th>
                        <th>{{ __('messages.class') }}</th>
                        <th>{{ __('messages.subject') }}</th>
                        <th>{{ __('messages.total_mark') }}</th>
                        <th>{{ __('messages.status') }}</th>
                        <th>{{ __('messages.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($examMarksSetups as $item)
                    <tr class="align-middle">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->institute->name}}</td>
                        <td>{{ $item->academicYear->title}}</td>
                        <td>{{ $item->classes->title}}</td>
                        <td>{{ $item->subject->title}}</td>
                        <td>{{ $item->total_mark }}</td>
                        <td>
                            {{ $item->status ? __('messages.active') : __('messages.inactive') }}
                        </td>
                        <td>
                            <a class="btn btn-sm btn-info p-2" href="{{ route('exam-marks-setups.edit', $item->id) }}"
                                title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="btn btn-sm btn-danger p-2" href="#"
                                onclick="confirmDelete(event, '{{ $item->id }}')" title="Delete"><i
                                    class="fa-solid fa-trash"></i></a>

                            <form id="exam-marks-setup-delete-form-{{ $item->id }}"
                                action="{{ route('exam-marks-setups.destroy', $item->id) }}" method="POST"
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
    let table = new DataTable('#examMarksTable', {
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
                document.getElementById('exam-marks-setup-delete-form-' + id).submit();
            }
        });
    }
</script>
@endsection
