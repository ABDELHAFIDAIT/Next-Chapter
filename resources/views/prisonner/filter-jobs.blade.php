@extends('layouts.prisonner')


@section('main')
    <div class="container px-20 mx-auto py-14">
        <form action="{{ route('prisonner.jobs.search') }}" method="POST" class="mb-5">
            @csrf
            <div class="flex border border-gray-300 rounded-md p-1 h-15 gap-2">
                <div class="flex-1 relative">
                    <input name="search" type="text" class="w-full h-full outline-none ps-10" placeholder="Type in something ...">
                    <svg class="w-5 h-5 absolute top-4 left-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.  --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                </div>
                <button type="submit" class="cursor-pointer w-40 text-white rounded-md bg-[#222] transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-black">Search</button>
            </div>
        </form>

        <form action="{{ route('prisonner.jobs.filter') }}" method="POST" class="mb-14">
            @csrf
            <div class="flex gap-3 *:w-full mb-5">
                <div class=" rounded relative border border-gray-200 ">
                    <label class="block absolute font-semibold top-2 left-4" for="date-filter">Date</label>
                    <select name="date-filter" class="outline-none w-full pb-4 cursor-pointer pt-10 px-5 appearance-none">
                        <option value="">All</option>
                        <option value="24_hours">Last 24 Hours</option>
                        <option value="7_days">Last 7 days</option>
                        <option value="14_days">Last 14 days</option>
                    </select>
                    <svg class="h-4 w-4 absolute top-1/2 -translate-y-1/2 right-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc. --><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
                </div>
                <div class=" rounded relative border border-gray-200 ">
                    <label class="block absolute font-semibold top-2 left-4" for="date-city">City</label>
                    <select name="city-filter" class="outline-none w-full pb-4 cursor-pointer pt-10 px-5 appearance-none">
                        <option value="">All</option>
                        @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>                             
                        @endforeach
                    </select>
                    <svg class="h-4 w-4 absolute top-1/2 -translate-y-1/2 right-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc. --><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
                </div>
                <div class=" rounded relative border border-gray-200 ">
                    <label class="block absolute font-semibold top-2 left-4" for="date-contract">Contract</label>
                    <select name="contract-filter" class="outline-none w-full pb-4 cursor-pointer pt-10 px-5 appearance-none">
                        <option>All</option>
                        <option>CDD</option>
                        <option>CDI</option>
                        <option>Part Time</option>
                        <option>Full Time</option>
                        <option>Internship</option>
                        <option>Freelance</option>
                    </select>
                    <svg class="h-4 w-4 absolute top-1/2 -translate-y-1/2 right-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc. --><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
                </div>
            </div>
            <button type="submit" class="cursor-pointer w-full py-2 font-medium text-white rounded-md bg-[#222] transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-black">Filter</button>
        </form>

        <div class="">
            <h1 class="text-3xl font-semibold mb-10 text-center">Find Offers From our Trusted Partners</h1>
            <div class="">
                <div class="grid grid-cols-2 gap-5">
                    @if (count($offers) == 0)
                        <div class="col-span-2 flex items-center justify-center h-96">
                            <h1 class="text-xl font-medium text-gray-400">No Offers Found for The Moment !</h1>
                        </div>
                    @else
                        @foreach ($offers as $offer)
                            <div class="rounded-md shadow-md border bg-white border-gray-200 p-5">
                                <h2 class="text-semibold text-2xl mb-1">
                                    <a href="{{ route('prisonner.offer.show', $offer->id) }}" class="hover:text-blue-500 transition">{{ $offer->title }}</a>
                                </h2>
                                <div class="mb-5">
                                    <span class="py-1 px-5 bg-[#D6FF40] text-xs rounded-full font-medium">{{ $offer->type }}</span>
                                </div>
                                <p class="">{!! substr($offer->description,0,200) !!} ...</p>
                                <div class="mt-3">
                                    @if($offer->status == 'closed') 
                                        <span class="text-red-500">Closed</span>
                                    @else
                                        <span class="text-green-500">Opened</span>
                                    @endif
                                </div>
                                <div class="flex items-center justify-between mt-5">
                                    <div class="flex items-center gap-3">
                                        <img src="{{ asset('storage/'. $offer->recruiter->recruiter->logo)}}" class="w-8 h-8">
                                        <div class="flex flex-col gap-1 text-sm">
                                            <h1 class="font-medium ">{{ $offer->recruiter->recruiter->company_name }}</h1>
                                            <span class="font-light text-xs">{{ $offer->recruiter->recruiter->sector }}</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('prisonner.offer.show', $offer->id) }}">
                                        <button class="curs mt-4 px-6 py-2 text-xs rounded-md text-white font-medium bg-[#222] transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-black cursor-pointer">View Details</button>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                @if ($offers->hasPages())
                    <nav class="mt-10">
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
            </div>
        </div>


    </div>
@endsection