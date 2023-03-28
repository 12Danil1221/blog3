<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $table = 'messages';
    protected $guarded = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
