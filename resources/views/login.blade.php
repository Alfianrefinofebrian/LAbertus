<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black flex items-center justify-center h-screen">
  <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
    <h2 class="text-2xl font-semibold text-center mb-6">Login</h2>
    
    <form>
      <div class="mb-4">
        <label for="username" class="block text-gray-700 font-medium mb-2">Username</label>
        <input type="text" id="username" placeholder="Enter your username" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div class="mb-6">
        <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
        <input type="password" id="password" placeholder="Enter your password" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <div class="flex items-center justify-center">
        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
          Login
        </button>
      </div>
    </form>
  </div>
</body>
</html>
