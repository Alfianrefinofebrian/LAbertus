<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Color Palette</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-green-400">

  <header class="bg-black text-white flex justify-between items-center p-4">
    <div class="text-xl"> 
      <img src="logo.png" alt="Logo" class="h-10 w-10">
    </div>
    <nav class="flex space-x-4">
      <a href="#" class="hover:text-gray-300">Home</a>
      <a href="#" class="hover:text-gray-300">About</a>
      <a href="#" class="hover:text-gray-300">Services</a>
      <a href="#" class="hover:text-gray-300">Contact</a>
    </nav>
  </header>

  <main class="flex flex-col items-center justify-center h-screen">
    <h1 class="text-4xl font-bold mb-4">Find Your Color!</h1>
    <h2 class="text-lg mb-6">Color Palette</h2>
    <button class="bg-red-500 text-white px-6 py-3 rounded-lg hover:bg-red-600">Find Now</button>
  </main>

</body>
</html>
