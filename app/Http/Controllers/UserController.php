<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): View
    {
        return view('admin.users', [
            'users' => User::get(),
        ]);
    }

    public function create ()
    {
        return view('admin.users.create');
    }

    public function destroy (User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('admin.users');
    }
}
