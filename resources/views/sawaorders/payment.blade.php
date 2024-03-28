<x-guest-layout>

  <h2 class=" text-center text-3xl text-gray-900 dark:text-white">{{__('website.dopayment')}}</h2>

  <div>
      <div class="mt-4 flex justify-center w-full items-center">
          <img src="{{asset('/imgs/mastercard.png')}}" width="50px" height="auto">
          <h4 class="w-full text-center text-3xl text-gray-900 dark:text-white">{{__('website.cardinfo')}}</h4>
      </div>
      <!-- Order Title -->
      @if (App::getLocale() == 'ar')
      <div class="mt-4">
        <x-input-label for="order-title" class="text-right" :value="__('website.cardnumber')" />
        <x-text-input id="order-title"  class="block mt-1 w-full" type="numer" name="order-title" required autofocus  />
        <x-input-error :messages="$errors->get('order-title')" class="mt-2" />
    </div>
      @else
      <div class="mt-4">
        <x-input-label for="order-title"  :value="__('website.cardnumber')" />
        <x-text-input id="order-title"  class="block mt-1 w-full" type="numer" name="order-title" required autofocus  />
        <x-input-error :messages="$errors->get('order-title')" class="mt-2" />
    </div>
      @endif
      

     
      
     
      <div class="mt-4">
          <div class="progress">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
          </div>
      </div>
@if (App::getLocale() == 'ar')
<div class="flex items-center justify-end mt-4">

    <a href="{{route('dashboard')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"  href="route('dashboard')">
      {{__('website.confirm')}}
    </a>
  </div>
@else
<div class="flex items-center  mt-4">

    <a href="{{route('dashboard')}}" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"  href="route('dashboard')">
      {{__('website.confirm')}}
    </a>
  </div>
@endif
      
    </div>
</x-guest-layout>