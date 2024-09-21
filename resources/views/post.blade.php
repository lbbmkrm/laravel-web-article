<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<x-head>{{ $web['urlName'] }}</x-head>
<body class="h-full ">
<x-navbar></x-navbar>
<main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">



<article class="py-8 px-4 m-4 ">
    <h2 class="mb-6 lg:text-6xl text-3xl text-center tracking-tight font-bold text-gray-900 "> {{ $post['tittle'] }}</h2>
    <div class="mb-2 lg:text-2xl text-base text-gray-500">
      <a class="text-blue-600 hover:text-blue-200 hover:underline" href="/author/{{  $post->user->username  }}">{{ $post->user->name }}</a> | <a href="/category/{{ $post->category->name }}" class=" hover:text-blue-200 hover:underline">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
    </div>
  <p class="my-4 lg:font-2xl text-base font-light">{{ $post['body'] }}</p>
  <a href="/" class="text-blue-600 font-medium hover:underline">&laquo;Back</a>
</article>  


</main>
</body>
</html>