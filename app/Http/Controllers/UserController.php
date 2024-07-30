<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    public function signup(CreateUserRequest $request): JsonResponse
    {
        $data = $request->only(['name', 'email', 'password', 'state_id']);
        $user = User::create($data);

        $response = [
            'error' => '',
            'user' => $user
        ];
        
        return response()->json([$response]);
    }

    public function signin(): JsonResponse
    {
        return response()->json(['method' => 'signinin']);
    }

    public function me(): JsonResponse
    {
        return response()->json(['method' => 'me']);
    }
}
