@extends('backend.layouts.master')
@section('title', __('messages.student_list'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.students_management'))

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">{{ __('messages.student_list') }}</h3>
                </div>
                <div class="col-md-6" style="text-align: right">
                    <a href="{{ route('students.create') }}" type="button" class="btn btn-success btn-sm"
                        style="color: white">
                        {{ __('messages.add_student') }}
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
                        <th>{{ __('messages.shift') }}</th>
                        <th>{{ __('messages.class') }}</th>
                        <th>{{ __('messages.name_english') }}</th>
                        <th>{{ __('messages.roll_number') }}</th>
                        <th>{{ __('messages.rfid_number') }}</th>
                        <th>{{ __('messages.gender') }}</th>
                        <th>{{ __('messages.actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr class="align-middle">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->institute->name }}</td>
                            <td>{{ $student->academic->title }}</td>
                            <td>{{ $student->medium->title }}</td>
                            <td>{{ $student->shift->title }}</td>
                            <td>{{ $student->class->title }}</td>
                            <td>{{ $student->name_english }}</td>
                            <td>{{ $student->roll_number }}</td>
                            <td>{{ $student->rfid_number }}</td>
                            <td>{{ ucfirst($student->gender) }}</td>

                            <td>
                                <a class="btn btn-sm btn-info p-2" href="{{ route('students.edit', $student->id) }}"
                                    title="Edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="btn btn-sm btn-danger p-2" href="#"
                                    onclick="confirmDelete(event, '{{ $student->id }}')" title="Delete"><i
                                        class="fa-solid fa-trash"></i>
                                </a>
                                <a class="btn btn-sm btn-primary p-2" href="{{ route('students.show', $student->id) }}"
                                    title="View">
                                    <i class="fa-solid fa-eye"></i>
                                </a>

                                <form id="student-delete-form-{{ $student->id }}"
                                    action="{{ route('students.destroy', $student->id) }}" method="POST"
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
                document.getElementById('student-delete-form-' + id).submit();
            }
        });
    }
</script>
@endsection