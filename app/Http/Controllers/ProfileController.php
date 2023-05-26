<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showPage(User $user)
    {
        return view('profile', [
            'profile' => $user
        ]);
    }
}
