<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<x-head>{{ $urlName }}</x-head>
<body class="h-full">
<x-navbar></x-navbar>
<x-header>{{ $tittle }}</x-header>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{ $slot }}
  </div>
</main>
</body>
</html>