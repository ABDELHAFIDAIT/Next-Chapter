<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/logo-white.png') }}">
    @vite('resources/js/admin.js')
    @vite('resources/css/app.css')
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <main class="flex">
        <!-- Sidebar Navigation -->
        <nav class="flex flex-col justify-between h-screen bg-[#222222] text-white p-4 w-56">
            <!-- Logo and Title -->
            <div class="flex items-center gap-5">
                <img src="{{ asset('storage/images/logo-white.png') }}" alt="Logo White de Next Chapter" class="w-8 h-8">
                <h1 class="text-xl text-gray-200 font-medium">Dashboard</h1>
            </div>
            <!-- Navigation Links -->
            <div class="flex flex-col gap-2 text-xs">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300">
                    <svg class="w-[15px] h-[15px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                        </path>
                    </svg>
                    <span>Statistics</span>
                </a>
                <a href="{{ route('admin.accounts') }}" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300 rounded-lg bg-[#D6FF40] text-black">
                    <svg fill="#222" width="15px" height="15px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M25 12h-1v-3.816c0-4.589-3.32-8.184-8.037-8.184-4.736 0-7.963 3.671-7.963 8.184v3.816h-1c-2.206 0-4 1.794-4 4v12c0 2.206 1.794 4 4 4h18c2.206 0 4-1.794 4-4v-12c0-2.206-1.794-4-4-4zM10 8.184c0-3.409 2.33-6.184 5.963-6.184 3.596 0 6.037 2.716 6.037 6.184v3.816h-12v-3.816zM27 28c0 1.102-0.898 2-2 2h-18c-1.103 0-2-0.898-2-2v-12c0-1.102 0.897-2 2-2h18c1.102 0 2 0.898 2 2v12zM16 18c-1.104 0-2 0.895-2 2 0 0.738 0.405 1.376 1 1.723v3.277c0 0.552 0.448 1 1 1s1-0.448 1-1v-3.277c0.595-0.346 1-0.985 1-1.723 0-1.105-0.895-2-2-2z"></path> </g></svg>
                    <span>Accounts</span>
                </a>
                <a href="#" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300">
                    <svg class="w-[15px] h-[15px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>Prisonners</span>
                </a>
                <a href="#" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300">
                    <svg width="15px" height="15px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                    <span>Teachers</span>
                </a>
                <a href="#" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300">
                    <svg width="15px" height="15px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                    <span>Recruiters</span>
                </a>
                <a href="#" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300">
                    <svg width="15px" height="15px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                    </svg>
                    <span>Courses</span>
                </a>
                <a href="#" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300">
                    <svg width="15px" height="15px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                    <span>Announcements</span>
                </a>
            </div>
            <!-- Logout Button -->
            <form method="post" action="{{ route('logout') }}" class="">
                @csrf
                <button class="flex justify-start cursor-pointer text-xs items-center gap-3 p-3 hover:scale-105 transition-all ease-in-out duration-300">
                    <svg width="15px" height="15px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    <span>Logout</span>
                </button>
            </form>
        </nav>

        <section class="flex-1">
            <!-- Header Section -->
            <header class="bg-[#222] flex items-center justify-between px-14 py-4">
                <!-- Search Section -->
                <form action="">
                    <input type="text" placeholder="Search..." class="outline-none text-sm py-[6px] px-3 rounded-lg bg-[#EDF7F1] text-black w-64" />
                </form>
                <!-- Notification and Profile Section -->
                <a href="#" class="flex items-center gap-2">
                    <img src="{{ asset('storage/images/profile.png') }}" class="w-9 h-9 rounded-full" alt="User Profile"/>
                    <div class="flex flex-col justify-around">
                        <h1 class="text-gray-200 text-sm">{{ucfirst(Auth::user()->f_name)}} {{ucfirst(Auth::user()->l_name)}}</h1>
                        <p class="text-[#FFE500] text-xs font-light">{{ucfirst(Auth::user()->role)}}</p>
                    </div>
                </a>
            </header>

            <!-- Main Content Section -->
            <section class="p-5 h-[calc(100vh-70px)] overflow-auto flex flex-col gap-5">
                <div class="flex items-center justify-between">
                    <h1 class="text-xl font-medium text-[#222]">Welcome to Accounts Managment Space</h1>
                    <button id="open-account-popup" class="py-1 px-10 bg-[#D6FF40] flex items-center gap-3 rounded-md font-medium cursor-pointer transition-all ease-in-out duration-300 hover:bg-[#222] hover:text-white">
                        <span>+</span>
                        <span>Create Account</span>
                    </button>
                </div>
                
                <h1 class="col-span-3 text-black text-sm text-gray-600">There is the list of New Users that haven't Accessed Their Account Yet </h1>
                @if(count($users) == 0)
                    <h1 class="col-span-3 text-2xl font-semibold text-red-600">No New Users Found !</h1>
                @else
                    <div class="overflow-x-auto bg-white rounded-lg border border-gray-100">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-[#222] text-gray-200">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Photo</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Full Name</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Email</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Role</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-center text-xs font-semibold uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 text-sm text-gray-800">
                                @foreach($users as $user)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-6 py-4">
                                            <img src="{{ asset($user->photo) }}" class="w-10 h-10 rounded-full object-cover" alt="photo">
                                        </td>
                                        <td class="px-6 py-4 font-medium">
                                            {{ $user->f_name }} {{ $user->l_name }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="mailto:{{ $user->email }}" class="text-blue-600 hover:underline">{{ $user->email }}</a>
                                        </td>
                                        <td class="px-6 py-4">
                                            <span class="inline-block px-2 py-1 text-xs font-semibold bg-gray-800 text-white rounded">
                                                {{ ucfirst($user->role) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">
                                            @if($user->status === 'active')
                                                <span class="inline-block px-2 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">Active</span>
                                            @else
                                                <span class="inline-block px-2 py-1 text-xs font-semibold bg-red-100 text-red-800 rounded-full">Suspended</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <div class="flex justify-center gap-2">
                                                @if($user->status === 'suspended')
                                                    <form method="POST" action="{{ route('change.user.status', $user->id) }}">
                                                        @csrf
                                                        <button class="px-3 py-1 bg-green-600 text-white text-xs rounded hover:bg-green-700 transition-all ease-in-out duration-300 cursor-pointer">
                                                            Activate
                                                        </button>
                                                    </form>
                                                @else
                                                    <form method="POST" action="{{ route('change.user.status', $user->id) }}">
                                                        @csrf
                                                        <button class="px-3 py-1 bg-red-600 text-white text-xs rounded hover:bg-red-700 transition-all ease-in-out duration-300 cursor-pointer">
                                                            Suspend
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($users->hasPages())
                        <nav>
                            <ul class="flex items-center justify-center gap-5">
                                {{-- Previous Page Link --}}
                                @if ($users->onFirstPage())
                                    <li class="">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier"> <path d="M14.2893 5.70708C13.8988 5.31655 13.2657 5.31655 12.8751 5.70708L7.98768 10.5993C7.20729 11.3805 7.2076 12.6463 7.98837 13.427L12.8787 18.3174C13.2693 18.7079 13.9024 18.7079 14.293 18.3174C14.6835 17.9269 14.6835 17.2937 14.293 16.9032L10.1073 12.7175C9.71678 12.327 9.71678 11.6939 10.1073 11.3033L14.2893 7.12129C14.6799 6.73077 14.6799 6.0976 14.2893 5.70708Z" fill="#0F0F0F"></path> 
                                            </g>
                                        </svg>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $users->previousPageUrl() }}" class="">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier"> <path d="M14.2893 5.70708C13.8988 5.31655 13.2657 5.31655 12.8751 5.70708L7.98768 10.5993C7.20729 11.3805 7.2076 12.6463 7.98837 13.427L12.8787 18.3174C13.2693 18.7079 13.9024 18.7079 14.293 18.3174C14.6835 17.9269 14.6835 17.2937 14.293 16.9032L10.1073 12.7175C9.71678 12.327 9.71678 11.6939 10.1073 11.3033L14.2893 7.12129C14.6799 6.73077 14.6799 6.0976 14.2893 5.70708Z" fill="#0F0F0F"></path> 
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                                    @if ($page == $users->currentPage())
                                        <li class="text-blue-500 font-semibold">{{ $page }}</li>
                                    @else
                                        <li><a href="{{ $url }}" class="hover:text-gray-600 font-semibold">{{ $page }}</a></li>
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($users->hasMorePages())
                                    <li>
                                        <a href="{{ $users->nextPageUrl() }}" class="">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier"> 
                                                    <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" fill="#0F0F0F"></path> 
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                @else
                                    <li class="">
                                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                            <g id="SVGRepo_iconCarrier"> 
                                                <path d="M9.71069 18.2929C10.1012 18.6834 10.7344 18.6834 11.1249 18.2929L16.0123 13.4006C16.7927 12.6195 16.7924 11.3537 16.0117 10.5729L11.1213 5.68254C10.7308 5.29202 10.0976 5.29202 9.70708 5.68254C9.31655 6.07307 9.31655 6.70623 9.70708 7.09676L13.8927 11.2824C14.2833 11.6729 14.2833 12.3061 13.8927 12.6966L9.71069 16.8787C9.32016 17.2692 9.32016 17.9023 9.71069 18.2929Z" fill="#0F0F0F"></path> 
                                            </g>
                                        </svg>
                                    </li>
                                @endif
                            </ul>
                        </nav>
                    @endif
                @endif
            </section>

            <!-- Account Creation Popup -->
            <section id="account-popup" class="hidden flex items-center justify-center fixed inset-0 bg-[rgba(0,0,0,0.7)] z-50">
                <div class="bg-[#222] flex flex-col gap-5 p-5 rounded-md w-1/2 text-white">
                    <div class="flex items-center justify-between pb-5 border-b border-b-gray-400">
                        <h1 class="text-xl font-medium ">Create Account</h1>
                        <button id="close-account-popup" class="text-2xl cursor-pointer hover:text-red-500 transition-all ease-in-out duration-300">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <form id="form-account" method="POST" action="{{ route('admin.accounts.create') }}" class="flex flex-col gap-5">
                        @csrf
                        <div class="flex items-center gap-5">
                            <div class="flex flex-col gap-1 flex-1">
                                <label class="pl-3 text-sm" for="f_name">First Name</label>
                                @error('f_name')
                                    <span class="text-xs text-red-500 pl-3">
                                        {{$message}}
                                    </span>
                                @enderror
                                <input required
                                    class="text-sm bg-white text-black px-5 py-2 rounded-md border border-gray-200 outline-none focus:border-black"
                                    type="text" id="f_name" name="f_name" placeholder="Enter Your First Name">
                            </div>
                            <div class="flex flex-col gap-1 flex-1">
                                <label class="pl-3 text-sm" for="l_name">Last Name</label>
                                @error('l_name')
                                    <span class="text-xs text-red-500 pl-3">
                                        {{$message}}
                                    </span>
                                @enderror
                                <input required
                                    class="text-sm bg-white text-black px-5 py-2 rounded-md border border-gray-200 outline-none focus:border-black"
                                    type="text" id="l_name" name="l_name" placeholder="Enter Your Last Name">
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="pl-3 text-sm" for="email">Email Adress</label>
                            @error('email')
                                <span class="text-xs text-red-500 pl-3">
                                    {{$message}}
                                </span>
                            @enderror
                            <input required
                                class="text-sm bg-white text-black px-5 py-2 rounded-md border border-gray-200 outline-none focus:border-black"
                                type="text" id="email" name="email" placeholder="Enter Your Email Adress">
                        </div>
                        <div class="flex flex-col gap-1">
                            <label class="pl-3 text-sm" for="role">Role</label>
                            <select
                                class="text-sm bg-white text-black px-5 py-2 rounded-md border border-gray-200 outline-none focus:border-black"
                                type="text" id="role" name="role">
                                <option value="prisonner">Prisonner</option>
                                <option value="teacher">Teacher</option>
                                <option value="recruiter">Recruiter</option>
                            </select>
                        </div>
                        <div class="mt-3">
                            <button
                                class="text-[#222] cursor-pointer bg-[#D6FF40] py-2 text-sm w-full font-medium rounded-md">Create Account</button>
                        </div>
                    </form>
                </div>
            </section>
        </section>
    </main>
</body>
</html>