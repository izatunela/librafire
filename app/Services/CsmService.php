<?php

namespace App\Services;

use App\Models\Student;


class CsmService {

    /**
     * Calculate results
     *
     * @param Student $student
     * @return Student
     */
    public function results($student): Student
    {
        $grades = array_values($student::where('id',$student->id)->first(['grade_1','grade_2','grade_3','grade_4'])->toArray());
        $sum = array_sum($grades);
        $avg = $sum/count($grades);
        $threshold = 7;

        if ($avg >= $threshold) {
            $student->final = 'Pass';
        }
        else{
            $student->final = 'Fail';
        }

        $student->average = $avg;
        $student->save();
        
        return $student;
    }
    
}