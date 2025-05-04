<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="{{ asset('storage/images/logo-white.png') }}">
        <title>Next Chapter</title>
        @vite(['resources/css/app.css', 'resources/js/teacher.js'])
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>
    <body class="grid grid-cols-20">
        <nav class="flex flex-col justify-between items-center bg-[#222] h-screen py-5 shadow-sm ">
            <div class="flex flex-col gap-[1px] w-full items-center justify-center">
                <div class="mb-10">
                    <img src="{{ asset('storage/images/logo-white.png') }}" class="h-10">
                </div>
                <a href="{{ route('teacher.dashboard') }}" class="flex justify-center w-full py-2 text-white transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-[#222] rounded-none">
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
                <a href="{{ route('teacher.courses') }}" class="flex justify-center bg-[#D6FF40] text-[#222] rounded-none py-2 flex-1 w-full">
                    <svg fill="currentColor" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="30px" height="30px" viewBox="0 0 335.08 335.079" style="enable-background:new 0 0 335.08 335.079;"
                        xml:space="preserve">
                        <g>
                            <g>
                                <path d="M311.175,115.775c-1.355-10.186-1.546-27.73,7.915-33.621c0.169-0.108,0.295-0.264,0.443-0.398
                                    c7.735-2.474,13.088-5.946,8.886-10.618l-114.102-34.38L29.56,62.445c0,0-21.157,3.024-19.267,35.894
                                    c1.026,17.89,6.637,26.676,11.544,31l-15.161,4.569c-4.208,4.672,1.144,8.145,8.88,10.615c0.147,0.138,0.271,0.293,0.443,0.401
                                    c9.455,5.896,9.273,23.438,7.913,33.626c-33.967,9.645-21.774,12.788-21.774,12.788l7.451,1.803
                                    c-5.241,4.736-10.446,13.717-9.471,30.75c1.891,32.864,19.269,35.132,19.269,35.132l120.904,39.298l182.49-44.202
                                    c0,0,12.197-3.148-21.779-12.794c-1.366-10.172-1.556-27.712,7.921-33.623c0.174-0.105,0.301-0.264,0.442-0.396
                                    c7.736-2.474,13.084-5.943,8.881-10.615l-7.932-2.395c5.29-3.19,13.236-11.527,14.481-33.183
                                    c0.859-14.896-3.027-23.62-7.525-28.756l15.678-3.794C332.949,128.569,345.146,125.421,311.175,115.775z M158.533,115.354
                                    l30.688-6.307l103.708-21.312l15.451-3.178c-4.937,9.036-4.73,21.402-3.913,29.35c0.179,1.798,0.385,3.44,0.585,4.688
                                    L288.14,122.8l-130.897,32.563L158.533,115.354z M26.71,147.337l15.449,3.178l99.597,20.474l8.701,1.782l0,0l0,0l26.093,5.363
                                    l1.287,40.01L43.303,184.673l-13.263-3.296c0.195-1.25,0.401-2.89,0.588-4.693C31.44,168.742,31.651,156.373,26.71,147.337z
                                    M20.708,96.757c-0.187-8.743,1.371-15.066,4.52-18.28c2.004-2.052,4.369-2.479,5.991-2.479c0.857,0,1.474,0.119,1.516,0.119
                                    l79.607,25.953l39.717,12.949l-1.303,40.289L39.334,124.07l-5.88-1.647c-0.216-0.061-0.509-0.103-0.735-0.113
                                    C32.26,122.277,21.244,121.263,20.708,96.757z M140.579,280.866L23.28,247.98c-0.217-0.063-0.507-0.105-0.733-0.116
                                    c-0.467-0.031-11.488-1.044-12.021-25.544c-0.19-8.754,1.376-15.071,4.519-18.288c2.009-2.052,4.375-2.479,5.994-2.479
                                    c0.859,0,1.474,0.115,1.519,0.115c0,0,0.005,0,0,0l119.316,38.908L140.579,280.866z M294.284,239.459
                                    c0.185,1.804,0.391,3.443,0.591,4.693l-147.812,36.771l1.292-40.01l31.601-6.497l4.667,1.129l17.492-5.685l80.631-16.569
                                    l15.457-3.18C293.261,219.146,293.466,231.517,294.284,239.459z M302.426,185.084c-0.269,0.006-0.538,0.042-0.791,0.122
                                    l-11.148,3.121l-106.148,29.764l-1.298-40.289l34.826-11.359l84.327-27.501c0.011-0.005,4.436-0.988,7.684,2.315
                                    c3.144,3.214,4.704,9.537,4.52,18.28C313.848,184.035,302.827,185.053,302.426,185.084z"/>
                            </g>
                        </g>
                    </svg>
                </a>
                <a href="{{ route('teacher.students') }}" class="flex justify-center rounded-none py-2 flex-1 w-full text-white transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-[#222]">
                    <svg fill="currentColor" width="30px" height="30px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg">
                        <path d="M226.52979,56.41016l-96-32a8.00672,8.00672,0,0,0-5.05958,0L29.6239,56.35889l-.00976.00341-.14393.04786c-.02819.00927-.053.02465-.08105.03442a7.91407,7.91407,0,0,0-1.01074.42871c-.03748.019-.07642.03516-.11353.05469a7.97333,7.97333,0,0,0-.93139.58325c-.06543.04688-.129.09522-.19288.144a8.08459,8.08459,0,0,0-.81872.71119c-.0238.02416-.04443.05053-.06787.0747a8.0222,8.0222,0,0,0-.661.783c-.04163.05567-.08472.10986-.12476.16675a8.00177,8.00177,0,0,0-.56714.92993c-.02588.04981-.04809.10083-.073.15112a7.97024,7.97024,0,0,0-.40515.97608c-.01062.03149-.0238.06128-.03405.093a7.95058,7.95058,0,0,0-.26282,1.08544c-.01331.07666-.02405.15308-.035.23A8.02888,8.02888,0,0,0,24,64v80a8,8,0,0,0,16,0V75.09985L73.58521,86.29492a63.9717,63.9717,0,0,0,20.42944,87.89746,95.88087,95.88087,0,0,0-46.48389,37.4375,7.9997,7.9997,0,1,0,13.40235,8.73828,80.023,80.023,0,0,1,134.1333,0,7.99969,7.99969,0,1,0,13.40234-8.73828,95.87941,95.87941,0,0,0-46.4834-37.43725,63.972,63.972,0,0,0,20.42944-87.89771l44.115-14.70508a8.0005,8.0005,0,0,0,0-15.17968ZM128,168A47.99154,47.99154,0,0,1,89.34875,91.54932l36.12146,12.04052a8.00672,8.00672,0,0,0,5.05958,0l36.12146-12.04052A47.99154,47.99154,0,0,1,128,168Z"/>
                    </svg>
                </a>
                <a href="{{ route('teacher.profile') }}" class="flex justify-center py-2 flex-1 w-full text-white transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-[#222] rounded-none">
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
                <h1 class="font-semibold text-2xl">My Courses</h1>
                <form class="flex items-center gap-2 py-2 px-5 bg-white border border-gray-200 text-sm rounded-md outline-none">
                    <input type="text" class="outline-none w-81" placeholder="Search (Course, Training Program, Keywords, ...)">
                    <button class="cursor-pointer"><svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 4a6 6 0 1 0 0 12 6 6 0 0 0 0-12zm-8 6a8 8 0 1 1 14.32 4.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387A8 8 0 0 1 2 10z" fill="#0D0D0D"/></svg></button>
                </form>
                <div>
                    @php
                        $photo = Auth::user()->photo ;
                    @endphp
                    <img src="{{ asset('storage/'.$photo) }}" class="w-10 rounded-full">
                </div>
            </div>
            <div class="flex items-center justify-between py-2">
                <p class="text-sm text-gray-500">Welcome to Courses Managment Space</p>
                <a href="{{ route('teacher.courses.new') }}"><button id="open-course-popup" type="button" class="cursor-pointer py-1 px-10 text-sm font-medium bg-[#D6FF40] rounded-md transition-all ease-in-out duration-300 hover:bg-[#222] hover:text-white"><span class="pr-3">+</span>New Course</button></a>
            </div>
            <div class="grid grid-cols-4 gap-5 h-[calc(100vh-40px)] overflow-auto pb-5">
                @if (count($courses) > 0)
                    @foreach ($courses as $course)
                        <div class="relative rounded-xl shadow-lg h-min">
                            <img src="{{ asset('storage/'.$course->cover) }}" class="rounded-t-md h-[200px] w-full">
                            <div class="px-5 py-2">
                                <div class="flex flex-col text-center gap-3">
                                    <a href="{{ route('teacher.course', $course->id ) }}" class="transition-all ease-in-out duration-300 hover:text-[#222] hover:underline">
                                        <h1 class="font-medium text-sm">{{ $course->title }}</h1>
                                    </a>
                                    <p class="text-xs text-gray-500 font-light">{{ substr($course->description, 0 , 100).'...' }}</p>
                                </div>
                            </div>
                            <div class="flex items-center text-white text-xs" >
                                <a href="#" class="flex-1 bg-blue-500 rounded-bl-md flex items-center justify-center gap-3 py-2 transition-all ease-in-out duration-300 hover:bg-blue-700">
                                    <svg fill="none" stroke="#FFF" width="15px" height="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7" />
                                        <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z" />
                                    </svg>
                                    <span>Edit</span>
                                </a>
                                <form method="post" action="{{ route('teacher.courses.delete', $course->id) }}" class="flex-1 flex">
                                    @csrf
                                    <button class="flex-1 bg-red-500 rounded-br-md flex items-center justify-center gap-3 py-2 cursor-pointer transition-all ease-in-out duration-300 hover:bg-red-700">
                                        <svg fill="#FFF" width="15px" height="15px" viewBox="-2 -5 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-delete">
                                            <path d='M7.828 0H18a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H7.828a2 2 0 0 1-1.414-.586L.707 7.707a1 1 0 0 1 0-1.414L6.414.586A2 2 0 0 1 7.828 0zm0 12H18V2H7.828l-5 5 5 5zm6.586-5l1.414 1.414a1 1 0 0 1-1.414 1.414L13 8.414l-1.414 1.414a1 1 0 1 1-1.414-1.414L11.586 7l-1.414-1.414a1 1 0 1 1 1.414-1.414L13 5.586l1.414-1.414a1 1 0 1 1 1.414 1.414L14.414 7z' />
                                        </svg>
                                        <span>Delete</span>
                                    </button>
                                </form>
                            </div>
                            <p class="absolute top-2 right-3 py-1 px-5 text-xs text-white bg-[#222] rounded-full">{{ $course->category->name }}</p>
                            <p class="absolute top-10 right-3 py-1 px-5 text-xs text-white bg-lime-600 rounded-full">{{ $course->enrollments->count() }} Enrollments</p>
                        </div>
                    @endforeach
                @else
                    <div class="col-span-4 flex items-center justify-center h-full text-gray-500 text-lg">No courses created for the moment !</div>
                @endif
                @if ($courses->hasPages())
                    <nav class="col-span-4">
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
        </section>

        <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    </body>
</html>