<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $customMessages = [
            'phone.unique' => 'The phone number is already registered. Please use a different one.',
        ];

        // Validate the incoming request data
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'phone' => 'required|string|max:11|unique:registrations,phone',
            ], $customMessages);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $e->errors(),
            ], 422);
        }
    
        // Create a new registration
        $registration = Registration::create([
            'name' => $request->name,
            'lastName' => $request->lastName,
            'phone' => $request->phone,
        ]);
    
        // Return a successful response
        return response()->json([
            'message' => 'Registration successful!',
            'data' => $registration
        ], 201);  
    }
    
    
}
