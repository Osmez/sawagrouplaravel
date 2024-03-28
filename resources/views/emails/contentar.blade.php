<x-guest-layout>

    @include('alert')


    <div method="POST" enctype="multipart/form-data" >
       
        
       
        <!-- complete Description -->

        <div class="mt-4">
            <h2 class="text-gray-700 dark:text-white">{{$email}}</h2>
            <h5 class="text-gray-700 dark:text-white">{{$phone}}</h5>
        </div>

        <!-- complete File  -->
        
        <div class="mt-4">
            <h2 class="text-gray-700 dark:text-white">{{$tmes}}</h2>
            
        </div>

    </div>

</x-guest-layout>
