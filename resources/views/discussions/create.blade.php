@extends('layouts.app')

@section('content')

    <div class="bg-white rounded-md shadow-lg overflow-hidden">
        <div class="flex items-center justify-between bg-gray-200">
            <h1 class="font-semibold  text-gray-700 py-5 px-6">
                Create Discussion
            </h1>
        </div>

        <div class="p-6">
            <form action="{{ route('discussions.store') }}" method="POST">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                            value="">
                        @if ($errors->has('title'))
                            <span class="text-sm text-red-600">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700 mb-1">
                            Content
                        </label>
                        <input id="content" type="hidden" name="content">
                        <trix-editor input="content"
                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md">
                        </trix-editor>
                        @if ($errors->has('content'))
                            <span class="text-sm text-red-600">{{ $errors->first('content') }}</span>
                        @endif
                    </div>
                    <div>
                        <label for="channel" class="block text-sm font-medium text-gray-700">Channel</label>
                        <select id="channel" name="channel" autocomplete="channel"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                            required>
                            @foreach ($channels as $channel)
                                <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="flex items-center justify-end space-x-2">
                        <a href="{{ route('index') }}"
                            class="py-2 px-4 shadow-sm text-sm font-medium rounded-md text-white bg-gray-500 hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition duration-300 ease-in-out">Cancel</a>
                        <button type="submit"
                            class="py-2 px-4 shadow-sm text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition duration-300 ease-in-out">
                            Create Discussion
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">

@endsection

@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>

@endsection
