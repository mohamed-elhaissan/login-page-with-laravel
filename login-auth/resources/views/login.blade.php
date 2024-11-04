@extends('layout')
@section('title', 'login')
@section('content')
    <div class="loading w-full h-full bg-[#F3F4F6] z-10 absolute left-0 top-0 flex justify-center items-center">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div class="bg-white p-4 w-[30%]">
        <h1 class="font-semibold text-3xl text-center">login</h1>
        <p class="opacity-50 text-sm my-2 text-center">Enter your credentials to access your account</p>
        <form class="flex flex-col">
            <label for="Email" class="text-sm">Email</label>
            <input type="email" class="pl-1 py-2 focus:ring-2 outline-none mt-1 mb-4 border rounded-sm text-sm"
                id="Email" name="Email" placeholder="exemple@gmail.com" required>
            <label for="password" class="text-sm">Password</label>
            <input type="password" id="password" name="password"
                class="pl-1 py-1 focus:ring-2 outline-none mt-1 mb-4 border rounded-sm" required>
            <button class="bg-black text-white text-sm py-2 rounded-sm ">Log in</button>
            <div class="text-center text-[rgba(0,0,0,0.5)] text-sm mt-4">Don't have an account? <a href="/Register"
                    class="text-black">Register here</a></div>

        </form>

    </div>
@endsection
