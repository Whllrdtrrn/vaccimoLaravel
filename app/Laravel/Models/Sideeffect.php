<?php

namespace App\Laravel\Models;

use Illuminate\Database\Eloquent\Model;
use App\Laravel\Traits\DateFormatterTrait;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sideeffect extends Model
{
    use DateFormatterTrait,SoftDeletes;

	protected $table = "sideeffect";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        'muscle_ache',
        'headache',
        'fever',
        'redness',
        'swelling',
        'tenderness',
        'warmth',
        'itch',
        'induration',
        'feverish',
        'chills',
        'join_pain',
        'fatigue',
        'nausea',
        'vomiting',
        'user_id',
        'name'
    ];

    public $timestamps = true;

    public function user() {
        return $this->BelongsTo("App\Laravel\Models\User", "user_id", "id");
    }

   
}
