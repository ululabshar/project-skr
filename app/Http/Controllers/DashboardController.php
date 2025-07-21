<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index()
    {
        $users = User::all(); // Fetch all users from the database
        return view('dashboard', compact('users'));
    }
}
