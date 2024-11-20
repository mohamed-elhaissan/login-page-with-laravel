<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title','loginAuth')</title>
    <!-- tailwindcss CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            font-family: 'poppins',sans-serif;
            background-color: #FAFAFA;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="loading">
        <div class="w-full h-full absolute left-0 top-0 bg-[#A1A1AA] z-20"></div>
        <div class="w-full h-full absolute left-0 top-0 bg-black z-20"></div>
    </div>
    @yield('content')





    <script src="https://cdn.jsdelivr.net/npm/motion@11.11.13/dist/motion.js"></script>
    <script src="script.js"></script>
</body>

</html>