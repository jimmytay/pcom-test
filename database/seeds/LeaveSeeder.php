<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('leaves')->insert([
            'employees_id' => 1,
            'applied_date' => Carbon::create(2021, 11, 26, 0, 0, 0),
            'status' => 1,
        ]);
    }
}
