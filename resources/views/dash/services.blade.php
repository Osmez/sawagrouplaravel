@extends('dashboard')

@section('dashcontent')

{{$id}}

<div class="mt-16 p-6 lg:p-8">

    @if (App::getLocale() == 'ar')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8" style="direction: rtl">
        @foreach ($services as $service)
        <div>
        <a href="{{route('sawaorder.new',$service->title_en)}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-between motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                    <img src="{{$service->geticon()}}" class="w-7 h-7 stroke-red-500 rounded-full">
                </div>

                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white text-right">{{$service->title_ar}}</h2>

                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-right" style="direction: rtl">
                    تكلفة الخدمة:{{$service->price}} $
                </p>
                
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
        </a>
        @if(Auth::user()->admin)
        <div class="flex justify-start p-4">
            <form action="{{route('sawaservice.deleteservice',$service->id)}}" method="post">
                @csrf
                @method('delete')
                <x-danger-button class="ms-3">
                    {{ __('website.deleteservice') }}
                </x-danger-button>
            </form>
            <a href="{{route('sawaservice.serviceupdateform',$service->id)}}" class="flex items-center text-red-700 bg-yellow-300 px-4 mx-4 py-0 border border-transparent rounded-md hover:bg-yellow-500 font-semibold text-xs uppercase">{{__('website.updateservice')}}</a>
        </div>
        @endif
    </div>
        @endforeach
    </div>
    @endif

    @if (App::getLocale() == 'en')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        @foreach ($services as $service)
        <div>
        <a href="{{route('sawaorder.new',$service->title_en)}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-between motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                    <img src="{{$service->geticon()}}" class="w-7 h-7 stroke-red-500 rounded-full">
                </div>

                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{$service->title_en}}</h2>

                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Price: {{$service->price}} $
                </p>
                
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
           
        </a>
        @if(Auth::user()->admin)
                <div class="flex justify-start p-4">
                    <form action="{{route('sawaservice.deleteservice',$service->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <x-danger-button class="ms-3">
                            {{ __('Delete Service') }}
                        </x-danger-button>
                    </form>
                    <a href="{{route('sawaservice.serviceupdateform',$service->id)}}" class="flex items-center text-red-700 bg-yellow-300 px-4 mx-4 py-0 border border-transparent rounded-md hover:bg-yellow-500 font-semibold text-xs uppercase">Update Service</a>
                </div>
                @endif
    </div>
        @endforeach
    </div>
    @endif

    @if (App::getLocale() == 'jp')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        @foreach ($services as $service)
        <div>
        <a href="{{route('sawaorder.new',$service->title_en)}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex justify-between motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
            <div>
                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                    <img src="{{$service->geticon()}}" class="w-7 h-7 stroke-red-500 rounded-full">
                </div>

                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{$service->title_jp}}</h2>

                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                    Price: {{$service->price}}
                </p>
                
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
            </svg>
           
        </a>
        @if(Auth::user()->admin)
                <div class="flex justify-start p-4">
                    <form action="{{route('sawaservice.deleteservice',$service->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <x-danger-button class="ms-3">
                            {{ __('website.deleteservice') }}
                        </x-danger-button>
                    </form>
                    <a href="{{route('sawaservice.serviceupdateform',$service->id)}}" class="flex items-center text-red-700 bg-yellow-300 px-4 mx-4 py-0 border border-transparent rounded-md hover:bg-yellow-500 font-semibold text-xs uppercase">Update Service</a>
                </div>
                @endif
    </div>
        @endforeach
    </div>
   
        
    @endif
    <div class="mt-4">
    {{$services->links()}}
    </div>
</div>

@endsection