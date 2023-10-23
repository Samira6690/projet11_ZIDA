<?php

namespace App\Models;
use\App\Models\Post;
use\App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'contenu',
        'nom',
    ];

    public function posts_tags()
    {
        return $this->belongsToMany(PostTag::class,'post_tag', 'post_id', 'tag_id');
    }
}
