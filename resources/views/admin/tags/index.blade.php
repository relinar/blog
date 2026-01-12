@extends('partials.layout')
@section('title', 'Tags')
@section('content')
<div class="flex justify-between items-center mb-4">
    <h1 class="text-2xl">Tags</h1>
    <a href="{{ route('tags.create') }}" class="btn btn-primary">Create Tag</a>
</div>

@if(session('success'))
    <div class="alert alert-success mb-4">{{ session('success') }}</div>
@endif

<table class="table w-full">
    <thead>
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>{{ $tag->name }}</td>
                <td class="flex gap-2">
                    <a href="{{ route('tags.edit', $tag) }}" class="btn btn-sm">Edit</a>
                    <form action="{{ route('tags.destroy', $tag) }}" method="POST" onsubmit="return confirm('Delete tag?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-error">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $tags->links() }}
@endsection
