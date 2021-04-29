<?php

namespace App\Repositories;

use App\Models\Student;
use App\Services\CsmService;
use App\Services\CsmbService;

class StudentRepository
{
    /**
     * CsmService
     *
     * @var CsmService
     */
    public $csm;

    /**
     * CsmbService
     *
     * @var CsmbService
     */
    public $csmb;

    /**
     * Constructor
     *
     * @param CsmService $csm
     * @param CsmbService $csmb
     */
    public function __construct(CsmService $csm,CsmbService $csmb)
    {
        $this->csm = $csm;
        $this->csmb = $csmb;
    }

    /**
     * Get student data
     *
     * @param Student $student
     */
    public function getStudent(Student $student)
    {
        if ($student->board === 'csm') {

            $data = $this->csm->results($student);

            return response()->json($data);

        } else {
            $data = $this->csmb->results($student);

            return view('show',compact('data'));
        }
    }
}