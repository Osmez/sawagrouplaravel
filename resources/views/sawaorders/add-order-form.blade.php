<x-guest-layout>
@if (App::getLocale() == 'ar')


    <h2 class="w-full text-center text-3xl text-gray-900 dark:text-white">{{$service->title_en}}</h2>

    <div class="progress" id="progress_bar" style="display:none;height:50px; line-height: 50px;text-align: center;
    color: white;
    padding-top: 12px;
    height: 59px;
    line-height: 20px;">

        <div class="progress-bar" id="progress_bar_process" role="progressbar" style="width:0%;ackground-color: #c53232;
        border-radius: 25px;">0%</div>

    </div>

    <form id="ord-form" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Order Title -->

        <div class="mt-4">
            <x-input-label for="order-title" class="text-right" :value="__('website.ordername')" />
            <x-text-input id="order-title" dir="rtl" class="block mt-1 w-full" type="text" name="order-title" required autofocus  />
            <x-input-error :messages="$errors->get('order-title')" class="mt-2" />
        </div>

        <!-- Order Description -->

        <div class="mt-4">
            <x-input-label for="order-description" class="text-right" :value="__('website.orderdesc')" />
            <textarea id="order-description" dir="rtl" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" name="order-description" required autofocus  ></textarea>
            <x-input-error :messages="$errors->get('order-description')" class="mt-2" />
        </div>

        <!-- Order Url  -->

        <div class="mt-4">
            <x-input-label for="order-url" class="text-right" :value="__('website.orderurl')" />
            <x-text-input id="order-url" dir="rtl" class="block mt-1 w-full" type="text" name="order-url" required autofocus  />
            <x-input-error :messages="$errors->get('order-url')" class="mt-2" />
        </div>

        <!-- Order File  -->
        
        <div class="mt-4">
            <x-input-label for="order-file" class="text-right" :value="__('website.orderfile')" />
            <x-text-input id="order-file" dir="rtl" class="block mt-1 w-full" type="file" name="order-file"  required autofocus  />
            <x-input-error :messages="$errors->get('order-file')" class="mt-2" />
        </div>

        <!-- Order Type -->

        <div class="mt-4 hidden">
            <x-input-label for="order-type" class="text-right" :value="__('')" />
            <x-text-input id="order-type" dir="rtl" class="block mt-1 w-full" type="number" value="{{$service->id}}"  name="order-type" required autofocus hidden />
            <x-input-error :messages="$errors->get('order-type')" class="mt-2" />
        </div>

        <div class="progress" id="progress_bar" style="display:none;height:50px; line-height: 50px;">

            <div class="progress-bar" id="progress_bar_process" role="progressbar" style="width:0%;">0%</div>

        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-3">
                {{ __('Add') }}
            </x-primary-button>
        </div>
    </form>


@else

    <h2 class="w-full text-center text-3xl text-gray-900 dark:text-white">{{$service->title_en}}</h2>

    <div class="progress" id="progress_bar" style="display:none;height:50px; line-height: 50px;text-align: center;
    color: white;
    padding-top: 12px;
    height: 59px;
    line-height: 20px;">

        <div class="progress-bar" id="progress_bar_process" role="progressbar" style="width:0%;ackground-color: #c53232;
        border-radius: 25px;">0%</div>

    </div>

    <form id="ord-form" method="POST" enctype="multipart/form-data" ">
        @csrf

        <!-- Order Title -->

        <div class="mt-4">
            <x-input-label for="order-title" :value="__('Order Title')" />
            <x-text-input id="order-title" class="block mt-1 w-full" type="text" name="order-title" required autofocus  />
            <x-input-error :messages="$errors->get('order-title')" class="mt-2" />
        </div>

        <!-- Order Description -->

        <div class="mt-4">
            <x-input-label for="order-description" :value="__('Order Description')" />
            <textarea id="order-description" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full" name="order-description" required autofocus  ></textarea>
            <x-input-error :messages="$errors->get('order-description')" class="mt-2" />
        </div>

        <!-- Order Url  -->

        <div class="mt-4">
            <x-input-label for="order-url" :value="__('Order Content URL')" />
            <x-text-input id="order-url" class="block mt-1 w-full" type="text" name="order-url" required autofocus  />
            <x-input-error :messages="$errors->get('order-url')" class="mt-2" />
        </div>

        <!-- Order File  -->
        
        <div class="mt-4">
            <x-input-label for="order-file" :value="__('Order File')" />
            <x-text-input id="order-file" class="block mt-1 w-full" type="file" name="order-file" required autofocus  />
            <x-input-error :messages="$errors->get('order-file')" class="mt-2" />
        </div>

        <!-- Order Type -->

        <div class="mt-4 hidden">
            <x-input-label for="order-type" :value="__('Service Order')" />
            <x-text-input id="order-type" class="block mt-1 w-full" type="number" value="{{$service->id}}"  name="order-type" required autofocus hidden />
            <x-input-error :messages="$errors->get('order-type')" class="mt-2" />
        </div>

       
       

        <div class="flex items-center justify-end mt-4">

            <x-primary-button id="submit-order" class="ms-3">
                {{ __('Add') }}
            </x-primary-button>
        </div>
    </form>
   

@endif

<script>

var progress_bar = document.getElementById('progress_bar');

var progress_bar_process = document.getElementById('progress_bar_process');

var uploaded_image = document.getElementById('uploaded_image');

const form = document.getElementById("ord-form");
form.addEventListener("submit", onFormSubmit);

function onFormSubmit(event) {
	event.preventDefault();
	const form_data = new FormData(event.target);

    form_data.append('_token', document.getElementsByName('_token')[0].value);

        progress_bar.style.display = 'block';

        var ajax_request = new XMLHttpRequest();

        ajax_request.open("POST", "{{ route('sawaorder.addneworder') }}");

        ajax_request.upload.addEventListener('progress', function(event){

            var percent_completed = Math.round((event.loaded / event.total) * 100);

            progress_bar_process.style.width = percent_completed + '%';

            progress_bar_process.innerHTML = percent_completed + '% completed';

        });

        ajax_request.addEventListener('load', function(event){

            window.location.replace("{{url('/dashboard/addedorder')}}");

        });

        ajax_request.send(form_data);


    };
</script>

</x-guest-layout>