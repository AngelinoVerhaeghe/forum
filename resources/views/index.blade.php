@extends('layouts.app')

@section('content')

    <div class="grid lg:grid-cols-12 gap-6 px-2 lg:px-0">

        <div class="lg:col-span-3 bg-gray-800 rounded-md shadow-md p-6 lg:max-h-3/5">
            <h2 class="text-xl font-semibold text-white mb-6 px-4">
                Channels
            </h2>


            <div class="flex flex-col space-y-4">
                @foreach ($channels as $channel)
                    <a href="#"
                        class="text-white font-medium hover:bg-blue-500 rounded-md hover:shadow-md py-2 px-4 transition duration-300 ease-in-out">
                        {{ $channel->name }}
                    </a>
                @endforeach
            </div>
        </div>

        <div class="lg:col-span-9 bg-gray-800 rounded-md shadow-md p-6">
            <div class="flex justify-between">
                <h2 class="text-2xl font-semibold text-white">Discussionboard</h2>
                <a href="{{ route('discussions.create') }}"
                    class="bg-green-500 text-white font-bold rounded-lg shadow-lg py-2 px-4 hover:bg-green-600 transition duration-300 ease-in-out">Add
                    Discussion</a>
            </div>


            @foreach ($discussions as $discussion)
                <div class="bg-white rounded-md shadow-md overflow-hidden my-5">

                    <div class="mt-6 mx-6 line-clamp-6 prose max-w-none">
                        <h2 class="text-2xl text-gray-700 font-semibold border-b border-gray-300 pt-6 pb-2">
                            {{ $discussion->title }}
                        </h2>
                        {!! $discussion->content !!}

                    </div>

                    <div class="flex items-center justify-end  px-6 mb-6">
                        <a href="#"
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

        {{ $discussions->links() }}

    </div>

@endsection
