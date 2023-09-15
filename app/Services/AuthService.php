<?php

namespace App\Services;

use Mail;
use App\Models\User;
use Illuminate\Support\Arr;

class AuthService
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function signup($inputs)
    {
        $userData = Arr::except($inputs, ['confirm_password']);
        $user = $this->user->create($userData);
        return $user;
    }
}
