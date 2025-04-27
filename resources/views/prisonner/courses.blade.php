@extends('layouts.prisonner')


@section('main')
    <!-- Main Section -->
    <section class="px-20 flex flex-col gap-5">
        <!-- Filter & Search -->
        <div class="flex items-center justify-between py-10">
            <form action="" class="flex items-center gap-5">
                <select class="py-2 px-5 bg-white border border-gray-200 text-sm rounded-md w-64 outline-none">
                    <option>All</option>
                    <option>Finance</option>
                    <option>Languages</option>
                    <option>Programming</option>
                </select>
                <button><svg fill="#222" width="20px" height="20px" viewBox="0 -2.5 29 29" xmlns="http://www.w3.org/2000/svg"><path d="m11.2 24 6.4-4v-6.4l11.2-13.6h-28.8l11.2 13.6z"/></svg></button>
            </form>
            <form class="flex items-center gap-2 py-2 px-5 bg-white border border-gray-200 text-sm rounded-md outline-none">
                <input type="text" class="outline-none w-81" placeholder="Search (Course, Training Program, Keywords, ...)">
                <button class="cursor-pointer"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 4a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-8 6a8 8 0 1 1 14.32 4.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387A8 8 0 0 1 2 10z" fill="#0D0D0D"/></svg></button>
            </form>
        </div>

        <!-- Courses Cards -->
        @if (count($courses) == 0)
            <div class="flex items-center justify-center py-10 h-64">
                <h1 class="text-xl font-light text-gray-500">No courses available at the moment.</h1>
            </div>
        @else
            <div class="flex flex-col gap-10 pb-16">
                @foreach ($courses as $course)
                    <div class="grid grid-cols-3 gap-x-5 border border-gray-200 shadow-lg">
                        <div class="py-3 pl-5 pr-3">
                            <img src="{{ asset('storage/'. $course->cover) }}" class="rounded-sm">
                        </div>
                        <div class="col-span-2 flex flex-col gap-3 py-3 pr-5">
                            <h1 class="text-xl font-semibold">{{ $course->title }}</h1>
                            <p class=" font-light text-justify">{{ $course->description }}</p>
                            <div class="flex items-end justify-between pt-2">
                                <div class="flex items-center gap-3 pt-3">
                                    <img src="{{ asset( $course->teacher->photo ) }}" class="w-10 h-10 rounded-full border-2 border-[#E19219]">
                                    <div class="flex flex-col gap-1">
                                        <h1 class="text-xs font-medium">{{ $course->teacher->f_name }} {{ $course->teacher->l_name }}</h1>
                                        <div class="flex items-center gap-2">
                                            <svg fill="#000000" width="14px" height="14px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19,4H17V3a1,1,0,0,0-2,0V4H9V3A1,1,0,0,0,7,3V4H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm1,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12H20Zm0-9H4V7A1,1,0,0,1,5,6H7V7A1,1,0,0,0,9,7V6h6V7a1,1,0,0,0,2,0V6h2a1,1,0,0,1,1,1Z"/>
                                            </svg>
                                            <span class="text-xs">{{ $course->created_at->format('d F Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('prisonner.course.details', $course->id) }}" class="flex items-center gap-2 text-sm font-light underline">
                                    <span>SEE DETAILS</span>
                                    <svg width="16px" height="16px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9.354 15.354L3.7 21H8v1H2v-6h1v4.285l5.646-5.639zM22 2h-6v1h4.3l-5.654 5.646.707.708L21 3.715V8h1zm-6 20h6v-6h-1v4.285l-5.646-5.639-.707.708L20.3 21H16zM8 2H2v6h1V3.715l5.646 5.639.707-.708L3.7 3H8z"/><path fill="none" d="M0 0h24v24H0z"/></svg>
                                </a>
                            </div>
                        </div>
                        <div class="text-[#D6FF40] col-span-3 flex items-center justify-between bg-[#222] px-5 py-2 font-light">
                            <h1 class="font-medium">{{ $course->category->name }}</h1>
                            <div class="flex items-center gap-2">
                                <svg height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 305 305" xml:space="preserve" fill="#FFF">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier"> 
                                        <g> 
                                            <path style="fill:#D6FF40;" d="M305,173.726c0-41.662-16.799-79.469-43.972-107.02c-0.212-0.282-0.438-0.558-0.695-0.815 c-0.257-0.257-0.532-0.483-0.814-0.694C231.968,38.024,194.161,21.226,152.5,21.226c-41.661,0-79.468,16.799-107.02,43.971 c-0.282,0.212-0.557,0.438-0.814,0.694c-0.257,0.257-0.483,0.532-0.695,0.815C16.799,94.257,0,132.064,0,173.726 c0,40.729,15.859,79.018,44.655,107.821c0.004,0.004,0.008,0.009,0.012,0.013c0.003,0.002,0.005,0.005,0.008,0.007 c0.004,0.004,0.008,0.008,0.012,0.012c1.464,1.464,3.383,2.195,5.302,2.195c1.92,0,3.84-0.732,5.304-2.197 c0.125-0.125,0.238-0.258,0.352-0.39l23.112-23.113c2.929-2.93,2.929-7.678,0-10.607c-2.929-2.928-7.678-2.928-10.606,0 l-18.036,18.036c-21.031-23.403-33.232-52.857-34.91-84.277h25.507c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H15.207 c1.744-32.272,14.668-61.618,34.957-84.229l17.987,17.987c1.464,1.464,3.384,2.196,5.303,2.196c1.919,0,3.839-0.732,5.303-2.196 c2.929-2.93,2.929-7.678,0-10.607L60.771,71.389C83.383,51.1,112.728,38.176,145,36.433v25.506c0,4.143,3.358,7.5,7.5,7.5 s7.5-3.357,7.5-7.5V36.433c32.272,1.743,61.617,14.668,84.229,34.957l-17.987,17.987c-2.929,2.93-2.929,7.678,0,10.607 c1.464,1.464,3.384,2.196,5.303,2.196s3.839-0.732,5.303-2.196l17.987-17.987c20.289,22.612,33.214,51.957,34.957,84.229h-25.506 c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h25.507c-1.678,31.42-13.878,60.875-34.909,84.278l-18.036-18.037 c-2.928-2.928-7.677-2.928-10.606,0c-2.929,2.93-2.929,7.678,0,10.607l23.485,23.485c1.464,1.464,3.384,2.196,5.303,2.196 c0.959,0,1.919-0.183,2.822-0.549c0.903-0.366,1.749-0.915,2.482-1.647C289.137,252.755,305,214.459,305,173.726z"></path> 
                                            <path style="fill:#D6FF40;" d="M186.956,87.718c-3.847-1.541-8.211,0.327-9.751,4.173l-21.673,54.1 c-1.01-0.108-2.02-0.182-3.031-0.182c-10.556,0-20.091,5.847-24.886,15.259c-5.012,9.839-3.728,21.595,3.432,31.445 c0.732,1.007,1.652,1.928,2.666,2.665c5.817,4.229,12.314,6.464,18.788,6.464c10.556,0,20.092-5.847,24.886-15.259 c5.012-9.839,3.728-21.594-3.427-31.437c-0.732-1.01-1.654-1.934-2.671-2.674c-0.547-0.398-1.106-0.761-1.665-1.123l21.505-53.681 C192.669,93.624,190.801,89.258,186.956,87.718z M164.02,179.574c-2.221,4.359-6.635,7.067-11.52,7.067 c-3.204,0-6.429-1.119-9.589-3.327c-3.6-5.169-4.307-10.773-1.93-15.438c2.22-4.359,6.634-7.067,11.52-7.067 c1.558,0,3.12,0.27,4.678,0.795c0.051,0.021,0.098,0.048,0.15,0.069c0.164,0.065,0.329,0.118,0.494,0.171 c1.43,0.549,2.854,1.305,4.266,2.291C165.688,169.304,166.396,174.909,164.02,179.574z"></path> 
                                        </g>
                                    </g>
                                </svg>
                                <span>{{ ucfirst($course->level) }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg width="20px" height="20px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M7.50009 0.877014C3.84241 0.877014 0.877258 3.84216 0.877258 7.49984C0.877258 11.1575 3.8424 14.1227 7.50009 14.1227C11.1578 14.1227 14.1229 11.1575 14.1229 7.49984C14.1229 3.84216 11.1577 0.877014 7.50009 0.877014ZM1.82726 7.49984C1.82726 4.36683 4.36708 1.82701 7.50009 1.82701C10.6331 1.82701 13.1729 4.36683 13.1729 7.49984C13.1729 10.6328 10.6331 13.1727 7.50009 13.1727C4.36708 13.1727 1.82726 10.6328 1.82726 7.49984ZM8 4.50001C8 4.22387 7.77614 4.00001 7.5 4.00001C7.22386 4.00001 7 4.22387 7 4.50001V7.50001C7 7.63262 7.05268 7.7598 7.14645 7.85357L9.14645 9.85357C9.34171 10.0488 9.65829 10.0488 9.85355 9.85357C10.0488 9.65831 10.0488 9.34172 9.85355 9.14646L8 7.29291V4.50001Z"
                                    fill="#D6FF40"
                                    />
                                </svg>
                                <span>{{ $course->duration }} hours</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if ($courses->hasPages())
                    <nav>
                        <ul class="flex items-center justify-center gap-5">
                            {{-- Previous Page Link --}}
                            @if ($courses->onFirstPage())
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
                                    <a href="{{ $courses->previousPageUrl() }}" class="">
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
                            @foreach ($courses->getUrlRange(1, $courses->lastPage()) as $page => $url)
                                @if ($page == $courses->currentPage())
                                    <li class="text-blue-500 font-semibold">{{ $page }}</li>
                                @else
                                    <li><a href="{{ $url }}" class="hover:text-gray-600 font-semibold">{{ $page }}</a></li>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($courses->hasMorePages())
                                <li>
                                    <a href="{{ $courses->nextPageUrl() }}" class="">
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
        @endif
        
    </section>

    <!-- NewsLetter -->
    <section class="flex flex-col items-center gap-7 text-white px-20 py-10 bg-[#222222]">
        <h1 class="text-xl font-medium">Stay Updated & <span class="text-[#D6FF40]">Empower Your Future!</span></h1>
        <p class="text-xs font-extralight text-center px-28">Subscribe to our newsletter and never miss an opportunity! Get exclusive job offers, training updates, success stories, and expert career tips delivered straight to your inbox.</p>
        <form action="" class="flex items-center justify-center gap-5 bg-white py-1 pl-3 pr-1 rounded-md">
            <input type="text" class="text-sm text-black placeholder:text-gray-600 outline-none" placeholder="Enter Your Email Here..">
            <button type="button" class="cursor-pointer rounded-md bg-[#222] text-sm font-light py-2 px-3 hover:bg-[#D6FF40] hover:text-black transition-all ease-in-out duration-300">Subscribe</button>
        </form>
    </section>

    <!-- Sponsors -->
    <section class="px-20 flex items-center justify-between py-10 ">
        <img src="{{ asset('storage/images/cocacola.png') }}" alt="Coca Cola" class="w-1/10">
        <img src="{{ asset('storage/images/orange.png') }}" alt="Orange" class="w-1/10">
        <img src="{{ asset('storage/images/renault.png') }}" alt="Renault Group" class="w-1/10">
        <img src="{{ asset('storage/images/sanlam.png') }}" alt="Sanlam Assurance" class="w-1/10">
    </section>
@endsection