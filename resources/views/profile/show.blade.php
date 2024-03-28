@extends('dashboard')

@section('dashcontent')
@if (App::getLocale() == 'ar')

   

    
<div class="mt-4 w-full flex flex-col justify-center align-middle" style="align-items: center">
    <div class="flex justify-start" style="flex-direction: row-reverse">
        <img class="rounded-full" src="{{$user->getavatar()}}" width="100px" height="auto">
        <div class="p-4">
            <h2 class="text-gray-700 dark:text-white" style="text-align: right;directio:rtl;"> {{$user->name}} : {{__('website.name')}}</h2>
            <h2 class="text-gray-700 dark:text-white" style="text-align: right;directio:rtl;"> {{$user->email}} : {{__('website.email')}}</h2>
            <h2 class="text-gray-700 dark:text-white" style="text-align: right;directio:rtl;">{{__('website.phone')}}: {{$user->phone}}</h2>

        </div>
    </div> 
    @if (Auth::user()->admin)
        @if (!$user->admin)
            <form method="POST" class="mt-4" action="{{route('setadmin')}}" >
                @csrf
                <input class="hidden" type="number" name="userid" id="nameid" value="{{$user->id}}">
                <x-primary-button>{{ __('website.setadmin') }}</x-primary-button>
            </form>   
        @else
            <form method="POST" class="mt-4" action="{{route('removeadmin')}}">
                @csrf
                <input class="hidden" type="number" name="userid" id="nameid" value="{{$user->id}}">
                <x-primary-button>{{ __('website.removeadmin') }}</x-primary-button>
            </form>  
        @endif
        
    @endif
    <div class="max-w-xl">
        
    </div> 
   
    
</div>
{{$orders}}
<!-- Order Description -->
@if ($orders == NULL)
<h2 class="mt-6 text-xl font-semibold text-center text-gray-900 dark:text-white">{{__('website.usernoorder')}}</h2>

@endif

<div class="mt-16 p-6 lg:p-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
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
</div>



    
@else
    

    
        <div class="mt-4 w-full flex flex-col justify-center align-middle" style="align-items: center">
            <div class="flex justify-start">
                <img class="rounded-full" src="{{$user->getavatar()}}" width="100px" height="auto">
                <div class="p-4">
                    <h2 class="text-gray-700 dark:text-white">Name: {{$user->name}}</h2>
                    <h2 class="text-gray-700 dark:text-white">E-mail: {{$user->email}}</h2>
                    <h2 class="text-gray-700 dark:text-white">Phone: {{$user->phone}}</h2>

                </div>
            </div> 
            @if (Auth::user()->admin)
                @if (!$user->admin)
                    <form method="POST" class="mt-4" action="{{route('setadmin')}}" >
                        @csrf
                        <input class="hidden" type="number" name="userid" id="nameid" value="{{$user->id}}">
                        <x-primary-button>{{ __('website.setadmin') }}</x-primary-button>
                    </form>   
                @else
                    <form method="POST" class="mt-4" action="{{route('removeadmin')}}">
                        @csrf
                        <input class="hidden" type="number" name="userid" id="nameid" value="{{$user->id}}">
                        <x-primary-button>{{ __('website.removeadmin') }}</x-primary-button>
                    </form>  
                @endif
                
            @endif
            <div class="max-w-xl">
                
            </div> 
           
            
        </div>
{{$orders}}
        <!-- Order Description -->
        @if ($orders == NULL)
        <h2 class="mt-6 text-xl font-semibold text-center text-gray-900 dark:text-white">{{__('website.usernoorder')}}</h2>

        @endif

        <div class="mt-16 p-6 lg:p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
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
        </div>

       
        
        @endif

@endsection