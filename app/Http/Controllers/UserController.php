<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $letters = array('a', 'b', 'c', 'd');
        $randomIndex = array_rand($letters);
        $photo = $letters[$randomIndex].".jpeg";

        User::create([
            'name' => $request->username,
            'photo' => $photo,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/dashboard')->with('success_alert', 'Selamat Datang 👋');
        }

    }

    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard')->with('success_alert', 'Selamat Datang 👋');
        }

        return back()->with('error_alert', 'Email atau Password Salah!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/dashboard');
    }

    public function show()
    {
        $user = auth()->user();
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        /** @var \App\Models\User $user **/
        $user = auth()->user();

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
    ];

    $defaultPhotos = ['a.jpeg', 'b.jpeg', 'c.jpeg', 'd.jpeg', 'default.jpg'];

    if ($request->hasFile('photo') && $user->photo && !in_array($user->photo, $defaultPhotos)) {
        unlink(public_path('profile-photos/' . $user->photo));
        $data['photo'] = null;
    }

    if ($request->hasFile('photo')) {
        $photoName = uniqid() . '_' . $request->file('photo')->getClientOriginalName();
        $request->file('photo')->move('profile-photos/', $photoName);
        $data['photo'] = $photoName;
    }

    $user->update($data);

        return redirect('/profile')->with('success_alert', 'data berhasil diperbarui');
    }

}
