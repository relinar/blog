<section class="mt-6">
    <header>
        <h2 class="text-lg font-bold text-base-content">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-base-content/70">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <!-- Current Password -->
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('Current Password') }}</legend>
            <input
                id="update_password_current_password"
                name="current_password"
                type="password"
                class="input input-bordered w-full"
                autocomplete="current-password"
            />
            @error('current_password', 'updatePassword')
                <p class="text-error text-sm mt-1">{{ $message }}</p>
            @enderror
        </fieldset>

        <!-- New Password -->
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('New Password') }}</legend>
            <input
                id="update_password_password"
                name="password"
                type="password"
                class="input input-bordered w-full"
                autocomplete="new-password"
            />
            @error('password', 'updatePassword')
                <p class="text-error text-sm mt-1">{{ $message }}</p>
            @enderror
        </fieldset>

        <!-- Confirm Password -->
        <fieldset class="fieldset">
            <legend class="fieldset-legend">{{ __('Confirm Password') }}</legend>
            <input
                id="update_password_password_confirmation"
                name="password_confirmation"
                type="password"
                class="input input-bordered w-full"
                autocomplete="new-password"
            />
            @error('password_confirmation', 'updatePassword')
                <p class="text-error text-sm mt-1">{{ $message }}</p>
            @enderror
        </fieldset>

        <!-- Save Button + "Saved" Puff Message -->
        <div class="flex items-center gap-4">
            <button class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-base-content/70"
                >
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>
