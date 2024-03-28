<x-guest-layout>

    <form method="POST" action="{{ route('sawaservice.updateservice') }}">
        @csrf

        <!-- Service English Name -->
        <div class="mt-4">
            <x-input-label for="name-en" :value="__('website.servicename')" />
            <x-text-input id="title-en" :value="$service->title_en"  class="block mt-1 w-full" type="text" name="name-en" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name-en')" class="mt-2" />
        </div>
        <!-- Service Arabic Name -->
        <div class="mt-4">
            <x-input-label for="name-ar" :value="__('Service Arabic name')" />
            <x-text-input id="name-ar" class="block mt-1 w-full" dir="rtl" :value="$service->title_ar" type="text" name="name-ar" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name-en')" class="mt-2" />
        </div>
        <!-- Service Japanese Name -->
        <div class="mt-4">
            <x-input-label for="name-jp" :value="__('Service Japanese name')" />
            <x-text-input id="name-jp" class="block mt-1 w-full" type="text" name="name-jp"  :value="$service->title_jp" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('name-en')" class="mt-2" />
        </div>

        <!-- Service Order -->

        <div class="mt-4">
            <x-input-label for="service-order" :value="__('website.serviceorder')" />
            <x-text-input id="service-order" :value="$service->order" class="block mt-1 w-full"  type="number" name="service-order" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('service-order')" class="mt-2" />
        </div>

         <!-- Service Order -->

         <div class="mt-4 hidden">
            <x-text-input id="service-old-order" :value="$service->order" class="block mt-1 w-full"  type="number" name="service-old-order" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('service-order')" class="mt-2" />
        </div>

        <!-- Service Price -->

        <div class="mt-4">
            <x-input-label for="service-price" :value="__('website.serviceprice')" />
            <x-text-input id="service-price" :value="$service->price" class="block mt-1 w-full" type="number" name="service-price" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('service-price')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="service-icon" :value="__('website.serviceicon')" />
            <x-text-input id="service-icon" class="block mt-1 w-full" type="file" name="service-icon" autofocus  />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button id="subm" class="ms-3">
                {{ __('Add') }}
            </x-primary-button>
        </div>
    </form>

    <div id="popup" style="display:flex;justify-content:center;">

    </div>

    <script>
    const f = document.getElementById("popup");
    const s = document.getElementById("subm");
    s.addEventListener("click",function(){
        f.innerHTML = "<h3>Please Wait!!</h3>"
        f.classList += 'pop';
    });

    </script>

</x-guest-layout>


