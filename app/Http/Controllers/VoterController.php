<?php

namespace App\Http\Controllers;

use App\Models\Voter;
use Illuminate\Http\Request;

class VoterController extends Controller
{
    public function create()
    {
        return view('voters.create');
    }

    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:voters',
            'dob' => 'required|date',
            'aadhar_card' => 'required|string',
            'phone' => 'required|string',
            'photo' => 'required|image|max:2048',
        ]);

        // Store the uploaded photo
        $photoPath = $request->file('photo')->store('photos', 'public');


        // Store voter details in the database
        Voter::create([
            'name' => $request->name,
            'email' => $request->email,
            'dob' => $request->dob,
            'aadhar_card' => $request->aadhar_card,
            'phone' => $request->phone,
            'photo' => $request->$photoPath,
        ]);

        return redirect()->route('voters.index');
    }

    public function show($id)
{
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
    header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');

    // Rest of your code
    $voter = Voter::find($id);
    return response()->json($voter);
}

    public function index()
    {
        $voters = Voter::all();
        return view('voters.index', compact('voters'));
    }
}
