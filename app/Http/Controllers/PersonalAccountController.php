<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAvatarRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Avatar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PersonalAccountController extends Controller
{
    public function showSettings()
    {
        $user = Auth::user();
        $avatars = Avatar::all();

        return view('personal-account.settings', [
            'user' => $user,
            'avatars' => $avatars,
        ]);
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password !== null) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        if ($request->expectsJson()) {
            return response()->json(['redirect' => route('settings')]);
        }

        return redirect()->route('settings');
    }

    public function updateAvatar(UpdateAvatarRequest $request)
    {
        $user = Auth::user();
        $user->avatar_id = $request->avatar_id;
        $user->save();

        if ($request->expectsJson()) {
            return response()->json(['redirect' => route('settings')]);
        }

        return redirect()->route('settings');
    }
}
