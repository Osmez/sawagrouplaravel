@extends('dashboard')

@section('dashcontent')
<div class="mt-16 p-6 lg:p-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
        @foreach ($user->sawaorders as $order)
        <div>
        @if ($order->completed)
            <a href="{{route('sawaorder.showorder',$order->id)}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 justify-between">
        @else
            <a href="{{route('sawaorder.showorder',$order->id)}}" class="scale-100 p-6 bg-red-300 dark:bg-red-900 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500 justify-between">
        @endif
                <div>
                    <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                        <img src="{{asset('/imgs/sawalogo.png')}}" class="w-7 h-7 stroke-red-500 rounded-full">

                    </div>

                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{$order->title}}</h2>

                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                       
                    </p>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                </svg>
            </a>
            <div class="flex justify-start p-4">
                <form action="{{route('sawaorder.deleteorder',$order->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <x-danger-button class="ms-3">
                        {{ __('website.deleteorder') }}
                    </x-danger-button>
                </form>
                <a href="{{route('sawaorder.updateorder',$order->id)}}" class="flex items-center text-red-700 bg-yellow-300 px-4 mx-4 py-0 border border-transparent rounded-md hover:bg-yellow-500 font-semibold text-xs uppercase">{{__('website.updateorder')}}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
    
@endsection