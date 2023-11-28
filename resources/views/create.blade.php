@extends('layouts.app')

@section('title')
    Add Task
@endsection
@section('content')
<div>
    <h2 class="text-2xl px-3">Add Task</h2>
    <div class="my-5">
        <form action="{{ route('store.task') }}" method="POST">
          @csrf
            <div class="mb-6 px-3 w-90">
              <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
              <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('title') }}">
              @error('title')
              <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-6 px-3 w-90">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                <input type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('description') }}">
                @error('description')
              <p class="text-red-500">{{ $message }}</p>
              @enderror
            </div>
            <div class="mb-6 px-3 w-90">
                <label for="long_description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Long Description</label>
                <textarea type="text" id="long_description" name="long_description" rows="7" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('long_description') }}"></textarea>
              @error('long_description')
              <p class="text-red-500">{{ $message }}</p>
              @enderror
              </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 mx-3 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add Task</button>
          </form>
    </div>
</div>
@endsection