@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
    <!-- Tambahkan style inline untuk gambar background -->
    <style>
        body {
            background-image: url('/images/ocean-background.jpg');
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

    <!-- Bungkus konten dalam wrapper dengan latar belakang putih semi-transparan -->
    <div class="content-wrapper">
        <!-- Tampilkan siapa yang sedang login -->
        <div class="mb-4 bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3">
            <p class="font-bold">Welcome, {{ $user['name'] }} ({{ $user['email'] }})</p>
            <p>You are logged in!</p>
        </div>

        <h2 class="text-3xl font-bold mb-4 text-blue-600">Contact Information</h2>

        <!-- Table data dummy -->
        <table class="table-auto w-full mb-6 border-collapse border border-gray-300">
            <thead>
                <tr class="bg-blue-500 text-white">
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Name</th>
                    <th class="px-4 py-2 border">Position</th>
                    <th class="px-4 py-2 border">Email</th>
                </tr>
            </thead>
            <tbody>
                @php
                    // Dummy data kontak
                    $contacts = [
                        ['name' => 'John Doe', 'position' => 'Manager', 'email' => 'john.doe@example.com'],
                        ['name' => 'Jane Smith', 'position' => 'Developer', 'email' => 'jane.smith@example.com'],
                        ['name' => 'Michael Johnson', 'position' => 'Designer', 'email' => 'michael.johnson@example.com'],
                        ['name' => 'Emily Davis', 'position' => 'HR', 'email' => 'emily.davis@example.com'],
                        ['name' => 'James Brown', 'position' => 'Marketing', 'email' => 'james.brown@example.com'],
                        ['name' => 'Sarah Miller', 'position' => 'Support', 'email' => 'sarah.miller@example.com'],
                        ['name' => 'David Wilson', 'position' => 'Finance', 'email' => 'david.wilson@example.com'],
                        ['name' => 'Mary Lee', 'position' => 'Sales', 'email' => 'mary.lee@example.com'],
                        ['name' => 'Chris White', 'position' => 'CEO', 'email' => 'chris.white@example.com'],
                        ['name' => 'Laura Green', 'position' => 'Admin', 'email' => 'laura.green@example.com'],
                        ['name' => 'Robert Black', 'position' => 'Analyst', 'email' => 'robert.black@example.com'],
                        ['name' => 'Nancy Adams', 'position' => 'Consultant', 'email' => 'nancy.adams@example.com'],
                        ['name' => 'Kevin Scott', 'position' => 'Security', 'email' => 'kevin.scott@example.com'],
                        ['name' => 'Sandra Moore', 'position' => 'Project Manager', 'email' => 'sandra.moore@example.com'],
                        ['name' => 'Patrick Hill', 'position' => 'Developer', 'email' => 'patrick.hill@example.com'],
                        ['name' => 'Jessica Turner', 'position' => 'QA', 'email' => 'jessica.turner@example.com'],
                        ['name' => 'Brian Carter', 'position' => 'Legal', 'email' => 'brian.carter@example.com'],
                        ['name' => 'Jennifer Mitchell', 'position' => 'Operations', 'email' => 'jennifer.mitchell@example.com'],
                        ['name' => 'Matthew Walker', 'position' => 'IT', 'email' => 'matthew.walker@example.com'],
                        ['name' => 'Sophia Anderson', 'position' => 'PR', 'email' => 'sophia.anderson@example.com'],
                    ];
                @endphp

                @foreach ($contacts as $index => $contact)
                    <tr class="bg-white border">
                        <td class="border px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $contact['name'] }}</td>
                        <td class="border px-4 py-2">{{ $contact['position'] }}</td>
                        <td class="border px-4 py-2">{{ $contact['email'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Tombol logout -->
        <form action="/logout" method="GET">
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Logout</button>
        </form>
    </div>
@endsection
