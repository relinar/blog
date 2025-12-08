@extends('partials.layout')
@section('title', $post->title)
@section('content')
    @include('partials.post-card', ['full' => true])

    @if (session('status'))
        <div class="alert alert-success shadow-sm my-3">
            {{ session('status') }}
        </div>
    @endif

    @auth
        <div class="card bg-base-200 shadow-sm my-4">
            <div class="card-body">
                <h2 class="card-title">Add a comment</h2>
                <form method="POST" action="{{ route('comments.store', $post) }}" class="flex flex-col gap-3">
                    @csrf
                    <div class="form-control">
                        <label class="label" for="body">
                            <span class="label-text">Your comment</span>
                        </label>
                        <textarea name="body" id="body" rows="3" class="textarea textarea-bordered" required>{{ old('body') }}</textarea>
                        @error('body')
                            <p class="text-error text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-control">
                        <button type="submit" class="btn btn-primary">Post comment</button>
                    </div>
                </form>
            </div>
        </div>
    @else
        <div class="alert my-4 shadow-sm">
            <span>Please <a class="link" href="{{ route('login') }}">log in</a> to leave a comment.</span>
        </div>
    @endauth

    @foreach ($post->comments as $comment)
        <div class="card bg-base-300 shadow-sm my-2">
            <div class="card-body">
                <p>{{ $comment->body }}</p>
                <p class="text-base-content/50">{{ $comment->user->name }}</p>
            </div>
        </div>
    @endforeach
@endsection
