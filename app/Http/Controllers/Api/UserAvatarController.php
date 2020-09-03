<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAvatarController extends Controller
{
    /**
     * Store a new user avatar.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'avatar' => ['required', 'image']
        ]);

        auth()->user()->update([
            'avatar_path' => request()->file('avatar')->store('avatars', 'public')
        ]);

        return response()->json(['message' => 'task was successful']);
    }
}