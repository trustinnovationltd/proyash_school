@extends('backend.layouts.master')
@section('title', __('Student Attendence'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('Attendence'))

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">{{ __('Student Daily Attendence') }}</h3>
                    <button
                        class="accordion-button btn btn-outline-primary"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne">
                        Add Attendance
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <!-- Attendance Form Accordion -->
            <div class="accordion" id="attendanceAccordion">
                <div class="accordion-item">
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#attendanceAccordion">
                        <div class="accordion-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="year" class="form-label">Years</label>
                                    <select class="form-control" id="year" name="year" required>
                                        <option value="present">2025</option>
                                        <option value="absent">2024</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="studentName" class="form-label">Student Name</label>
                                    <input type="text" class="form-control" id="studentName" name="student_name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="date" name="date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Attendance Status</label>
                                    <select class="form-control" id="status" name="status" required>
                                        <option value="present">Present</option>
                                        <option value="absent">Absent</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Attendance List Table -->
            <div class="table-responsive mt-4">
                @include('backend.layouts.partials.yajra-data-table')
            </div>
            {{-- <div class="table-responsive mt-4">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('Student Name') }}</th>
                            <th>{{ __('Roll') }}</th>
                            <th>{{ __('Class') }}</th>
                            <th>{{ __('Section') }}</th>
                            <th>{{ __('Date') }}</th>
                            <th>{{ __('In Time') }}</th>
                            <th>{{ __('Out Time') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($attendances as $attendance)
                        <tr>
                            <td>{{ $attendance->student_name }}</td>
                            <td>{{ $attendance->student_roll }}</td>
                            <td>{{ $attendance->class->title }}</td>
                            <td>{{ $attendance->section->title ?? ''}}</td>
                            <td>{{ $attendance->created_at->format('Y-m-d') }}</td>
                            <td>{{ $attendance->in_time }}</td>
                            <td>{{ $attendance->out_time }}</td>
                            <td>
                                @if($attendance->status == 'present')
                                    <span class="badge bg-success">Present</span>
                                @elseif($attendance->status == 'absent')
                                    <span class="badge bg-danger">Absent</span>
                                @elseif($attendance->status == 'late')
                                    <span class="badge bg-warning">Late</span>
                                @else
                                    <span class="badge bg-info">Left Early</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('student-attendance.edit', $attendance->id) }}" class="btn btn-sm btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('student-attendance.destroy', $attendance->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center">{{ __('No attendance records found') }}</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>


            
            <!-- Pagination -->
            <div class="mt-4">
                {{ $attendances->links() }}
            </div> --}}
        </div>
    </div>
</div>
@endsection

@section('script')
{!! $dataTable->scripts() !!}

<script>
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
