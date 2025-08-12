@extends('backend.layouts.master')
@section('title', __('messages.student_details'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.students_management'))

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">{{ __('messages.student_details') }}</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-sm btn-info p-1" style="width: 30px; height: 30px;"
                        href="{{ route('students.edit', $student->id) }}" title="Edit"><i
                            class="fa-solid fa-pen-to-square"></i></a>
                    <a href="{{ route('students.index') }}" class="btn btn-success btn-sm" style="color: white">
                        {{ __('messages.back') }}
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body" id="pdf-content">
            <!-- Student Details Form -->
            <style>
                .bordered {
                    border: 1px solid #dee2e6;
                    padding: 10px;
                }
            </style>

            <form>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="mb-4 col-md-2 bordered d-flex justify-content-center align-items-center"
                            style="width: 120px; height: 120px; border: 1px solid #dee2e6; padding: 10px; border-radius: 4px;">
                            <!-- Display the student image with border and size -->
                            <img src="{{ asset('/assets/backend/images/students/' . ($student->image ?? 'default-image.png')) }}"
                                alt="Student Image" style="max-width: 100px; max-height: 100px; border-radius: 4px;">
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.roll_number') }}:</strong> {{ $student->roll_number }}
                    </div>
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.academic_year') }}:</strong> {{ $student->academic->title }}
                    </div>
                    <div class="col-md-2 bordered">
                        <strong>{{ __('messages.medium') }}:</strong> {{ $student->medium->title }}
                    </div>
                    <div class="col-md-2 bordered">
                        <strong>{{ __('messages.shift') }}:</strong> {{ $student->shift->title }}
                    </div>
                    <div class="col-md-2 bordered">
                        <strong>{{ __('messages.class') }}:</strong> {{ $student->class->title }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 bordered">
                        <strong>{{ __('messages.name') }}:</strong> {{ $student->name_english }}
                    </div>
                    <div class="col-md-6 bordered">
                        <strong>{{ __('messages.name') }}:</strong> {{ $student->name_bangla }}
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col-md-4 bordered">
                        <strong>{{ __('messages.student_category_id') }}:</strong>
                        {{ $student->student_category_id ?? 'N/A' }}
                    </div>
                    <div class="col-md-4 bordered">
                        <strong>{{ __('messages.roll_number') }}:</strong> {{ $student->roll_number ?? 'N/A' }}
                    </div>
                    <div class="col-md-4 bordered">
                        <strong>{{ __('messages.rfid_number') }}:</strong> {{ $student->rfid_number ?? 'N/A' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.gender') }}:</strong> {{ $student->gender ?? 'N/A' }}
                    </div>
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.date_of_birth') }}:</strong>
                        {{ \Carbon\Carbon::parse($student->date_of_birth)->format('d-m-Y') }}
                    </div>
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.blood_group') }}:</strong> {{ $student->blood_group ?? 'N/A' }}
                    </div>
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.religion') }}:</strong> {{ $student->religion ?? 'N/A' }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 bordered">
                        <strong>{{ __('messages.nid') }}:</strong> {{ $student->nid }}
                    </div>
                    <div class="col-md-6 bordered">
                        <strong>{{ __('messages.birth_certificate_no') }}:</strong>
                        {{ $student->birth_certificate_no }}
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 bordered">
                        <strong>{{ __('messages.present_address') }}:</strong> {{ $student->present_address }}
                    </div>
                    <div class="col-md-6 bordered">
                        <strong>{{ __('messages.permanent_address') }}:</strong> {{ $student->permanent_address }}
                    </div>
                </div>

                <!-- Father Information (Grouped into 1 Row) -->
                <div class="row mb-3">
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.fathers_name') }}:</strong> {{ $student->fathers_name }}
                    </div>
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.fathers_phone') }}:</strong> {{ $student->fathers_phone }}
                    </div>
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.fathers_email') }}:</strong> {{ $student->fathers_email }}
                    </div>
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.fathers_profession') }}:</strong> {{ $student->fathers_profession }}
                    </div>
                </div>

                <!-- Mother Information (Grouped into 1 Row) -->
                <div class="row mb-3">
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.mothers_name') }}:</strong> {{ $student->mothers_name }}
                    </div>
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.mothers_phone') }}:</strong> {{ $student->mothers_phone }}
                    </div>
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.mothers_email') }}:</strong> {{ $student->mothers_email }}
                    </div>
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.mothers_profession') }}:</strong> {{ $student->mothers_profession }}
                    </div>
                </div>

                <!-- Guardian Information (Grouped into 1 Row) -->
                <div class="row mb-3">
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.guardian_name') }}:</strong> {{ $student->guardian_name }}
                    </div>
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.guardian_phone') }}:</strong> {{ $student->guardian_phone }}
                    </div>
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.guardian_email') }}:</strong>
                        {{ $student->guardian_email ?? 'N/A' }}
                    </div>
                    <div class="col-md-3 bordered">
                        <strong>{{ __('messages.guardian_address') }}:</strong>
                        {{ $student->guardian_address ?? 'N/A' }}
                    </div>
                </div>

                <!-- <div class="row mb-3">
                        <div class="col-md-12 bordered">
                            <strong>{{ __('messages.status') }}:</strong>
                            {{ $student->status ? __('messages.active') : __('messages.inactive') }}
                        </div>
                    </div> -->
        </div>
        </form>



    </div>
</div>
<div class="col-12 text-center mt-2">
    <button class="btn btn-sm btn-primary p-2" id="download-pdf">
        <i class="fa-solid fa-file-pdf"></i> {{ __('messages.download') }}
    </button>
</div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<script>
    document.getElementById('download-pdf').addEventListener('click', function() {
        const element = document.getElementById('pdf-content');
        const options = {
            filename: '{{ $student->name_english }} Instirute Details.pdf',
            margin: [20, 20, 10, 10], // Adjust margins for better placement
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 3,
                useCORS: true
            },
            jsPDF: {
                unit: 'mm',
                format: 'a4',
                orientation: 'portrait'
            }
        };
        html2pdf().set(options).from(element).save();
    });
</script>
@endsection