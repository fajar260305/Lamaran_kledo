<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OvertimeResource extends JsonResource
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

        return [
            "employee_id" => $this->employee_id,
            "date" => $this->date,
            "time_start" => $this->time_start,
            "time_ended" => $this->time_ended,
            "employee" => $this->whenLoaded('employee')
        ];
    }
}
