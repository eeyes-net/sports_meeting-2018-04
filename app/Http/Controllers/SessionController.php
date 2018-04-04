<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use sxxuz\OAuth2\Client\Provider\EeyesProvider;

class SessionController extends Controller
{
    /**
     * Try to get user from oauth
     * If the user does not exist in database
     * Then create one
     * Auth the user through Auth Facade
     */
    public function login()
    {
        $scope = [
            'info-username.read',
            'info-user_id.read',
            'info-name.read',
        ];

        $client = new EeyesProvider([
            'clientId'     => config('oauth.app_id'),
            'clientSecret' => config('oauth.app_secret'),
            'redirectUri'  => config('oauth.redirect_uri'),
            'scope'        => $scope,
        ]);

        $user = $client->getUser();

        if (User::where('username',$user->getUsername())->get())
        {
            Auth::login($user);
        } else {
            $new_user = User::create([
                'username' => $user->getUsername(),
                'user_id'  => $user->getID(),
                'name'     => $user->getName(),
            ]);

            Auth::login($new_user);
        }

        return redirect()->intended();
    }

    /**
     * Logout through Auth Facade
     * Redirect to CAS logout
     */
    public function logout()
    {
        Auth::logout();
        return redirect('https://cas.xjtu.edu.cn/logout');
    }
}
