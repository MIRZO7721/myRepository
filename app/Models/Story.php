<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Story extends Model
{
    use HasTags;
    protected $fillable = ['title', 'content'];
    public function tags(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Tag::class, 'story_tag', 'story_id', 'tag_id');
    }
}
