<?php

namespace App\Http\Controllers;

use App\Models\Overtime;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Resources\OvertimeResource;
use Illuminate\Validation\ValidationException;

class OvertimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $time = Overtime::where('employee_id');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            "employee_id" => "integer|required",
            "date" => "date|required",
            'time_start' => 'required|date_format:H:i',
            'time_ended' => 'required|date_format:H:i',
        ]);

        $time = Overtime::all()->where('employee_id', $request->employee_id);
        $all_time = Overtime::all();

        for ($i=0; $i < count($all_time); $i++) { 
            $value = Arr::exists($time, $i);
            if ($value == true) {
                if ($time[$i]['date'] === $request->date) {
                    throw ValidationException::withMessages([
                        'date' => ['Tidak boleh ada date yang sama di employee tersebut.']
                    ]);
                }
            }
        }  

        if ($request->time_start > $request->time_ended) {
            throw ValidationException::withMessages([
                'time_start' => ['Tidak boleh lebih besar dari time_ended.'],
            ]);
        }   

        $overtime = overtime::create($validation);

        return new OvertimeResource($overtime->loadMissing('employee'));
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
