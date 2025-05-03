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
                <a id="" href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300">
                    <svg class="w-[15px] h-[15px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                        </path>
                    </svg>
                    <span>Statistics</span>
                </a>
                <a href="{{ route('admin.accounts') }}" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300">
                    <svg fill="currentColor" width="15px" height="15px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M25 12h-1v-3.816c0-4.589-3.32-8.184-8.037-8.184-4.736 0-7.963 3.671-7.963 8.184v3.816h-1c-2.206 0-4 1.794-4 4v12c0 2.206 1.794 4 4 4h18c2.206 0 4-1.794 4-4v-12c0-2.206-1.794-4-4-4zM10 8.184c0-3.409 2.33-6.184 5.963-6.184 3.596 0 6.037 2.716 6.037 6.184v3.816h-12v-3.816zM27 28c0 1.102-0.898 2-2 2h-18c-1.103 0-2-0.898-2-2v-12c0-1.102 0.897-2 2-2h18c1.102 0 2 0.898 2 2v12zM16 18c-1.104 0-2 0.895-2 2 0 0.738 0.405 1.376 1 1.723v3.277c0 0.552 0.448 1 1 1s1-0.448 1-1v-3.277c0.595-0.346 1-0.985 1-1.723 0-1.105-0.895-2-2-2z"></path> </g></svg>
                    <span>Accounts</span>
                </a>
                <a href="{{ route('admin.prisonners') }}" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black transition-all ease-in-out duration-300 rounded-lg bg-[#D6FF40] text-black">
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
                <a href="{{ route('admin.courses') }}" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black transition-all ease-in-out duration-300 rounded-lg">
                    <svg fill="currentColor" width="15px" height="15px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                        <title>books</title>
                        <path d="M30.156 26.492l-6.211-23.184c-0.327-1.183-1.393-2.037-2.659-2.037-0.252 0-0.495 0.034-0.727 0.097l0.019-0.004-2.897 0.776c-0.325 0.094-0.609 0.236-0.86 0.42l0.008-0.005c-0.49-0.787-1.349-1.303-2.33-1.306h-2.998c-0.789 0.001-1.5 0.337-1.998 0.873l-0.002 0.002c-0.5-0.537-1.211-0.873-2-0.874h-3c-1.518 0.002-2.748 1.232-2.75 2.75v24c0.002 1.518 1.232 2.748 2.75 2.75h3c0.789-0.002 1.5-0.337 1.998-0.873l0.002-0.002c0.5 0.538 1.211 0.873 2 0.875h2.998c1.518-0.002 2.748-1.232 2.75-2.75v-16.848l4.699 17.54c0.327 1.182 1.392 2.035 2.656 2.037h0c0.001 0 0.003 0 0.005 0 0.251 0 0.494-0.034 0.725-0.098l-0.019 0.005 2.898-0.775c1.182-0.326 2.036-1.392 2.036-2.657 0-0.252-0.034-0.497-0.098-0.729l0.005 0.019zM18.415 9.708l5.31-1.423 3.753 14.007-5.311 1.422zM18.068 3.59l2.896-0.776c0.097-0.027 0.209-0.043 0.325-0.043 0.575 0 1.059 0.389 1.204 0.918l0.002 0.009 0.841 3.139-5.311 1.423-0.778-2.905v-1.055c0.153-0.347 0.449-0.607 0.812-0.708l0.009-0.002zM11.5 2.75h2.998c0.69 0.001 1.249 0.56 1.25 1.25v3.249l-5.498 0.001v-3.25c0.001-0.69 0.56-1.249 1.25-1.25h0zM8.75 23.25h-5.5v-14.5l5.5-0.001zM10.25 8.75l5.498-0.001v14.501h-5.498zM4.5 2.75h3c0.69 0.001 1.249 0.56 1.25 1.25v3.249l-5.5 0.001v-3.25c0.001-0.69 0.56-1.249 1.25-1.25h0zM7.5 29.25h-3c-0.69-0.001-1.249-0.56-1.25-1.25v-3.25h5.5v3.25c-0.001 0.69-0.56 1.249-1.25 1.25h-0zM14.498 29.25h-2.998c-0.69-0.001-1.249-0.56-1.25-1.25v-3.25h5.498v3.25c-0.001 0.69-0.56 1.249-1.25 1.25h-0zM28.58 27.826c-0.164 0.285-0.43 0.495-0.747 0.582l-0.009 0.002-2.898 0.775c-0.096 0.026-0.206 0.041-0.319 0.041-0.575 0-1.060-0.387-1.208-0.915l-0.002-0.009-0.841-3.14 5.311-1.422 0.841 3.14c0.027 0.096 0.042 0.207 0.042 0.321 0 0.23-0.063 0.446-0.173 0.63l0.003-0.006z"></path>
                    </svg>
                    <span>Courses</span>
                </a>
                <a href="{{ route('admin.categories') }}" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300">
                    <svg fill="currentColor" width="15px" height="15px" viewBox="0 0 35 35" data-name="Layer 2" id="e73e2821-510d-456e-b3bd-9363037e93e3" xmlns="http://www.w3.org/2000/svg"><path d="M11.933,15.055H3.479A3.232,3.232,0,0,1,.25,11.827V3.478A3.232,3.232,0,0,1,3.479.25h8.454a3.232,3.232,0,0,1,3.228,3.228v8.349A3.232,3.232,0,0,1,11.933,15.055ZM3.479,2.75a.73.73,0,0,0-.729.728v8.349a.73.73,0,0,0,.729.728h8.454a.729.729,0,0,0,.728-.728V3.478a.729.729,0,0,0-.728-.728Z"/><path d="M11.974,34.75H3.52A3.233,3.233,0,0,1,.291,31.521V23.173A3.232,3.232,0,0,1,3.52,19.945h8.454A3.232,3.232,0,0,1,15.2,23.173v8.348A3.232,3.232,0,0,1,11.974,34.75ZM3.52,22.445a.73.73,0,0,0-.729.728v8.348a.73.73,0,0,0,.729.729h8.454a.73.73,0,0,0,.728-.729V23.173a.729.729,0,0,0-.728-.728Z"/><path d="M31.522,34.75H23.068a3.233,3.233,0,0,1-3.229-3.229V23.173a3.232,3.232,0,0,1,3.229-3.228h8.454a3.232,3.232,0,0,1,3.228,3.228v8.348A3.232,3.232,0,0,1,31.522,34.75Zm-8.454-12.3a.73.73,0,0,0-.729.728v8.348a.73.73,0,0,0,.729.729h8.454a.73.73,0,0,0,.728-.729V23.173a.729.729,0,0,0-.728-.728Z"/><path d="M27.3,15.055a7.4,7.4,0,1,1,7.455-7.4A7.437,7.437,0,0,1,27.3,15.055Zm0-12.3a4.9,4.9,0,1,0,4.955,4.9A4.935,4.935,0,0,0,27.3,2.75Z"/></svg>
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
                    <div class="grid grid-cols-3 gap-x-10 px-10 pb-5 border-b border-b-gray-400">
                        <h1 class="font-medium text-lg">CV </h1>
                        <a id="cv" href="" download="" class="col-span-2 font-light text-sm text-justify">CurriculumVitae.pdf</a>
                    </div>
                    <div id="div-links" class="grid grid-cols-3 gap-10 px-10">
                        <h1 class="font-medium text-lg">External Links </h1>
                        <div class="col-span-2 flex items-center gap-5"> 
                            <a id="linkedin"  href="" class="flex items-center">
                                <svg width="30px" height="30px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#0A66C2" d="M12.225 12.225h-1.778V9.44c0-.664-.012-1.519-.925-1.519-.926 0-1.068.724-1.068 1.47v2.834H6.676V6.498h1.707v.783h.024c.348-.594.996-.95 1.684-.925 1.802 0 2.135 1.185 2.135 2.728l-.001 3.14zM4.67 5.715a1.037 1.037 0 01-1.032-1.031c0-.566.466-1.032 1.032-1.032.566 0 1.031.466 1.032 1.032 0 .566-.466 1.032-1.032 1.032zm.889 6.51h-1.78V6.498h1.78v5.727zM13.11 2H2.885A.88.88 0 002 2.866v10.268a.88.88 0 00.885.866h10.226a.882.882 0 00.889-.866V2.865a.88.88 0 00-.889-.864z"></path></g></svg>
                            </a>
                            
                            <a id="github" href="" class="flex items-center">
                                <svg fill="#000000" width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12,2.2467A10.00042,10.00042,0,0,0,8.83752,21.73419c.5.08752.6875-.21247.6875-.475,0-.23749-.01251-1.025-.01251-1.86249C7,19.85919,6.35,18.78423,6.15,18.22173A3.636,3.636,0,0,0,5.125,16.8092c-.35-.1875-.85-.65-.01251-.66248A2.00117,2.00117,0,0,1,6.65,17.17169a2.13742,2.13742,0,0,0,2.91248.825A2.10376,2.10376,0,0,1,10.2,16.65923c-2.225-.25-4.55-1.11254-4.55-4.9375a3.89187,3.89187,0,0,1,1.025-2.6875,3.59373,3.59373,0,0,1,.1-2.65s.83747-.26251,2.75,1.025a9.42747,9.42747,0,0,1,5,0c1.91248-1.3,2.75-1.025,2.75-1.025a3.59323,3.59323,0,0,1,.1,2.65,3.869,3.869,0,0,1,1.025,2.6875c0,3.83747-2.33752,4.6875-4.5625,4.9375a2.36814,2.36814,0,0,1,.675,1.85c0,1.33752-.01251,2.41248-.01251,2.75,0,.26251.1875.575.6875.475A10.0053,10.0053,0,0,0,12,2.2467Z"></path></g></svg>
                            </a>
                            
                            <a id="website" href="" class="flex items-center">
                                <svg width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M20.501 6.028V6h-.02A10.28 10.28 0 0 0 4.519 6H4.5v.028a10.262 10.262 0 0 0 0 12.944V19h.02a10.28 10.28 0 0 0 15.962 0h.021v-.028a10.262 10.262 0 0 0 0-12.944zM13 6V3.272A4.533 4.533 0 0 1 15.54 6zm2.935 1a16.827 16.827 0 0 1 .853 5H13V7zM12 3.272V6H9.46A4.533 4.533 0 0 1 12 3.272zM12 7v5H8.212a16.827 16.827 0 0 1 .853-5zm-4.787 5H3.226a9.234 9.234 0 0 1 1.792-5h2.984a17.952 17.952 0 0 0-.79 5zm0 1a17.952 17.952 0 0 0 .789 5H5.018a9.234 9.234 0 0 1-1.792-5zm1 0H12v5H9.065a16.827 16.827 0 0 1-.853-5zM12 19v2.728A4.533 4.533 0 0 1 9.46 19zm1 2.728V19h2.54A4.533 4.533 0 0 1 13 21.728zM13 18v-5h3.788a16.827 16.827 0 0 1-.853 5zm4.787-5h3.987a9.234 9.234 0 0 1-1.792 5h-2.984a17.952 17.952 0 0 0 .79-5zm0-1a17.952 17.952 0 0 0-.789-5h2.984a9.234 9.234 0 0 1 1.792 5zm1.352-6h-2.501a8.524 8.524 0 0 0-1.441-2.398A9.306 9.306 0 0 1 19.139 6zM9.803 3.602A8.524 8.524 0 0 0 8.363 6H5.86a9.306 9.306 0 0 1 3.942-2.398zM5.861 19h2.501a8.524 8.524 0 0 0 1.441 2.398A9.306 9.306 0 0 1 5.861 19zm9.336 2.398A8.524 8.524 0 0 0 16.637 19h2.502a9.306 9.306 0 0 1-3.942 2.398z"></path><path fill="none" d="M0 0h24v24H0z"></path></g></svg>
                            </a>
                            
                            <a id="twitter" href="" class="flex items-center">
                                <svg width="30px" height="30px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="24" cy="24" r="20" fill="#1DA1F2"></circle> <path fill-rule="evenodd" clip-rule="evenodd" d="M36 16.3086C35.1177 16.7006 34.1681 16.9646 33.1722 17.0838C34.1889 16.4742 34.9697 15.5095 35.3368 14.36C34.3865 14.9247 33.3314 15.3335 32.2107 15.5551C31.3123 14.5984 30.0316 14 28.6165 14C25.8975 14 23.6928 16.2047 23.6928 18.9237C23.6928 19.3092 23.7368 19.6852 23.8208 20.046C19.7283 19.8412 16.1005 17.8805 13.6719 14.9015C13.2479 15.6287 13.0055 16.4742 13.0055 17.3766C13.0055 19.0845 13.8735 20.5916 15.1958 21.4747C14.3878 21.4491 13.6295 21.2275 12.9647 20.8587V20.9203C12.9647 23.3066 14.663 25.296 16.9141 25.7496C16.5013 25.8616 16.0661 25.9224 15.6174 25.9224C15.2998 25.9224 14.991 25.8912 14.6902 25.8336C15.3166 27.7895 17.1357 29.2134 19.2899 29.2534C17.6052 30.5733 15.4822 31.3612 13.1751 31.3612C12.7767 31.3612 12.3848 31.338 12 31.2916C14.1791 32.6884 16.7669 33.5043 19.5475 33.5043C28.6037 33.5043 33.5562 26.0016 33.5562 19.4956C33.5562 19.282 33.5522 19.0693 33.5418 18.8589C34.5049 18.1629 35.34 17.2958 36 16.3086Z" fill="white"></path> </g></svg>
                            </a>
                            
                            <a id="facebook" href="" class="flex items-center">
                                <svg width="30px" height="30px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#1877F2" d="M15 8a7 7 0 00-7-7 7 7 0 00-1.094 13.915v-4.892H5.13V8h1.777V6.458c0-1.754 1.045-2.724 2.644-2.724.766 0 1.567.137 1.567.137v1.723h-.883c-.87 0-1.14.54-1.14 1.093V8h1.941l-.31 2.023H9.094v4.892A7.001 7.001 0 0015 8z"></path><path fill="#ffffff" d="M10.725 10.023L11.035 8H9.094V6.687c0-.553.27-1.093 1.14-1.093h.883V3.87s-.801-.137-1.567-.137c-1.6 0-2.644.97-2.644 2.724V8H5.13v2.023h1.777v4.892a7.037 7.037 0 002.188 0v-4.892h1.63z"></path></g></svg>
                            </a>
                            
                            <a id="instagram" href="" class="flex items-center">
                                <svg width="30px" height="30px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint0_radial_87_7153)"></rect> <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint1_radial_87_7153)"></rect> <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint2_radial_87_7153)"></rect> <path d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z" fill="white"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z" fill="white"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z" fill="white"></path> <defs> <radialGradient id="paint0_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)"> <stop stop-color="#B13589"></stop> <stop offset="0.79309" stop-color="#C62F94"></stop> <stop offset="1" stop-color="#8A3AC8"></stop> </radialGradient> <radialGradient id="paint1_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)"> <stop stop-color="#E0E8B7"></stop> <stop offset="0.444662" stop-color="#FB8A2E"></stop> <stop offset="0.71474" stop-color="#E2425C"></stop> <stop offset="1" stop-color="#E2425C" stop-opacity="0"></stop> </radialGradient> <radialGradient id="paint2_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)"> <stop offset="0.156701" stop-color="#406ADC"></stop> <stop offset="0.467799" stop-color="#6A45BE"></stop> <stop offset="1" stop-color="#6A45BE" stop-opacity="0"></stop> </radialGradient> </defs> </g></svg>
                            </a>
                        </div>
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

                console.log(user.links.length);

                
                
                if(user.links.length > 0){
                    user.links.forEach(link => {
                        
                        switch(link.type){
                            case 'linkedin':
                                link.link ? document.querySelector('#linkedin').href = link.link : document.querySelector('#linkedin').classList.add('hidden');
                                break;
                            case 'github':
                                link.link ? document.querySelector('#github').href = link.link : document.querySelector('#github').classList.add('hidden');
                                break;
                            case 'website':
                                link.link ? document.querySelector('#website').href = link.link : document.querySelector('#website').classList.add('hidden');
                                break;
                            case 'twitter':
                                link.link ? document.querySelector('#twitter').href = link.link : document.querySelector('#twitter').classList.add('hidden');
                                break;
                            case 'facebook':
                                link.link ? document.querySelector('#facebook').href = link.link : document.querySelector('#facebook').classList.add('hidden');
                                break;
                            case 'instagram':
                                link.link ? document.querySelector('#instagram').href = link.link : document.querySelector('#instagram').classList.add('hidden');
                                break;
                        }
                    });
                }else{
                    document.querySelector('#div-links').classList.add('hidden');
                }
                
                userInfosPopup.classList.remove('hidden');
            });
        });

        closeUserInfosPopup.addEventListener('click', () => {
            userInfosPopup.classList.add('hidden');
        });


        // function checkLinks(links){
        //     let isNull = true;
        //     links.forEach(link => {
        //         if(link != null){
        //             isNull = false;
        //             return isNull;
        //         }
        //     });
        //     return isNull;
        // }

    </script>
</body>
</html>