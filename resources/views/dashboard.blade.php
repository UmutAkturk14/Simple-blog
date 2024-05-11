<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
          </h2>
          <a href="{{ route('posts.create') }}" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md shadow-md hover:bg-blue-700 transition duration-300 cursor-pointer">
            {{ __('Create') }}
          </a>
        </div>
    </x-slot>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          @foreach ($posts as $post)
              <a href="{{ route('posts.show', $post->id) }}">
                  <div class="hover:bg-gray-50 transition duration-200 bg-white overflow-hidden shadow-sm sm:rounded-lg mb-4">
                      <div class="p-6 text-gray-900">
                          {{ $post->title }}
                      </div>
                  </div>
              </a>
          @endforeach
      </div>
    </div>
</x-app-layout>
