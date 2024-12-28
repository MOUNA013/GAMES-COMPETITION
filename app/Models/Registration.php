<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'statut',
        'score',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function competition(){
        return $this->belongsToMany(Competition::class);
    }
    
}
