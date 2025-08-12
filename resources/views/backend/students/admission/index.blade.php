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
                    <h3 class="card-title">Admission Student List</h3>
                </div>
                <div class="col-md-6" style="text-align: right">
                    <a href="{{ route('admin.admission.students.create') }}" type="button" class="btn btn-success btn-sm"
                        style="color: white">
                        Add New Student
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @include('backend.layouts.partials.yajra-data-table')
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