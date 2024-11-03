@extends('layout')
@section('title', 'Register')

@section('content')
    <div class="bg-white p-4 w-[30%]">
        <h1 class="font-semibold text-3xl text-center">Register</h1>
        <p class="opacity-50 text-sm my-2 text-center">Lets get started</p>
        <form class="flex flex-col">
            <input type="userName" class="pl-1 py-2 focus:ring-2 outline-none mt-1 mb-1 border rounded-sm text-sm id="userName" placeholder="Usernamee"
                name="Email" required>
            <input type="email" class="pl-1 py-2 focus:ring-2 outline-none mt-1 mb-1 border rounded-sm text-sm" id="Email" placeholder="Email"
                name="Email" required>
            <input type="password" id="password" name="password" placeholder="Password"
                class="pl-1 py-2 focus:ring-2 outline-none mt-1 mb-1 border rounded-sm text-sm" required >
            <input type="password" id="password" name="password" placeholder="Confirm Password"
                class="pl-1 py-2 focus:ring-2 outline-none mt-1 mb-1 border rounded-sm text-sm" required>
                <div class="flex my-3">
                    <input type="checkbox">
                    <p class="text-sm ml-3 opacity-50">Agree to Our terms and Conditions</p>
                </div>
            <button class="bg-black text-white text-sm py-2 rounded-sm ">Log in</button>
            <div class="text-center text-[rgba(0,0,0,0.5)] text-sm mt-4">Already registered? <a href="/login"
                    class="text-black">Login</a></div>

        </form>

    </div>
@endsection
