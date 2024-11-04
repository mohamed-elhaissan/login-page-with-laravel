<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'custom auth laravel')</title>
    {{-- tailwindcss link --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- inter font name --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
        @vite('resources/sass/app.scss')
    <style>
        body {
            background: #F3F4F6;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'inter',sans-serif;
        }
        .loading div {
            background: #000;
            animation: loadingAnimation 1s ease-in-out;
        }
        @keyframes loadingAnimation {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: 360%;
            }
        }
    </style>
    {{-- gsap cdn  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
</head>

<body>

    @yield('content')
    <script src="{{asset('js/Script.js')}}"></script>

</body>

</html>
