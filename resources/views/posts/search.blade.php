@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="py-10">
            <h1 class="text-4xl font-bold text-center text-gray-900">Blog Posts Search Results</h1>
        </div>
        @if (session()->has('message'))
            <div class="w-4/5 mx-auto mt-8">
                <p class="w-2/6 mx-auto mb-4 text-gray-50 bg-green-500 squared-lg py-4 px-6 text-center">{{ session()->get('message') }}</p>
            </div>
        @endif
        @if (Auth::check())
            <div class="mt-8 text-center">
                <a href="/blog/create" class="inline-block px-8 py-4 squared-lg text-lg font-semibold bg-green-500 text-gray-100 hover:bg-green-600">Create Post</a>
            </div>
        @endif
        <h2 class="text-center text-2xl font-semibold mt-10">Search Results for "{{ $searchQuery }}"</h2>
        @if ($posts->isEmpty())
            <div class="w-4/5 m-auto text-center mt-10">
                <p class="text-gray-600 text-lg">No results found.</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                @foreach ($posts as $post)
                    <div class="bg-white shadow-lg squared-lg overflow-hidden">
                        <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-900">{{ $post->title }}</h2>
                            <p class="text-gray-600 mt-2">By <span class="font-semibold">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}</p>
                            <p class="text-gray-800 mt-4">{{ $post->description }}</p>
                            <a href="/blog/{{ $post->slug }}" class="inline-block mt-4 px-8 py-4 squared-lg text-lg font-semibold bg-green-500 text-gray-100 hover:bg-green-600">Keep Reading</a>
                            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                <div class="mt-4 flex justify-end">
                                    <a href="/blog/{{ $post->slug }}/edit" class="inline-block px-4 py-2 text-sm font-semibold text-gray-700 bg-gray-200 squared-lg hover:bg-gray-300 transition duration-300 ease-in-out">Edit</a>
                                    <form action="/blog/{{ $post->slug }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="inline-block px-4 py-2 text-sm font-semibold text-red-500 bg-gray-200 squared-lg hover:bg-red-200 transition duration-300 ease-in-out">Delete</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
