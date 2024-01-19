<?php

namespace App\Policies;

use App\Models\User;
use App\Models\UserRole;

final class LessonPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if lessons can be managed by user
     */
    public function manage(User $user): bool
    {
        return $user->role->role_id === UserRole::ROLE_ADMIN || $user->role->role_id === UserRole::ROLE_TRAINER;
    }

    public function enroll(User $user): bool
    {
        return $user->role->role_id === UserRole::ROLE_CLIENT;
    }
}
