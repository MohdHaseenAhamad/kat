<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
            'user_type'=>1,
            'name'=>'Mohd Hassen',
            'phone'=>'7309589697',
            'otp'=>'111111',
            'status'=>1,
            'created_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'user_type'=>0,
                'name'=>'Mohd Amir',
                'phone'=>'9198821129',
                'otp'=>'111111',
                'status'=>1,
                'created_at'=>date('Y-m-d H:i:s'),
                ],
        ];
        foreach ($users as $user)
        {
            DB::table('user')->insert($user);
        }
    }
}
