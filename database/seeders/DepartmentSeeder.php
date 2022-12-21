<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = [
            [
            'name'=>'Store Incharge',
            'status'=>1,
            'created_at'=>date( 'Y-m-d H:i:s'),
            ],
            [
                'name'=>'Operator',
                'status'=>1,
                'created_at'=>date( 'Y-m-d H:i:s'),
            ],
            [
                'name'=>'Helpers',
                'status'=>1,
                'created_at'=>date( 'Y-m-d H:i:s'),
            ],
            [
                'name'=>'Contractor',
                'status'=>1,
                'created_at'=>date( 'Y-m-d H:i:s'),
            ]
        ];
        foreach ($department as $dep)
        {
            DB::table('department')->insert($dep);
        }

    }
}
