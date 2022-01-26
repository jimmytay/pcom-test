<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => "Jimmy",
            'email' => 'jimmy@gmail.com',
        ]);

        DB::table('employees')->insert([
            'name' => "Xj",
            'email' => 'xj@gmail.com',
        ]);
    }
}
