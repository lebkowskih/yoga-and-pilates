<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    public const ROLE_ADMIN = 1;
    public const ROLE_TRAINER = 2;
    public const ROLE_CLIENT = 3;

    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'role_id',
    ];

    public static function createRole(User $user, int $roleId = self::ROLE_CLIENT): self
    {
        return UserRole::create([
            'user_id' => $user->id,
            'role_id' => $roleId
        ]);
    }
}
