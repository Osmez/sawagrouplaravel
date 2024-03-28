<x-app-layout>
    @if (App::getLocale() == 'ar')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-right">
            {{ __('website.dashboard') }}
        </h2>
    </x-slot>
    @else
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-left">
            {{ __('website.dashboard') }}
        </h2>
    </x-slot>
        
    @endif
   

    @if (session('success') === 'profile-updated')
    <div class="py-12"
        x-data="{ show: true }"
        x-show="show"
        x-transition
        x-init="setTimeout(() => show = false, 2000)"
        >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex">
                @if (App::getLocale() == 'ar')
                <div style="flex-direction: row-reverse" class="w-full p-6 text-gray-900 dark:text-gray-100 flex flex-row-reverse justify-around">

                @else
                <div class="w-full p-6 text-gray-900 dark:text-gray-100 flex flex-row justify-around">

                @endif

                    @if (Auth::user()->admin)
                        <x-nav-link :href="route('sawaservice.serviceform')" :active="Request::is('dashboard')">
                            {{__('website.addservice')}}
                        </x-nav-link>

                        <x-nav-link :href="route('dashboard','users')" :active="Request::is('dashboard/users')">
                            {{__('website.users')}}
                        </x-nav-link>

                        <x-nav-link :href="route('dashboard','orders')" :active="Request::is('dashboard/orders')" >
                            {{__('website.orders')}}
                        </x-nav-link>

                        <x-nav-link href="https://videochat-ggk3.onrender.com/" :active="Request::is('dashboard/complete')" >
                            {{__('website.startclass')}}
                        </x-nav-link>
                    @else

                        <x-nav-link :href="route('dashboard')" :active="Request::is('dashboard')">
                            {{__('website.sawaservices')}}
                        </x-nav-link>

                        <x-nav-link :href="route('dashboard','myorders')" :active="Request::is('dashboard/myorders')">
                            {{__('website.myorders')}}
                        </x-nav-link>

                        <x-nav-link href="https://videochat-ggk3.onrender.com/" :active="Request::is('dashboard/complete')" >
                            {{__('website.joinclass')}}
                        </x-nav-link>
                        
                    @endif
                    
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center gap-4">

        @if (session('success') === 'profile-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400"
            >{{ 'success' }}</p>
        @endif
    </div>
    

    @yield('dashcontent')

    <script>
        
    </script>
</x-app-layout>
