<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{

    const STUDENT_MOCK = [
        [
            'id'         => '1',
            'board'      => 'csm',
            'name'       => 'Student1',
            'grade_1'    => '8',
            'grade_2'    => '5',
            'grade_3'    => '7',
            'grade_4'    => '10',
            'average'    => null,
            'final'      => null,
            'created_at' => '2021-04-29 12:12:01',
            'updated_at' => '2021-04-29 12:12:01'
        ], 
        [
            'id'         => '2',
            'board'      => 'csmb',
            'name'       => 'Student2',
            'grade_1'    => '1',
            'grade_2'    => '5',
            'grade_3'    => '7',
            'grade_4'    => '10',
            'average'    => null,
            'final'      => null,
            'created_at' => '2021-04-29 12:12:02',
            'updated_at' => '2021-04-29 12:12:02'
        ],
        [
            'id'         => '3',
            'board'      => 'csmb',
            'name'       => 'Student3',
            'grade_1'    => '9',
            'grade_2'    => null,
            'grade_3'    => null,
            'grade_4'    => null,
            'average'    => null,
            'final'      => null,
            'created_at' => '2021-04-29 12:12:02',
            'updated_at' => '2021-04-29 12:12:02'
        ]
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert(self::STUDENT_MOCK);
    }
}
