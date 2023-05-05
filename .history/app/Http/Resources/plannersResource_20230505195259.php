<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class plannersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $photo=$this->photo;
        if($photo){
            $photo="http://127.0.0.1:8000/planner/plannerphoto/".$this->id;
        }
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
            'country'=>$this->country,
            'religion'=>$this->religion,
            'gender'=>$this->gender,
            'phone'=>$this->phone,
            'photo'=>$photo,
            'token'=>$this->api_token,
        ];
    }
}
