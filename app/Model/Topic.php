<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $table = 'topics';

    protected $fillable = [
        'created_by','category_id', 'title', 'content', 'created_at'
    ];

    public function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    
    public function replies()
    {
        return $this->hasMany(Comment::class,'topic_id','id');
    }
}
