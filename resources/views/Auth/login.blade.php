@extends('partials.layout')
@section('title', 'Login')

@section('content')

    @if (session('status'))
        <div role="alert" class="alert alert-success w-96 mx-auto mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('status') }}</span>
        </div>
    @endif

    <div class="card w-96 bg-base-100 shadow-xl mx-auto">
        <div class="card-body">
            <h2 class="text-xl font-bold text-center mb-4">@lang('Login')</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">@lang('Email')</legend>
                    <input type="email" name="email" class="input input-bordered"
                           value="{{ old('email') }}" placeholder="@lang('Email')"
                           required autofocus autocomplete="username" />
                    @error('email')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <!-- Password -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">@lang('Password')</legend>
                    <input type="password" name="password" class="input input-bordered"
                           placeholder="@lang('Password')" required autocomplete="current-password" />
                    @error('password')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <!-- Remember -->
                <label class="label cursor-pointer">
                    <span>@lang('Remember me')</span>
                    <input name="remember" type="checkbox" class="checkbox" />
                </label>

                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                        <a class="link link-primary text-sm" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button class="btn btn-primary">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
