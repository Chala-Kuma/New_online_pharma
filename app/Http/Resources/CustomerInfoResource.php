<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerInfoResource extends JsonResource
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
            'customerid'=>(string)$this->customerid,
            'first_name'=>$this->first_name,
            'Middle_name'=>$this->Middle_name,
            'last_name'=>$this->last_name,
            'location'=>$this->location,
            'age'=>$this->age,
            'sex'=>$this->sex,
            'phone'=>$this->phone,
            'adminaccount'=>$this->adminAccount,
            'admineventlog'=>$this->adminEventLog
        ];
    }
}
