<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{

    public function show($user_id)
    {
        $user = User::find($user_id);

        if (Auth::id() !== $user->id) {
            $study_records = $user->study_records()->where('status', 1)->paginate(10);
        } else {
            $study_records = $user->study_records()->paginate(10);
        }

        return view('users.show', compact('user', 'study_records'));
    }
}

