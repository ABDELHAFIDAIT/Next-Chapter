@extends('layouts.prisonner')

@section('hero')
    <!-- Hero -->
    <section class="pb-10 grid grid-cols-2">
        <div class="flex flex-col justify-center gap-5 mt-10">
            <p
                class="text-lg font-medium bg-[#D6FF40] rounded-full px-5 py-1 w-max">A
                New Start for Your Future</p>
            <p class="text-lg font-light text-justify">Explore tailored
                courses and training programs to gain new skills and
                ease your reintegration into the workforce. Our platform
                connects you to the right opportunities and supports you
                on your path to sustainable employment.</p>
            <p class="text-2xl font-semibold">Learn, Grow & Rejoin the
                Workforce.</p>
        </div>
        <div class="flex justify-end items-center">
            <img src="{{ asset('storage/images/explore.png') }}" class="w-5/6">
        </div>
    </section>
@endsection

@section('main')
    <!-- Training to Your Needs -->
    <section class="bg-[#222] flex flex-col gap-5 py-10">
        <h1 class="text-[#D6FF40] text-center font-semibold text-3xl">Training  to Your Needs<h1>
        <div class="px-20 py-5 grid grid-cols-2 gap-10">
            <div class="flex flex-col gap-5 bg-[#EDF7F1] py-5 px-10 rounded-xl">
                <div class="flex items-center gap-5">
                    <svg width="70px" height="70px" version="1.1"
                        id="_x32_" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 512 512" xml:space="preserve"
                        fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier"
                            stroke-linecap="round"
                            stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <style
                                type="text/css"> .st0{fill:#222222;} </style>
                            <g>
                                <polygon class="st0"
                                    points="1.914,293.73 1.914,293.714 1.897,293.657 "></polygon>
                                <path class="st0"
                                    d="M10.027,313.061l-0.12-0.145c-0.008-0.008-0.008-0.008-0.008-0.008L10.027,313.061z"></path>
                                <path class="st0"
                                    d="M10.027,223.738l-0.12-0.145c-0.008,0-0.008,0-0.008,0L10.027,223.738z"></path>
                                <path class="st0"
                                    d="M1.914,204.423c0,0,0-0.024-0.008-0.04l-0.008-0.024L1.914,204.423z"></path>
                                <path class="st0"
                                    d="M512,204.688c0.008-2.275-0.435-4.479-1.15-6.569c0.7-1.93,1.07-3.876,1.078-5.758 c0.016-2.96-0.805-5.822-2.05-8.122l-0.04-0.072c-0.378-0.691-0.893-1.423-1.464-2.155v-55.268 c2.268-3.257,3.619-7.173,3.627-11.378c0-8.138-4.905-15.448-12.408-18.527l-185.36-77.446h-0.539 c-3.892-1.367-7.928-2.187-12.022-2.187c-3.996,0-8.001,0.78-11.852,2.106h-0.482L17.667,128.786l-0.676,0.378l0.016,0.024 c-3.466,1.825-6.031,4.358-7.8,6.81c-3.095,4.302-4.679,8.838-5.83,12.955l-0.008,0.056c-1.728,6.393-2.452,12.882-2.894,18.375 l-0.008,0.048c-0.41,5.516-0.434,10.18-0.466,12.095v0.048v1.022c0.008,6.698,0.378,15.406,1.906,23.786l0.024,0.089 c0.805,4.213,1.938,8.491,3.869,12.657l0.032,0.064l0.007,0.016c0.982,2.051,2.26,4.246,4.029,6.337l0.04,0.048 c0.128,0.153,0.314,0.29,0.459,0.435c-0.37,0.434-0.853,0.852-1.159,1.294c-3.104,4.294-4.679,8.83-5.83,12.938l-0.008,0.04v0.016 c-1.728,6.393-2.452,12.89-2.894,18.382l-0.008,0.04C0.056,262.264,0.032,266.92,0,268.842v0.04v1.029 c0.008,6.707,0.378,15.416,1.914,23.803l0.016,0.064c0.805,4.222,1.938,8.508,3.869,12.673l0.039,0.072 c0.974,2.035,2.252,4.23,4.029,6.344l0.04,0.049c0.322,0.386,0.796,0.732,1.174,1.117c-0.636,0.7-1.367,1.392-1.874,2.091 c-3.104,4.302-4.679,8.838-5.83,12.938l-0.024,0.113l0.016-0.049c-1.728,6.393-2.452,12.891-2.894,18.383l-0.008,0.048 c-0.41,5.516-0.434,10.18-0.466,12.11v0.048v0.997c0.008,6.714,0.378,15.431,1.914,23.819l0.016,0.064 c0.805,4.214,1.938,8.5,3.869,12.657l0.039,0.08c0.974,2.043,2.252,4.23,4.029,6.345l-0.128-0.145l0.169,0.201 c1.696,1.97,4.028,3.876,6.94,5.299l-0.032,0.048l0.056,0.032l0.41,0.233l199.948,82.52l0.458,0.193 c4.431,1.81,9.143,2.734,13.879,2.734c4.648,0,9.304-0.892,13.694-2.686l255.907-103.99v-0.008c2.951-1.19,5.734-3.128,7.865-6.24 l0.008,0.008c0,0,0.008-0.024,0.016-0.04c0.008-0.008,0.016-0.008,0.024-0.024h-0.008c2.018-3.056,2.838-6.272,2.855-9.328 c0.016-2.96-0.805-5.822-2.05-8.122l-0.04-0.072v0.008c-0.378-0.692-0.893-1.431-1.464-2.163v-55.26 c2.268-3.257,3.619-7.189,3.627-11.386c0.008-2.541-0.531-5.01-1.44-7.318c0.917-2.171,1.359-4.382,1.367-6.498 c0.016-2.967-0.805-5.813-2.05-8.13l-0.04-0.072c-0.378-0.684-0.893-1.424-1.464-2.156v-55.252 C510.64,212.802,511.992,208.877,512,204.688z M216.272,469.136L25.852,390.539l-0.716-0.836c-0.595-0.925-1.358-2.686-1.97-4.873 c-0.948-3.273-1.6-7.535-1.994-11.845c-0.394-4.302-0.531-8.636-0.531-12.271v-0.86c0.032-2.806,0.136-10.928,1.294-18.568 c0.547-3.812,1.392-7.487,2.436-10.092l0.218-0.474l191.681,77.76V469.136z M216.272,378.324L43.005,306.789l-17.152-7.06 l-0.716-0.836c-0.595-0.933-1.358-2.686-1.97-4.866c-0.948-3.289-1.6-7.543-1.994-11.852c-0.394-4.302-0.531-8.636-0.531-12.264 v-0.868c0.032-2.814,0.136-10.928,1.294-18.576c0.547-3.804,1.392-7.487,2.436-10.084l0.218-0.474l191.681,77.759V378.324z M216.272,233.291v3.682v52.036l-175.108-72.3l-15.311-6.297l-0.716-0.844c-0.595-0.925-1.358-2.686-1.97-4.856 c-0.948-3.282-1.6-7.535-1.994-11.854c-0.394-4.31-0.531-8.636-0.531-12.262v-0.869c0.032-2.806,0.136-10.928,1.294-18.568 c0.547-3.812,1.392-7.486,2.436-10.092l0.218-0.466l191.681,77.752V233.291z M487.731,371.313L238.16,472.706l-0.66,0.297 c-1.922,0.756-3.924,1.15-5.934,1.15c-0.716,0-1.447-0.105-2.155-0.217v-61.412c0.941,0.105,1.914,0.161,2.855,0.161 c3.756,0,7.519-0.74,11.033-2.187l0.241-0.104l244.192-99.664V371.313z M487.731,280.156v0.338L238.16,381.895l-0.66,0.29 c-1.922,0.764-3.924,1.15-5.934,1.15c-0.716,0-1.447-0.104-2.155-0.201v-61.42c0.941,0.104,1.914,0.161,2.855,0.161 c3.756,0,7.519-0.74,11.033-2.18l0.241-0.112l171.272-69.896l72.919-29.77V280.156z M487.731,189.345v1.841L238.16,292.58 l-0.66,0.289c-1.922,0.764-3.924,1.158-5.934,1.158c-0.716,0-1.447-0.105-2.155-0.208v-56.145v-5.283 c0.941,0.113,1.914,0.16,2.855,0.16c3.756,0,7.519-0.731,11.033-2.17l0.241-0.105l244.192-99.672V189.345z"></path>
                                <polygon class="st0"
                                    points="1.914,384.549 1.914,384.533 1.897,384.484 "></polygon>
                            </g>
                        </g>
                    </svg>
                    <h1 class="font-semibold text-[25px]">Non-Certified Courses</h1>
                </div>
                <p class="leading-[35px] text-[20px] font-light ">Freely access practical courses to develop new skills at your own pace, with no commitment.</p>
            </div>
            <div class="flex flex-col gap-5 bg-[#EDF7F1] py-5 px-10 rounded-xl">
                <div class="flex items-center gap-5">
                    <svg width="70px" height="70px" fill="#222"
                        viewBox="0 -64 640 640"
                        xmlns="http://www.w3.org/2000/svg"><g
                            id="SVGRepo_bgCarrier"
                            stroke-width="0"></g><g
                            id="SVGRepo_tracerCarrier"
                            stroke-linecap="round"
                            stroke-linejoin="round"></g><g
                            id="SVGRepo_iconCarrier"><path
                                d="M622.34 153.2L343.4 67.5c-15.2-4.67-31.6-4.67-46.79 0L17.66 153.2c-23.54 7.23-23.54 38.36 0 45.59l48.63 14.94c-10.67 13.19-17.23 29.28-17.88 46.9C38.78 266.15 32 276.11 32 288c0 10.78 5.68 19.85 13.86 25.65L20.33 428.53C18.11 438.52 25.71 448 35.94 448h56.11c10.24 0 17.84-9.48 15.62-19.47L82.14 313.65C90.32 307.85 96 298.78 96 288c0-11.57-6.47-21.25-15.66-26.87.76-15.02 8.44-28.3 20.69-36.72L296.6 284.5c9.06 2.78 26.44 6.25 46.79 0l278.95-85.7c23.55-7.24 23.55-38.36 0-45.6zM352.79 315.09c-28.53 8.76-52.84 3.92-65.59 0l-145.02-44.55L128 384c0 35.35 85.96 64 192 64s192-28.65 192-64l-14.18-113.47-145.03 44.56z">
                            </path>
                        </g>
                    </svg>
                    <h1 class="font-semibold text-[25px]">Certified Training Programs</h1>
                </div>
                <p class="leading-[35px] text-[20px] font-light ">Complete structured programs and earn a recognized certification to enhance your employability.</p>
            </div>
        </div>
        <div class="flex gap-5 mt-10 mb-5">
            <div class="h-7 w-45 bg-[#E19219] mt-2"></div>
            <p class="text-white text-center font-light text-xl">Whichever path you choose, each training is designed to help you move forward toward a stable and successful career.</p>
            <div class="h-7 w-45 bg-[#E19219] mt-2"></div>
        </div>
    </section>


    <section class="py-10 px-20">
        <h1 class="text-3xl text-center font-semibold">Explore Our Courses and Training Programs</h1>
        <p class="text-center py-5 text-lg font-light">Explore a wide range of courses designed to help you gain new skills and reintegrate into the workforce.</p>
        <h1 class="text-3xl font-semibold py-5 pl-5">Courses</h1>
        <div class="grid grid-cols-3 gap-10 py-5">
            <div class="relative rounded-xl shadow-lg">
                <img src="{{ asset('storage/images/finance.jpg') }}" class="rounded-t-xl">
                <div class="p-5">
                    <div class="flex flex-col gap-5">
                        <h1 class="text-lg font-semibold ">Finance: Budget Management & Saving</h1>
                        <p class="text-sm font-light text-justify">Learn how to efficiently manage your personal or business budget, optimize your expenses, and implement a saving strategy for financial stability.</p>
                    </div>
                    <div class="flex items-center gap-3 py-5">
                        <img src="{{ asset('storage/images/teacher.jpg') }}" class="w-14 h-14 rounded-full border-2 border-[#E19219]">
                        <div class="flex flex-col justify-between gap-2">
                            <h1 class="font-semibold">Ahmed Alamai</h1>
                            <div class="flex items-center gap-3">
                                <svg fill="#000000" width="16px" height="16px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19,4H17V3a1,1,0,0,0-2,0V4H9V3A1,1,0,0,0,7,3V4H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm1,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12H20Zm0-9H4V7A1,1,0,0,1,5,6H7V7A1,1,0,0,0,9,7V6h6V7a1,1,0,0,0,2,0V6h2a1,1,0,0,1,1,1Z"/>
                                </svg>
                                <p class="text-xs">01 March 2025</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-3">
                        <div class="flex items-center gap-2 text-sm ">
                            <svg width="18px" height="18px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M7.50009 0.877014C3.84241 0.877014 0.877258 3.84216 0.877258 7.49984C0.877258 11.1575 3.8424 14.1227 7.50009 14.1227C11.1578 14.1227 14.1229 11.1575 14.1229 7.49984C14.1229 3.84216 11.1577 0.877014 7.50009 0.877014ZM1.82726 7.49984C1.82726 4.36683 4.36708 1.82701 7.50009 1.82701C10.6331 1.82701 13.1729 4.36683 13.1729 7.49984C13.1729 10.6328 10.6331 13.1727 7.50009 13.1727C4.36708 13.1727 1.82726 10.6328 1.82726 7.49984ZM8 4.50001C8 4.22387 7.77614 4.00001 7.5 4.00001C7.22386 4.00001 7 4.22387 7 4.50001V7.50001C7 7.63262 7.05268 7.7598 7.14645 7.85357L9.14645 9.85357C9.34171 10.0488 9.65829 10.0488 9.85355 9.85357C10.0488 9.65831 10.0488 9.34172 9.85355 9.14646L8 7.29291V4.50001Z"
                                  fill="#000000"
                                />
                            </svg>
                            <span>12 hours</span>
                        </div>
                        <a href="#" class="text-sm text-[#E19219] underline transition-all ease-in-out duration-300 hover: hover:scale-105 ">See Details</a>
                    </div>
                </div>
                <p class="absolute top-2 right-3 py-1 px-5 text-xs text-white bg-[#222] rounded-full">Finance</p>
            </div>
            <div class="relative rounded-xl shadow-lg">
                <img src="{{ asset('storage/images/finance.jpg') }}" class="rounded-t-xl">
                <div class="p-5">
                    <div class="flex flex-col gap-5">
                        <h1 class="text-lg font-semibold ">Finance: Budget Management & Saving</h1>
                        <p class="text-sm font-light text-justify">Learn how to efficiently manage your personal or business budget, optimize your expenses, and implement a saving strategy for financial stability.</p>
                    </div>
                    <div class="flex items-center gap-3 py-5">
                        <img src="{{ asset('storage/images/teacher.jpg') }}" class="w-14 h-14 rounded-full border-2 border-[#E19219]">
                        <div class="flex flex-col justify-between gap-2">
                            <h1 class="font-semibold">Ahmed Alamai</h1>
                            <div class="flex items-center gap-3">
                                <svg fill="#000000" width="16px" height="16px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19,4H17V3a1,1,0,0,0-2,0V4H9V3A1,1,0,0,0,7,3V4H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm1,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12H20Zm0-9H4V7A1,1,0,0,1,5,6H7V7A1,1,0,0,0,9,7V6h6V7a1,1,0,0,0,2,0V6h2a1,1,0,0,1,1,1Z"/>
                                </svg>
                                <p class="text-xs">01 March 2025</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-3">
                        <div class="flex items-center gap-2 text-sm ">
                            <svg width="18px" height="18px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M7.50009 0.877014C3.84241 0.877014 0.877258 3.84216 0.877258 7.49984C0.877258 11.1575 3.8424 14.1227 7.50009 14.1227C11.1578 14.1227 14.1229 11.1575 14.1229 7.49984C14.1229 3.84216 11.1577 0.877014 7.50009 0.877014ZM1.82726 7.49984C1.82726 4.36683 4.36708 1.82701 7.50009 1.82701C10.6331 1.82701 13.1729 4.36683 13.1729 7.49984C13.1729 10.6328 10.6331 13.1727 7.50009 13.1727C4.36708 13.1727 1.82726 10.6328 1.82726 7.49984ZM8 4.50001C8 4.22387 7.77614 4.00001 7.5 4.00001C7.22386 4.00001 7 4.22387 7 4.50001V7.50001C7 7.63262 7.05268 7.7598 7.14645 7.85357L9.14645 9.85357C9.34171 10.0488 9.65829 10.0488 9.85355 9.85357C10.0488 9.65831 10.0488 9.34172 9.85355 9.14646L8 7.29291V4.50001Z"
                                  fill="#000000"
                                />
                            </svg>
                            <span>12 hours</span>
                        </div>
                        <a href="#" class="text-sm text-[#E19219] underline transition-all ease-in-out duration-300 hover: hover:scale-105 ">See Details</a>
                    </div>
                </div>
                <p class="absolute top-2 right-3 py-1 px-5 text-xs text-white bg-[#222] rounded-full">Finance</p>
            </div>
            <div class="relative rounded-xl shadow-lg">
                <img src="{{ asset('storage/images/finance.jpg') }}" class="rounded-t-xl">
                <div class="p-5">
                    <div class="flex flex-col gap-5">
                        <h1 class="text-lg font-semibold ">Finance: Budget Management & Saving</h1>
                        <p class="text-sm font-light text-justify">Learn how to efficiently manage your personal or business budget, optimize your expenses, and implement a saving strategy for financial stability.</p>
                    </div>
                    <div class="flex items-center gap-3 py-5">
                        <img src="{{ asset('storage/images/teacher.jpg') }}" class="w-14 h-14 rounded-full border-2 border-[#E19219]">
                        <div class="flex flex-col justify-between gap-2">
                            <h1 class="font-semibold">Ahmed Alamai</h1>
                            <div class="flex items-center gap-3">
                                <svg fill="#000000" width="16px" height="16px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19,4H17V3a1,1,0,0,0-2,0V4H9V3A1,1,0,0,0,7,3V4H5A3,3,0,0,0,2,7V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7A3,3,0,0,0,19,4Zm1,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12H20Zm0-9H4V7A1,1,0,0,1,5,6H7V7A1,1,0,0,0,9,7V6h6V7a1,1,0,0,0,2,0V6h2a1,1,0,0,1,1,1Z"/>
                                </svg>
                                <p class="text-xs">01 March 2025</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between pt-3">
                        <div class="flex items-center gap-2 text-sm ">
                            <svg width="18px" height="18px" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                  fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M7.50009 0.877014C3.84241 0.877014 0.877258 3.84216 0.877258 7.49984C0.877258 11.1575 3.8424 14.1227 7.50009 14.1227C11.1578 14.1227 14.1229 11.1575 14.1229 7.49984C14.1229 3.84216 11.1577 0.877014 7.50009 0.877014ZM1.82726 7.49984C1.82726 4.36683 4.36708 1.82701 7.50009 1.82701C10.6331 1.82701 13.1729 4.36683 13.1729 7.49984C13.1729 10.6328 10.6331 13.1727 7.50009 13.1727C4.36708 13.1727 1.82726 10.6328 1.82726 7.49984ZM8 4.50001C8 4.22387 7.77614 4.00001 7.5 4.00001C7.22386 4.00001 7 4.22387 7 4.50001V7.50001C7 7.63262 7.05268 7.7598 7.14645 7.85357L9.14645 9.85357C9.34171 10.0488 9.65829 10.0488 9.85355 9.85357C10.0488 9.65831 10.0488 9.34172 9.85355 9.14646L8 7.29291V4.50001Z"
                                  fill="#000000"
                                />
                            </svg>
                            <span>12 hours</span>
                        </div>
                        <a href="#" class="text-sm text-[#E19219] underline transition-all ease-in-out duration-300 hover: hover:scale-105 ">See Details</a>
                    </div>
                </div>
                <p class="absolute top-2 right-3 py-1 px-5 text-xs text-white bg-[#222] rounded-full">Finance</p>
            </div>
        </div>
        <a href="#" class="flex justify-center py-5">
            <button type="button"
                class="cursor-pointer rounded-md bg-[#222] font-medium py-1 px-10 text-white transition-all ease-in-out duration-300 hover:bg-[#303030]">Discover
                More
            </button>
        </a>
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