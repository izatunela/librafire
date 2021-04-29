<?php

namespace App\Services;

use App\Models\Student;


class CsmbService {

    /**
     * Calculate results
     *
     * @param Student $student
     * @return Student
     */
    public function results($student): Student
    {
        $grades = array_values($student::where('id',$student->id)->first(['grade_1','grade_2','grade_3','grade_4'])->toArray());
        $count = count($grades);
        $sum = array_sum($grades);
        $avg = $sum/$count;
        $max = max($grades);

        if ($count > 2) {
            $min = min($grades);
            $el = array_search($min,$grades);
            unset($grades[$el]);
        }

        if ($max > 8) {
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