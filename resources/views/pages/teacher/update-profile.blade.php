<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/logo-white.png">
    <title>Next Chapter</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* body{
            background: url({{ asset('storage/images/bg-2.png') }});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        } */
    </style>
</head>
<body style="background: url({{ asset('storage/images/bg-2.png') }});background-size: cover;background-position: center;background-repeat: no-repeat;background-attachment: fixed;">
    <main class="flex items-center justify-center py-20">
        <section class="flex flex-col">
            <h1 class="font-semibold text-2xl mb-3">Update Your Profile Informations</h1>
            <form method="POST" action="{{ route('teacher.profile.update') }}" class="flex flex-col gap-5 mt-5" enctype="multipart/form-data">
                @csrf
                <div class="flex items-center gap-5">
                    <div class="flex flex-col gap-2">
                        <label for="f_name" class="text-sm pl-2">First Name : </label>
                        <input value="{{ Auth::user()->f_name }}" type="text" id="f_name" name="f_name" placeholder="First Name" class="outline-none bg-white text-black py-2 px-5 w- border border-gray-200 rounded-sm text-sm focus:border-gray-400" required>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="l_name" class="text-sm pl-2">Last Name : </label>
                        <input value="{{ Auth::user()->l_name }}" type="text" id="l_name" name="l_name" placeholder="Last Name" class="outline-none bg-white text-black py-2 px-5 w- border border-gray-200 rounded-sm text-sm focus:border-gray-400" required>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="phone" class="text-sm pl-2">Phone : </label>
                    <input type="phone" id="phone" name="phone" placeholder="Phone Number" class="outline-none bg-white text-black py-2 px-5 w- border border-gray-200 rounded-sm text-sm focus:border-gray-400" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="photo" class="text-sm pl-2">Photo : </label>
                    <input type="file" id="photo" name="photo" accept="image/*" class="flex-1 file:bg-[#D6FF40] file:text-sm file:py-1 file:px-3 file:rounded-sm file:transition-all file:ease-in-out file:duration-300 hover:file:bg-[#222] hover:file:text-white file:cursor-pointer outline-none bg-white text-black py-2 px-2 w-full border border-gray-200 rounded-sm text-sm focus:border-gray-400" required>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="bio" class="text-sm pl-2">Bio : </label>
                    <textarea id="bio" name="bio" placeholder="Biography" class="outline-none bg-white text-black py-2 px-5 w- border border-gray-200 rounded-sm text-sm focus:border-gray-400 h-36" required></textarea>
                </div>
                <div class="flex justify-end">
                    <button class="cursor-pointer bg-[#222222] text-white py-2 px-5 text-sm rounded-sm w-36">
                        Done
                    </button>
                </div>
            </form>
        </section>

    </main>
</body>
</html>