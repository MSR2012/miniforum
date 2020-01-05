<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'commented_by','topic_id', 'reply'
    ];

    public function commentedBy()
    {
        return $this->belongsTo(User::class,'commented_by','id');
    }
    
    public function topic()
    {
        return $this->belongsTo(Topic::class,'topic_id','id');
    }
}
