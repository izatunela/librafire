<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Repositories\StudentRepository;

class StudentController extends Controller
{
    /**
     * Student repository
     *
     * @var StudentRepository
     */
    public $repository;

    /**
     * Constructor
     *
     * @param StudentRepository $repository
     */
    public function __construct(StudentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function show(Student $student)
    {
        $data = $this->repository->getStudent($student);

        return $data;
    }
}
