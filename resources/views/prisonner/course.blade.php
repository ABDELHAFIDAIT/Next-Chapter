@extends('layouts.prisonner')

@section('main')
    <!-- Navigation Section -->
    <section class="px-20 py-5">
        <a href="{{ route('prisonner.course.details', $course->id) }}" class="flex items-center gap-1 font-medium text-lg">
            <svg fill="#000000" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                <path d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z"/>
            </svg>
            <span>Back to Course Details</span>
        </a>
    </section>

    <!-- Course Header Section -->
    <section class="grid grid-cols-2 gap-10 px-20 py-20">
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

    <section class="flex gap-10 px-20 pt-10 pb-20">
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

    <!-- Contributors Section -->
    <section class="bg-[#222] py-10 px-20 grid grid-cols-2 gap-10">
        <div class="flex flex-col gap-8">
            <h1 class="font-medium text-[#D6FF40] text-2xl">Teaching Objectives</h1>
            <div class="flex flex-col gap-5 text-white font-light">
                {!! $course->objectifs !!}
            </div>
        </div>
        <div class="flex flex-col gap-8">
            <h1 class="font-medium text-[#D6FF40] text-2xl">Contributors</h1>
            <div class="flex items-center gap-3">
                <img src="{{ asset('storage/'.$course->teacher->photo) }}" class="w-14 h-14 rounded-full border-2 border-[#E19219]">
                <div class="flex flex-col gap-1">
                    <h1 class="font-medium text-white">{{ $course->teacher->f_name }} {{ $course->teacher->l_name }}</h1>
                    <div class="flex items-center gap-2">
                        <svg fill="#FFF" width="14px" height="14px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19,4H17V3a1,1,0,0,0-2,0V4H9V3A1,1,0,0,0,7,3V4H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm1,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12H20Zm0-9H4V7A1,1,0,0,1,5,6H7V7A1,1,0,0,0,9,7V6h6V7a1,1,0,0,0,2,0V6h2a1,1,0,0,1,1,1Z"/>
                        </svg>
                        <span class="text-xs text-white font-light">{{ $course->created_at->format('d F Y') }}</span>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <img src="{{ asset('storage/images/logo-white.png') }}" class="w-16 h-16">
                <div class="flex flex-col gap-1">
                    <h1 class="font-medium text-white">Next Chapter</h1>
                    <div class="flex items-center text-xs text-white gap-1">
                        <p class="font-light">Licence</p>
                        <svg width="16px" height="16px" viewBox="-10 -5 1034 1034" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                            <path fill="#FFF"
                         d="M499 226q-166 0 -280 117q-58 58 -88.5 131t-30.5 152.5t30 152t87.5 130t130 87.5t152 30t153.5 -30.5t133 -88.5q56 -55 85 -127t29 -153.5t-29.5 -154t-85.5 -128.5q-118 -118 -286 -118zM501 299q135 0 232 96q46 47 70.5 106t24.5 125q0 138 -94 230
                         q-48 47 -108.5 72t-125 25t-124 -24.5t-106.5 -71.5t-72.5 -106.5t-25.5 -124.5t25.5 -124.5t72.5 -107.5q94 -95 231 -95zM389 502q-50 0 -83.5 33.5t-33.5 91.5t33 91t86 33q34 0 62 -17t43 -46l-49 -25q-14 34 -49 34q-27 0 -40.5 -19t-13.5 -52q0 -70 54 -70
                         q11 0 23.5 7t20.5 25l54 -28q-32 -58 -107 -58zM621 502q-51 0 -84 33.5t-33 91.5t32.5 91t86.5 33q33 0 60.5 -17t44.5 -46l-50 -25q-14 34 -49 34q-27 0 -40.5 -19t-13.5 -52q0 -70 54 -70q11 0 23.5 7t21.5 25l52 -28q-31 -58 -105 -58z" />
                         </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
@endsection