<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Create Post') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 bg-white border-b border-gray-200">
                  <!-- Your form for creating a new post goes here -->
                  <form action="{{ route('posts.store') }}" method="POST">
                      @csrf

                      <div class="mb-4">
                          <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                          <input type="text" name="title" id="title" class="mt-1 p-2 border border-gray-300 rounded-md w-full" required autofocus>
                      </div>

                      <div class="mb-4">
                          <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                          <textarea name="content" id="content" class="mt-1 p-2 border border-gray-300 rounded-md w-full" rows="5" required></textarea>
                      </div>

                      <div>
                          <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Create</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
