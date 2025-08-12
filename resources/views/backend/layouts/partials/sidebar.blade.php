<?php
$currentControllerName = Request::segment(index: 2);
use App\Models\Website\WebsiteSettings;
$settings = WebsiteSettings::select('logo', 'title', 'phone', 'email')->first();
?>
{{-- <style>
    .nav-link {
        font-size: 16px
    }
</style> --}}

<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!-- Sidebar Brand -->
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}" class="brand-link">

            @if ($settings && $settings->logo)
                {{-- <img class="animation_shake" src="{{ asset($settings->logo) }}" alt="Logo Here" height="65"
                    width="60" /> --}}
                <span class="brand-text fw-light"><b>{{ $settings->title }}</b></span>
            @else
                <img class="animation_shake" src="{{ asset('backend/img/logo.png') }}" alt="Logo Here" height="25"
                    width="60" />
                <span class="brand-text fw-light">{{ __('messages.project_name') }}</span>
            @endif
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ route(name: 'dashboard') }}"
                        class="nav-link  {{ $currentControllerName == 'dashboard' || null ? 'active' : '' }} {{ $currentControllerName == null ? 'active' : '' }}">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>{{ __('messages.dashboard') }}</p>
                    </a>
                </li>

                {{-- Start:: Student admission --}}
                <li
                    class="nav-item {{ request()->routeIs('admin.admission.students.*', 'role.*') ? 'menu-open' : '' }} }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Admission
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.admission.students.create') }}"
                                class="nav-link {{ menu_active('admin.admission.students.create') }}">
                                <i class="fas fa-user-plus nav-icon"></i>
                                <p>Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.admission.students.index') }}"
                                class="nav-link {{ menu_active('admin.admission.students.index') }}">
                                <i class="fas fa-list nav-icon"></i>
                                <p>List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- End:: Student admission --}}

                {{-- Start:: Basic Settings --}}
                <?php $menuArr = ['mediums', 'academic-years', 'academic-years', 'departments', 'shifts', 'exam-types', 'subjects', 'institutes', 'general-settings', 'holiday-settings', 'event-settings']; ?>
                {{-- <li class="nav-item {{ in_array($currentControllerName, $menuArr) ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ in_array($currentControllerName, $menuArr) ? 'menu-open' : '' }}"
                        aria-expanded="{{ in_array($currentControllerName, $menuArr) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            {{ __('messages.basic_settings') }}
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('mediums.index') }}"
                                class="nav-link {{ $currentControllerName == 'mediums' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.medium') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('academic-years.index') }}"
                                class="nav-link {{ $currentControllerName == 'academic-years' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.academic_year') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('departments.index') }}"
                                class="nav-link {{ $currentControllerName == 'departments' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.department') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('shifts.index') }}"
                                class="nav-link {{ $currentControllerName == 'shifts' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.shift') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('exam-types.index') }}"
                                class="nav-link {{ $currentControllerName == 'exam-types' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.exam_type') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subjects.index') }}"
                                class="nav-link {{ $currentControllerName == 'subjects' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.subject') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('institutes.index') }}"
                                class="nav-link {{ $currentControllerName == 'institutes' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.institute') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('general-settings.index') }}"
                                class="nav-link {{ $currentControllerName == 'general-settings' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.general_settings') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('holiday-settings.index') }}"
                                class="nav-link {{ $currentControllerName == 'holiday-settings' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.holiday_settings') }}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('event-settings.index') }}"
                                class="nav-link {{ $currentControllerName == 'event-settings' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.event_settings') }}</p>
                            </a>
                        </li>

                    </ul>
                </li> --}}
                {{-- End:: Basic Settings --}}

                {{-- Start:: Class Configurations --}}
                <?php $menuArr = ['class_setup', 'department_setup', 'classes', 'subject_setup']; ?>
                <li class="nav-item {{ in_array($currentControllerName, $menuArr) ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ in_array($currentControllerName, $menuArr) ? 'menu-open' : '' }}"
                        aria-expanded="{{ in_array($currentControllerName, $menuArr) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-sliders-h"></i>
                        <p>
                            {{ __('messages.class_configurations') }}
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('classes.index') }}"
                                class="nav-link {{ $currentControllerName == 'classes' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.class') }}</p>
                            </a>
                            {{-- </li>
                        <li class="nav-item">
                            <a href="{{ route('class_setup.index') }}"
                                class="nav-link {{ $currentControllerName == 'class_setup' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.class_setup') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('department_setup.index') }}"
                                class="nav-link {{ $currentControllerName == 'department_setup' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.department_setup') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subject_setup.index') }}"
                                class="nav-link {{ $currentControllerName == 'subject_setup' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.subject_setup') }}</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                {{-- End:: Class Configuration --}}

                {{-- Start:: Students --}}
                <?php $menuArr = ['students', 'roll-rearrange', 'imports', 'class-promotion', 'batch-promotion', 'attendence']; ?>
                {{-- <li class="nav-item {{ in_array($currentControllerName, $menuArr) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ in_array($currentControllerName, $menuArr) ? 'menu-open' : '' }}"
                        aria-expanded="{{ in_array($currentControllerName, $menuArr) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Student Operations
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('students.index') }}"
                                class="nav-link {{ $currentControllerName == 'students' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('students.index') }}"
                                class="nav-link {{ $currentControllerName == 'students' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Assign Class Teacher</p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('student.attendence') }}"
                                class="nav-link {{ $currentControllerName == 'students' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('Student Attendence') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link {{ $currentControllerName == 'roll-rearrange' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.roll_rearrange') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('students.imports.create') }}"
                                class="nav-link {{ $currentControllerName == 'imports' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.import_students') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link {{ $currentControllerName == 'class-promotion' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.class_promotion') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"
                                class="nav-link {{ $currentControllerName == 'batch-promotion' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.batch_promotion') }}</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- End:: Students --}}

                {{-- Start:: Employees --}}
                <?php $menuArr = ['designations', 'sections', 'employees', 'assign-employee']; ?>
                <li class="nav-item {{ in_array($currentControllerName, $menuArr) ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ in_array($currentControllerName, $menuArr) ? 'menu-open' : '' }}"
                        aria-expanded="{{ in_array($currentControllerName, $menuArr) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            Employee Setup
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('designations.index') }}"
                                class="nav-link {{ $currentControllerName == 'designations' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.designation') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sections.index') }}"
                                class="nav-link {{ $currentControllerName == 'sections' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('employees.index') }}"
                                class="nav-link {{ $currentControllerName == 'employees' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Employee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('assign-employee.index') }}"
                                class="nav-link {{ $currentControllerName == 'assign-employee' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Assign Employee</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- End:: Employeess --}}

                {{-- Start:: Leave Management --}}
                <?php $menuArr = ['leave-applications', 'student-leave-applications']; ?>
                {{-- <li class="nav-item {{ in_array($currentControllerName, $menuArr) ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ in_array($currentControllerName, $menuArr) ? 'menu-open' : '' }}"
                        aria-expanded="{{ in_array($currentControllerName, $menuArr) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calendar-check"></i>
                        <p>
                            {{ __('messages.leave_mgt') }}
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('leave-applications.index') }}"
                                class="nav-link {{ $currentControllerName == 'leave-applications' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.leave_applications') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('student-leave-applications.index') }}"
                                class="nav-link {{ $currentControllerName == 'student-leave-applications' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.student_leave_applications') }}</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- End:: Leave Managements --}}

                {{-- Start:: Exams --}}
                <?php $menuArr = ['exam-marks-setups', 'exam-setups']; ?>
                {{-- <li class="nav-item {{ in_array($currentControllerName, $menuArr) ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ in_array($currentControllerName, $menuArr) ? 'menu-open' : '' }}"
                        aria-expanded="{{ in_array($currentControllerName, $menuArr) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <!-- <nav-icon class="fas fa-graduation-cap"></nav-icon> -->
                        <p>
                            {{ __('messages.exams') }}
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('exam-marks-setups.index') }}"
                                class="nav-link {{ $currentControllerName == 'exam-marks-setups' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.exam_mark_setups') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('exam-setups.index') }}"
                                class="nav-link {{ $currentControllerName == 'exam-setups' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{ __('messages.exam_setups') }}</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- End:: Exams --}}

                {{-- Start:: Website Settings --}}
                <?php $menuArr = ['website-settings']; ?>
                <li class="nav-item {{ in_array($currentControllerName, $menuArr) ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ in_array($currentControllerName, $menuArr) ? 'menu-open' : '' }}"
                        aria-expanded="{{ in_array($currentControllerName, $menuArr) ? 'active' : '' }}">
                        <i class="nav-icon fab fa-chrome"></i>
                        <p>
                            Website Setup
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('website-settings.index') }}"
                                class="nav-link {{ $currentControllerName == 'website-settings' ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- End:: Website Settings --}}

            </ul>
        </nav>
    </div>
</aside>
