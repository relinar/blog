<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-base-content">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="card bg-base-100 shadow-xl">
                <div class="card-body text-base-content">
                    {{ __("You're logged in!") }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
