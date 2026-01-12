@extends('partials.layout')
@section('title', 'Create Tag')
@section('content')
<h1 class="text-2xl mb-4">Create Tag</h1>
<form action="{{ route('tags.store') }}" method="POST">
    @csrf
    @include('admin.tags._form')
    <div class="mt-4">
        <button class="btn btn-primary">Create</button>
        <a href="{{ route('tags.index') }}" class="btn btn-ghost">Cancel</a>
    </div>
</form>
@endsection
