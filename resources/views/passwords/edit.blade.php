<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Passwords') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form method="POST" action="{{ route('passwords.update',$password) }}" class="px-4 py-4">
                    @csrf
                    @method("PUT")
                    <div>
                        <x-jet-label for="header" value="{{ __('Firma Kodu') }}" />
                        <x-jet-input id="header" class="block mt-1 w-full" type="text" name="header" :value="$password->header" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="website" value="{{ __('Firma Adı') }}" />
                        <x-jet-input id="website" class="block mt-1 w-full" type="text" name="website" :value="$password->website" required />
                    </div>

                    <div>
                        <x-jet-label for="username" value="{{ __('Email') }}" />
                        <x-jet-input id="username" class="block mt-1 w-full" type="username" name="username" :value="$password->username" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Telefon') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="text" name="password" :value="$password->password" required  />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <x-jet-button class="ml-4">
                            {{ __('Kaydet') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
