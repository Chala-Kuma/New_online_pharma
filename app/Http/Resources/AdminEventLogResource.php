<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminEventLogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'adminid'=>(string)$this->adminid,
            'admin_event_action'=>$this->admin_event_action,
            'admin_event_detail'=>$this->admin_event_detail
        ];
    }
}
