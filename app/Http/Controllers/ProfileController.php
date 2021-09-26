<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function profile($id) {
        $profile = Profile::where('code', $id)->first();
        return view('profile')->with('profile', $profile);
    }
}
