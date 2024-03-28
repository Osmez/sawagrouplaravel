<x-guest-layout>

    <h2 class="w-full text-center text-3xl text-gray-900 dark:text-white">Complete {{$title}}</h2>

    <form method="POST" enctype="multipart/form-data" action="{{ route('complete.completetheorder') }}">
        @csrf
        
        <x-nav-link :href="route('dashboard')" :active="Request::is('dashboard')">
            {{__('backtodash')}}
         </x-nav-link>
        <!-- complete Description -->

        <div class="mt-4">
            <x-input-label for="complete-description" :value="__('complete Description')" />
            <textarea id="complete-description" class="bcomplete-gray-300 dark:bcomplete-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:bcomplete-indigo-500 dark:focus:bcomplete-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" name="complete-description" required autofocus  ></textarea>
            <x-input-error :messages="$errors->get('complete-description')" class="mt-2" />
        </div>

        <!-- complete File  -->
        
        <div class="mt-4">
            <x-input-label for="complete-file" :value="__('complete File')" />
            <x-text-input id="complete-file" class="block mt-1 w-full" type="file" name="complete-file"  autofocus  />
            <x-input-error :messages="$errors->get('complete-file')" class="mt-2" />
        </div>

        <!-- complete order -->

        <div class="mt-4 hidden">
            <x-input-label for="complete-type" :value="__('Service complete')" />
            <x-text-input id="complete-type" class="block mt-1 w-full" type="number" value="{{$orderid}}"  name="sawaorder-id" autofocus hidden />
        </div>

        <!-- Order ID -->

        <div class="mt-4 hidden">
            <x-input-label for="complete-type" :value="__('Service complete')" />
            <x-text-input id="sawaorder-id" class="block mt-1 w-full" type="number" value="{{$orderid}}"  name="sawaorder-id" autofocus hidden />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-3">
                {{ __('Add') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
