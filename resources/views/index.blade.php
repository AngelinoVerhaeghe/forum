@extends('layouts.app')

@section('title')
    Discussions | Home
@endsection

@section('content')

    <div class="grid lg:grid-cols-12 gap-6 px-2 lg:px-0">

        <div class="lg:col-span-5 lg:max-h-3/5">
            <h2 class="text-3xl font-semibold font-lobster text-cyan-700 mb-6">
                Welcome to our forum
            </h2>
            <p class="mt-5 font-light">Created and Styled by Angelino Verhaeghe, Junior Full Stack Developer.
                Working with Laravel and Tailwindcss. This is a project i have made to make a forum with add discussions and
                replies.
            </p>
        </div>

        <div class="lg:col-span-7">
            <div class="flex justify-between">
                <h2 class="text-3xl font-semibold text-cyan-700">Recent Discussions</h2>
                <a href="{{ route('discussions.index') }}"
                    class="bg-green-500 text-white font-bold rounded-lg shadow-lg py-2 px-4 hover:bg-green-600 transition duration-300 ease-in-out">Discussionboard</a>
            </div>


            @foreach ($recent_discussions as $discussion)
                <div class="bg-white rounded-md shadow-md overflow-hidden my-5">

                    <div class="mt-6 mx-6 line-clamp-2 prose max-w-none">
                        <h2 class="text-2xl text-gray-700 font-semibold font-lobster border-b border-gray-300 pt-6 pb-2">
                            {{ $discussion->title }}
                        </h2>
                        {!! $discussion->content !!}

                    </div>

                    <div class="flex items-center justify-end  px-6 my-4">
                        <a href="{{ route('discussions.show', $discussion->slug) }}"
                            class="bg-blue-600 text-white text-sm font-bold uppercase tracking-wide rounded-md shadow-md py-2 px-4 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-800 transition duration-300 ease-in-out">Read
                            More</a>
                    </div>


                    <div class="flex items-center justify-between space-x-4 bg-gray-200 text-sm text-gray-600 py-2 px-6">
                        <span>{{ $discussion->user->name }}</span>
                        <span class="italic text-xs">{{ $discussion->created_at->diffForHumans() }}</span>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

@endsection
