<x-guest-layout>

@if(isset($usid))
    <form method="POST" action="{{ route('register') }}">
        @csrf
            @if(isset($usid))
                <div><x-text-input id="unid" class="block mt-1 w-full" type="hidden" name="unid" value="{{$usid}}" /></div>
            @endif

            @if(isset($randno))
            <div>
                <x-input-label for="randno1" :value="__('Token ID')" />
                <x-text-input id="randno1" class="block mt-1 w-full" type="text" name="randno1" value="{{$randno}}"  />
                    <x-input-error :messages="$errors->get('randno1')" class="mt-2" />
                </div>
            @endif

        <!-- Name -->
        @if(isset($namehead))
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$namehead}}" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        @endif
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    @else
    <form method="POST" action="check">
        @csrf
        <div><x-text-input id="stsu" class="block mt-1 w-full" type="hidden" name="stsu" value="yestoken" /></div>
         <!-- Token -->
         <div class="mt-4">
            <x-input-label for="tokend" :value="__('Token')" />
            <x-text-input id="tokend" class="block mt-1 w-full" type="text" name="tokend" :value="old('tokend')" required />
            <x-input-error :messages="$errors->get('tokend')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="hname" :value="__('Head Name of Household')" />
            <x-text-input id="hname" class="block mt-1 w-full" type="text" name="hname" :value="old('hname')" required  />
            <x-input-error :messages="$errors->get('hname')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="mrcbd" :value="__('MRCB')" />
            <x-text-input id="mrcbd" class="block mt-1 w-full" type="text" name="mrcbd" :value="old('mrcbd')" required  />
            <x-input-error :messages="$errors->get('mrcbd')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ url('/') }}">
                {{ __('Back to Home') }}
            </a>
            <x-primary-button class="ml-4">
                {{ __('Verify') }}
            </x-primary-button>
            
        </div>
    </form>
    @endif
</x-guest-layout>
