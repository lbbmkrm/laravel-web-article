<x-layout>
  <x-slot:urlName>{{ $web['urlName'] }}</x-slot>
  <x-slot:tittle>{{ $web['tittle'] }}</x-slot>
  <x-slot:content>{{ $web['content'] }}</x-slot>
</x-layout>

<div class="py-4 px-4 mx-auto max-w-screen-xl lg:pb-12 lg:pt-4  lg:px-0 ">
  <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
    @foreach ($posts as $post)
      <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-between items-center mb-5 text-gray-500">
          <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
            <a href="{{ url('/category/' . $post->category->name) }}">{{ $post->category->name }}</a>

          </span>
          <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
        </div>
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
          <a href="/article/{{ $post['slug'] }}">{{ $post['tittle'] }}</a>
        </h2>
        <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post['body'], 100) }}</p>
        <div class="flex justify-between items-center">
          <div class="flex items-center space-x-4">
            <img class="w-7 h-7 rounded-full" src="{{ asset('img/user.png') }}" alt="Bonnie Green avatar" />
           <a href="{{ url('/author/' . $post->user->username) }}">

              <span class="font-medium dark:text-white">{{ $post->user->name }}</span>
            </a>
          </div>
          <a href="/article/{{ $post['slug'] }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
            Read more
            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
          </a>
        </div>
      </article>
    @endforeach
  </div>
</div>
<div class="mb-12 p-4">
  {{ $posts->links() }}
</div>
</main>
</body>
</html>
