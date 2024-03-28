<x-guest-layout>
    <x-nav-link :href='url("/")'>
            {{__('website.homepage')}}
         </x-nav-link>
   
        <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div method="POST" action="{{ route('login') }}">
       
        <h2 style="margin: auto;text-align:center;font-size:8vw;" class="text-gray-600  dark:text-gray-400">404</h2>
        <p style="margin: auto;text-align:center;font-size:2vw;font-family:'Kufam'" class="text-gray-600  dark:text-gray-400">{{__('website.exist')}}</p>
        <br>
        <br>
        <div class="w-100 overflow-hidden position-relative text-gray-600  dark:text-gray-400" data-aos="fade">
            <div class="position-absolute w-100 h-100 text-gray-600  dark:text-gray-400 opacity-75 top-0 start-0"></div>
            <div class="container py-vh-4 position-relative mt-5 px-vw-5 text-center">
              <div class="row d-flex align-items-center justify-content-center py-vh-5">
                <div class="col-12 col-xl-10">
                  <span class="text-gray-600  dark:text-gray-400" style="font-size:2vw;font-family: 'Kufam', sans-serif;">  {{__('website.char')}}</span>
                  <h1 class="text-gray-600  dark:text-gray-400" style="font-size:3vw;font-family: 'Reem Kufi', sans-serif;">{{__('website.thetitle')}}</h1>
                </div>
                
              </div>
            </div>
          </div>
    </div>
  
    
</x-guest-layout>
