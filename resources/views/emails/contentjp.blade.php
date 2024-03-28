<x-guest-layout>

    @include('alert')


    <div method="POST" enctype="multipart/form-data" >
       
        
       
        <!--  -->

        <div class="mt-4">
            <p>{{__('website.fromemail')}}</p>
            <h2 class="text-gray-700 dark:text-white">{{$email}}</h2>
            <p>{{__('website.fromphone')}}</p>
            <h5 class="text-gray-700 dark:text-white">{{$phone}}</h5>
        </div>

        <!--  -->
        
        <div class="mt-4">
            <p>{{__('website.frommess')}}</p>
            <h2 class="text-gray-700 dark:text-white">{{$tmes}}</h2>
            
        </div>

    </div>

</x-guest-layout>
