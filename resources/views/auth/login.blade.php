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
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('storage/images/logo-black.png') }}" class="w-24">
                    </a>
                </div>
                <div class="flex flex-col items-center gap-5 text-center">
                    <h1 class="text-3xl">Sign in to <span class="font-semibold">NEXT CHAPTER</span></h1>
                    <p class="text-sm font-light px-10">Welcome to <span class="font-normal">NEXT CHAPTER</span>, please enter your login credentials below to access the workspace</p>
                </div>
                <div class="flex flex-col gap-5">
                    @error('Status')
                        <div class="text-red-600 bg-red-100 border border-red-200 rounded-sm font-light text-xs mx-10 px-5 py-2">{{ $message }}</div>
                    @enderror
                    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-2 px-10">
                        @csrf
                        <input name="email" class="bg-white text-black placeholder:text-gray-500 outline-none border border-gray-200 rounded-md w-full py-3 px-5" type="email" placeholder="Email Adress">
                        @error('email')
                            <label class="text-red-600 font-light text-xs pl-2">{{ $message }}</label>
                        @enderror
                        <input name="password" class="bg-white text-black placeholder:text-gray-500 outline-none border border-gray-200 rounded-md w-full py-3 px-5 mt-2" type="password" placeholder="Password">
                        <div class="flex justify-between items-center mt-2">
                            <div class="flex items-center">
                                <input type="checkbox" id="remember" name="remember"
                                    class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                <label for="remember" class="ml-2 block text-sm text-gray-700">
                                    Remember Me
                                </label>
                            </div>
                            <a href="#" class="text-center underline text-blue-600">Forgot Password?</a>
                        </div>
                        <button type="submit" class="bg-[#222222] text-white rounded-md font-medium py-3 cursor-pointer hover:bg-[#424242] transition duration-300 ease-in-out mt-2">Login</button>
                    </form>
                </div>
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