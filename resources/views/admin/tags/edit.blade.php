@extends('partials.layout')
@section('title', 'Edit Tag')
@section('content')
<h1 class="text-2xl mb-4">Edit Tag</h1>
<form action="{{ route('tags.update', $tag) }}" method="POST">
    @csrf
    @method('PUT')
    @include('admin.tags._form')
    <div class="mt-4">
        <button class="btn btn-primary">Save</button>
        <a href="{{ route('tags.index') }}" class="btn btn-ghost">Cancel</a>
    </div>
</form>
@endsection
