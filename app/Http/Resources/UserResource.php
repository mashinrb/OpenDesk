<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'ext' => $this->ext,
            'number' => $this->number,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'tickets' => new TicketCollection($this->whenLoaded('tickets')),
            'comments' => new CommentCollection($this->whenLoaded('comments')),
            'teams' => new TeamCollection($this->whenLoaded('teams'))
        ];
    }
}