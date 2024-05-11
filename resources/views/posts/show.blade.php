<!-- resources/views/posts/show.blade.php -->

<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Post Details') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  <div class="mb-4 text-right bg-gray-50 p-4 rounded-md">
                      <h2 class="text-lg font-semibold">{{ __('Created By') }}</h2>
                      <p>{{ $post->user->name }}</p>
                      <p>{{ $post->user->email }}</p>
                      <p class="mt-2 text-gray-600 font-bold underline underline-offset-4">{{ $post->created_at->format('d/m/Y') }}</p>
                  </div>
                  <h1 class="text-2xl font-bold">{{ $post->title }}</h1>
                  <p class="mt-2 text-gray-600">{{ $post->content }}</p>
                  @auth
                  @if(auth()->user()->id === $post->user->id)
                  <div class="flex justify-end">
                      <a href="{{ route('posts.edit', $post->id) }}" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                          {{ __('Edit Post') }}
                      </a>
                      <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="ml-4">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="mt-4 px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                              {{ __('Delete Post') }}
                          </button>
                      </form>
                  </div>
                  @endif
                  @endauth
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
