@extends('layout.default')
@section('title','Register')

@section('content')
<div class="bg-white w-1/3 shadow-md p-4 rounded-lg">
    <h1 class="text-center text-3xl">Register</h1>
    <p class="text-center opacity-50 mt-2 mb-5">Welcome To Your Space</p>
    @isset($err)
        <p class="text-red-400">{{$err}}</p>
    @endisset
    <form class="flex flex-col" method="POST" action="{{route('register.post')}}">
        @csrf
        <div class="flex flex-col">
            <label for="Full">Full Name</label>
            <input class="border py-2 pl-2 outline-[#A1A1AA] mb-2" type="text" placeholder="John Doe" required name="userFullName">
        </div>
        <div class="flex flex-col">
            <label for="Email">Email</label>
            <input class="border py-2 pl-2 outline-[#A1A1AA] mb-2" type="email" placeholder="m@exemple.com" required name="userEmail">
            @isset($emailerror)
                <p class="text-red-400 text-xs">{{$emailerror}}</p>
            @endisset
        </div>
        <div class="flex flex-col">
            <label for="password">password</label>
            <input class="border py-2 pl-2 outline-[#A1A1AA] mb-2" type="password" name="userPassword">
        </div>
        <a href="#" class="text-[#A1A1AA] mt-3">Forget Password ?</a>
        <button class="bg-black text-white mt-3 py-2 h-11 rounded-md">Sign up</button>
        <a href="/login" class="w-full border-[#A1A1AA] text-center border mt-3 py-2 h-11 rounded-md">Sign in</a>
    </form>
</div>
@endsection