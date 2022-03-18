<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        $users = User::where('is_admin', 0)->get();
        return view('admin', compact('users'));
    }

    public function approve($id)
    {
        $user = User::find($id)->get();
        $user->update([
            'is_approved' => 1
        ]);
        return redirect()->route('adminHome');
    }
}
