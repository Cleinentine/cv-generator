<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = Validator::make($request->all(), [
            'profile_picture' => 'nullable|image|mimes:jpg,bmp,png|max:512',
            'first_name' => 'required|string|regex:/^[A-Za-z\s\-,\.\']+$/',
            'middle_name' => 'nullable|string|regex:/^[A-Za-z\s\-,\.\']+$/',
            'last_name' => 'required|string|regex:/^[A-Za-z\s\-,\.\']+$/',
            'address' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|starts_with:9',
            'password' => 'required|confirmed',
            'is_admin' => '0'
        ]);

        if ($form->fails()) {
            return redirect()
                ->route('register')
                ->withErrors($form)
                ->withInput();
        } else {
            $user = User::create([
                'profile_picture' => $request->profile_picture,
                'first_name' => $request->first_name,
                'middle_name' => $request->middle_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => $request->password,
                'is_admin' => 0,
            ]);

            if ($request->hasFile('profile_picture')) {
                Storage::disk('public')->put('profiles', $request->profile_picture);
            }

            Auth::login($user);

            return redirect()->route('home');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
