<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class BackPolicy
{
    use HandlesAuthorization;

    public function admin(User $user)
    {
        return in_array($user->username,config('backstage'));
    }
}
