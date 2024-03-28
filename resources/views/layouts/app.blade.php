<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <style>
            .dnon{
                display: none;
            }
            .not{
                height: 200px;
                transform: translate(-12px,10px);
                overflow-y: scroll;
                color: black;
                padding: 6px;
            }
            .not a:hover{
                background-color: lightsteelblue
            }

            /* custom scrollbar */
::-webkit-scrollbar {
  width: 20px;
}

::-webkit-scrollbar-track {
  background-color: transparent;
}

::-webkit-scrollbar-thumb {
  background-color: #d6dee1;
  border-radius: 20px;
  border: 6px solid transparent;
  background-clip: content-box;
}

::-webkit-scrollbar-thumb:hover {
  background-color: #a8bbbf;
}

.langspan{
    display: inline-block;
    width: 24px;
    height: 20px;
    background-size: contain;
    background-repeat: no-repeat;
    margin-left: 6px;
}
.notlang{
    position: absolute;
    width: 110px;
    height: fit-content;
    
    transform: translate(3px, 40px);
    background-color: #ebe9e9;
    border: 1px solid #c9c9c9;
    color: black;
    padding: 6px;
}
        </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="{{asset('/js/jquery.min.js')}}"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            @include('alert')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        
        <script>
            var source = new EventSource("{{URL('/sseupdatead')}}");
            
            source.onmessage = function(event){
            let c = JSON.parse(event.data);
                if($("#notnum").hasClass('bg-red-500') == false){
                    $("#notnum").addClass('bg-red-500');
                };
                $('#notnum').html(c);
            }
        </script>
           
        @if (Auth::user()->admin)
        <script>
             window.addEventListener("load", function() {
        $.ajax({
            url: "{{ route('notifyadmin') }}",
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                
                if(response > 0){
                    
                    if($("#notnum").hasClass('bg-red-500') == false){
                        $("#notnum").addClass('bg-red-500');
                    };
                    $('#notnum').html(response);
                }else{
                    if($("#notnum").hasClass('bg-red-500') == true){
                        $("#notnum").removeClass('bg-red-500');
                    };
                    $('#notnum').html(0);
                }
                
            }
        });
    });
       
        </script>
        @else
        <script>
             window.addEventListener("load", function() {
        $.ajax({
            url: "{{ route('notifynum') }}",
            type: "GET",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                console.log(response,'response');
                if(response > 0){
                    
                    if($("#notnum").hasClass('bg-red-500') == false){
                        $("#notnum").addClass('bg-red-500');
                    };
                    $('#notnum').html(response);
                }else{
                    if($("#notnum").hasClass('bg-red-500') == true){
                        $("#notnum").removeClass('bg-red-500');
                    };
                    $('#notnum').html(0);
                }
                
            }
        });

       
            });
        </script>
        @endif
        <script type="text/javascript">
        
            window.addEventListener("load", function() {
                $('#langb').click(function(e) {
                    e.preventDefault();
                    if($('#langs').hasClass('notlang')){
                        $('#langs').removeClass('notlang');
                        $('#langs').html('');
                    }
                    else{
                        $('#langs').addClass('notlang');
                    $.ajax({
                        url: "{{ route('langs') }}",
                        type: "GET",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                        var html = '';
                                $.each(response, function(index, item) {
                                    
                                    if(item == 'en'){
                                        html += "<a href='{{url('/lang') }}/"+item+"' style='color:black;display:block'>{{__('website.en')}}<span class='langspan' style='display:inline-block;height:13px;background-image:"+" url({{asset('/imgs/en.png')}})"+"'></span></a>";
                                    }else if(item == 'ar'){
                                        html += "<a href='{{url('/lang') }}/"+item+"' style='color:black;display:block'>{{__('website.ar')}}<span class='langspan' style='display:inline-block;height:13px;background-image:"+" url({{asset('/imgs/ar.png')}})"+"'></span></a>";
                                    }else if(item == 'jp'){
                                        html += "<a href='{{url('/lang') }}/"+item+"' style='color:black;display:block'>{{__('website.jp')}}<span class='langspan' style='display:inline-block;height:13px;background-image: "+"url({{asset('/imgs/jp.png')}})"+"'></span></a>";
                                    }
                                    
                                });
                                
                               //$('#langs').addClass('notlang');
                                $('#langs').html(html);
                               

                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    });
                }
                });
                
                //document.getElementById('notify').innerHTML = document.getElementById('notify').innerHTML+'<p>'+e.message+'</p>';
            
                $('#notifi').click(function(e) {
                    e.preventDefault();     
                    
                    $("#notnum").removeClass('bg-red-500');
                    $('#notnum').html(0);

                    if($("#notcontent").hasClass('not') == true){
                        $('#notcontent').removeClass("not");
                        $('#notcontent').html('');
                    }else{

                    $('#notcontent').addClass("not");
                    $('#notcontent').html("<h3>Loaading notification</h3>");
                    
                    $.ajax({
                        url: "{{ route('notifyme') }}",
                        type: "GET",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            let i = 0;
                            
                            html = '',
                                $.each(response, function(index, item) {
                                    i++;
                                    
                                    if(item.type == 0){
                                        html += "<a href='{{ url('/profile/') }}/"+item.contentid+"' style='color:black;width:100%;display:block;padding:6px 12px;border-bottom: 1px solid #50627b;'>" + item
                                        .message + "</a>";
                                        
                                    }else{
                                        html += "<a href='{{ url('/sawaorders/order/') }}/"+item.contentid+"' style='color:black;width:100%;display:block;padding:6px 12px;border-bottom: 1px solid #50627b;'>" + item
                                        .message + "</a>";
                                    
                                    }
                                   
                                });
                                
                                if(i == 0){
                                    $('#notcontent').html("No notification");    
                                }else{
                                $('#notcontent').html(html);
                                }

                        },
                        error: function(xhr, status, error) {
                            console.log(error);
                        }
                    });
                }
                });

                

            });
            
        </script>
        
    </body>
</html>
