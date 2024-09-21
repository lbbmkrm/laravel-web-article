<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="icon" href="{{ asset('img/write.png') }}" type="image/png">
    <title>{{ $tittle }}</title>
</head>
<body>
  <main class="grid min-h-screen  place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="text-center">
    <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">Coming Soon</h1>
    <div class="mt-10 flex items-center justify-center gap-x-6">
      <a href="/" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
    </div>
  </div>
</main>
</body>
</html>