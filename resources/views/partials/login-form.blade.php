<form action="/login" method="POST">
    @csrf
    <div class="mb-4">
        <label for="email" class="block text-gray-700">Email:</label>
        <input type="email" name="email" id="email" class="border rounded w-full py-2 px-3" required>
    </div>

    <div class="mb-4">
        <label for="password" class="block text-gray-700">Password:</label>
        <input type="password" name="password" id="password" class="border rounded w-full py-2 px-3" required>
    </div>

    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
</form>
