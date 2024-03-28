<x-guest-layout>
    @if (App::getLocale('ar'))
    <h2 class="w-full text-center text-3xl text-gray-900 dark:text-white ">{{$service->title_en}}</h2>

    <form method="POST" enctype="multipart/form-data" action="{{ route('complete.completetheorder') }}">
        @csrf

        <x-nav-link :href="route('sawaorder.showorder',$orderid)" ">
            {{__('website.backtoorder')}}
         </x-nav-link>

        <!-- Order Title -->

        <div class="mt-4">
            <x-input-label for="order-title" class="text-right" :value="$title" />
        </div>

        <!-- Order Description -->

        <div class="mt-4">
            <x-input-label for="order-description" class="text-right" :value="__('website.completedesc')" />
            <textarea id="order-description" dir="rtl" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" name="order-description" required autofocus  ></textarea>
            <x-input-error :messages="$errors->get('order-description')" class="mt-2" />
        </div>

        <!-- Order File  -->
        
        <div class="mt-4">
            <x-input-label for="order-file" class="text-right" :value="__('website.completefile')" />
            <x-text-input id="order-file" class="block mt-1 w-full" type="file" name="order-file" required autofocus  />
            <x-input-error :messages="$errors->get('order-file')" class="mt-2" />
        </div>

        <!-- Order Type -->

        <div class="mt-4 hidden">
            <x-input-label for="sawaorder_id" :value="__('website.serviceorder')" />
            <x-text-input id="sawaorder_id" class="block mt-1 w-full" type="number" value="{{$orderid}}"  name="sawaorder_id" required autofocus hidden />
            <x-input-error :messages="$errors->get('sawaorder_id')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-3">
                {{ __('Add') }}
            </x-primary-button>
        </div>
    </form>
    
@else
<h2 class="w-full text-center text-3xl text-gray-900 dark:text-white">{{$service->title_en}}</h2>

<form method="POST" enctype="multipart/form-data" action="{{ route('complete.completetheorder') }}">
    @csrf

    <x-nav-link :href="route('dashboard')" :active="Request::is('dashboard')">
        {{__('backtodash')}}
     </x-nav-link>

    <!-- Order Title -->

    <div class="mt-4">
        <x-input-label for="order-title" :value="__('ordertitle')" />
        <x-text-input id="order-title" class="block mt-1 w-full" type="text" name="order-title" required autofocus  />
        <x-input-error :messages="$errors->get('order-title')" class="mt-2" />
    </div>

    <!-- Order Description -->

    <div class="mt-4">
        <x-input-label for="order-description" :value="__('completedesc')" />
        <textarea id="order-description" dir="rtl" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" name="order-description" required autofocus  ></textarea>
        <x-input-error :messages="$errors->get('order-description')" class="mt-2" />
    </div>


    <!-- Order File  -->
    
    <div class="mt-4">
        <x-input-label for="order-file" :value="__('completefile')" />
        <x-text-input id="order-file" class="block mt-1 w-full" type="file" name="order-file" required autofocus  />
        <x-input-error :messages="$errors->get('order-file')" class="mt-2" />
    </div>

    <!-- Order Type -->

    <div class="mt-4 hidden">
        <x-input-label for="sawaorder_id" :value="__('serviceorder')" />
        <x-text-input id="sawaorder_id" class="block mt-1 w-full" type="number" value="{{$orderid}}"  name="sawaorder_id" required autofocus hidden />
        <x-input-error :messages="$errors->get('sawaorder_id')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">

        <x-primary-button class="ms-3">
            {{ __('Add') }}
        </x-primary-button>
    </div>
</form>
@endif
</x-guest-layout>
