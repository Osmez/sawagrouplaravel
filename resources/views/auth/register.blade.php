<x-guest-layout>
    <x-nav-link :href='url("/")'>
        {{__('website.homepage')}}
     </x-nav-link>
    @if (App::getLocale() == 'ar')
    <form method="POST" action="{{ route('register') }}">
        @csrf
       

        <!-- Name -->
        <div>
            <x-input-label for="name" class="text-right" :value="__('website.name')" />
            <x-text-input id="name" dir="rtl" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" class="text-right" :value="__('website.email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password"  class="text-right" :value="__('website.password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation"  class="text-right" :value="__('website.confirmpassword')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div>
            <x-input-label for="phone"  class="text-right" :value="__('website.phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Sex -->
        <div class="mt-4">
            <x-input-label for="sex" class="text-right" :value="__('website.sex')"/>
            <div class=" flex justify-end">
                <div class="flex items-center me-4">
                    <input class="w-4 h-4 text-gray-700 dark:text-white border-gray-300 focus:ring-red-600" type="radio" id="other" name="sex" value="prefer not to say">
                    <label for="sex" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{__('website.prefer')}}</label>
                </div>
                
                <div class="flex items-center me-4">    
                    <input class="w-4 h-4 text-gray-700 dark:text-white border-gray-300 focus:ring-red-600" type="radio" id="female" name="sex" value="Female">
                    <label for="sex" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{__('website.female')}}</label>
                </div>
                
                <div class="flex items-center me-4">
                    <input class="w-4 h-4 text-gray-700 dark:text-white border-gray-300 focus:ring-red-600" type="radio" id="male" name="sex" value="Male" checked>
                    <label for="sex" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{__('website.male')}}</label>
                </div>
            </div>    
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('website.alreadyregistered') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('website.register') }}
            </x-primary-button>
        </div>
    </form>

    @else

    <form method="POST" action="{{ route('register') }}">
        @csrf
       
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('website.name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('website.email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('website.password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('website.confirmpassword')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Phone -->
        <div>
            <x-input-label for="phone" :value="__('website.phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Sex -->
        <div class="mt-4">
            <x-input-label for="sex" :value="__('website.sex')"/>
            <div class=" flex">
                <div class="flex items-center me-4">
                    <input class="w-4 h-4 text-gray-700 dark:text-white border-gray-300 focus:ring-red-600" type="radio" id="male" name="sex" value="Male" checked>
                    <label for="sex" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Male</label>
                </div>
                <div class="flex items-center me-4">    
                    <input class="w-4 h-4 text-gray-700 dark:text-white border-gray-300 focus:ring-red-600" type="radio" id="female" name="sex" value="Female">
                    <label for="sex" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Female</label>
                </div>
                <div class="flex items-center me-4">
                    <input class="w-4 h-4 text-gray-700 dark:text-white border-gray-300 focus:ring-red-600" type="radio" id="other" name="sex" value="prefer not to say">
                    <label for="sex" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Prefer Not To Say</label>
                </div>
            </div>    
        </div>
        
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('website.alreadyregistered') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('website.register') }}
            </x-primary-button>
        </div>
    </form>
    @endif
    
</x-guest-layout>
