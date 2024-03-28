<x-guest-layout>
    @if (App::getLocale() == 'ar')
    <form id="service-form" enctype="multipart/form-data" method="POST" action="{{ route('sawaservice.new') }}">
        @csrf
        
        <x-nav-link :href="route('dashboard')" style="direction: rtl">
            {{__('website.dashboard')}}
         </x-nav-link>
        <!-- Service English Name -->
        <div class="mt-4" style="text-align: right">
            <x-input-label for="name-en" :value="__('website.serviceennm')" />
            <x-text-input id="name-en" class="block mt-1 w-full" type="text" name="name-en" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name-en')" class="mt-2" />
        </div>
        <!-- Service Arabic Name -->
        <div class="mt-4" style="text-align: right">
            <x-input-label for="name-ar" :value="__('website.servicearnm')" />
            <x-text-input id="name-ar" class="block mt-1 w-full" dir="rtl" type="text" name="name-ar" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name-en')" class="mt-2" />
        </div>
        <!-- Service Japanese Name -->
        <div class="mt-4" style="text-align: right">
            <x-input-label for="name-jp" :value="__('website.servicejpnm')" />
            <x-text-input id="name-jp" class="block mt-1 w-full" type="text" name="name-jp" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name-en')" class="mt-2" />
        </div>
    
        <!-- Service Order -->
    
        <div class="mt-4" style="text-align: right">
            <x-input-label for="service-order" :value="__('website.serviceorder')" />
            <x-text-input id="service-order" class="block mt-1 w-full" type="number" name="service-order" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('service-order')" class="mt-2" />
        </div>
    
        <!-- Service Price -->
    
        <div class="mt-4" style="text-align: right">
            <x-input-label for="service-price" :value="__('website.serviceprice')" />
            <x-text-input id="service-price" class="block mt-1 w-full" type="number" name="service-price" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('service-price')" class="mt-2" />
        </div>
    
        <div class="mt-4" style="text-align: right">
            <x-input-label for="service-icon" :value="__('website.serviceicon')" />
            <x-text-input  id="service-icon" class="block mt-1 w-full" type="file" name="service-icon" autofocus  />
        </div>
    
        <div class="flex items-center justify-end mt-4">
    
            <x-primary-button class="ms-3">
                {{ __('website.add') }}
            </x-primary-button>
        </div>
    </form>
    @else
    <form id="service-form" enctype="multipart/form-data" method="POST" action="{{ route('sawaservice.new') }}">
        @csrf
    
        <!-- Service English Name -->
        <div class="mt-4">
            <x-input-label for="name-en" :value="__('Service English name')" />
            <x-text-input id="name-en" class="block mt-1 w-full" type="text" name="name-en" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name-en')" class="mt-2" />
        </div>
        <!-- Service Arabic Name -->
        <div class="mt-4">
            <x-input-label for="name-ar" :value="__('Service Arabic name')" />
            <x-text-input id="name-ar" class="block mt-1 w-full" dir="rtl" type="text" name="name-ar" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name-en')" class="mt-2" />
        </div>
        <!-- Service Japanese Name -->
        <div class="mt-4">
            <x-input-label for="name-jp" :value="__('Service Japanese name')" />
            <x-text-input id="name-jp" class="block mt-1 w-full" type="text" name="name-jp" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name-en')" class="mt-2" />
        </div>
    
        <!-- Service Order -->
    
        <div class="mt-4">
            <x-input-label for="service-order" :value="__('Service Order')" />
            <x-text-input id="service-order" class="block mt-1 w-full" type="number" name="service-order" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('service-order')" class="mt-2" />
        </div>
    
        <!-- Service Price -->
    
        <div class="mt-4">
            <x-input-label for="service-price" :value="__('Service Price')" />
            <x-text-input id="service-price" class="block mt-1 w-full" type="number" name="service-price" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('service-price')" class="mt-2" />
        </div>
    
        <div class="mt-4">
            <x-input-label for="service-icon" :value="__('Service icon')" />
            <x-text-input  id="service-icon" class="block mt-1 w-full" type="file" name="service-icon" autofocus  />
        </div>
    
        <div class="flex items-center justify-end mt-4">
    
            <x-primary-button class="ms-3">
                {{ __('Add') }}
            </x-primary-button>
        </div>
    </form>
    @endif
   

        
</x-guest-layout>
