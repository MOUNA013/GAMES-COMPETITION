<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name',
        'description',
        'rules',
    ];
    public function competition(){
        return $this->hasMany(Competition::class);
    }
}
