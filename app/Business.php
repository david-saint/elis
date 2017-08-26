<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $fillable = ['name', 'category', 'description', 'city', 'state', 'country', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
