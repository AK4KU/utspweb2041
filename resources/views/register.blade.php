@extends('layouts.app')

@section('title', 'Register Page')

@section('content')

<style>
    body {
        background-image: url('/images/register.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
    }

    /* Style untuk menambahkan latar belakang semi-transparan untuk konten agar lebih mudah dibaca */
    .content-wrapper {
        background-color: rgba(255, 255, 255, 0.8); /* Semi transparan */
        padding: 20px;
        border-radius: 10px;
    }
</style>
    <h2 class="text-3xl font-bold mb-4 text-blue-600">Register</h2>

    <!-- Form Register -->
    <form action="/register" method="POST">
        @csrf

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3" required>

            <!-- Tambahkan checkbox untuk show password -->
            <div class="mt-2">
                <input type="checkbox" id="show-password" onclick="togglePassword('password')">
                <label for="show-password" class="text-sm text-gray-600">Show Password</label>
            </div>
        </div>

        <!-- Tombol Register -->
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Register</button>

        <!-- Link ke halaman login -->
        <div class="mt-4">
            <a href="/login" class="text-blue-600 hover:text-blue-800 text-sm">Already have an account? Login here</a>
        </div>
    </form>

    <!-- Notifikasi berhasil register -->
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mt-4">
            {{ session('success') }}
        </div>
    @endif
@endsection

<script>
    function togglePassword(inputId) {
        var passwordInput = document.getElementById(inputId);
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>
