<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'country' => $this->country,
            'governorate' => $this->governorate,
            'region' => $this->region,
            'address' => $this->address,
            'phone_number' => $this->phone_number,
            'whatsapp_number' => $this->whatsapp_number,
            'urlStore' => $this->urlStore,
            'email' => $this->email,
            'workingScops' => $this->workingScops,
            'description' => $this->description,
            'imageCard' => asset($this->imageCard),
        ];
    }
}
