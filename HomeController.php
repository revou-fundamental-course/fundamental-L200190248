<?php

namespace App\Http\Controllers;

use App\Models\Home; // Pastikan untuk menggunakan "Home" dengan huruf besar
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('home');
    }

    // public function create()
    // {
    //     return view('homes.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'dob' => 'required|date',
    //         'gender' => 'required',
    //     ]);

    //     Home::create($request->all()); // Gunakan "Home" dengan huruf besar

    //     return redirect()->route('homes.index')
    //         ->with('success', 'Home created successfully.');
    // }
}
