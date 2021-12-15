<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'post_id' => $this->id,
            'post_title' => $this->title,
            'post_conten' => $this->content,
            'post_type' => $this->posttype,
            'metadata_post' => $this->metadata,
            'post_updated' => $this->updated_at,
            'category' => new CategoryResource($this->category),
            'author' => new UserResource($this->author),
            'images' => PictureResource::collection($this->pictures),
            'tags' => TagResource::collection($this->tags),
            'comments' => CommentResource::collection($this->comments),
        ];
    }
}
