<?php

namespace App\Http\Resources;

use App\Models\overtime;
use Illuminate\Http\Resources\Json\JsonResource;
use League\CommonMark\Reference\Reference;
use PhpParser\ErrorHandler\Collecting;

class OvertimePayResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        $waktu_awal = strtotime($this->overtime->time_start);
        $waktu_akhir = strtotime($this->overtime->time_ended);
        $diff = $waktu_akhir - $waktu_awal;
        $jam = floor($diff / (60*60));
        if ($jam == 1) {
            $jam = 1.5;
        }elseif ($jam == 2) {
            $jam = 3.5;
        }elseif ($jam == 3) {
            $jam = 5.5;
        }elseif ($jam == 4) {
            $jam = 7.5;
        }

        $amount = ($this->salary / 173) * $jam;

        return [
            'id' => $this->id,
            'date' => $this->overtime->date,
            'name' => $this->name,
            'salary' => $this->salary,
            'overtimes' => $this->overtime,
            'overtimes' => new RelationOvertimeResource($this->overtime),
            'overtime_duration_total' => $jam,
            'amount' => number_format($amount)." " . "rb"
        ];
    }
}
