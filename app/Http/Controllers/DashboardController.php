<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index()
    {
        $surats = Surat::orderBy('updated_at', 'desc')->get();// Fetch all users from the database
        return view('dashboard', compact('surats'));
    }
}
