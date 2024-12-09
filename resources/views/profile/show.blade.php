@extends('layouts.layout')
@section('content')


<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
        <div
            class="bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
            @livewire('profile.update-profile-information-form')
        </div>
        <x-section-border />
    @endif

    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        <div
            class="mt-10 sm:mt-0 bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
            @livewire('profile.update-password-form')
        </div>
        <x-section-border />
    @endif

    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
        <div
            class="mt-10 sm:mt-0 bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
            @livewire('profile.two-factor-authentication-form')
        </div>
        <x-section-border />
    @endif

    <div
        class="mt-10 sm:mt-0 bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
        @livewire('profile.logout-other-browser-sessions-form')
    </div>

    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
        <x-section-border />
        <div
            class="mt-10 sm:mt-0 bg-gray-100 p-6 rounded-lg shadow hover:shadow-lg transform transition-transform duration-300 hover:-translate-y-1">
            @livewire('profile.delete-user-form')
        </div>
    @endif
</div>


@endsection