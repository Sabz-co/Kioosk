<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'کیوسک') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="bg-gray-500">
            @include('partials.navbar')
    
        </div>
    
        <div class="h-48 bg-brown-500 w-full flex items-center justify-start text-white p-10">
            <h4 class="text-2xl font-bold">در قانون، انسان وقتی مجرم است که حقوق دیگران را نقض کند</h4>
        </div>
        <div class="container mb-4 mx-auto mt-6">
    
            {{-- Content goes here --}}


            @yield('content')
    
        </div>





        {{-- Footer goes here --}}
        <footer class="bg-gray-light mt-20  justify-between text-sm">
            <div class="container mx-auto">
                <div class="flex flex-row justify-around md:justify-between">
                    <div class="hidden md:flex  px-4 py-2 m-2 md:w-1/4 lg:w-1/5">
                        
                        <p class="my-3">کیوسک بستری برای اشتراک گذاری کتاب
                            است. کتاب‌های مورد علاقه‌تان را پبدا کنید،
                            با دوستانتان به اشتراک بگذارید و نقد کنید.
                            </p>

                    </div>

                    <div class="hidden md:flex  px-4 py-2 m-2 md:w-1/4 lg:w-1/5">
                        
                        <p class="my-3">
                            اگر در اینستاگرام و توییتر عضو هستید صفحه
ما رو هم دنبال کنید!
                            </p>

                    </div>
                    <div class="flex flex-col  text-black text-right px-4 py-2 m-2 lg:w-1/5">
                        <h3 class="text-base font-bold  mb-5">محتوا</h3>

                        <a href="#" class="py-1  hover:text-silver-500 mb-2">
                            
                            کتاب (۵۶۶۳)
                        </a>

                        <a href="#" class="py-1  hover:text-silver-500 mb-2">
                            
                            نویسندگان (۲۰۱)
                        </a>

                        <a href="#" class="py-1  hover:text-silver-500 mb-2">
                            
                            ناشران (۳۴)
                        </a>

                        <a href="#" class="py-1  hover:text-silver-500 mb-2">
                            
                            نقدها (۲۳۴۵۷)
                        </a>


                    </div>
                    <div class="flex flex-col text-black text-right px-4 py-2 m-2 lg:w-1/5">
                        <h3 class="text-base font-bold  mb-5">کیوسک</h3>

                        <a href="#" class="py-1  hover:text-silver-500 mb-2">
                            
                            صفحه اصلی
                        </a>

                        <a href="#" class="py-1  hover:text-silver-500 mb-2">
                            
                            تماس با ما
                        </a>

                        <a href="#" class="py-1  hover:text-silver-500 mb-2">
                            
                            درباره کیوسک
                        </a>

                        <a href="#" class="py-1  hover:text-silver-500 mb-2">
                            
                            قوانین
                        </a>

                    </div>

                </div>
            </div>

        </footer>
        <div class="w-full h-10 bg-gray-dark"></div>

    </div>






    @livewireAssets
</body>
</html>
