<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<x-head>{{ $web['urlName'] }}</x-head>
<body class="h-full ">
<x-navbar></x-navbar>
<main class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
              <address class="flex items-center mb-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="{{ asset("img/user.png") }}" alt="Author">
                      <div>
                          <a href="/author/{{ $post->user->username}}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->user->name }}</a>
                          <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->created_at }}</p>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->tittle }}</h1>
          </header>
          <p class="lead">{{ $post->body }}
          </p>


</main>
</body>
</html>