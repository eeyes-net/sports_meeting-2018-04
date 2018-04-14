<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class BackPolicy
{
    use HandlesAuthorization;

    public function admin(User $currentUser)
    {
        return in_array($currentUser->username,config('backstage'));
    }
}
