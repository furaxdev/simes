<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    /**
     * Fetch all relevant username.
     *
     * @return mixed
     */
    public function index()
    {
        $search = request('name');

        return User::where('name', 'LIKE', "%$search%")
            ->take(5)
            ->pluck('name');
    }

    public function store(User $user, Request $request)
    {
        request()->validate([
            'avatar' => ['required', 'image']
        ]);

        auth()->user()->update([
            'avatar_path' => $request->avatar->store('avatars')
        ]);

        return response([], 204);
    }
}