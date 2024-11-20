@extends('layout.default')
@section('title','Login')

@section('content')
<div class="bg-white shadow">
    <h1>Login</h1>
    <p>To get Started</p>
    <form>
        <div>
            <label for="Email">Email</label>
            <input type="email">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password">
        </div>
        <a href="#">Forget Password ?</a>
        <button>Sign In</button>
        <a href="noweere">Sign Up</a>
    </form>
</div>
@endsection