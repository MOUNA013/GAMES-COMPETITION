<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Competition extends Model
{
    /**
     * Liste des champs autorisés pour l'attribution en masse.
     */
    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'game_id', 
    ];
    protected $table = 'competition';

        public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }

   
    public function users()
    {
        return $this->belongsToMany(User::class, 'registration')
                    ->withPivot('status', 'score', 'registration_date')
                    ->withTimestamps();
    }

}
