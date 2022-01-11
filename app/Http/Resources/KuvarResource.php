<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KuvarResource extends JsonResource
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
            'ID: ' => $this->resource->id,
            'Ime: ' => $this->resource->ime,
            'Prezime: ' => $this->resource->prezime,
            'Kuhinja: ' => $this->resource->kuhinja,
            'Plata: ' => $this->resource->plata,
            'Menadžer: ' => new MenadzerResource($this->resource->menadzer)
        ];
    }
}
