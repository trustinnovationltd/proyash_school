@extends('backend.layouts.master')
@section('title', __('messages.institute_details'))
@section('main_menu', __('messages.home'))
@section('active_menu', __('messages.institute_management'))

@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">{{ __('messages.institute_details') }}</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-sm btn-info p-1" style="width: 30px; height: 30px;"
                        href="{{ route('institutes.edit', $institute->id) }}" title="Edit"><i
                            class="fa-solid fa-pen-to-square"></i></a>
                    <a href="{{ route('institutes.index') }}" class="btn btn-success btn-sm" style="color: white">
                        {{ __('messages.back') }}
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body" id="pdf-content">
            <!-- Header Section for PDF -->
            <div class="row align-items-center mb-4">
                <!-- Logo Column -->
                <div class="col-md-4 text-center">
                    <img src="{{ asset('backend/uploads/settings/logos/' . ($institute->logo ?? 'default-logo.png')) }}"
                        alt="Logo" style="max-width: 100px; max-height: 100px;">
                </div>
                <!-- Details Column -->
                <div class="col-md-8">
                    <div class="row">
                        <h2 style="font-weight: bold; margin: 0;">{{ $institute->name }}</h2>
                        <p style="margin: 0;"><strong>{{ __('messages.website') }}:</strong>
                            {{ $institute->website ?? 'N/A' }}
                        </p>
                        <p style="margin: 0;"><strong>{{ __('messages.eiin_code') }}:</strong>
                            {{ $institute->eiin_code ?? 'N/A' }}
                        </p>
                    </div>
                </div>
            </div>
            <!-- Main Content -->
            <div class="row mt-2">
                <div class="col-md-6">
                    <p><strong>{{ __('messages.name') }}:</strong> {{ $institute->name }}</p>
                    <p><strong>{{ __('messages.branch_name') }}:</strong> {{ $institute->branch_name }}</p>
                    <p><strong>{{ __('messages.eiin_code') }}:</strong> {{ $institute->eiin_code ?? 'N/A' }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>{{ __('messages.phone') }}:</strong> {{ $institute->phone }}</p>
                    <p><strong>{{ __('messages.status') }}:</strong>
                        {{ $institute->status ? __('messages.active') : __('messages.inactive') }}
                    </p>
                </div>
            </div>
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
            filename: '{{ $institute->name }} details.pdf',
            margin: [5, 20, 10, 10], // Adjust margins for better placement
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