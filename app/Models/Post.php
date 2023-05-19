<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'slug', 'description', 'image_path', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function tags()
{
    return $this->belongsToMany(Tag::class);
}
public function comments()
{
    return $this->hasMany(Comment::class);
}

public function storeComment(Request $request, Post $post)
{
    $comment = new Comment();
    $comment->content = $request->input('content');
    $comment->user_id = auth()->user()->id;
    $comment->post_id = $post->id;
    $comment->save();

    return redirect()->back()->with('success', 'Comment posted successfully!');
}

public function ratings()
{
    return $this->hasMany(Rating::class);
}

}
