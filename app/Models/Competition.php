<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'title',
        'start_date',
        'end_date',
    ];
    public function user(){
        return $this->belongsToMany(User::class, 'registrations');
    }
}
