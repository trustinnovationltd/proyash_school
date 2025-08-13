@extends('backend.layouts.master')

@section('css')
<style>
    /* Professional Educational Institution Color Scheme */
    :root {
        --sms-primary: #60636c;    /* Slate gray - primary color */
        --sms-primary-light: #8d909a; /* Light slate - lighter shade */
        --sms-secondary: #4f6f8f;  /* Steel blue - secondary color */
        --sms-accent: #426b59;     /* Deep teal - accent color */
        --sms-light: #f5f7fa;      /* Off-white - background */
        --sms-dark: #2d3034;       /* Darker slate - text */
        --sms-gray: #9ca3af;       /* Medium gray - subtle text */
        --sms-border: #e2e8f0;     /* Light gray - borders */
    }

    /* Card Styling */
    .role-create-card {
        border: none;
        border-radius: 0.5rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
    }

    .role-card-header {
        background-color: var(--sms-primary);
        color: white;
        border-bottom: none;
        border-radius: 0.5rem 0.5rem 0 0 !important;
        padding: 1.5rem;
    }

    /* Section Styling */
    .section-title {
        color: var(--sms-primary);
        border-bottom: 2px solid var(--sms-border);
        padding-bottom: 0.75rem;
        margin-bottom: 1.5rem;
        margin-top: 2rem;
        font-weight: 600;
    }

    /* Role Name Section */
    .role-info-section {
        background-color: var(--sms-light);
        border-radius: 0.5rem;
        padding: 1.5rem;
        margin-bottom: 2rem;
    }

    /* Permission Group Styling */
    .role-permission-group-header {
        background-color: rgba(96, 99, 108, 0.1);
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
    }

    /* Permission Item Styling */
    .role-permission-item {
        border: 1px solid var(--sms-border);
        padding: 0.75rem 1rem;
        border-radius: 0.5rem;
        transition: all 0.2s ease-in-out;
        background-color: white;
    }

    .role-permission-item:hover {
        border-color: var(--sms-secondary);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    /* Button Styling */
    .btn-save {
        background-color: var(--sms-accent);
        color: white;
        border: none;
        padding: 0.75rem 2rem;
        transition: all 0.2s ease-in-out;
    }

    .btn-save:hover {
        background-color: #345446; /* Darker teal */
        color: white;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    }

    /* Select All Section */
    .role-select-all-section {
        background-color: rgba(66, 107, 89, 0.1);
        padding: 1rem 1.5rem;
        border-radius: 0.5rem;
        margin-bottom: 1.5rem;
        border-left: 4px solid var(--sms-accent);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .card-body {
            padding: 1rem !important;
        }
    }
</style>
@endsection
@section('title', 'Role Create')
@section('main_menu', __('messages.home'))
@section('active_menu', 'Role')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card role-create-card shadow-lg">
                <div class="card-header role-card-header">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-user-shield fs-3 me-3"></i>
                        <div>
                            <h3 class="mb-0 fw-bold">Create New Role</h3>
                            <p class="mb-0 mt-2 opacity-75">Define a new role with specific permissions</p>
                        </div>
                    </div>
                </div>
                
                <div class="card-body p-4">
                    <form class="needs-validation" method="post" action="{{ route('role.store') }}" novalidate>
                        @csrf

                        <!-- Role Name Section -->
                        <div class="role-info-section">
                            <h5 class="section-title">
                                <i class="fas fa-tag me-2"></i>Role Information
                            </h5>
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <label class="form-label fw-bold" for="name">
                                        <i class="fas fa-signature me-1 text-primary"></i>Role Name
                                        <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" 
                                           required 
                                           autofocus
                                           class="form-control form-control-lg {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                           value="{{ old('name') }}" 
                                           id="name" 
                                           name="name"
                                           placeholder="Enter role name">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Permissions Section -->
                        <div class="role-permissions-section">
                            <h5 class="section-title">
                                <i class="fas fa-shield-alt me-2"></i>Permission Management
                            </h5>
                            
                            <!-- Select All Section -->
                            <div class="role-select-all-section">
                                <div class="form-check">
                                    <input type="checkbox" 
                                           class="form-check-input" 
                                           id="checkPermissionAll" 
                                           value="1">
                                    <label class="form-check-label fw-bold fs-5" for="checkPermissionAll">
                                        <i class="fas fa-check-double me-2"></i>Select All Permissions
                                    </label>
                                </div>
                            </div>

                            @php $i = 1; @endphp
                            @foreach ($permission_groups as $group)
                                <div class="mb-4">
                                    @php
                                        $permissions = App\Models\User::getpermissionsByGroupName($group->name);
                                        $j = 1;
                                    @endphp

                                    <!-- Group Header -->
                                    <div class="role-permission-group-header">
                                        <div class="row align-items-center">
                                            <div class="col-md-8">
                                                <div class="form-check mb-0">
                                                    <input type="checkbox" 
                                                           class="form-check-input" 
                                                           id="{{ $i }}Management"
                                                           value="{{ $group->name }}"
                                                           onclick="checkPermissionByGroup('role-{{ $i }}-management-checkbox', this)">
                                                    <label class="form-check-label fw-bold fs-6" for="{{ $i }}Management">
                                                        <i class="fas fa-layer-group me-2"></i>
                                                        {{ ucwords(str_replace('_', ' ', $group->name)) }}
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-end">
                                                <span class="badge bg-light text-dark rounded-pill">
                                                    <i class="fas fa-key me-1"></i>
                                                    {{ count($permissions) }} permissions
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Group Permissions -->
                                    <div class="row g-3 role-{{ $i }}-management-checkbox">
                                        @foreach ($permissions as $permission)
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="role-permission-item h-100">
                                                    <div class="form-check mb-0">
                                                        <input type="checkbox" 
                                                               class="form-check-input"
                                                               onclick="checkSinglePermission('role-{{ $i }}-management-checkbox', '{{ $i }}Management', {{ count($permissions) }})"
                                                               name="permissions[]"
                                                               id="checkPermission{{ $permission->id }}"
                                                               value="{{ $permission->name }}">
                                                        <label class="form-check-label text-truncate" 
                                                               for="checkPermission{{ $permission->id }}"
                                                               title="{{ ucwords(str_replace(['_', '-'], ' ', $permission->name)) }}">
                                                            <i class="fas fa-key me-1 text-muted small"></i>
                                                            {{ ucwords(str_replace(['_', '-'], ' ', $permission->name)) }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            @php $j++; @endphp
                                        @endforeach
                                    </div>
                                </div>
                                @php $i++; @endphp
                            @endforeach
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 mt-4">
                            <a href="{{ route('role.index') }}" class="btn btn-outline-secondary btn-lg">
                                <i class="fas fa-arrow-left me-2"></i>Back to Roles
                            </a>
                            <button class="btn btn-save btn-lg" type="submit">
                                <i class="fas fa-save me-2"></i>Create Role
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        // Initialize Bootstrap 5 tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
        
        // Add Bootstrap 5 form validation
        const forms = document.querySelectorAll('.needs-validation');
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    // Add loading state to form submission
                    const submitBtn = form.querySelector('button[type="submit"]');
                    if (submitBtn) {
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Creating...';
                    }
                }
                form.classList.add('was-validated');
            }, false);
        });
        
        // Add visual feedback for permission selection with Bootstrap 5 utilities
        $('input[type="checkbox"]').on('change', function() {
            updatePermissionStats();
            
            // Add visual feedback using Bootstrap 5 classes
            const parentItem = $(this).closest('.role-permission-item');
            if ($(this).is(':checked')) {
                parentItem.addClass('border-success bg-light');
            } else {
                parentItem.removeClass('border-success bg-light');
            }
        });
        
        // Initialize permission stats
        updatePermissionStats();
        
        // Add search functionality for permissions
        addPermissionSearch();
    });

    /**
     * Update permission statistics display with Bootstrap 5 styling
     */
    function updatePermissionStats() {
        const totalPermissions = {{ count($all_permissions) }};
        const selectedPermissions = $('input[name="permissions[]"]:checked').length;
        const percentage = Math.round((selectedPermissions / totalPermissions) * 100);
        
        // Update stats in header or create dynamic display
        updateStatsDisplay(selectedPermissions, totalPermissions, percentage);
    }
    
    /**
     * Update or create stats display
     */
    function updateStatsDisplay(selected, total, percentage) {
        let statsDisplay = $('#dynamic-stats');
        if (statsDisplay.length === 0) {
            // Create dynamic stats display
            const statsHtml = `
                <div id="dynamic-stats" class="alert alert-info d-flex align-items-center mb-3" role="alert">
                    <i class="fas fa-chart-pie me-2"></i>
                    <div>
                        <strong>Selected:</strong> <span id="selected-count">${selected}</span> / <span id="total-count">${total}</span> permissions 
                        (<span id="percentage">${percentage}%</span>)
                    </div>
                </div>
            `;
            $('.role-select-all-section').after(statsHtml);
        } else {
            // Update existing display
            $('#selected-count').text(selected);
            $('#total-count').text(total);
            $('#percentage').text(percentage + '%');
            
            // Update alert class based on percentage
            statsDisplay.removeClass('alert-info alert-warning alert-success alert-secondary');
            if (percentage === 100) {
                statsDisplay.addClass('alert-success');
            } else if (percentage >= 50) {
                statsDisplay.addClass('alert-info');
            } else if (percentage > 0) {
                statsDisplay.addClass('alert-warning');
            } else {
                statsDisplay.addClass('alert-secondary');
            }
        }
    }

    /**
     * Check all the permissions with Bootstrap 5 enhanced animation
     */
    $("#checkPermissionAll").click(function() {
        const isChecked = $(this).is(':checked');
        const allCheckboxes = $('input[type="checkbox"]').not(this);
        
        // Add visual feedback with Bootstrap spinner
        if (isChecked) {
            // Show loading state
            const loadingHtml = '<div class="d-flex align-items-center text-white"><span class="spinner-border spinner-border-sm me-2" role="status"></span>Selecting all permissions...</div>';
            $('.role-select-all-section').append('<div id="loading-indicator" class="mt-2">' + loadingHtml + '</div>');
            
            // Staggered selection with animation
            allCheckboxes.each(function(index) {
                setTimeout(() => {
                    $(this).prop('checked', true).trigger('change');
                    
                    // Remove loading indicator when done
                    if (index === allCheckboxes.length - 1) {
                        setTimeout(() => $('#loading-indicator').remove(), 100);
                    }
                }, index * 15);
            });
        } else {
            allCheckboxes.prop('checked', false).trigger('change');
        }
        
        setTimeout(updatePermissionStats, allCheckboxes.length * 15 + 100);
    });

    /**
     * Check permissions by group with improved Bootstrap 5 UX
     */
    function checkPermissionByGroup(className, checkThis) {
        const groupIdName = $("#" + checkThis.id);
        const classCheckBox = $('.' + className + ' input[type="checkbox"]');
        const isChecked = groupIdName.is(':checked');

        if (isChecked) {
            classCheckBox.each(function(index) {
                setTimeout(() => {
                    $(this).prop('checked', true).trigger('change');
                }, index * 25);
            });
        } else {
            classCheckBox.prop('checked', false).trigger('change');
        }
        
        setTimeout(() => {
            implementAllChecked();
            updatePermissionStats();
        }, classCheckBox.length * 25 + 100);
    }

    /**
     * Check single permission with enhanced Bootstrap 5 logic
     */
    function checkSinglePermission(groupClassName, groupID, countTotalPermission) {
        const classCheckbox = $('.' + groupClassName + ' input[type="checkbox"]');
        const groupIDCheckBox = $("#" + groupID);

        // Check if all permissions in this group are selected
        if ($('.' + groupClassName + ' input[type="checkbox"]:checked').length == countTotalPermission) {
            groupIDCheckBox.prop('checked', true);
        } else {
            groupIDCheckBox.prop('checked', false);
        }
        
        implementAllChecked();
        updatePermissionStats();
    }

    /**
     * Implement "select all" logic with Bootstrap 5 performance optimizations
     */
    function implementAllChecked() {
        const countPermissions = {{ count($all_permissions) }};
        const countPermissionGroups = {{ count($permission_groups) }};
        const checkedInputs = $('input[type="checkbox"]:checked').length;

        const selectAllCheckbox = $("#checkPermissionAll");
        if (checkedInputs >= (countPermissions + countPermissionGroups)) {
            selectAllCheckbox.prop('checked', true);
        } else {
            selectAllCheckbox.prop('checked', false);
        }
    }

    /**
     * Add Bootstrap 5 search functionality for permissions
     */
    function addPermissionSearch() {
        // Create search input with Bootstrap 5 styling
        const searchHtml = `
            <div class="mb-3">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control" id="permissionSearch" placeholder="Search permissions...">
                    <button class="btn btn-outline-secondary" type="button" id="clearSearch">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        `;
        
        $('.section-title:contains("Permission Management")').after(searchHtml);
        
        // Search functionality
        $('#permissionSearch').on('input', function() {
            const searchTerm = $(this).val().toLowerCase();
            $('.role-permission-item').each(function() {
                const permissionText = $(this).find('label').text().toLowerCase();
                const permissionGroup = $(this).closest('.mb-4');
                
                if (searchTerm === '' || permissionText.includes(searchTerm)) {
                    $(this).parent().show();
                    permissionGroup.show();
                } else {
                    $(this).parent().hide();
                }
            });
            
            // Hide empty groups
            $('.mb-4').each(function() {
                const visibleItems = $(this).find('.role-permission-item:visible').length;
                if (visibleItems === 0 && searchTerm !== '') {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        });
        
        // Clear search
        $('#clearSearch').on('click', function() {
            $('#permissionSearch').val('').trigger('input');
        });
    }
</script>
@endsection
