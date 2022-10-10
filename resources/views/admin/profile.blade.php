@extends('admin.layouts.app')
@section('title', $title)

@section('content')

<div class="profile">
    <x-app-layout>    
        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')
    
                    <x-jet-section-border />
                @endif
    
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>
                @endif
    
            </div>
        </div>
    </x-app-layout>
</div>

@endsection