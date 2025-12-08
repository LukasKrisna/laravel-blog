<x-layout :title="$title">
    <div class="space-y-6">
        {{-- <article class="bg-gray-800 rounded-lg p-6 shadow-lg">
            <h2 class="text-2xl font-bold text-white mb-2">{{ $post['title'] }}</h2>
            <div class="text-gray-400 text-sm mb-4">
               <a href="/authors/{{ $post->author->username }}" class="hover:text-white underline">{{ $post->author->name }}</a> | 1 January 2025
            </div>
            <p class="text-gray-300 mb-4 leading-relaxed">{{ $post['body'] }}</p>
            <a href="/posts" class="text-indigo-400 hover:text-indigo-300 font-medium">&laquo; Back to all posts.</a>
        </article> --}}


<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
        <a href="/posts" class="text-indigo-400 text-sm hover:text-indigo-300 font-medium">&laquo; Back to all posts.</a>
          <header class="my-7 lg:mb-6 not-format">
              <address class="flex items-center mb-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                      <div>
                          <a href="/posts?author={{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                          <div class="flex items-center gap-2 my-1">
                            <a href="/posts?category={{ $post->category->slug }}">
                              <span class="{{ $post->category->color }} inline-block text-xs font-semibold px-2.5 py-0.5 rounded hover:opacity-80 transition">
                                {{ $post->category->name }}
                              </span>
                            </a>
                          </div>
                          <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
          </header>
            <p>{{ $post->body }}</p>
      </article>
  </div>
</main>
    </div>
</x-layout>