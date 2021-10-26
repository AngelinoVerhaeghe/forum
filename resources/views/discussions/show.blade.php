@extends('layouts.app')

@section('title')
    Discussions | {{ $discussion->title }}
@endsection

@section('content')

    <div class="bg-white rounded-md shadow-md overflow-hidden my-5">

        <div class="mt-6 mx-6 prose max-w-none">
            <h2 class="text-2xl text-gray-700 font-semibold border-b border-gray-300 pt-6 pb-2">
                {{ $discussion->title }}
            </h2>
            {!! $discussion->content !!}

        </div>

        <div class="flex items-center justify-end  px-6 mb-6">
            <a href="{{ route('index') }}"
                class="bg-blue-600 text-white text-sm font-bold uppercase tracking-wide rounded-md shadow-md py-2 px-4 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-800 transition duration-300 ease-in-out">Back</a>
        </div>


        <div class="flex items-center justify-between space-x-4 bg-gray-200 text-sm text-gray-600 py-2 px-6">
            <span>{{ $discussion->user->name }}</span>
            <span class="italic text-xs">{{ $discussion->created_at->diffForHumans() }}</span>
        </div>
    </div>

@endsection
