<x-guest-layout>
    <div class="card w-96 bg-base-100 shadow-xl mx-auto p-6">

        <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email -->
            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Email')</legend>
                <input type="email" name="email" class="input input-bordered"
                       value="{{ old('email', $request->email) }}" required autofocus />
                @error('email')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </fieldset>

            <!-- Password -->
            <fieldset class="fieldset mt-4">
                <legend class="fieldset-legend">@lang('Password')</legend>
                <input type="password" name="password" class="input input-bordered"
                       required autocomplete="new-password" />
                @error('password')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </fieldset>

            <!-- Confirm -->
            <fieldset class="fieldset mt-4">
                <legend class="fieldset-legend">@lang('Confirm Password')</legend>
                <input type="password" name="password_confirmation" class="input input-bordered"
                       required autocomplete="new-password" />
                @error('password_confirmation')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </fieldset>

            <div class="flex justify-end mt-4">
                <button class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>

    </div>
</x-guest-layout>
