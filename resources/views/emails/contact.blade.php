<x-guest-layout>

    @include('alert')

@if (App::getLocale() == 'ar')
<div method="POST" enctype="multipart/form-data" >
       
        
       
    <!-- complete Description -->

    <div class="mt-4">
        <h2 style="direction: rtl;text-align:right">اسم المرسل:</h2>
        <h2 class="text-gray-700 dark:text-white">{{$email}}</h2>
        <h2 style="direction: rtl;text-align:right"> رقم الهافت:</h2>
        <h5 class="text-gray-700 dark:text-white">{{$phone}}</h5>
    </div>

    <!-- complete File  -->
    
    <div class="mt-4">
        <h2 style="direction: rtl;text-align:right">الرسالة :</h2>
        <h2 class="text-gray-700 dark:text-white">{{$tmes}}</h2>
        
    </div>

</div>
@else
<div method="POST" enctype="multipart/form-data" >
       
        
       
    <!-- complete Description -->

    <div class="mt-4">
        <h2>{{__('website.name')}}:</h2>
        <h2 class="text-gray-700 dark:text-white">{{$email}}</h2>
        <h2>{{__('website.phone')}}:</h2>
        <h5 class="text-gray-700 dark:text-white">{{$phone}}</h5>
    </div>

    <!-- complete File  -->
    
    <div class="mt-4">
        <h2>{{__('website.message')}}:</h2>
        <h2 class="text-gray-700 dark:text-white">{{$tmes}}</h2>
        
    </div>

</div>
@endif
    

</x-guest-layout>
