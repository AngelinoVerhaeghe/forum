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

        <div class="flex items-center justify-between space-x-4 bg-gray-200 text-sm text-gray-600 py-2 px-6 mt-6">
            <span>{{ $discussion->user->name }}</span>
            <span class="italic text-xs">{{ $discussion->created_at->diffForHumans() }}</span>
        </div>
    </div>

    @if ($discussion->bestReply)
        <div class="bg-green-600 text-white rounded-md shadow-md overflow-hidden">
            <div class="flex items-center justify-between border-b bg-green-900 px-6 py-3">
                <h2 class="uppercase font-lobster font-bold text-2xl text-white">Best Reply</h2>
                <span class="text-sm italic">{{ $discussion->user->name }}</span>
            </div>

            <div class="p-6">
                {!! $discussion->bestReply->content !!}
            </div>
        </div>

    @endif

    <div class="bg-white rounded-md shadow-md overflow-hidden my-5">
        <div class="flex items-center bg-gray-200 h-12">
            <h2 class="ml-6 font-lobster font-bold text-2xl">Add a reply</h2>
        </div>
        <div class="p-6">
            <form action="{{ route('replies.store', $discussion->slug) }}" method="POST">
                @csrf
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">
                        Reply
                    </label>
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content"
                        class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md">
                    </trix-editor>
                </div>
                <div class="flex items-center justify-end mt-6">
                    <button type="submit"
                        class="py-2 px-4 shadow-sm text-sm font-medium rounded-md text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition duration-300 ease-in-out">
                        Add reply
                    </button>
                </div>
            </form>
        </div>
    </div>

    @foreach ($discussion->replies()->paginate(3) as $reply)
        <div class="bg-white rounded-md shadow-md overflow-hidden my-5">
            <div class="flex items-center justify-between space-x-4 bg-gray-200 text-sm text-gray-600 py-2 px-6">
                <span>{{ $reply->owner->name }} - <i>{{ $reply->created_at->diffForHumans() }}</i></span>
                @if (auth()->user()->id === $discussion->user_id)
                    <form
                        action="{{ route('discussions.best-reply', ['discussion' => $discussion->slug, 'reply' => $reply->id]) }}"
                        method="POST">
                        @csrf
                        <button type="submit" class="bg-orange-400 text-sm text-white rounded-md shadow-md px-4 py-2">Mark
                            as
                            best</button>
                    </form>

                @endif

            </div>

            <div class="p-6">
                {!! $reply->content !!}
            </div>

        </div>

    @endforeach

    {{ $discussion->replies()->paginate(3)->links() }}

    <div class="flex items-center justify-end">
        <a href="{{ route('index') }}"
            class="bg-blue-600 text-white text-sm font-bold uppercase tracking-wide rounded-md shadow-md py-2 px-4 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-800 transition duration-300 ease-in-out">Back</a>
    </div>

@endsection

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">

@endsection

@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>

@endsection
