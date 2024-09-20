
<x-layout>
  <x-slot:urlName>{{ $web['urlName'] }}</x-slot>
  <x-slot:tittle>{{ $web['tittle'] }}</x-slot>
  <x-slot:content>{{ $web['content'] }}</x-slot>
</x-layout>


@foreach ($posts as $post)
  <article class="py-8 px-4 m-4 max-w-screen-sm shadow-lg">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900 hover:underline hover:text-gray-700"> <a href="/blog/{{ $post['slug'] }}">{{ $post['tittle'] }}</a></h2>
    <div class="text-base text-gray-500">
      <a class="text-blue-600 hover:text-blue-200 hover:underline" href="/author/{{  $post->user->username  }}">{{ $post->user->name }}</a> | <a href="/category/{{ $post->category->name }}" class=" hover:text-blue-200 hover:underline">{{ $post->category->name }}</a> | {{ $post->created_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light">{{ Str::limit($post['body'] , 100 ) }}</p>
    <a href="/blog/{{ $post['slug'] }}" class="text-blue-600 font-medium hover:underline">Read more &raquo;</a>
</article>  
@endforeach
</main>
</body>
</html>

