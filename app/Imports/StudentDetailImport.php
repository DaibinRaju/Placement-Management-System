<?php

namespace App\Imports;

use App\StudentDetail;
use App\User;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentDetailImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        User::create([
            'name' =>$row['student_name'],
            'admission_number'=>$row['admission_number'],
            'password'=>Hash::make($row['admission_number']),
            'role' =>"student",
        ]);
        //dd(array_keys($row));
        return new StudentDetail([
            'branch'     => $row['branch'],
            'division'     => $row['division'],
            'enrollment_number'     => $row['enrollment_number'],
            'student_name'     => $row['student_name'],
            'date_of_birth'     => $row['date_of_birth'],
            'permanent_address'     => $row['permanant_address'],
            'present_address'     => $row['present_address'],
            'phone_number'     => $row['phone_number'],
            'parent_name'     => $row['parent_name'],
            'parent_mobile'     => $row['parent_mobile'],
            'gender'     => $row['gender'],
            'student_phone_no'     => $row['student_phone_no'],
            'mail_id'     => $row['mail_id'],
            'admission_number'     => $row['admission_number'],
            'barcode'     => $row['barcode'],
            'university_reg_no'     => $row['university_reg_no'],
            'caste'     => $row['caste'],
            'religion'     => $row['religion'],
        ]);
    }
}