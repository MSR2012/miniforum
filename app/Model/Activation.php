<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Activation extends Model
{
    protected $table = 'activations';

    protected $fillable = [
        'user_id','code', 'completed', 'completed_at'
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}