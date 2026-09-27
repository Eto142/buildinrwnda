<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Home — Rwanda 2000
Route::get('/', function () {
    return view('home.homepage');
});

// Proposal form submission
Route::post('/submit-proposal', function (Request $request) {
    $validated = $request->validate([
        'full_name'   => 'required|string|max:255',
        'company'     => 'required|string|max:255',
        'country'     => 'required|string|max:100',
        'email'       => 'required|email|max:255',
        'project_name'      => 'required|string|max:255',
        'sector'            => 'required|string|max:100',
        'land_required'     => 'required|string|max:100',
        'estimated_investment' => 'required|string|max:100',
        'why_rwanda'        => 'nullable|string|max:5000',
    ]);

    // In production: store to DB, send notification email, etc.
    // For now return JSON success
    return response()->json([
        'success' => true,
        'message' => 'Your proposal has been received. We will be in touch in due course.',
    ]);
})->name('proposal.submit');
