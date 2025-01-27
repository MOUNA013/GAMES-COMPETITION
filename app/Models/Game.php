<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory; 

    protected $fillable = [
        'name',
        'description',
        'rules',
    ];
  



    protected $table = 'game'; 



    public function competition()
    {
        return $this->hasMany(Competition::class);
    }
}
