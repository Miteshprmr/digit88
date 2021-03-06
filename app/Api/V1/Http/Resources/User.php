<?php

namespace App\Api\V1\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'name' => $this->name,
            'mobile' => $this->mobile,
            'mobile_verified' => $this->mobile_verified_at !== null,
            'email' => $this->email,
            'email_verified' => $this->email_verified_at !== null,
        ];
    }
}
