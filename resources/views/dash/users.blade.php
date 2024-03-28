@extends('dashboard')

@section('dashcontent')
@if (App::getLocale() == 'ar')
<div class="mt-16 p-6 lg:p-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8" style="direction: rtl">
        @foreach ($users as $user)
        <div>
        <a href="{{route('showuser',$user->id)}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-between motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                    <img src="{{$user->getavatar()}}" class="w-7 h-7 stroke-red-500 rounded-full">

                </div>
               
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{$user->name}}</h2>

                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed" style="direction: rtl">
                    {{__('website.ordnums')}}  {{$user->sawaorders->count()}}
                </p>
                
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
           
        </a>
       
                <div class="flex justify-start py-4">
                   <a href="{{route('deleteuser',$user->id)}}" class="flex items-center text-white bg-red-700 px-4 mx-4 py-2 border border-transparent rounded-md hover:bg-red-700 font-semibold text-xs uppercase">
                    {{__('website.delete')}}
                </a>
                </div>
               
    </div>
        @endforeach
    </div>
    {{$users->links()}}
</div>
@else
<div class="mt-16 p-6 lg:p-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        @foreach ($users as $user)
        <div>
        <a href="{{route('showuser',$user->id)}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-between motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                    <img src="{{$user->getavatar()}}" class="w-7 h-7 stroke-red-500 rounded-full">

                </div>
               
                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{$user->name}}</h2>

                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Number of Orders :  {{$user->sawaorders->count()}}
                </p>
                
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
           
        </a>
       
                <div class="flex justify-start p-4">
                   <a href="{{route('deleteuser',$user->id)}}" class="flex items-center text-white bg-red-700 px-4 mx-4 py-0 border border-transparent rounded-md hover:bg-red-700 font-semibold text-xs uppercase">Delete</a>
                </div>
               
    </div>
        @endforeach
    </div>
    {{$users->links()}}
</div>
@endif

    
@endsection