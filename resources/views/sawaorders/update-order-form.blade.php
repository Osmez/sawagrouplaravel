<x-guest-layout>

    <h2 class="w-full text-center text-3xl text-gray-900 dark:text-white">{{$title}}</h2>

    if3

    <form method="POST" enctype="multipart/form-data" action="{{ route('sawaorder.updatetheorder',$order->id) }}">
        @csrf

        <!-- Order Title -->

        <div class="mt-4">
            <x-input-label for="order-title" :value="__('Order Title')" />
            <x-text-input id="order-title" :value="$order->title" class="block mt-1 w-full" type="text" name="order-title"  />
            <x-input-error :messages="$errors->get('order-title')" class="mt-2" />
        </div>

        <!-- Order Description -->

        <div class="mt-4">
            <x-input-label for="order-description" :value="__('Order Description')" />
            <textarea id="order-description"  dir="rtl" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" name="order-description" >
                {{$order->description}}
            </textarea>
            <x-input-error :messages="$errors->get('order-description')" class="mt-2" />
        </div>

        <!-- Order Url  -->

        <div class="mt-4">
            <x-input-label for="order-url" :value="__('Order Content URL')" />
            <x-text-input :value="$order->url" id="order-url" class="block mt-1 w-full" type="text" name="order-url"  />
            <x-input-error :messages="$errors->get('order-url')" class="mt-2" />
        </div>

        <!-- Order Url  -->

        <div class="mt-4">
            <x-input-label for="order-url" :value="__('Order Content URL')" />
            <x-text-input :value="$order->id" id="order-id" class="block mt-1 w-full" type="text" name="order-id"  />
            <x-input-error :messages="$errors->get('order-url')" class="mt-2" />
        </div>

        <!-- Order File  -->
        <p>{{$order->file}}</p>
        <div class="mt-4">
            <x-input-label for="order-file" :value="__('Order File')" />
            <x-text-input id="order-file" class="block mt-1 w-full" type="file" name="order-file" />
            <x-input-error :messages="$errors->get('order-file')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-3">
                {{ __('Add') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
