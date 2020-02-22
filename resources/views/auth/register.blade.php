@extends('layouts.main')

@section('content')

<section class="w-full flex h-screen">
    
    <div class="items-center justify-center hidden lg:flex w-1/2 h-20 bg-silver-200 min-h-full p-20">
        <div>
            <h1 class="text-brown font-light text-4xl">کیوسک، کاتالوگ اجتماعی کتاب</h1>
            <p class="text-2xl">متنی در مورد کیوسک و خدماتی که ارائه می‌دهیم اینجا قرار می‌گیرد.</p>
        </div>

    </div>
    <div class="flex items-center justify-center w-full lg:w-1/2 h-20 bg-silver-300  min-h-full">

        <form class="w-5/6 sm:w-2/3 md:w-1/2 mx-auto flex flex-col" action="{{ route('register') }}" method="POST">
            <input class="mb-3 bg-white focus:outline-none rounded-lg py-2 px-4 block w-full appearance-none leading-normal focus:shadow" type="text" name="name" placeholder="نام و نام خانوادگی">

            <input class="mb-3 bg-white focus:outline-none rounded-lg py-2 px-4 block w-full appearance-none leading-normal focus:shadow" type="email" name="email" placeholder="ایمیل">

            <input class="mb-3 bg-white focus:outline-none rounded-lg py-2 px-4 block w-full appearance-none leading-normal focus:shadow" type="password" name="password" placeholder="کلمه عبور">
        
            <input class="mb-3 bg-white focus:outline-none rounded-lg py-2 px-4 block w-full appearance-none leading-normal focus:shadow" type="password" name="password_confirmation" placeholder="تکرار کلمه عبور">

            {{ csrf_field() }}
            <div class="flex flex-row">
                <div class="w-1/2 ml-2">
                    <button href="#" class="p-2 rounded-full border border-transparent bg-green-700 hover:bg-green-100 text-white hover:text-green-700 hover:border-green-700 shadow hover:shadow-xl flex items-center justify-center w-full">ثبت نام</button>
                </div>  
                <div class="w-1/2 mr-2">
                    <a href="{{ url('/gauth/invoke') }}" class="p-2 rounded-full bg-white text-black shadow hover:shadow-xl flex items-center justify-center">ثبت نام با گوگل </a>
                </div>          
            </div>
        
        </form>
    </div>


</section>
@endsection
