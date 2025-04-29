@extends('layouts.prisonner')

@section('main')
    <section class="grid grid-cols-4 gap-10 py-10 px-20">
        {{-- Navigation Links --}}
        <div class="flex flex-col p-6 rounded-lg shadow-md border border-gray-200 bg-[#222] text-white h-min sticky top-24">
            <div class="flex items-center gap-5 pb-5">
                <img src="{{ asset('storage/'.Auth::user()->photo) }}" class="w-14 rounded-full">
                <div class="flex flex-col gap-1">
                    <h1 class="font-medium text-white text-sm">{{ Auth::user()->f_name }}</h1>
                    <h1 class="font-medium text-white text-sm">{{ Auth::user()->l_name }}</h1>
                </div>
            </div>
            <h1 class="text-lg font-semibold pb-5 border-b border-b-gray-500 text-[#D6FF40]">Update Your Profile</h1>
            <div class="flex items-center gap-3 pb-2 pt-5">
                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier"> 
                        <rect width="24" height="24" fill="none"></rect> 
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM11.9999 6C9.79077 6 7.99991 7.79086 7.99991 10C7.99991 12.2091 9.79077 14 11.9999 14C14.209 14 15.9999 12.2091 15.9999 10C15.9999 7.79086 14.209 6 11.9999 6ZM17.1115 15.9974C17.8693 16.4854 17.8323 17.5491 17.1422 18.1288C15.7517 19.2966 13.9581 20 12.0001 20C10.0551 20 8.27215 19.3059 6.88556 18.1518C6.18931 17.5723 6.15242 16.5032 6.91351 16.012C7.15044 15.8591 7.40846 15.7251 7.68849 15.6097C8.81516 15.1452 10.2542 15 12 15C13.7546 15 15.2018 15.1359 16.3314 15.5954C16.6136 15.7102 16.8734 15.8441 17.1115 15.9974Z" fill="#ffffff"></path> 
                    </g>
                </svg>
                <p class="text-sm cursor-pointer transition-all ease-in-out duration-300 hover:text-[#FFE500] hover:underline" id="btn-update-infos">Update Informations</p>
            </div>
            <div class="flex items-center gap-3 py-2">
                <svg fill="#ffffff" height="20px" width="20px" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M23,14.1V8.9C23,5.1,19.9,2,16,2S9,5.1,9,8.9v5.2c-2.3,0.5-4,2.5-4,4.9v5c0,2.8,2.2,5,5,5h12c2.8,0,5-2.2,5-5v-5 C27,16.6,25.3,14.6,23,14.1z M17,23.8V25c0,0.6-0.4,1-1,1s-1-0.4-1-1v-1.2c-1.2-0.4-2-1.5-2-2.8c0-1.7,1.3-3,3-3s3,1.3,3,3 C19,22.3,18.2,23.4,17,23.8z M21,14H11V8.9C11,6.2,13.2,4,16,4s5,2.2,5,4.9V14z"></path> </g> </g></svg>
                <p class="text-sm cursor-pointer transition-all ease-in-out duration-300 hover:text-[#FFE500] hover:underline" id="btn-update-password">Update Password</p>
            </div>
            <div class="flex items-center gap-3 pt-2 pb-5 border-b border-b-gray-500">
                <svg fill="#ffffff" height="15px" width="15px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 31.891 31.891" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M30.543,5.74l-4.078-4.035c-1.805-1.777-4.736-1.789-6.545-0.02l-4.525,4.414c-1.812,1.768-1.82,4.648-0.02,6.424 l2.586-2.484c-0.262-0.791,0.061-1.697,0.701-2.324l2.879-2.807c0.912-0.885,2.375-0.881,3.275,0.01l2.449,2.42 c0.9,0.891,0.896,2.326-0.01,3.213l-2.879,2.809c-0.609,0.594-1.609,0.92-2.385,0.711l-2.533,2.486 c1.803,1.781,4.732,1.789,6.545,0.02l4.52-4.41C32.34,10.396,32.346,7.519,30.543,5.74z"></path> <path d="M13.975,21.894c0.215,0.773-0.129,1.773-0.752,2.381l-2.689,2.627c-0.922,0.9-2.414,0.895-3.332-0.012l-2.498-2.461 c-0.916-0.906-0.91-2.379,0.012-3.275l2.691-2.627c0.656-0.637,1.598-0.961,2.42-0.689l2.594-2.57 c-1.836-1.811-4.824-1.82-6.668-0.02l-4.363,4.26c-1.846,1.803-1.855,4.734-0.02,6.549l4.154,4.107 c1.834,1.809,4.82,1.818,6.668,0.018l4.363-4.26c1.844-1.805,1.852-4.734,0.02-6.547L13.975,21.894z"></path> <path d="M11.139,20.722c0.611,0.617,1.611,0.623,2.234,0.008l7.455-7.416c0.621-0.617,0.625-1.615,0.008-2.234 c-0.613-0.615-1.611-0.619-2.23-0.006l-7.457,7.414C10.529,19.103,10.525,20.101,11.139,20.722z"></path> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </g> </g></svg>
                <p class="text-sm cursor-pointer transition-all ease-in-out duration-300 hover:text-[#FFE500] hover:underline" id="btn-update-links">Update Links</p>
            </div>
            <form method="post" action="{{ route('logout') }}"
                class="flex items-center gap-3 pt-5 pb-2 cursor-pointer text-sm text-red-300">
                @csrf
                <button class="cursor-pointer flex items-center gap-2 transition-all ease-in-out duration-300 hover:scale-105">
                    <svg width="15px" height="15px" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" fill="none"
                        stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-log-out"><path
                            d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline
                            points="16 17 21 12 16 7"></polyline><line
                            x1="21" y1="12" x2="9" y2="12"></line></svg>
                    <span>Logout</span>
                </button>
            </form>
        </div>

        {{-- forms --}}
        <div class="col-span-3 flex flex-col gap-5">
            {{-- Update Profile Informations Form --}}
            <form id="form-update-infos" action="" class="bg-white flex flex-col gap-5 p-5 shadow-md border border-gray-300 rounded-md" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-2 pb-3 mb-5 pl-5 border-b border-b-gray-300">
                    <h1 class="font-semibold text-2xl">Update Your Informations</h1>
                    <p class="font-light text-gray-600 text-xs">Edit Your Profile Informations Now</p>
                </div>
                <div class="flex items-center gap-5">
                    <div class="flex-1 flex flex-col gap-2">
                        <label for="f_name" class="text-sm pl-2">First Name : </label>
                        <input value="{{ Auth::user()->f_name }}" type="text" id="f_name" name="f_name" placeholder="First Name" class="outline-none bg-white text-black py-2 px-5 w- border border-gray-200 rounded-sm text-sm focus:border-gray-400" required>
                    </div>
                    <div class="flex-1 flex flex-col gap-2">
                        <label for="l_name" class="text-sm pl-2">Last Name : </label>
                        <input value="{{ Auth::user()->l_name }}" type="text" id="l_name" name="l_name" placeholder="Last Name" class="outline-none bg-white text-black py-2 px-5 w- border border-gray-200 rounded-sm text-sm focus:border-gray-400" required>
                    </div>
                </div>
                <div class="flex items-center gap-5">
                    <div class="flex-1 flex flex-col gap-2">
                        <label for="phone" class="text-sm pl-2">Phone : </label>
                        <input value="{{ Auth::user()->phone }}" type="phone" id="phone" name="phone" placeholder="Phone Number" class="outline-none bg-white text-black py-2 px-5 w- border border-gray-200 rounded-sm text-sm focus:border-gray-400" required>
                    </div>
                    <div class="flex-1 flex flex-col gap-2">
                        <label for="city" class="text-sm pl-2">City : </label>
                        <select name="city" id="city" class="outline-none bg-white text-black py-2 px-5 w- border border-gray-200 rounded-sm text-sm focus:border-gray-400" required>
                            {{-- @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach --}}
                        </select>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <img src="{{ asset('storage/'.Auth::user()->photo) }}" class="w-20 rounded-full">
                    <div class="flex-1 flex flex-col gap-2">
                        <label for="photo" class="text-sm pl-2">Photo : </label>
                        <input type="file" id="photo" name="photo" accept="image/*" class="flex-1 file:bg-[#D6FF40] file:text-sm file:py-1 file:px-3 file:rounded-sm file:transition-all file:ease-in-out file:duration-300 hover:file:bg-[#222] hover:file:text-white file:cursor-pointer outline-none bg-white text-black py-2 px-2 w-full border border-gray-200 rounded-sm text-sm focus:border-gray-400" required>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <label for="about" class="text-sm pl-2">About : </label>
                    <textarea id="about" name="about" placeholder="About You" class="outline-none bg-white text-black py-2 px-5 w- border border-gray-200 rounded-sm text-sm focus:border-gray-400 h-36" required></textarea>
                </div>
                <div class="flex items-center gap-3">
                    <a href="#" download="">
                        <svg height="60px" width="60px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 309.267 309.267" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#E2574C;" d="M38.658,0h164.23l87.049,86.711v203.227c0,10.679-8.659,19.329-19.329,19.329H38.658 c-10.67,0-19.329-8.65-19.329-19.329V19.329C19.329,8.65,27.989,0,38.658,0z"></path> <path style="fill:#B53629;" d="M289.658,86.981h-67.372c-10.67,0-19.329-8.659-19.329-19.329V0.193L289.658,86.981z"></path> <path style="fill:#FFFFFF;" d="M217.434,146.544c3.238,0,4.823-2.822,4.823-5.557c0-2.832-1.653-5.567-4.823-5.567h-18.44 c-3.605,0-5.615,2.986-5.615,6.282v45.317c0,4.04,2.3,6.282,5.412,6.282c3.093,0,5.403-2.242,5.403-6.282v-12.438h11.153 c3.46,0,5.19-2.832,5.19-5.644c0-2.754-1.73-5.49-5.19-5.49h-11.153v-16.903C204.194,146.544,217.434,146.544,217.434,146.544z M155.107,135.42h-13.492c-3.663,0-6.263,2.513-6.263,6.243v45.395c0,4.629,3.74,6.079,6.417,6.079h14.159 c16.758,0,27.824-11.027,27.824-28.047C183.743,147.095,173.325,135.42,155.107,135.42z M155.755,181.946h-8.225v-35.334h7.413 c11.221,0,16.101,7.529,16.101,17.918C171.044,174.253,166.25,181.946,155.755,181.946z M106.33,135.42H92.964 c-3.779,0-5.886,2.493-5.886,6.282v45.317c0,4.04,2.416,6.282,5.663,6.282s5.663-2.242,5.663-6.282v-13.231h8.379 c10.341,0,18.875-7.326,18.875-19.107C125.659,143.152,117.425,135.42,106.33,135.42z M106.108,163.158h-7.703v-17.097h7.703 c4.755,0,7.78,3.711,7.78,8.553C113.878,159.447,110.863,163.158,106.108,163.158z"></path> </g> </g></svg>
                    </a>
                    <div class="flex flex-col gap-2">
                        <label for="cv" class="text-sm pl-2">CV : </label>
                        <input type="file" id="cv" name="cv" accept=".pdf" class="flex-1 file:bg-[#D6FF40] file:text-sm file:py-1 file:px-3 file:rounded-sm file:transition-all file:ease-in-out file:duration-300 hover:file:bg-[#222] hover:file:text-white file:cursor-pointer outline-none bg-white text-black py-2 px-2 w-full border border-gray-200 rounded-sm text-sm focus:border-gray-400" required>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button class="font-medium cursor-pointer bg-[#222222] text-white py-2 px-5 text-sm rounded-sm w-36 transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-[#222]">
                        Save
                    </button>
                </div>
            </form>

            {{-- Update Password Form --}}
            <form id="form-update-password" method="POST" action="{{ route('change.password') }}" class="bg-white hidden flex flex-col gap-3 p-5 shadow-md border border-gray-300 rounded-md">
                @csrf
                {{-- <h1 class="font-medium text-lg pl-5 pb-3">Update Your Password :</h1> --}}
                <div class="flex flex-col gap-2 pb-3 mb-5 pl-5 border-b border-b-gray-300">
                    <h1 class="font-semibold text-2xl">Update Your Password</h1>
                    <p class="font-light text-gray-600 text-xs">Edit Your Account Password Now</p>
                </div>
                <label for="password" class="text-sm pl-2">New Password :</label>
                <input name="password" type="password" placeholder="New Password" class="flex-1 outline-none bg-white text-black py-2 px-5 border border-gray-200 rounded-sm text-sm focus:border-gray-400 mb-2" required>
                <label for="password_confirmation" class="text-sm pl-2">Confirm The New Password :</label>
                <input name="password_confirmation" type="password" placeholder="Confirm The New Password" class="flex-1 outline-none bg-white text-black py-2 px-5 border border-gray-200 rounded-sm text-sm focus:border-gray-400" required>
                <div class="flex justify-end pt-3">
                    <button class="font-medium cursor-pointer bg-[#222222] text-white py-2 px-5 text-sm rounded-sm w-36 transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-[#222]">
                        Save
                    </button>
                </div>
            </form>

            <form id="form-update-links" method="POST" action="{{ route('change.password') }}" class="hidden bg-white flex flex-col gap-3 p-5 shadow-md border border-gray-300 rounded-md">
                @csrf
                <div class="flex flex-col gap-2 pb-3 mb-5 pl-5 border-b border-b-gray-300">
                    <h1 class="font-semibold text-2xl">Add Links</h1>
                    <p class="font-light text-gray-600 text-xs">Edit Your Plateform Links Now</p>
                </div>
                <div class="flex items-center gap-3">
                    <svg width="40px" height="40px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#0A66C2" d="M12.225 12.225h-1.778V9.44c0-.664-.012-1.519-.925-1.519-.926 0-1.068.724-1.068 1.47v2.834H6.676V6.498h1.707v.783h.024c.348-.594.996-.95 1.684-.925 1.802 0 2.135 1.185 2.135 2.728l-.001 3.14zM4.67 5.715a1.037 1.037 0 01-1.032-1.031c0-.566.466-1.032 1.032-1.032.566 0 1.031.466 1.032 1.032 0 .566-.466 1.032-1.032 1.032zm.889 6.51h-1.78V6.498h1.78v5.727zM13.11 2H2.885A.88.88 0 002 2.866v10.268a.88.88 0 00.885.866h10.226a.882.882 0 00.889-.866V2.865a.88.88 0 00-.889-.864z"></path></g></svg>
                    <input name="linkedin" type="url" placeholder="Add Linkedin Link" class="flex-1 outline-none bg-white text-black py-2 px-5 border border-gray-200 rounded-sm text-sm focus:border-gray-400">
                </div>
                <div class="flex items-center gap-3">
                    <svg fill="#000000" width="40px" height="40px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12,2.2467A10.00042,10.00042,0,0,0,8.83752,21.73419c.5.08752.6875-.21247.6875-.475,0-.23749-.01251-1.025-.01251-1.86249C7,19.85919,6.35,18.78423,6.15,18.22173A3.636,3.636,0,0,0,5.125,16.8092c-.35-.1875-.85-.65-.01251-.66248A2.00117,2.00117,0,0,1,6.65,17.17169a2.13742,2.13742,0,0,0,2.91248.825A2.10376,2.10376,0,0,1,10.2,16.65923c-2.225-.25-4.55-1.11254-4.55-4.9375a3.89187,3.89187,0,0,1,1.025-2.6875,3.59373,3.59373,0,0,1,.1-2.65s.83747-.26251,2.75,1.025a9.42747,9.42747,0,0,1,5,0c1.91248-1.3,2.75-1.025,2.75-1.025a3.59323,3.59323,0,0,1,.1,2.65,3.869,3.869,0,0,1,1.025,2.6875c0,3.83747-2.33752,4.6875-4.5625,4.9375a2.36814,2.36814,0,0,1,.675,1.85c0,1.33752-.01251,2.41248-.01251,2.75,0,.26251.1875.575.6875.475A10.0053,10.0053,0,0,0,12,2.2467Z"></path></g></svg>
                    <input name="github" type="url" placeholder="Add GitHub Link" class="flex-1 outline-none bg-white text-black py-2 px-5 border border-gray-200 rounded-sm text-sm focus:border-gray-400">
                </div>
                <div class="flex items-center gap-3">
                    <svg width="40px" height="40px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M20.501 6.028V6h-.02A10.28 10.28 0 0 0 4.519 6H4.5v.028a10.262 10.262 0 0 0 0 12.944V19h.02a10.28 10.28 0 0 0 15.962 0h.021v-.028a10.262 10.262 0 0 0 0-12.944zM13 6V3.272A4.533 4.533 0 0 1 15.54 6zm2.935 1a16.827 16.827 0 0 1 .853 5H13V7zM12 3.272V6H9.46A4.533 4.533 0 0 1 12 3.272zM12 7v5H8.212a16.827 16.827 0 0 1 .853-5zm-4.787 5H3.226a9.234 9.234 0 0 1 1.792-5h2.984a17.952 17.952 0 0 0-.79 5zm0 1a17.952 17.952 0 0 0 .789 5H5.018a9.234 9.234 0 0 1-1.792-5zm1 0H12v5H9.065a16.827 16.827 0 0 1-.853-5zM12 19v2.728A4.533 4.533 0 0 1 9.46 19zm1 2.728V19h2.54A4.533 4.533 0 0 1 13 21.728zM13 18v-5h3.788a16.827 16.827 0 0 1-.853 5zm4.787-5h3.987a9.234 9.234 0 0 1-1.792 5h-2.984a17.952 17.952 0 0 0 .79-5zm0-1a17.952 17.952 0 0 0-.789-5h2.984a9.234 9.234 0 0 1 1.792 5zm1.352-6h-2.501a8.524 8.524 0 0 0-1.441-2.398A9.306 9.306 0 0 1 19.139 6zM9.803 3.602A8.524 8.524 0 0 0 8.363 6H5.86a9.306 9.306 0 0 1 3.942-2.398zM5.861 19h2.501a8.524 8.524 0 0 0 1.441 2.398A9.306 9.306 0 0 1 5.861 19zm9.336 2.398A8.524 8.524 0 0 0 16.637 19h2.502a9.306 9.306 0 0 1-3.942 2.398z"></path><path fill="none" d="M0 0h24v24H0z"></path></g></svg>
                    <input name="website" type="url" placeholder="Add Website/Blog/Portfolio Link" class="flex-1 outline-none bg-white text-black py-2 px-5 border border-gray-200 rounded-sm text-sm focus:border-gray-400">
                </div>
                <div class="flex justify-end pt-3">
                    <button class="font-medium cursor-pointer bg-[#222222] text-white py-2 px-5 text-sm rounded-sm w-36 transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-[#222]">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </section>
@endsection


@section('script')
    <script>
        const btnUpdateInfos = document.getElementById('btn-update-infos');
        const btnUpdatePassword = document.getElementById('btn-update-password');
        const formUpdateInfos = document.getElementById('form-update-infos');
        const formUpdatePassword = document.getElementById('form-update-password');
        const formUpdateLinks = document.getElementById('form-update-links');
        const btnUpdateLinks = document.getElementById('btn-update-links');

        btnUpdateInfos.addEventListener('click', () => {
            formUpdateInfos.classList.remove('hidden');
            formUpdatePassword.classList.add('hidden');
            formUpdateLinks.classList.add('hidden');
        });

        btnUpdatePassword.addEventListener('click', () => {
            formUpdateInfos.classList.add('hidden');
            formUpdateLinks.classList.add('hidden');
            formUpdatePassword.classList.remove('hidden');

        });

        btnUpdateLinks.addEventListener('click', () => {
            formUpdateInfos.classList.add('hidden');
            formUpdatePassword.classList.add('hidden');
            formUpdateLinks.classList.remove('hidden');
        });
    </script>
@endsection