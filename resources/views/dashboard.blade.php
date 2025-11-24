@extends('partials.layout')
@section('title', __('Dashboard'))

@section('content')
<div class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <div class="card bg-base-100 shadow">
        <div class="card-body">
            <h2 class="card-title">{{ __('Dashboard') }}</h2>
            <p>{{ __('You\'re logged in!') }}</p>
        </div>
    </div>
</div>
@endsection
