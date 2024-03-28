@extends('dashboard')

@section('dashcontent')
<div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex">
        @if (App::getLocale() == 'ar')
        <div style="flex-direction: row-reverse" class="w-full p-6 text-gray-900 dark:text-gray-100 flex flex-row-reverse justify-around">
        
        @else
        <div class="w-full p-6 text-gray-900 dark:text-gray-100 flex flex-row justify-around">

        @endif

        <x-nav-link :href="route('dashboard','byusers')" :active="Request::is('dashboard/byusers')">
            {{__('website.byusers')}}
        </x-nav-link>

        <x-nav-link :href="route('dashboard','byservices')" :active="Request::is('dashboard/byservices')">
            {{__('website.byservices')}}
        </x-nav-link>
        </div>
    </div>
</div>
@if ($orders->count() == 0)
<h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{__('website.noorders')}}</h2>
@endif
<div class="mt-16 p-6 lg:p-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8" style="direction: rtl">
        @foreach ($orders as $order)
        @if ($order->completed == 1)
        <a href="{{route('sawaorder.showorder',$order->id)}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-between motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        @else
        <a href="{{route('sawaorder.showorder',$order->id)}}" class="scale-100 p-6 bg-red-200 dark:bg-red-700 dark:bg-gradient-to-bl from-red-700 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-between motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        @endif
                <div>
                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                        </svg>
                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{$order->title}}</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        {{$order->user->name}}
                    </p>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        {{$order->price}}
                    </p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </a>
        @endforeach
    </div>
    {{$orders->links()}}
</div>
    
@endsection