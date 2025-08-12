@extends('backend.layouts.master')

@section('title', 'Assign Employee List')
@section('main_menu', 'Home')
@section('active_menu', 'Employee Management')

@section('content')
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">Assign Employee List</h3>
                    </div>
                    <div class="col-md-6" style="text-align: right">
                        <a href="{{ route('assign-employee.create') }}" class="btn btn-success btn-sm" style="color: white">
                            Add Assign Employee
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">

                {{-- Filter Form --}}
                <form method="GET" action="{{ route('assign-employee.index') }}" class="mb-3">
                    <div class="row">
                        <div class="col-md-2 mb-2">
                            <select name="employee_id" class="form-select">
                                <option value="">All Employees</option>
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}"
                                        {{ request('employee_id') == $employee->id ? 'selected' : '' }}>
                                        {{ $employee->name_english }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-2">
                            <select name="section_id" class="form-select">
                                <option value="">All Sections</option>
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}"
                                        {{ request('section_id') == $section->id ? 'selected' : '' }}>
                                        {{ $section->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 mb-2">
                            <select name="designation_id" class="form-select">
                                <option value="">All Designations</option>
                                @foreach ($designations as $designation)
                                    <option value="{{ $designation->id }}"
                                        {{ request('designation_id') == $designation->id ? 'selected' : '' }}>
                                        {{ $designation->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 mb-2">
                            <select name="status" class="form-select">
                                <option value="">All Status</option>
                                <option value="1" {{ request('status') === '1' ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ request('status') === '2' ? 'selected' : '' }}>Pending</option>
                                <option value="0" {{ request('status') === '0' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-2 mb-2">
                            <button type="submit" class="btn btn-primary">Filter</button>
                            <a href="{{ route('assign-employee.index') }}" class="btn btn-danger ">Cancel</a>
                        </div>
                    </div>
                </form>
                {{-- End Filter Form --}}

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Employee</th>
                            <th>Section</th>
                            <th>Designation</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assignEmployees as $key => $assign)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $assign->employee->name_english ?? '' }}</td>
                                <td>{{ $assign->section->name ?? '' }}</td>
                                <td>{{ $assign->designation->name ?? '' }}</td>
                                <td>{{ $assign->start_date }}</td>
                                <td>{{ $assign->end_date }}</td>
                                <td>
                                    @if ($assign->status == '1')
                                        <span class="badge bg-success">Active</span>
                                    @elseif($assign->status == '2')
                                        <span class="badge bg-warning">Pending</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('assign-employee.edit', $assign->id) }}"
                                        class="btn btn-sm btn-info">Edit</a>
                                    <form action="{{ route('assign-employee.destroy', $assign->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        @if ($assignEmployees->isEmpty())
                            <tr>
                                <td colspan="8" class="text-center">No data found.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
