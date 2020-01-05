<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $table = 'password_resets';

    protected $fillable = [
        'user_id','token', 'completed', 'completed_at'
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}