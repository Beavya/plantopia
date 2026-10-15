<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAvatarRequest;
use App\Models\Avatar;
use Illuminate\Support\Facades\Auth;

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

public function updateAvatar(UpdateAvatarRequest $request)
{
    $user = Auth::user();
    $user->avatar_id = $request->avatar_id;
    $saved = $user->save();

    return redirect()->route('settings');
}
}
