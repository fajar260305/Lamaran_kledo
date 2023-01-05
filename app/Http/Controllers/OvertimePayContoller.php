<?php

namespace App\Http\Controllers;

use App\Http\Resources\OvertimePayResource;
use App\Models\Employee;
use App\Models\Overtime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OvertimePayContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($no)
    {
        // $mount = Employee::with("overtime")->get();
        $overtimePay = Employee::all();

        // return $users;
        // $users = DB::table('employees')
        //     ->join('overtimes', 'employees.id', '=', 'overtimes.employee_id')
        //     ->select('employees.name', 'employees.salary', 'overtimes.employee_id', 'overtimes.date', 'overtimes.time_start', 'overtimes.time_ended')
        //     ->get();
        // return $users;

        return OvertimePayResource::collection($overtimePay);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
