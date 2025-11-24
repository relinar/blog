@extends('partials.layout')

@section('title', 'Verify Email')

@section('content')
<div class="card w-96 bg-base-100 shadow-xl mx-auto p-6">

    <p class="text-sm text-base-content mb-4">
        {{ __('Thanks for signing up! Before getting started, please verify your email address by clicking on the link we sent you. If you didn\'t receive the email, we can send a new one.') }}
    </p>

    @if (session('status') == 'verification-link-sent')
        <div role="alert" class="alert alert-success mb-4">
            {{ __('A new verification link has been sent to your email.') }}
        </div>
    @endif

    <div class="flex items-center justify-between mt-4">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button class="btn btn-primary">
                {{ __('Resend Verification Email') }}
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-ghost text-sm">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>

</div>
@endsection
