<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource {
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request) {
        return [
            'id'         => $this->id,
            'user_id'    => $this->user_id,
            'judul'      => $this->judul,
            'slug_judul' => $this->slug_judul,
            'isi'        => $this->isi,
            'foto'       => asset('storage/article/' . $this->foto),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
