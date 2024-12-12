<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Username' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255|unique:users',
            'Password' => 'required|string|min:6',
            'ProfileImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Menyimpan gambar profil jika ada
        $profileImagePath = null;
        if ($request->hasFile('ProfileImage')) {
            $profileImagePath = $request->file('ProfileImage')->store('profile_images', 'public'); // Menyimpan gambar di folder 'public/profile_images'
        }

        $user = User::create([
            'Username' => $request->Username,
            'Email' => $request->Email,
            'Password' => bcrypt($request->Password),
            'profile_image' => $profileImagePath,
        ]);

        // Generate token
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => 'success',
            'message' => 'User registered successfully',
            'data' => $user,
            'token' => $token
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
            'Password' => 'required',
        ]);

        // Normalize email to lowercase
        $user = User::where('Email', strtolower($request->Email))->first();

        if ($user && Hash::check($request->Password, $user->Password)) {
            // Generate token
            $token = $user->createToken('MyLaravelApp')->plainTextToken;

            // Menyusun URL gambar profil jika ada
            $profileImageUrl = $user->profile_image ? asset('storage/' . $user->profile_image) : null;

            return response()->json([
                'status' => 'success',
                'message' => 'Login successful',
                'data' => [
                    'user' => $user,
                    'profile_image_url' => $profileImageUrl, // Mengirimkan URL gambar profil
                ],
                'token' => $token,
            ], 200);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'Email atau password salah.',
        ], 401);
    }




    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Logout successful'
        ], 200);
    }
}
