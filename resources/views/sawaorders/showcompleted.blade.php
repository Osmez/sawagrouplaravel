<x-guest-layout>

    @include('alert')

    <h2 class="w-full text-center text-3xl text-gray-900 dark:text-white">{{$ord->title}}</h2>

    <form method="POST" enctype="multipart/form-data" >
        @csrf
        
        <x-nav-link :href="route('dashboard')" :active="Request::is('dashboard')">
           {{__('backtodash')}}
        </x-nav-link>
        <!-- complete Description -->

        <div class="mt-4">
            <h2 class="text-gray-700 dark:text-white">{{$ord->title}} Complete text</h2>
            <h5 class="text-gray-700 dark:text-white">{{$comp->desc}}</h5>
        </div>

        <!-- complete File  -->
        
        <div class="mt-4">
            <h2 class="text-gray-700 dark:text-white">{{$ord->title}} Complete text</h2>
            <form action={{route('sawaorder.downloadfile')}} method="POST">
                @csrf
                <input class="text-gray-700 dark:text-white hidden" id="name" name="name" type="text" value="{{$comp->file}}">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Download</button>
            </form>
        </div>

       

        
    </form>

</x-guest-layout>
