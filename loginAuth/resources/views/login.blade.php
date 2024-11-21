@extends('layout.default')
@section('title','Login')

@section('content')


<div class="bg-white w-1/3 shadow-md p-4 rounded-lg">
    <h1 class="text-center text-3xl">Login</h1>
    <p class="text-center opacity-50 mt-2 mb-5">To get Started</p>
    <form class="flex flex-col" method="POST" action="{{route('login.post')}}">
        <div class="flex flex-col">
            <label for="Email">Email</label>
            <input class="border py-2 pl-2 outline-[#A1A1AA] mb-2" name="email" type="email" placeholder="m@exemple.com" required>
        </div>
        <div class="flex flex-col">
            <label for="password">password</label>
            <input class="border py-2 pl-2 outline-[#A1A1AA] mb-2" name="password" type="password">
        </div>
        <a href="#" class="text-[#A1A1AA] mt-3">Forget Password ?</a>
        <button class="bg-black text-white mt-3 py-2 h-11 rounded-md">Sign In</button>
        <a href="/register" class="w-full border-[#A1A1AA] text-center border mt-3 py-2 h-11 rounded-md">Sign Up</a>
    </form>
</div>
@endsection