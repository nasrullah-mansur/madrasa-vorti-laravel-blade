<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request)
    {
        
        $request->validate([
            'current_password' => [
                'required',
                'current_password', // This checks if the current password matches the authenticated user's password
            ],
            'password' => [
                'required',
                'string',
                'min:8', // Minimum 8 characters
                'confirmed', // Checks if new_password matches confirm_password
                'different:current_password', // Ensures new_password is different from current_password
            ],
            'password_confirmation' => 'required', // Alias for confirm_password
        ]);

        $user = User::where('id', Auth::user()->id)->firstOrFail();
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('profile.edit')->with('success', "আপনার পাসওয়ার্ডটি পরিবর্তন হয়েছে");
    }
}
