<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompetitionParticipant extends Model
{
    use HasFactory;
    protected $table = 'competition_participants';
    protected $fillable = ['name', 'email'];
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

}
