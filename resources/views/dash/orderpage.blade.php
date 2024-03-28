<x-guest-layout>

    <h2 class="w-full text-center text-3xl text-gray-900 dark:text-white">{{$order->title}}</h2>

    @if (App::getLocale() == 'ar')
    <h2 class="w-full  text-3xl text-gray-900 dark:text-white text-right" style="direction: rtl">{{__('website.addedby')}} : {{$order->user->name}}</h2>

    <div>
        <x-nav-link :href="route('dashboard')" :active="Request::is('dashboard')">
            {{__('website.backtodash')}}
         </x-nav-link>

        <div class="mt-4 text-right">
            <h2 class="text-gray-700 dark:text-white">{{__('website.ordertitle')}}</h2>
            <x-input-label for="order-url" value="{{$order->title}}" />
        </div>

        <!-- Order Title -->

        <div class="mt-4 text-right">
            <h2 class="text-gray-700 dark:text-white">{{__('website.orderdesc')}}</h2>
            <p class="text-gray-700 dark:text-white">{{$order->description}}</p>
        </div>

        <!-- Order Description -->

        <div class="mt-4 text-right">
            <h2 class="text-gray-700 dark:text-white">{{__('website.orderfile')}}</h2>
            <form action={{route('sawaorder.downloadfile')}} method="POST">
                @csrf
                <input class="hidden" id="name" name="name" type="text" value="{{$order->file}}">
                <button type="submit" class="text-gray-700 dark:text-white">{{__('website.download')}}</button>
            </form>
        </div>

        <div class="mt-4 text-right">
            <img src="/storage/{{$order->qr}}" width="150" height="auto" class="block m-auto">
        </div>
       
        <div class="mt-4 flex justify-center text-right">
           
            @if (Auth::user()->id == $order->user_id)
            <a href="{{route('sawaorder.updateorder',$order->id)}}" style="padding: 6px" class="flex items-center p-6 text-white bg-red-700 px-4 mx-4  border border-transparent rounded-md hover:bg-red-500 font-semibold text-xs uppercase">{{__('website.update')}}</a>
            @endif
        </div>
        <!-- Complete url  -->
        
        <div class="mt-4 flex justify-center text-right">
            @if (Auth::user()->admin)
                @if (!$order->completed)
                    <a href="{{route('complete.completeform',$order->id)}}" style="padding: 6px" class="flex items-center p-4 text-white bg-red-700 px-4 mx-4  border border-transparent rounded-md hover:bg-red-500 font-semibold text-xs uppercase">{{__('website.complete')}}</a>
                @else
                    <a href="{{route('complete.showcompleted',$order->id)}}" style="padding: 6px" class="flex items-center p-4 text-white bg-red-700 px-4 mx-4  border border-transparent rounded-md hover:bg-red-500 font-semibold text-xs uppercase">{{__('website.showcompleted')}}</a>            
                @endif
            @endif
        </div>
        
    </div>
    @else
    <h2 class="w-full  text-3xl text-gray-900 dark:text-white " >{{__('website.addedby')}} : {{$order->user->name}}</h2>

    <div>
        <x-nav-link :href="route('dashboard')" :active="Request::is('dashboard')">
            {{__('backtodash')}}
         </x-nav-link>

        <div class="mt-4">
            <h2 class="text-gray-700 dark:text-white">{{__('website.ordertitle')}}</h2>
            <x-input-label for="order-url" value="{{$order->title}}" />
        </div>

        <!-- Order Title -->

        <div class="mt-4">
            <h2 class="text-gray-700 dark:text-white">{{__('website.orderdesc')}}</h2>
            <p>{{$order->description}}</p>
        </div>

        <!-- Order Description -->

        <div class="mt-4">
            <h2 class="text-gray-700 dark:text-white">{{__('website.orderfile')}}</h2>
            <form action={{route('sawaorder.downloadfile')}} method="POST">
                @csrf
                <input class="hidden" id="name" name="name" type="text" value="{{$order->file}}">
                <button type="submit" class="text-gray-700 dark:text-white">{{__('website.download')}}</button>
            </form>
        </div>
       

        <div class="mt-4">
            <img src="/storage/{{$order->qr}}" width="150" height="auto" class="block m-auto">
        </div>
{{$order->completed}}
        @if ($order->completed == 1)
            <a href="{{route('complete.showcompleted',$order->id)}}">{{__('website.showcompleted')}}</a>
        @endif

        <div class="mt-4 flex justify-center">
            @if (Auth::user()->id == $order->user_id)
            <a href="{{route('sawaorder.updateorder',$order->id)}}" style="padding: 6px" class="flex items-center p-6 text-white bg-red-700 px-4 mx-4 py-0 border border-transparent rounded-md hover:bg-red-500 font-semibold text-xs uppercase">{{__('website.update')}}</a>
            @endif
        </div>
        <!-- Complete url  -->
        
        <div class="mt-4 flex justify-center">
            @if (Auth::user()->admin)
                @if (!$order->completed)
                    <a href="{{route('complete.completeform',$order->id)}}" style="padding: 6px" class="flex items-center p-4 text-white bg-red-700 px-4 mx-4 py-0 border border-transparent rounded-md hover:bg-red-500 font-semibold text-xs uppercase">{{__('website.complete')}}</a>
                @else
                    <a href="{{route('complete.showcompleted',$order->id)}}" style="padding: 6px" class="flex items-center p-4 text-white bg-red-700 px-4 mx-4 py-0 border border-transparent rounded-md hover:bg-red-500 font-semibold text-xs uppercase">{{__('website.showcompleted')}}</a>            
                @endif
            @endif
        </div>
        
    </div>
    @endif
    

</x-guest-layout>
