<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminResource extends JsonResource
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
            'username'=>$this->username,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'password'=>$this->password
        ];
    }
}
