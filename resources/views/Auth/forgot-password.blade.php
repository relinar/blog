<x-guest-layout>
    <div class="card w-96 bg-base-100 shadow-xl mx-auto p-6">

        <p class="text-sm text-base-content mb-4">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link.') }}
        </p>

        <!-- Status -->
        @if (session('status'))
            <div role="alert" class="alert alert-success mb-4">
                <span>{{ session('status') }}</span>
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <fieldset class="fieldset">
                <legend class="fieldset-legend">@lang('Email')</legend>
                <input type="email" name="email" class="input input-bordered"
                       value="{{ old('email') }}" required autofocus />
                @error('email')
                    <p class="text-error text-sm mt-1">{{ $message }}</p>
                @enderror
            </fieldset>

            <div class="flex justify-end mt-4">
                <button class="btn btn-primary">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
