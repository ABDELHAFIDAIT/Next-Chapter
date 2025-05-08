<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="{{ asset('storage/images/logo-white.png') }}">
        <title>Next Chapter</title>
        @vite(['resources/css/app.css'])
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="grid grid-cols-20">
        @if (session('success'))
            <div id="success-message" class="absolute top-6 right-3 z-50 font-light text-sm bg-green-100 text-green-800 py-2 px-5 border border-green-200 border-r-4 border-r-green-500 
            opacity-0 translate-x-10 transition-all duration-500 ease-in-out">
                {{ session('success') }}
            </div>

            <script>
                const message = document.getElementById('success-message');
        
                setTimeout(() => {
                    message.classList.remove('opacity-0', 'translate-x-10');
                    message.classList.add('opacity-100', 'translate-x-0');
                }, 100); 

                
                setTimeout(() => {
                    message.classList.remove('opacity-100', 'translate-x-0');
                    message.classList.add('opacity-0', 'translate-x-10');
                    
                    setTimeout(() => message.remove(), 500);
                }, 5000);
            </script>
        @endif



        <nav class="flex flex-col justify-between items-center bg-[#222] w-full h-screen py-5 shadow-sm ">
            <div class="flex flex-col gap-[1px] w-full items-center justify-center">
                <div class="mb-10">
                    <img src="{{ asset('storage/images/logo-white.png') }}" class="h-10">
                </div>
                <a href="{{ route('recruiter.dashboard') }}" class="flex justify-center rounded-none py-2 flex-1 w-full text-white transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-[#222]">
                    <svg height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                            viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                        <path fill="currentColor" d="M9.037,40.763h4.286c0.552,0,1-0.447,1-1v-7.314c0-0.553-0.448-1-1-1H9.037c-0.552,0-1,0.447-1,1v7.314
                            C8.037,40.315,8.485,40.763,9.037,40.763z M10.037,33.448h2.286v5.314h-2.286V33.448z"/>
                        <path fill="currentColor" d="M21.894,40.763c0.552,0,1-0.447,1-1v-20.64c0-0.553-0.448-1-1-1h-4.286c-0.552,0-1,0.447-1,1v20.64
                            c0,0.553,0.448,1,1,1H21.894z M18.608,20.123h2.286v18.64h-2.286V20.123z"/>
                        <path fill="currentColor" d="M30.465,40.763c0.552,0,1-0.447,1-1V25.96c0-0.553-0.448-1-1-1H26.18c-0.552,0-1,0.447-1,1v13.803
                            c0,0.553,0.448,1,1,1H30.465z M27.18,26.96h2.286v11.803H27.18V26.96z"/>
                        <path fill="currentColor" d="M33.751,9.763v30c0,0.553,0.448,1,1,1h4.286c0.552,0,1-0.447,1-1v-30c0-0.553-0.448-1-1-1h-4.286
                            C34.199,8.763,33.751,9.21,33.751,9.763z M35.751,10.763h2.286v28h-2.286V10.763z"/>
                    </svg>
                </a>
                <a href="{{ route('recruiter.offers') }}" class="flex justify-center bg-[#D6FF40] text-[#222] rounded-none py-2 flex-1 w-full">
                    <svg fill="currentColor" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 201.917 201.917" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M104.809,175.836c0-2.052,1.65-3.708,3.702-3.708h12.732c5.353,3.593,11.399,6.083,17.823,7.246 c-0.269,0.062-0.512,0.158-0.792,0.158h-29.764C106.459,179.539,104.809,177.876,104.809,175.836z M95.76,146.2h6.597 c-0.7-2.436-1.212-4.901-1.504-7.41H95.76c-2.046,0-3.706,1.662-3.706,3.708S93.714,146.2,95.76,146.2z M68.499,52.632 c-4.545-3.054-7.675-9.104-7.675-14.541c0-7.676,6.217-13.905,13.898-13.905c7.681,0,13.898,6.229,13.898,13.905 c0,5.438-3.136,11.487-7.688,14.541c10.894,2.761,18.961,12.227,18.961,19.229c0,8.281-50.339,8.281-50.339,0 C49.55,64.858,57.624,55.399,68.499,52.632z M67.659,71.027l7.057,7.045l7.063-7.045l-5.94-14.355h0.055l2.308-2.637 c-1.124,0.393-2.265,0.636-3.486,0.636c-1.208,0-2.362-0.244-3.486-0.648l2.302,2.649h0.061L67.659,71.027z M160.688,193.836 l0.013-0.012l-0.177-0.311c-0.092,0-0.171,0.023-0.256,0.023H31.249c-6.67,0-12.096-5.425-12.096-12.093V20.152 c0-6.665,5.426-12.09,12.096-12.09h129.02c6.668,0,12.093,5.425,12.093,12.09v73.822c2.893,1.827,5.627,3.903,8.068,6.333V20.152 C180.43,9.036,171.388,0,160.269,0H31.249C20.127,0,11.084,9.036,11.084,20.152v161.292c0,11.112,9.042,20.149,20.164,20.149 h129.02c1.571,0,3.094-0.226,4.573-0.572L160.688,193.836z M53.249,129.315h47.511c0.225-2.479,0.636-4.95,1.26-7.411H53.255 c-2.046,0-3.699,1.656-3.699,3.703C49.55,127.665,51.203,129.315,53.249,129.315z M53.249,95.551h66.576 c1.315-0.956,2.686-1.86,4.116-2.688c3.63-2.095,7.526-3.672,11.552-4.728H53.249c-2.046,0-3.699,1.66-3.699,3.711 S51.203,95.551,53.249,95.551z M53.249,112.43h52.266c1.304-2.618,2.838-5.096,4.592-7.41H53.249c-2.046,0-3.699,1.662-3.699,3.708 S51.203,112.43,53.249,112.43z M179.803,114.684c10.327,17.89,4.177,40.857-13.725,51.173 c-17.884,10.321-40.847,4.201-51.174-13.713c-10.333-17.884-4.177-40.847,13.701-51.176 C146.507,90.637,169.476,96.784,179.803,114.684z M174.438,117.789c-8.629-14.931-27.791-20.064-42.716-11.461 c-14.937,8.635-20.082,27.773-11.436,42.723c8.61,14.93,27.767,20.075,42.703,11.453 C177.921,151.863,183.048,132.719,174.438,117.789z M175.504,163.555l-16.106,9.305l12.404,21.47l16.1-9.292L175.504,163.555z M189.582,187.96l-16.118,9.298c2.582,4.464,8.27,5.974,12.714,3.416C190.629,198.104,192.157,192.405,189.582,187.96z"></path> </g> </g></svg>
                </a>
                <a href="{{ route('recruiter.profile') }}" class="flex justify-center py-2 flex-1 w-full text-white transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-[#222] rounded-none">
                    <svg fill="currentColor" width="30px" height="30px" viewBox="0 0 512 512" id="_x30_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M256,90  c37.02,0,67.031,35.468,67.031,79.219S293.02,248.438,256,248.438s-67.031-35.468-67.031-79.219S218.98,90,256,90z M369.46,402  H142.54c-11.378,0-20.602-9.224-20.602-20.602C121.938,328.159,181.959,285,256,285s134.062,43.159,134.062,96.398  C390.062,392.776,380.839,402,369.46,402z"/></svg>
                </a>
            </div>
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button class="transition-all ease-in-out duration-300 hover:scale-105 cursor-pointer">
                    <svg width="20px" height="20px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="48" height="48" fill="white" fill-opacity="0.01"/>
                        <path d="M23.9917 6L6 6L6 42H24" stroke="#FFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M33 33L42 24L33 15" stroke="#FFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 23.9917H42" stroke="#FFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </form>
        </nav>


        <section class="col-span-19 flex flex-col gap-5 h-screen overflow-auto px-5 pt-5">
            <div class="flex items-center justify-between">
                <h1 class="font-semibold text-2xl">My Offers</h1>
                <form class="flex items-center gap-2 py-2 px-5 bg-white border border-gray-200 text-sm rounded-md outline-none">
                    <input type="text" class="outline-none w-81" placeholder="Search (Offers, Keywords, ...)">
                    <button class="cursor-pointer"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 4a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-8 6a8 8 0 1 1 14.32 4.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387A8 8 0 0 1 2 10z" fill="#0D0D0D"/></svg></button>
                </form>
                <div>
                    
                    <img src="{{ asset('storage/'.$recruiter->recruiter->logo) }}" class="w-10 rounded-md">
                </div>
            </div>
            <div class="flex items-center justify-between py-2">
                <p class="text-sm text-gray-500">Welcome to Offers Managment Space</p>
                <button id="open-offer-popup" type="button" class="cursor-pointer py-1 px-10 text-sm font-medium bg-[#D6FF40] rounded-md transition-all ease-in-out duration-300 hover:bg-[#222] hover:text-white"><span class="pr-3">+</span>New Offer</button>
            </div>
            <div class="">


                @if(count($offers) == 0)
                    <div class="col-span-4 flex items-center justify-center h-full text-gray-500 text-lg">No Offers Posted for the Moment !</div>
                @else
                    <div class="overflow-x-auto bg-white rounded-lg border border-gray-100">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-[#222] text-gray-200">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Title</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Description</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Type</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Closing Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Status</th>
                                    <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider">Applications</th>
                                    <th class="px-6 py-3 text-center text-xs font-semibold uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 text-sm text-gray-800">
                                @foreach($offers as $offer)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td class="px-4 py-4 font-medium">
                                            {{ $offer->title }}
                                        </td>
                                        <td class="px-4 py-4 font-medium">
                                            {!! substr($offer->description,0,50).' ...' !!}
                                        </td>
                                        <td class="px-4 py-4 font-medium flex justify-center">
                                            <span class=" bg-gray-800 text-white rounded-md text-xs py-1 px-3">{{ $offer->type }}</span>
                                        </td>
                                        <td class="px-4 py-4">
                                            {{ $offer->closing_date }}
                                        </td>
                                        <td class="px-4 py-4">
                                            @if($offer->status === 'opened')
                                                <span class="inline-block px-2 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">{{ ucfirst($offer->status) }}</span>
                                            @elseif($offer->status === 'closed')
                                                <span class="inline-block px-2 py-1 text-xs font-semibold bg-red-100 text-red-800 rounded-full">{{ ucfirst($offer->status) }}</span>
                                           @endif
                                        </td>
                                        <td class="px-4 py-4">
                                            <span class="font-medium">{{ $offer->applications_count }}</span> Applications
                                        </td>
                                        <td class="px-4 py-4 flex items-center">
                                            <div class="flex items-center justify-center gap-2">
                                                <div class="open-offer-edit-popup flex items-center text-green-600 cursor-pointer" data-edit-offer="{{ $offer }}">
                                                    <svg 
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="20"
                                                        height="20"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        stroke-width="2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        >
                                                        <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7" />
                                                        <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
                                                    </svg>
                                                </div>
                                                @if($offer->status === 'opened')
                                                    <form method="POST" action="{{ route('recruiter.offer.close', $offer->id) }}" class="flex items-center">
                                                        @csrf
                                                        <button class="cursor-pointer text-gray-900">
                                                            <svg fill="#EA580C" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m20.48 3.512c-2.172-2.171-5.172-3.514-8.486-3.514-6.628 0-12.001 5.373-12.001 12.001 0 3.314 1.344 6.315 3.516 8.487 2.172 2.171 5.172 3.514 8.486 3.514 6.628 0 12.001-5.373 12.001-12.001 0-3.314-1.344-6.315-3.516-8.487zm-1.542 15.427c-1.777 1.777-4.232 2.876-6.943 2.876-5.423 0-9.819-4.396-9.819-9.819 0-2.711 1.099-5.166 2.876-6.943 1.777-1.777 4.231-2.876 6.942-2.876 5.422 0 9.818 4.396 9.818 9.818 0 2.711-1.099 5.166-2.876 6.942z"/><path d="m13.537 12 3.855-3.855c.178-.194.287-.453.287-.737 0-.603-.489-1.091-1.091-1.091-.285 0-.544.109-.738.287l.001-.001-3.855 3.855-3.855-3.855c-.193-.178-.453-.287-.737-.287-.603 0-1.091.489-1.091 1.091 0 .285.109.544.287.738l-.001-.001 3.855 3.855-3.855 3.855c-.218.2-.354.486-.354.804 0 .603.489 1.091 1.091 1.091.318 0 .604-.136.804-.353l.001-.001 3.855-3.855 3.855 3.855c.2.218.486.354.804.354.603 0 1.091-.489 1.091-1.091 0-.318-.136-.604-.353-.804l-.001-.001z"/></svg>
                                                        </button>
                                                    </form>
                                                @endif
                                                <div data-offer="{{ $offer }}" class="open-offer-details-popup cursor-pointer flex items-center">
                                                    <svg class="w-[20px] h-[20px] fill-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc. --><path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l82.7 0L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3l0 82.7c0 17.7 14.3 32 32 32s32-14.3 32-32l0-160c0-17.7-14.3-32-32-32L320 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                                                </div>
                                                <form method="post" action="{{ route('recruiter.offer.delete', $offer->id) }}" class="flex items-center">
                                                    @csrf
                                                    <button class="cursor-pointer">
                                                        <svg fill="#fc0505" width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M5.755,20.283,4,8H20L18.245,20.283A2,2,0,0,1,16.265,22H7.735A2,2,0,0,1,5.755,20.283ZM21,4H16V3a1,1,0,0,0-1-1H9A1,1,0,0,0,8,3V4H3A1,1,0,0,0,3,6H21a1,1,0,0,0,0-2Z"/></svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($offers->hasPages())
                        <nav class="mt-5">
                            <ul class="flex items-center justify-center gap-5">
                                {{-- Previous Page Link --}}
                                @if ($offers->onFirstPage())
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
                                        <a href="{{ $offers->previousPageUrl() }}" class="">
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
                                @foreach ($offers->getUrlRange(1, $offers->lastPage()) as $page => $url)
                                    @if ($page == $offers->currentPage())
                                        <li class="text-blue-500 font-semibold">{{ $page }}</li>
                                    @else
                                        <li><a href="{{ $url }}" class="hover:text-gray-600 font-semibold">{{ $page }}</a></li>
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($offers->hasMorePages())
                                    <li>
                                        <a href="{{ $offers->nextPageUrl() }}" class="">
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
            </div>
        </section>


        <section id="new-offer-popup" class="fixed inset-0 z-50 bg-[rgba(0,0,0,0.7)] items-center justify-center hidden">
            <div class="bg-[#EDF7F1] flex flex-col gap-5 w-1/2 rounded-md">
                <div class="flex items-center justify-between py-5 border-b border-gray-200 px-5 bg-[#222] text-white rounded-t-md">
                    <h1 class="font-semibold text-2xl">New Offer</h1>
                    <button id="close-offer-popup" class="cursor-pointer transition-all ease-in-out duration-300 hover:text-red-600">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <form id="form-offer" method="POST" action="{{ route('recruiter.offer.create') }}" class="flex flex-col gap-3 px-5 h-[75vh] overflow-auto">
                    @csrf
                    <div class="flex flex-col gap-2">
                        <label for="title" class="text-sm font-medium">Title</label>
                        <input type="text" name="title" id="title" class="border border-gray-300 rounded-md p-2 outline-none bg-white" placeholder="Offer Title" required>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="description" class="text-sm font-medium">Description</label>
                        <textarea name="description" id="description"></textarea>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="type" class="text-sm font-medium">Type</label>
                        <select name="type" id="type" class="border border-gray-300 rounded-md p-2 outline-none bg-white" required>
                            <option>Full Time</option>
                            <option>Part Time</option>
                            <option>Internship</option>
                            <option>Freelance</option>
                            <option>CDD</option>
                            <option>CDI</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="closing_date" class="text-sm font-medium">Closing Date</label>
                        <input type="date" name="closing_date" id="closing_date" class="border border-gray-300 rounded-md p-2 outline-none bg-white" required>
                    </div>
                    <button type="submit" class="cursor-pointer mt-3 py-2 px-5 bg-[#D6FF40] text-[#222] rounded-md transition-all ease-in-out duration-300 hover:bg-[#222] hover:text-white">Create Offer</button>
                </form>
            </div>
        </section>


        <section id="offer-details-popup" class="fixed inset-0 z-50 bg-[rgba(0,0,0,0.7)] hidden items-center justify-center">
            <div class="bg-[#EDF7F1] flex flex-col gap-5 w-1/2 rounded-md">
                <div class="flex items-center text-white justify-between py-5 border-b border-gray-200 px-10 bg-[#222] rounded-t-md">
                    <h1 class="font-semibold text-2xl">Offer Details</h1>
                    <button id="close-offer-details-popup" class="cursor-pointer transition-all ease-in-out duration-300 hover:text-red-600">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <div class="relative flex flex-col gap-5 px-5 h-[75vh] overflow-auto">
                    <a id="applications" href="/recruiter/applications/${offerData.id}" class="absolute hidden top-3 right-3 cursor-pointer">
                        <button class="text-sm font-medium bg-blue-500 cursor-pointer text-white py-1 px-5 rounded-md transition-all ease-in-out duration-300 hover:bg-blue-700">Show Applications</button>
                    </a>
                    <div id="offer-type" class="py-1 px-5 text-xs font-medium bg-[#D6FF40] text-[#222] rounded-full w-max">Full Time</div>
                    <h1 class="text-lg font-medium" id="offer-title">hhhhhhhhhhhhhhhhhhhh</h1>
                    <div id="offer-description">Lorem Ipsum is simply dummy text of the printing 
                        and typesetting industry. Lorem Ipsum has been the 
                        industry's standard dummy text ever since the 1500s, 
                        when an unknown printer took a galley of type and 
                        scrambled it to make a type specimen book. 
                        It has survived not only five centuries, but also 
                        the leap into electronic typesetting, remaining 
                        essentially unchanged. It was popularised in the 
                        1960s with the release of Letraset sheets containing 
                        Lorem Ipsum passages, and more recently with desktop 
                        publishing software like Aldus PageMaker including 
                        versions of Lorem Ipsum.
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-medium pr-5 text-red-600">Closing Date: </span>
                        <svg width="20px" height="20px" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <style>.cls-1{fill:currentColor;}</style>
                            </defs>
                            <g id="calendar">
                                <path class="cls-1" d="M22.5,3H21V2a1,1,0,0,0-1-1H19a1,1,0,0,0-1,1V3H14V2a1,1,0,0,0-1-1H12a1,1,0,0,0-1,1V3H7V2A1,1,0,0,0,6,1H5A1,1,0,0,0,4,2V3H2.5A1.5,1.5,0,0,0,1,4.5v18A1.5,1.5,0,0,0,2.5,24h20A1.5,1.5,0,0,0,24,22.5V4.5A1.5,1.5,0,0,0,22.5,3ZM19,2l1,0,0,3L19,5ZM12,2l1,0V3.44s0,0,0,.06,0,0,0,.07L13,5,12,5ZM5,2,6,2,6,5,5,5ZM2.5,4H4V5A1,1,0,0,0,5,6H6A1,1,0,0,0,7,5V4h4V5a1,1,0,0,0,1,1H13a1,1,0,0,0,1-1V4h4V5a1,1,0,0,0,1,1H20a1,1,0,0,0,1-1V4h1.5a.5.5,0,0,1,.5.5V8H2V4.5A.5.5,0,0,1,2.5,4Zm20,19H2.5a.5.5,0,0,1-.5-.5V9H23V22.5A.5.5,0,0,1,22.5,23Z"/>
                            </g>
                        </svg>
                        <span id="offer-closing-date" class="text-sm font-medium">{{ date('d-m-Y') }}</span>
                    </div>
                    <div class="flex items-center justify-center py-5">
                        <p id="offer-published-date" class="text-xs font-light text-gray-500">Published at : {{ date('d-m-Y') }} </p>
                    </div>
                </div>
            </div>
        </section>



        <section id="offer-edit-popup" class="fixed inset-0 z-50 bg-[rgba(0,0,0,0.7)] items-center justify-center hidden">
            <div class="bg-[#EDF7F1] flex flex-col gap-5 w-1/2 p-5 rounded-md">
                <div class="flex items-center justify-between pb-5 border-b border-gray-200 px-5">
                    <h1 class="font-semibold text-2xl">Edit Offer</h1>
                    <button id="close-offer-edit-popup" class="cursor-pointer transition-all ease-in-out duration-300 hover:text-red-600">
                        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <form id="form-offer-edit" method="POST" action="{{ route('recruiter.offer.update') }}" class="flex flex-col gap-3 px-5 h-[75vh] overflow-auto">
                    @csrf
                    <input type="hidden" id="id_offer"name="id_offer">
                    <div class="flex flex-col gap-2">
                        <label for="title" class="text-sm font-medium">Title</label>
                        <input type="text" name="title" id="edit-title" class="border border-gray-300 rounded-md p-2 outline-none bg-white" placeholder="Offer Title" required>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="description" class="text-sm font-medium">Description</label>
                        <textarea name="description" id="edit-description"></textarea>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="type" class="text-sm font-medium">Type</label>
                        <select name="type" id="edit-type" class="border border-gray-300 rounded-md p-2 outline-none bg-white" required>
                            <option>Full Time</option>
                            <option>Part Time</option>
                            <option>Internship</option>
                            <option>Freelance</option>
                            <option>CDD</option>
                            <option>CDI</option>
                        </select>
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="closing_date" class="text-sm font-medium">Closing Date</label>
                        <input type="date" name="closing_date" id="edit-closing_date" class="border border-gray-300 rounded-md p-2 outline-none bg-white" required>
                    </div>
                    <button type="submit" class="cursor-pointer mt-3 py-2 px-5 bg-[#D6FF40] text-[#222] rounded-md transition-all ease-in-out duration-300 hover:bg-[#222] hover:text-white">Create Offer</button>
                </form>
            </div>
        </section>



        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });

            ClassicEditor
            .create(document.querySelector('#edit-description'))
            .catch(error => {
                console.error(error);
            });

            const openOfferPopup = document.getElementById('open-offer-popup');
            const closeOfferPopup = document.getElementById('close-offer-popup');
            const offerPopup = document.getElementById('new-offer-popup');
            const formOffer = document.getElementById('form-offer');

            openOfferPopup.addEventListener('click', () => {
                offerPopup.classList.remove('hidden');
                offerPopup.classList.add('flex');
            });

            closeOfferPopup.addEventListener('click', () => {
                offerPopup.classList.remove('flex');
                offerPopup.classList.add('hidden');
                formOffer.reset();
            });



            const openOfferDetailsPopup = document.querySelectorAll('.open-offer-details-popup');
            const closeOfferDetailsPopup = document.getElementById('close-offer-details-popup');
            const offerDetailsPopup = document.getElementById('offer-details-popup');

            const offerTitle = document.getElementById('offer-title');
            const offerType = document.getElementById('offer-type');
            const offerClosingDate = document.getElementById('offer-closing-date');
            const offerPublishedDate = document.getElementById('offer-published-date');
            const offerDescription = document.getElementById('offer-description');
            const applications = document.getElementById('applications');

            openOfferDetailsPopup.forEach((button) => {
                button.addEventListener('click', () => {
                    const offer = button.getAttribute('data-offer');
                    const offerData = JSON.parse(offer);

                    console.log(offerData);

                    offerTitle.innerText = offerData.title;
                    offerType.innerText = offerData.type;
                    offerClosingDate.innerText = offerData.closing_date;
                    offerPublishedDate.innerText = 'Published at : ' + new Date(offerData.created_at).toLocaleDateString('en-GB', { year: 'numeric', month: '2-digit', day: '2-digit' });
                    offerDescription.innerHTML = offerData.description;

                    if(offerData.applications_count > 0){
                        applications.href = '/recruiter/applications/' + offerData.id;
                        applications.classList.remove('hidden');
                    }else{
                        applications.classList.add('hidden');
                    }

                    offerDetailsPopup.classList.remove('hidden');
                    offerDetailsPopup.classList.add('flex');
                });
            });

            closeOfferDetailsPopup.addEventListener('click', () => {
                offerDetailsPopup.classList.remove('flex');
                offerDetailsPopup.classList.add('hidden');
            }); 



            const openOfferEditPopup = document.querySelectorAll('.open-offer-edit-popup');
            const closeOfferEditPopup = document.getElementById('close-offer-edit-popup');
            const offerEditPopup = document.getElementById('offer-edit-popup');

            const id_offer = document.getElementById('id_offer');
            const editTitle = document.getElementById('edit-title');
            const editDescription = document.getElementById('edit-description');
            const editClosingDate = document.getElementById('edit-closing_date');

            openOfferEditPopup.forEach(btn => {
                btn.addEventListener('click', function(){
                    const offre = btn.getAttribute('data-edit-offer');
                    const offreData = JSON.parse(offre);

                    console.log(offreData);

                    id_offer.value = offreData.id;
                    editTitle.value = offreData.title;
                    editDescription.value = offreData.description;
                    editClosingDate.value = offreData.closing_date;

                    offerEditPopup.classList.remove('hidden');
                    offerEditPopup.classList.add('flex');
                });
            });

            closeOfferEditPopup.addEventListener('click', () => {
                offerEditPopup.classList.remove('flex');
                offerEditPopup.classList.add('hidden');
            });

        </script>


    </body>
</html>