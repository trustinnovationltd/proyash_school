<?php

namespace App\Models\StudentsImport;

use App\Models\Students\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;

class StudentsImport implements ToModel
{
    public function model(array $row)
    {
        // Validate and ensure non-null values for required fields
        $instituteId = isset($row[0]) && is_numeric($row[0]) ? (int)$row[0] : null;
        $academicId = isset($row[1]) && is_numeric($row[1]) ? (int)$row[1] : null;
        $mediumId = isset($row[2]) && is_numeric($row[2]) ? (int)$row[2] : null;
        $shiftId = isset($row[3]) && is_numeric($row[3]) ? (int)$row[3] : null;
        $classId = isset($row[4]) && is_numeric($row[4]) ? (int)$row[4] : null;
        $studentCategoryId = isset($row[5]) && is_numeric($row[5]) ? (int)$row[5] : null;

        // Ensure that all required fields have non-null values
        if (is_null($instituteId) || is_null($academicId) || is_null($mediumId) || is_null($shiftId) || is_null($classId) || is_null($studentCategoryId)) {
            \Log::error('Missing required field in the row', ['row' => $row]);
            return null; // Skip the row if any required field is missing
        }

        // Handle gender as a string and validate it
        $gender = isset($row[10]) ? trim((string)$row[10]) : 'Unknown';
        if (!in_array($gender, ['Male', 'Female', 'Other'], true)) {
            $gender = 'Unknown';
        }

        // Handle date_of_birth parsing with a default null value and validation
        $dateOfBirth = null;
        if (isset($row[11]) && !empty($row[11])) {
            try {
                $dateOfBirth = Carbon::parse($row[11])->format('Y-m-d');
            } catch (\Exception $e) {
                \Log::error('Invalid date_of_birth format: ', ['date_of_birth' => $row[11]]);
            }
        }

        // Ensure date_of_birth is not null
        if (is_null($dateOfBirth)) {
            \Log::error('date_of_birth is null for the row', ['row' => $row]);
            return null; // Skip the row if date_of_birth is null
        }

        // Set default values for phone and address fields if not provided
        $fathersPhone = isset($row[19]) ? trim($row[19]) : null;
        $mothersPhone = isset($row[23]) ? trim($row[23]) : null;
        $guardianPhone = isset($row[27]) ? trim($row[27]) : null;
        $guardianAddress = isset($row[29]) ? trim($row[29]) : null;

        // Add additional fields for NID, birth certificate number, emails, and professions
        $nid = isset($row[14]) ? trim($row[14]) : null;
        $birthCertificateNo = isset($row[15]) ? trim($row[15]) : null;
        $fathersEmail = isset($row[20]) ? trim($row[20]) : null;
        $fathersProfession = isset($row[21]) ? trim($row[21]) : null;
        $mothersEmail = isset($row[24]) ? trim($row[24]) : null;
        $mothersProfession = isset($row[25]) ? trim($row[25]) : null;
        $guardianEmail = isset($row[28]) ? trim($row[28]) : null;

        // Check if the RFID number already exists in the database
        $existingStudent = Student::where('rfid_number', $row[9])->first();
        if ($existingStudent) {
            \Log::info('Duplicate RFID number found for student: ' . $row[9]);
            return null; // Skip this row if the RFID number already exists
        }

        // Return the new Student model with all required fields
        return new Student([
            'institute_id' => $instituteId,
            'academic_id' => $academicId,
            'medium_id' => $mediumId,
            'shift_id' => $shiftId,
            'class_id' => $classId,
            'student_category_id' => $studentCategoryId,
            'name_english' => $row[6],
            'name_bangla' => $row[7],
            'roll_number' => $row[8],
            'rfid_number' => $row[9],
            'gender' => $gender,
            'date_of_birth' => $dateOfBirth,
            'blood_group' => $row[12],
            'religion' => $row[13],
            'nid' => $nid,
            'birth_certificate_no' => $birthCertificateNo,
            'present_address' => $row[16],
            'permanent_address' => $row[17],
            'fathers_name' => $row[18],
            'fathers_phone' => $fathersPhone,
            'fathers_email' => $fathersEmail,
            'fathers_profession' => $fathersProfession,
            'mothers_name' => $row[22],
            'mothers_phone' => $mothersPhone,
            'mothers_email' => $mothersEmail,
            'mothers_profession' => $mothersProfession,
            'guardian_name' => $row[26],
            'guardian_phone' => $guardianPhone,
            'guardian_email' => $guardianEmail,
            'guardian_address' => $guardianAddress,
            'image' => $row[30],
            'status' => $row[31],
            'created_by' => auth()->id(),
        ]);
    }
}
