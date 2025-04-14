<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/logo-white.png') }}">
    <title>Next Chapter</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <main class="grid grid-cols-2 gap-5">
        <section>
            <img src="{{ asset('storage/images/login.png') }}" alt="Black Logo of Next Chapter">
        </section>

        <section class="flex justify-center items-center">
            <div class="flex flex-col gap-14">
                <div class="flex justify-center">
                    <a href="index.html">
                        <img src="{{ asset('storage/images/logo-black.png') }}" class="w-24">
                    </a>
                </div>
                <div class="flex flex-col items-center gap-5 text-center">
                    <h1 class="text-3xl">Sign in to <span class="font-semibold">NEXT CHAPTER</span></h1>
                    <p class="text-sm font-light px-10">Welcome to <span class="font-normal">NEXT CHAPTER</span>, please enter your login credentials below to access the workspace</p>
                </div>
                <form class="flex flex-col gap-6 px-10">
                    <input class="bg-white text-black placeholder:text-gray-500 outline-none border border-gray-200 rounded-md w-full py-3 px-5" type="email" placeholder="Email Adress">
                    <input class="bg-white text-black placeholder:text-gray-500 outline-none border border-gray-200 rounded-md w-full py-3 px-5" type="password" placeholder="Password">
                    <a href="#" class="text-center underline text-blue-600">Forgot Password?</a>
                    <button type="button" class="bg-[#222222] text-white rounded-md font-medium py-3 cursor-pointer hover:bg-[#424242] transition duration-300 ease-in-out">Login</button>
                </form>
                <div class="flex items-center gap-5 px-10">
                    <div class="h-[1px] bg-[#222222] flex-1"> </div>
                    <p>OR</p>
                    <div class="h-[1px] bg-[#222222] flex-1"> </div>
                </div>
                <button class="flex items-center justify-center gap-5 bg-white mx-10 py-3 border border-gray-200 rounded-md hover:bg-gray-100 transition duration-300 ease-in-out cursor-pointer">
                    <img src="{{ asset('storage/images/google.png') }}" alt="Google Icon">
                    <span>Sign in with Google</span>
                </button>
            </div>
        </section>
    </main>
</body>
</html>