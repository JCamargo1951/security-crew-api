<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LinkResource extends JsonResource
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
            'title' => $this->title,
            'url' => $this->url,
            'shortener_url' => $this->shortener_url,
            'slug' => $this->slug,
            'visibility' => $this->visibility,
            'expires_at' => $this->expires_at,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at,
        ];
    }
}
