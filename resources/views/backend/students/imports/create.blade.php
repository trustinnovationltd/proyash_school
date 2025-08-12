@extends('backend.layouts.master')

@section('title', __('messages.import_students'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.students_management'))

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('messages.import_students') }}</h3>
            </div>
            <!-- form start -->
            <form id="importForm" action="{{ route('students.imports') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <!-- File Upload -->
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="file">{{ __('messages.choose_file') }} <span>*</span></label>
                                <input type="file" name="file" class="form-control" required>
                                <span class="text-danger">{{ $errors->first('file') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success" id="submitBtn">{{ __('messages.import') }}</button>
                    <a href="{{ route('students.index') }}" class="btn btn-danger">{{ __('messages.cancel') }}</a>
                </div>
            </form>
            <!-- Loader -->
            <div id="loader" class="loader" style="display: none;">
                <div class="spinner-border text-primary" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                <span>{{ __('messages.loading') }}...</span>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById("importForm").addEventListener("submit", function() {
        // Show loader when form is submitted
        document.getElementById("loader").style.display = "block";
        document.getElementById("submitBtn").disabled = true; // Disable the submit button to prevent multiple submissions
    });
</script>

<style>
    /* Style for loader */
    #loader {
        text-align: center;
        margin-top: 20px;
    }
    .spinner-border {
        margin-right: 10px;
    }
</style>
@endsection
