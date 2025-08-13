<?php

use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\BasicSettings\AcademicYearController;
use App\Http\Controllers\Backend\BasicSettings\ClassController;
use App\Http\Controllers\Backend\BasicSettings\DepartmentController;
use App\Http\Controllers\Backend\BasicSettings\EventSettingController;
use App\Http\Controllers\Backend\BasicSettings\ExamTypeController;
use App\Http\Controllers\Backend\BasicSettings\GeneralSettingController;
use App\Http\Controllers\Backend\BasicSettings\HolidaySettingController;
use App\Http\Controllers\Backend\BasicSettings\InstituteController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\BasicSettings\MediumController;
use App\Http\Controllers\Backend\BasicSettings\ShiftController;
use App\Http\Controllers\Backend\BasicSettings\SubjectController;
use App\Http\Controllers\Backend\ClassConfigurations\ClassSetupController;
use App\Http\Controllers\Backend\ClassConfigurations\DepartmentSetupController;
use App\Http\Controllers\Backend\ClassConfigurations\SubjectSetupController;
use App\Http\Controllers\Backend\Employees\AssignEmployeeController;
use App\Http\Controllers\Backend\InstituteInformationController;
use App\Http\Controllers\Backend\Students\StudentController;
use App\Http\Controllers\Backend\Employees\DesignationController;
use App\Http\Controllers\Backend\Employees\EmployeeController;
use App\Http\Controllers\Backend\Employees\SectionController;
use App\Http\Controllers\Backend\Leaves\EmployeeLeaveApplicationController;
use App\Http\Controllers\Backend\Leaves\StudentLeaveApplicationController;
use App\Http\Controllers\Backend\Exams\ExamMarksSetupController;
use App\Http\Controllers\Backend\Exams\ExamSetupsController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\Students\StudentAttendence;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\Website\SettingsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Models\Website\WebsiteSettings;
// use App\Models\Students\Student;
// use App\Http\Controllers\Backend\ProfileController;
use Illuminate\Support\Facades\Route;

// Start:: Website
Route::get('/', [HomeController::class, 'index'])->name('website.index');
Route::get('/our-faculties', [HomeController::class, 'faculties'])->name('website.faculties');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('website.about');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('website.contact');
Route::get('/all-events', [HomeController::class, 'all_events'])->name('website.all_events');
Route::get('/news-articles', [HomeController::class, 'news_articles'])->name('website.news_articles');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('website.privacy');
Route::get('/donate-proyash', [HomeController::class, 'donate_proyash'])->name('website.donate_proyash');
Route::get('/terms-conditions', [HomeController::class, 'terms_conditions'])->name('website.terms_conditions');
Route::get('/services-we-prove', [ServiceController::class, 'services'])->name('website.services');
Route::get('/speech-language-therapy', [ServiceController::class, 'speech_language_therapy'])->name('website.speech_language_therapy');
Route::get('/medical-assessment-care', [ServiceController::class, 'medical_assessment_care'])->name('website.medical_assessment_care');
Route::get('/neurological-assessment', [ServiceController::class, 'neurological_assessment'])->name('website.neurological_assessment');
Route::get('/audiology-assessment', [ServiceController::class, 'audiology_assessment'])->name('website.audiology_assessment');
Route::get('/psychology-service-management', [ServiceController::class, 'psychology_service_management'])->name('website.psychology_service_management');
Route::get('/diet-management', [ServiceController::class, 'diet_management'])->name('website.diet_management');
Route::get('/counselling', [ServiceController::class, 'counselling'])->name('website.counselling');
Route::get('/occupational-sensory-therapy', [ServiceController::class, 'occupational_sensory_therapy'])->name('website.occupational_sensory_therapy');
Route::get('/physiotherapy', [ServiceController::class, 'physiotherapy'])->name('website.physiotherapy');
Route::get('/hydrotherapy', [ServiceController::class, 'hydrotherapy'])->name('website.hydrotherapy');
Route::get('/prosthetic-orthotic-center', [ServiceController::class, 'prosthetic_orthotic_center'])->name('website.prosthetic_orthotic_center');
Route::get('/music-therapy-yoga', [ServiceController::class, 'music_therapy_yoga'])->name('website.music_therapy_yoga');
Route::get('/hyperbaric-oxygen-chamber', [ServiceController::class, 'hyperbaric_oxygen_chamber'])->name('website.hyperbaric_oxygen_chamber');
Route::get('/swimming', [ServiceController::class, 'swimming'])->name('website.swimming');
Route::get('/art-craft', [ServiceController::class, 'art_craft'])->name('website.art_craft');
Route::get('/music-dance', [ServiceController::class, 'music_dance'])->name('website.music_dance');
// End:: Website

