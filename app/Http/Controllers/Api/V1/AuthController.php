<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Http\Requests\User\Signup;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    private $service;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    public function signup(Signup $request)
    {
        $user = $this->service->signup($request->all());
        $data = [
            'user' => new Resource($user),
            'token' => $user->createToken(config('app.name'))->plainTextToken
        ];
        return $this->success($data, 200);
    }
}
