<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'price',
        'clients_limit',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(Lesson::class, 'users_enrolled_to_lessons');
    }
}
