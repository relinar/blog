<x-guest-layout>
    <div class="card w-96 bg-base-100 shadow-xl mx-auto p-6">
        <p class="text-sm text-base-content mb-4">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Password')</legend>
                <input type="password" name="password" class="input input-bordered"
                       required autocomplete="current-password" />
                @error('password')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </fieldset>

            <div class="flex justify-end mt-4">
                <button class="btn btn-primary">
                    {{ __('Confirm') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
