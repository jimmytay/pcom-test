<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Leave;
use App\Employee;

class WorkDayCalculatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $last = "Please key in info above to calculate your last working day";
    //     return view('calculator.workDayCal')->with('last',$last);
    // }

    public function calculate(Request $request)
    {
        $last = "Please key in info above to calculate your last working day";
        $employees_id = $request->input('employees_id');
        $working_days = $request->input('working_days');
        $num_of_days = $request->input('num_of_days');
        $start_date = $request->input('start_date');
        $off_day_dates = Leave::where('employees_id', $employees_id)->where('status', 1)->pluck('applied_date')->toArray();

        if($working_days != null){
            $counter = 0;
            do{
                $start_day = Carbon::parse($start_date)->format('l');
                
                if(in_array($start_day, $working_days) && !in_array($start_date, $off_day_dates)){
                            $counter++;
                }
                if($counter <= $num_of_days){
                    $start_date = Carbon::parse($start_date)->addDay();
                }
            }while($counter <= $num_of_days);
            //dd(gettype($off_day_dates));
            $last = $start_date;
        } 
        return view('calculator.workDayCal')->with('last',$last);
    }

    public function offDay($employees_id)
    {  
        $off_day = Leave::where('employees_id', $employees_id)->where('status', 1)->first();
        $employee = Employee::where('id', $employees_id)->first();
        
        return view('calculator.offDay',['employee' => $employee, 'off_day'=>$off_day]);
    }
}
