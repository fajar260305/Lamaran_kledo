<?php

namespace App\Http\Resources;

use App\Models\Overtime;
use Illuminate\Http\Resources\Json\JsonResource;

class RelationOvertimeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        // $mount = Overtime::with("overtime")->get();
        // $data = OvertimePayResource::collection($mount);
        
        // $waktu_awal = strtotime($this->time_start);
        // $waktu_akhir = strtotime($this->time_ended);
        // $diff = $waktu_akhir - $waktu_awal;
        // $jam = floor($diff / (60*60));
        // $menit = $diff - $jam * (60 * 60);
        return [
            'id' => $this->id,  
            'date' => $this->date,
            'time_started' => $this->time_start,
            'time_ended' => $this->time_ended,
            'overtime_duration' => 'sa'
        ];
    }
}
