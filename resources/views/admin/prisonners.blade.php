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
                <a href="{{ route('admin.accounts') }}" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300">
                    <svg fill="#FFF" width="15px" height="15px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M25 12h-1v-3.816c0-4.589-3.32-8.184-8.037-8.184-4.736 0-7.963 3.671-7.963 8.184v3.816h-1c-2.206 0-4 1.794-4 4v12c0 2.206 1.794 4 4 4h18c2.206 0 4-1.794 4-4v-12c0-2.206-1.794-4-4-4zM10 8.184c0-3.409 2.33-6.184 5.963-6.184 3.596 0 6.037 2.716 6.037 6.184v3.816h-12v-3.816zM27 28c0 1.102-0.898 2-2 2h-18c-1.103 0-2-0.898-2-2v-12c0-1.102 0.897-2 2-2h18c1.102 0 2 0.898 2 2v12zM16 18c-1.104 0-2 0.895-2 2 0 0.738 0.405 1.376 1 1.723v3.277c0 0.552 0.448 1 1 1s1-0.448 1-1v-3.277c0.595-0.346 1-0.985 1-1.723 0-1.105-0.895-2-2-2z"></path> </g></svg>
                    <span>Accounts</span>
                </a>
                <a href="{{ route('admin.prisonners') }}" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300 rounded-lg bg-[#D6FF40] text-black">
                    <svg class="w-[15px] h-[15px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span>Prisonners</span>
                </a>
                <a href="{{ route('admin.teachers') }}" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300">
                    <svg width="15px" height="15px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pen-tool"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
                    <span>Teachers</span>
                </a>
                <a href="#" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300">
                    <svg width="15px" height="15px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                    <span>Recruiters</span>
                </a>
                <a href="{{ route('admin.categories') }}" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300">
                    <svg fill="#fff" width="15px" height="15px" viewBox="0 0 35 35" data-name="Layer 2" id="e73e2821-510d-456e-b3bd-9363037e93e3" xmlns="http://www.w3.org/2000/svg"><path d="M11.933,15.055H3.479A3.232,3.232,0,0,1,.25,11.827V3.478A3.232,3.232,0,0,1,3.479.25h8.454a3.232,3.232,0,0,1,3.228,3.228v8.349A3.232,3.232,0,0,1,11.933,15.055ZM3.479,2.75a.73.73,0,0,0-.729.728v8.349a.73.73,0,0,0,.729.728h8.454a.729.729,0,0,0,.728-.728V3.478a.729.729,0,0,0-.728-.728Z"/><path d="M11.974,34.75H3.52A3.233,3.233,0,0,1,.291,31.521V23.173A3.232,3.232,0,0,1,3.52,19.945h8.454A3.232,3.232,0,0,1,15.2,23.173v8.348A3.232,3.232,0,0,1,11.974,34.75ZM3.52,22.445a.73.73,0,0,0-.729.728v8.348a.73.73,0,0,0,.729.729h8.454a.73.73,0,0,0,.728-.729V23.173a.729.729,0,0,0-.728-.728Z"/><path d="M31.522,34.75H23.068a3.233,3.233,0,0,1-3.229-3.229V23.173a3.232,3.232,0,0,1,3.229-3.228h8.454a3.232,3.232,0,0,1,3.228,3.228v8.348A3.232,3.232,0,0,1,31.522,34.75Zm-8.454-12.3a.73.73,0,0,0-.729.728v8.348a.73.73,0,0,0,.729.729h8.454a.73.73,0,0,0,.728-.729V23.173a.729.729,0,0,0-.728-.728Z"/><path d="M27.3,15.055a7.4,7.4,0,1,1,7.455-7.4A7.437,7.437,0,0,1,27.3,15.055Zm0-12.3a4.9,4.9,0,1,0,4.955,4.9A4.935,4.935,0,0,0,27.3,2.75Z"/></svg>
                    <span>Categories</span>
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
                @if(count($prisonners) == 0)
                    <h1 class="col-span-3 text-2xl font-semibold text-red-600">No Prisonners are Registred Yet !</h1>
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
                                @foreach($prisonners as $user)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-6 py-4">
                                            <img src="{{ asset('storage/'.$user->photo) }}" class="w-10 h-10 rounded-full object-cover" alt="photo">
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
                                            <div class="flex items-center justify-center gap-2">
                                                @if($user->status === 'suspended')
                                                    <form method="POST" action="{{ route('change.user.status', $user->id) }}">
                                                        @csrf
                                                        <button class="cursor-pointer">
                                                            <svg fill="#02ba17" width="25px" height="25px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M208.00146,32h-160a16.01582,16.01582,0,0,0-16,16V208a16.01583,16.01583,0,0,0,16,16h160a16.01582,16.01582,0,0,0,16-16V48A16.01581,16.01581,0,0,0,208.00146,32ZM177.5249,109.78125l-58.67187,56a7.98451,7.98451,0,0,1-11.04688,0l-29.32812-28a7.99571,7.99571,0,1,1,11.04687-11.5625l23.80469,22.71875L166.478,98.21875a7.99571,7.99571,0,1,1,11.04687,11.5625Z"/>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                @else
                                                    <form method="POST" action="{{ route('change.user.status', $user->id) }}">
                                                        @csrf
                                                        <button class="cursor-pointer">
                                                            <svg fill="#fc8e08" xmlns="http://www.w3.org/2000/svg" 
                                                                width="22px" height="22px" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve">
                                                            <path d="M26,2C12.8,2,2,12.8,2,26s10.8,24,24,24s24-10.8,24-24S39.2,2,26,2z M37.9,27.7c-0.1,0.7-0.7,1.3-1.5,1.3
                                                                H15.6c-0.8,0-1.4-0.5-1.5-1.3c-0.1-1.2-0.1-2.3,0-3.4c0.1-0.7,0.7-1.3,1.5-1.3h20.8c0.8,0,1.4,0.6,1.5,1.3
                                                                C38,25.5,38,26.6,37.9,27.7z"/>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                @endif
                                                <form method="post" action="{{ route('admin.delete', $user->id) }}">
                                                    @csrf
                                                    <button class="cursor-pointer">
                                                        <svg fill="#fc0505" width="22px" height="22px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5.755,20.283,4,8H20L18.245,20.283A2,2,0,0,1,16.265,22H7.735A2,2,0,0,1,5.755,20.283ZM21,4H16V3a1,1,0,0,0-1-1H9A1,1,0,0,0,8,3V4H3A1,1,0,0,0,3,6H21a1,1,0,0,0,0-2Z"/></svg>
                                                    </button>
                                                </form>
                                                <button class="open-user-infos-popup cursor-pointer" data-id-user="{{ $user}}">
                                                    <svg fill="#2196F3" height="25px" width="25px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                                            viewBox="0 0 42 42" enable-background="new 0 0 42 42" xml:space="preserve">
                                                        <path d="M15.3,20.1c0,3.1,2.6,5.7,5.7,5.7s5.7-2.6,5.7-5.7s-2.6-5.7-5.7-5.7S15.3,17,15.3,20.1z M23.4,32.4
                                                            C30.1,30.9,40.5,22,40.5,22s-7.7-12-18-13.3c-0.6-0.1-2.6-0.1-3-0.1c-10,1-18,13.7-18,13.7s8.7,8.6,17,9.9
                                                            C19.4,32.6,22.4,32.6,23.4,32.4z M11.1,20.7c0-5.2,4.4-9.4,9.9-9.4s9.9,4.2,9.9,9.4S26.5,30,21,30S11.1,25.8,11.1,20.7z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($prisonners->hasPages())
                        <nav>
                            <ul class="flex items-center justify-center gap-5">
                                {{-- Previous Page Link --}}
                                @if ($prisonners->onFirstPage())
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
                                        <a href="{{ $prisonners->previousPageUrl() }}" class="">
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
                                @foreach ($prisonners->getUrlRange(1, $prisonners->lastPage()) as $page => $url)
                                    @if ($page == $prisonners->currentPage())
                                        <li class="text-blue-500 font-semibold">{{ $page }}</li>
                                    @else
                                        <li><a href="{{ $url }}" class="hover:text-gray-600 font-semibold">{{ $page }}</a></li>
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($prisonners->hasMorePages())
                                    <li>
                                        <a href="{{ $prisonners->nextPageUrl() }}" class="">
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
        </section>

        <!-- User Infos Popup -->
        <section id="user-infos-popup" class="hidden flex items-center justify-center fixed inset-0 bg-[rgba(0,0,0,0.7)] z-50">
            <div class="bg-[#EDF7F1] flex flex-col gap-5 p-5 rounded-md w-2/3 text-black">
                <div class="flex items-center justify-between pb-5 border-b border-b-gray-400">
                    <h1 class="text-xl font-medium ">Prisonner Informations</h1>
                    <button id="close-user-infos-popup" class="text-2xl cursor-pointer hover:text-red-500 transition-all ease-in-out duration-300">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="flex flex-col gap-5 max-h-[70vh] overflow-auto">
                    <div class="flex items-center gap-10 pb-5 border-b border-b-gray-400">
                        <div class="flex items-center gap-10 px-10">
                            <div>
                                {{-- photo --}}
                                <img id="photo" src="" class="h-36 w-36 rounded-full ">
                            </div>
                            <div class="flex flex-col gap-10">
                                {{-- full name --}}
                                <h1 id="name" class="text-3xl font-semibold"></h1>
                                <div class="flex items-center gap-5">
                                    <div class="flex items-center gap-2">
                                        <svg fill="#000000" width="25px" height="25px" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                            <title>mail</title>
                                            <path d="M24 8.375l-12 10.281-12-10.281v-0.594h24v0.594zM24 22.875l-7.938-5.719 7.938-6.875v12.594zM0 10.281l7.938 6.875-7.938 5.719v-12.594zM12 20.688l3.281-2.875 8.719 6.281v0.125h-24v-0.125l8.719-6.281z"></path>
                                            </svg>
                                        {{-- Email --}}
                                        <a id="email" href=""></a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg version="1.1"
                                            id="svg2" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" sodipodi:docname="phone.svg" inkscape:version="0.48.4 r9939"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  width="18px" height="18px"
                                            viewBox="0 0 1200 1200" enable-background="new 0 0 1200 1200" xml:space="preserve">
                                            <path id="path16102" inkscape:connector-curvature="0" d="M1183.326,997.842l-169.187,167.83
                                            c-24.974,25.612-58.077,34.289-90.316,34.328c-142.571-4.271-277.333-74.304-387.981-146.215
                                            C354.22,921.655,187.574,757.82,82.984,559.832C42.87,476.809-4.198,370.878,0.299,278.209c0.401-34.86,9.795-69.073,34.346-91.543
                                            L203.831,17.565c35.132-29.883,69.107-19.551,91.589,15.257l136.111,258.102c14.326,30.577,6.108,63.339-15.266,85.188l-62.332,62.3
                                            c-3.848,5.271-6.298,11.271-6.36,17.801c23.902,92.522,96.313,177.799,160.281,236.486
                                            c63.967,58.688,132.725,138.198,221.977,157.021c11.032,3.077,24.545,4.158,32.438-3.179l72.51-73.743
                                            c24.996-18.945,61.086-28.205,87.771-12.714h1.272l245.51,144.943C1205.373,927.619,1209.131,971.279,1183.326,997.842
                                            L1183.326,997.842z"/>
                                        </svg>
                                        {{-- Phone --}}
                                        <a id="phone" href=""></a>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <svg fill="#000000" height="18px" width="18px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                                        <path d="M256,0C149.3,0,64,85.3,64,192c0,36.9,11,65.4,30.1,94.3l141.7,215v0c4.3,6.5,11.7,10.7,20.2,10.7c8.5,0,16-4.3,20.2-10.7
                                            l141.7-215C437,257.4,448,228.9,448,192C448,85.3,362.7,0,256,0z M256,298.6c-58.9,0-106.7-47.8-106.7-106.8
                                            c0-59,47.8-106.8,106.7-106.8c58.9,0,106.7,47.8,106.7,106.8C362.7,250.8,314.9,298.6,256,298.6z"/>
                                        </svg>
                                        {{-- City --}}
                                        <p id="city"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-10 pb-5 px-10 border-b border-b-gray-400">
                        <h1 class="font-medium text-lg">About </h1>
                        <p class="col-span-2 font-light text-sm text-justify" id="about"></p>
                    </div>
                    <div class="grid grid-cols-3 gap-x-10 px-10">
                        <h1 class="font-medium text-lg">CV </h1>
                        <a id="cv" href="" download="" class="col-span-2 font-light text-sm text-justify">CurriculumVitae.pdf</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        const userInfosPopup = document.getElementById('user-infos-popup');
        const closeUserInfosPopup = document.getElementById('close-user-infos-popup');
        const openUserInfosPopupButtons = document.querySelectorAll('.open-user-infos-popup');

        openUserInfosPopupButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                const user = JSON.parse(btn.getAttribute('data-id-user'));
                console.log(user);
                document.querySelector('#photo').src = `{{ asset('storage') }}/${user.photo}`;
                document.querySelector('#name').innerText = `${user.f_name} ${user.l_name}`;
                document.querySelector('#email').href = `mailto:${user.email}`;	
                document.querySelector('#email').innerText = `${user.email}`;	
                document.querySelector('#phone').innerText = user.phone;
                document.querySelector('#city').innerText = user.prisonner.city.name;
                document.querySelector('#about').innerText = user.prisonner.about;
                document.querySelector('#cv').href = `{{ asset('storage') }}/${user.prisonner.cv}`;
                document.querySelector('#cv').download = `CV-${user.f_name}-${user.l_name}.pdf`;
                userInfosPopup.classList.remove('hidden');
            });
        });

        closeUserInfosPopup.addEventListener('click', () => {
            userInfosPopup.classList.add('hidden');
        });

    </script>
</body>
</html>