Route::get('login', [LoginController::class, 'create'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('admin.login.store');

// Designation Employee Filtering
Route::get('/get-designations', [EmployeeController::class, 'getDesignationsByInstitute'])->name('getDesignationsByInstitute');
Route::get('/get-employees', [EmployeeController::class, 'getEmployeesByInstituteAndDesignation'])->name('getEmployeesByInstituteAndDesignation');

// Routes for viewing and importing students
Route::get('students/imports/create', [StudentController::class, 'showImportForm'])->name('students.imports.create');
// Route::get('students/imports/index', [StudentController::class, 'index'])->name('students.imports.index');

// Existing route for handling the import action
Route::post('students/imports', [StudentController::class, 'import'])->name('students.imports');

// Routes for showing specific records
Route::get('/institutes/{id}', [InstituteController::class, 'show'])->name('institutes.show');
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');


Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Start:: Basic Settings
    Route::resources([
        'mediums' => MediumController::class,
        'academic-years' => AcademicYearController::class,
        'departments' => DepartmentController::class,
        'shifts' => ShiftController::class,
        'classes' => ClassController::class,
        'exam-types' => ExamTypeController::class,
        'subjects' => SubjectController::class,
        'institutes' => InstituteController::class,
        'general-settings' => GeneralSettingController::class,
        'holiday-settings' => HolidaySettingController::class,
        'event-settings' => EventSettingController::class,
        'students' => StudentController::class,
        'designations' => DesignationController::class,
        'sections' => SectionController::class,
        'employees' => EmployeeController::class,
        'assign-employee' => AssignEmployeeController::class,
        'leave-applications' => EmployeeLeaveApplicationController::class,
        'student-leave-applications' => StudentLeaveApplicationController::class,
        'exam-marks-setups' => ExamMarksSetupController::class,
        'exam-setups' => ExamSetupsController::class,
        'assign-class-teacher' => ExamSetupsController::class,
        'website-settings' => SettingsController::class,
    ]);




    // End:: Basic Settings

    // Start:: Student Module
    Route::prefix('adminssion')->name('admin.admission.')->group(function () {
        Route::resource('students', StudentController::class)->names('students');
    });

    // End:: Student Module

    // Start:: class configuration
    Route::resources([
        'class_setup' => ClassSetupController::class,
        'department_setup' => DepartmentSetupController::class,
        'subject_setup' => SubjectSetupController::class,
    ]);

    //class setup
    Route::post('class_setup/get_class_data', [ClassSetupController::class, 'getClassData'])->name('class_setup.get_class_data');

    // Student Attendence
    Route::get('student/attendence', [StudentAttendence::class, 'index'])->name('student.attendence');

    //department setup
    Route::post('department_setup/get_department_data', [DepartmentSetupController::class, 'getDepartmentData'])->name('department_setup.get_department_data');

    //subject setup
    Route::post('subject_setup/get_subject_data', [SubjectSetupController::class, 'getSubjectData'])->name('subject_setup.get_subject_data');
    // End:: class configuration

    // Start:: Institute Information 
    Route::get('institute_info/get_medium_data/{id}', [InstituteInformationController::class, 'getMediumData'])->name('institute_info.get_medium_data');
    Route::post('institute_info/get_class_data', [InstituteInformationController::class, 'getClassData'])->name('institute_info.get_class_data');
    Route::post('institute_info/get_department_data', [InstituteInformationController::class, 'getDepartmentData'])->name('institute_info.get_department_data');
    // End:: Institute Information

    //start:: role management
    
    Route::resources([
        'role' => RoleController::class,
        'users' => UserController::class,
    ]);

    //end:: role management

});
