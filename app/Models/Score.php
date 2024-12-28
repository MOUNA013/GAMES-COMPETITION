<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'score'
    ];
    public function registration(){
        return $this->belongsTo(Registration::class);
    }

}
