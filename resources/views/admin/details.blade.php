<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/logo-white.png') }}">
    @vite('resources/js/app.js')
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
                    <svg fill="currentColor" width="15px" height="15px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M25 12h-1v-3.816c0-4.589-3.32-8.184-8.037-8.184-4.736 0-7.963 3.671-7.963 8.184v3.816h-1c-2.206 0-4 1.794-4 4v12c0 2.206 1.794 4 4 4h18c2.206 0 4-1.794 4-4v-12c0-2.206-1.794-4-4-4zM10 8.184c0-3.409 2.33-6.184 5.963-6.184 3.596 0 6.037 2.716 6.037 6.184v3.816h-12v-3.816zM27 28c0 1.102-0.898 2-2 2h-18c-1.103 0-2-0.898-2-2v-12c0-1.102 0.897-2 2-2h18c1.102 0 2 0.898 2 2v12zM16 18c-1.104 0-2 0.895-2 2 0 0.738 0.405 1.376 1 1.723v3.277c0 0.552 0.448 1 1 1s1-0.448 1-1v-3.277c0.595-0.346 1-0.985 1-1.723 0-1.105-0.895-2-2-2z"></path> </g></svg>
                    <span>Accounts</span>
                </a>
                <a href="{{ route('admin.prisonners') }}" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black rounded-lg transition-all ease-in-out duration-300">
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
                <a href="{{ route('admin.courses') }}" class="flex items-center gap-3 p-3 hover:bg-[#D6FF40] hover:text-black transition-all ease-in-out duration-300 rounded-lg bg-[#D6FF40] text-black">
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

        <section class="flex-1 h-screen overflow-auto">
            <!-- Course Header Section -->
            <section class="grid grid-cols-2 gap-10 px-20 py-10">
                <div class="flex flex-col gap-5 justify-center">
                    <h1 class="font-medium text-xl text-gray-500">{{ $course->category->name }}</h1>
                    <h1 class="font-semibold text-[40px] leading-[60px]">{{ $course->title }}</h1>
                    <p class="text-justify text-lg font-light">{{ $course->description }}</p>
                    <div class="flex gap-20">
                        <div class="flex items-center gap-2">
                            <svg height="20px" width="20px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 305 305" xml:space="preserve" fill="#FFF">
                                <g id="SVGRepo_iconCarrier"> 
                                    <g> 
                                        <path style="fill:#000000;" d="M305,173.726c0-41.662-16.799-79.469-43.972-107.02c-0.212-0.282-0.438-0.558-0.695-0.815 c-0.257-0.257-0.532-0.483-0.814-0.694C231.968,38.024,194.161,21.226,152.5,21.226c-41.661,0-79.468,16.799-107.02,43.971 c-0.282,0.212-0.557,0.438-0.814,0.694c-0.257,0.257-0.483,0.532-0.695,0.815C16.799,94.257,0,132.064,0,173.726 c0,40.729,15.859,79.018,44.655,107.821c0.004,0.004,0.008,0.009,0.012,0.013c0.003,0.002,0.005,0.005,0.008,0.007 c0.004,0.004,0.008,0.008,0.012,0.012c1.464,1.464,3.383,2.195,5.302,2.195c1.92,0,3.84-0.732,5.304-2.197 c0.125-0.125,0.238-0.258,0.352-0.39l23.112-23.113c2.929-2.93,2.929-7.678,0-10.607c-2.929-2.928-7.678-2.928-10.606,0 l-18.036,18.036c-21.031-23.403-33.232-52.857-34.91-84.277h25.507c4.142,0,7.5-3.357,7.5-7.5s-3.358-7.5-7.5-7.5H15.207 c1.744-32.272,14.668-61.618,34.957-84.229l17.987,17.987c1.464,1.464,3.384,2.196,5.303,2.196c1.919,0,3.839-0.732,5.303-2.196 c2.929-2.93,2.929-7.678,0-10.607L60.771,71.389C83.383,51.1,112.728,38.176,145,36.433v25.506c0,4.143,3.358,7.5,7.5,7.5 s7.5-3.357,7.5-7.5V36.433c32.272,1.743,61.617,14.668,84.229,34.957l-17.987,17.987c-2.929,2.93-2.929,7.678,0,10.607 c1.464,1.464,3.384,2.196,5.303,2.196s3.839-0.732,5.303-2.196l17.987-17.987c20.289,22.612,33.214,51.957,34.957,84.229h-25.506 c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5,7.5,7.5h25.507c-1.678,31.42-13.878,60.875-34.909,84.278l-18.036-18.037 c-2.928-2.928-7.677-2.928-10.606,0c-2.929,2.93-2.929,7.678,0,10.607l23.485,23.485c1.464,1.464,3.384,2.196,5.303,2.196 c0.959,0,1.919-0.183,2.822-0.549c0.903-0.366,1.749-0.915,2.482-1.647C289.137,252.755,305,214.459,305,173.726z"></path> 
                                        <path style="fill:#000000;" d="M186.956,87.718c-3.847-1.541-8.211,0.327-9.751,4.173l-21.673,54.1 c-1.01-0.108-2.02-0.182-3.031-0.182c-10.556,0-20.091,5.847-24.886,15.259c-5.012,9.839-3.728,21.595,3.432,31.445 c0.732,1.007,1.652,1.928,2.666,2.665c5.817,4.229,12.314,6.464,18.788,6.464c10.556,0,20.092-5.847,24.886-15.259 c5.012-9.839,3.728-21.594-3.427-31.437c-0.732-1.01-1.654-1.934-2.671-2.674c-0.547-0.398-1.106-0.761-1.665-1.123l21.505-53.681 C192.669,93.624,190.801,89.258,186.956,87.718z M164.02,179.574c-2.221,4.359-6.635,7.067-11.52,7.067 c-3.204,0-6.429-1.119-9.589-3.327c-3.6-5.169-4.307-10.773-1.93-15.438c2.22-4.359,6.634-7.067,11.52-7.067 c1.558,0,3.12,0.27,4.678,0.795c0.051,0.021,0.098,0.048,0.15,0.069c0.164,0.065,0.329,0.118,0.494,0.171 c1.43,0.549,2.854,1.305,4.266,2.291C165.688,169.304,166.396,174.909,164.02,179.574z"></path> 
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
                                fill="#000000"
                                />
                            </svg>
                            <span>{{ $course->duration }} hours</span>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('storage/'. $course->cover) }}" class="rounded-md">
                </div>
            </section>

            <section class="flex gap-10 px-20 pt-10">
                <div>
                    <h1 class="mb-8 font-semibold text-3xl text-[#003877]">Overview</h1>
                    <p class="font-light text-justify">
                        {!! $course->overview !!}
                    </p>
                </div>
            </section>

            <!-- Course Content Section -->
            <section class="px-20 py-10">
                <h1 class="mb-8 font-semibold text-3xl text-[#003877]">Course Content</h1>
                @if ($course->chapters->count() > 0)
                    @foreach ($course->chapters as $chapter)
                        <div class="mb-10">
                            <h2 class="text-lg font-medium text-white bg-[#222] py-2 px-5 rounded-md mb-5">Chapter {{ $chapter->order }}: {{ $chapter->title }}</h2>
                            <div class="ml-10 border-l border-l-gray-400 py-5 flex flex-col gap-5">
                                @if ($chapter->parts->count() > 0)
                                    @foreach ($chapter->parts as $part)
                                        <div class="flex flex-col gap-5 mb-5">
                                            <div class="text-sm flex items-center gap-3">
                                                <div class="bg-gray-400 h-[1px] w-10"></div>
                                                <h3 class="font-medium text-xl">Part {{ $part->order }}: {{ $part->title }}</h3>
                                            </div>
                                            <div class="ml-14 text-justify font-light">
                                                {!! $part->content !!}
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="ml-14 text-sm font-light text-gray-500">No parts available for this chapter.</div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="flex items-center justify-center py-10 h-64">
                        <h1 class="text-xl font-light text-gray-500">No chapters available for this course.</h1>
                    </div>
                @endif
            </section>
        </section>
    </main>
</body>
</html>