@extends('partials.layout')
@section('title', 'Register')

@section('content')

    <div class="card w-96 bg-base-100 shadow-xl mx-auto">
        <div class="card-body">
            <h2 class="text-xl font-bold text-center mb-4">@lang('Register')</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">@lang('Name')</legend>
                    <input type="text" name="name" class="input input-bordered"
                           value="{{ old('name') }}" placeholder="@lang('Name')"
                           required autofocus autocomplete="name" />
                    @error('name')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <!-- Email -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">@lang('Email')</legend>
                    <input type="email" name="email" class="input input-bordered"
                           value="{{ old('email') }}" placeholder="@lang('Email')"
                           required autocomplete="username" />
                    @error('email')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <!-- Password -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">@lang('Password')</legend>
                    <input type="password" name="password" class="input input-bordered"
                           placeholder="@lang('Password')" required autocomplete="new-password" />
                    @error('password')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <!-- Confirm -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">@lang('Confirm Password')</legend>
                    <input type="password" name="password_confirmation" class="input input-bordered"
                           placeholder="@lang('Confirm Password')" required autocomplete="new-password" />
                    @error('password_confirmation')
                        <p class="text-error text-sm mt-1">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="flex items-center justify-between mt-4">
                    <a class="link link-primary text-sm" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
