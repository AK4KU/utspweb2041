<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// Halaman kontak
Route::get('/contact', function () {
    // Cek apakah pengguna sudah login
    if (!Session::has('is_logged_in')) {
        return redirect()->route('login');
    }

    // Ambil data pengguna yang login
    $user = Session::get('registered_user');
    return view('contact', ['user' => $user]);
})->name('contact');

// Halaman login
Route::get('', function () {
    return view('login');
})->name('login');

// Halaman login
Route::get('/login', function () {
    return view('login');
})->name('login');

// Halaman register
Route::get('/register', function () {
    return view('register');
})->name('register');

// Simulasi POST login
Route::post('/login', function (\Illuminate\Http\Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    // Cek apakah data sesuai dengan yang di-register
    $registeredUser = Session::get('registered_user');
    if ($registeredUser && $registeredUser['email'] === $email && $registeredUser['password'] === $password) {
        // Simpan session login
        Session::put('is_logged_in', true);
        return redirect()->route('contact');
    }

    return redirect()->route('login')->withErrors(['login_failed' => 'Invalid email or password.']);
});

// Simulasi POST register
Route::post('/register', function (\Illuminate\Http\Request $request) {
    // Simpan data user di session
    $userData = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => $request->input('password'), // Simulasi simpan password
    ];
    Session::put('registered_user', $userData);

    return redirect()->route('login')->with('message', 'Registration successful. Please login.');
});

// Route untuk logout
Route::get('/logout', function () {
    // Hapus session login
    Session::forget('is_logged_in');
    return redirect()->route('login')->with('message', 'You have been logged out successfully.');
});


