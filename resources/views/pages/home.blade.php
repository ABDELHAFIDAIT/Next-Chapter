@extends('layouts.app')

@section('hero')
    <!-- Hero -->
    <section class="py-10 relative">
        <div class="flex flex-col gap-3">
            <p class="text-lg font-medium bg-[#D6FF40] rounded-full px-5 py-1 w-max">Learn, Get Certification & Find a Job</p>
            <h1 class="text-6xl font-semibold py-5 leading-[90px]">Free Online Courses With Certificates & Employment Opportunities</h1>
            <p class="text-2xl font-medium">+200 Members, 5 Years, 100% Free</p>
            <form class="relative bg-white w-1/2 rounded-full px-10 py-4 mt-5">
                <input type="text" placeholder="Search Here ..." class="text-black placeholder:text-gray-500 text-xl placeholder:font-light outline-none">
                <button type="button" class="absolute cursor-pointer rounded-full text-xl right-0 top-0 bg-[#D6FF40] px-10 py-4 hover:bg-[#222] hover:text-white transition-all ease-in-out duration-300">Search</button>
            </form>
        </div>
        <div>
            <img src="{{ asset('storage/images/hero-1.png') }}" alt="Image de Hero" class="absolute right-10 top-30 w-1/10">
            <img src="{{ asset('storage/images/hero-2.png') }}" alt="Image de Hero" class="absolute right-0 bottom-20 w-1/6">
            <img src="{{ asset('storage/images/hero-4.png') }}" alt="Image de Hero" class="absolute right-70 bottom-5 w-1/4">
            <img src="{{ asset('storage/images/star.png') }}" alt="Image de Star" class="absolute right-60 bottom-50 w-[4%]">
            <div class="h-10 w-10 bg-[#E19219] rounded-full absolute right-135 bottom-60"></div>
        </div>
    </section>
@endsection


@section('main')
    <!-- About, Why Choose Us & How it Works -->
    <section class="px-20 pb-80 bg-[#222222] mt-10 relative">
        <div class="flex items-center gap-10 py-16">
            <div class="h-[0.5px] bg-white flex-1"> </div>
            <div class="flex justify-center items-center gap-5">
                <img src="{{ asset('storage/images/logo-white.png') }}" alt="Logo White de Next Chapter" class="w-24">
            </div>
            <div class="h-[0.5px] bg-white flex-1"> </div>
        </div>
        <div class="grid grid-cols-2 gap-10">
            <div class="flex flex-col gap-10">
                <img src="{{ asset('storage/images/about.jpg') }}" class="rounded-md">
                <div class="flex flex-col gap-3">
                    <h1 class="text-[#D6FF40] text-3xl font-semibold">About Us</h1>
                    <p class="text-white text-justify font-light">We support ex-offenders in their reintegration by providing employment, training, and personalized guidance. Collaborating with companies and associations, we foster an inclusive environment to help them rebuild their future and contribute to society.</p>
                </div>
            </div>
            <div class="flex flex-col gap-14">
                <h1 class="text-[#D6FF40] text-3xl font-semibold">Why Choose Us ?</h1>
                <div class="flex flex-col gap-7">
                    <div class="flex items-center gap-5"> 
                        <div class="bg-[#D6FF40] p-2">
                            <svg width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2Z" fill="#222222"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 13C8.03683 13 5.48769 14.4462 4.13838 16.655C3.30094 18.0259 3.62147 19.4526 4.47764 20.4474C5.29895 21.4018 6.62227 22 7.99999 22H16C17.3777 22 18.701 21.4018 19.5224 20.4474C20.3785 19.4526 20.6991 18.0259 19.8616 16.655C18.5123 14.4462 15.9632 13 12 13Z" fill="#222222"></path> </g></svg>
                        </div>
                        <h1 class="text-white text-lg ">Personalized Support</h1>
                    </div>
                    <div class="flex items-center gap-5"> 
                        <div class="bg-[#D6FF40] p-2">
                            <svg fill="#222222" height="32px" width="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 297.001 297.001" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M24.83,171.571h19.425v-9.343c0-12.743,10.367-23.111,23.111-23.111c12.744,0,23.111,10.367,23.111,23.111v9.343h116.046 v-9.343c0-12.743,10.367-23.111,23.111-23.111c12.744,0,23.111,10.367,23.111,23.111v9.343h19.425 c13.691,0,24.83-9.541,24.83-21.267V96.225c0-13.495-10.979-24.475-24.475-24.475H24.475C10.979,71.75,0,82.729,0,96.225v54.078 C0,162.029,11.139,171.571,24.83,171.571z"></path> <path d="M272.171,185.338h-19.425v9.343c0,12.743-10.367,23.111-23.111,23.111s-23.111-10.367-23.111-23.111v-9.343H90.477v9.343 c0,12.743-10.367,23.111-23.111,23.111c-12.744,0-23.111-10.367-23.111-23.111v-9.343H24.83c-9.45,0-18.113-3.104-24.83-8.24 v83.585c0,13.496,10.979,24.475,24.475,24.475h248.051c13.495,0,24.475-10.979,24.475-24.475v-83.585 C290.284,182.235,281.621,185.338,272.171,185.338z M180.953,217.792h-64.907c-3.802,0-6.884-3.082-6.884-6.884 s3.082-6.884,6.884-6.884h64.907c3.802,0,6.884,3.082,6.884,6.884S184.755,217.792,180.953,217.792z"></path> <path d="M220.291,162.227v32.454c0,5.152,4.191,9.343,9.343,9.343c5.152-0.001,9.343-4.192,9.343-9.343v-32.454 c0-5.152-4.191-9.343-9.343-9.343C224.482,152.884,220.291,157.076,220.291,162.227z"></path> <path d="M109.654,42.493c0-6.055,4.926-10.981,10.981-10.981h55.729c6.055,0,10.982,4.926,10.982,10.981v15.489h19.669V42.493 c0-16.9-13.75-30.65-30.651-30.65h-55.729c-16.9,0-30.65,13.75-30.65,30.65v15.489h19.669V42.493z"></path> <path d="M58.023,162.227v32.454c0,5.152,4.191,9.343,9.343,9.343c5.151-0.001,9.343-4.192,9.343-9.343v-32.454 c0-5.152-4.191-9.343-9.343-9.343C62.214,152.884,58.023,157.076,58.023,162.227z"></path> </g> </g> </g> </g></svg>
                        </div>
                        <h1 class="text-white text-lg ">Employment Opportunities</h1>
                    </div>
                    <div class="flex items-center gap-5"> 
                        <div class="bg-[#D6FF40] p-2">
                            <svg width="32px" height="32px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#222222"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#222222" d="M256 89.61L22.486 177.18 256 293.937l111.22-55.61-104.337-31.9A16 16 0 0 1 256 208a16 16 0 0 1-16-16 16 16 0 0 1 16-16l-2.646 8.602 18.537 5.703a16 16 0 0 1 .008.056l27.354 8.365L455 246.645v12.146a16 16 0 0 0-7 13.21 16 16 0 0 0 7.293 13.406C448.01 312.932 448 375.383 448 400c16 10.395 16 10.775 32 0 0-24.614-.008-87.053-7.29-114.584A16 16 0 0 0 480 272a16 16 0 0 0-7-13.227v-25.42L413.676 215.1l75.838-37.92L256 89.61zM119.623 249L106.5 327.74c26.175 3.423 57.486 18.637 86.27 36.627 16.37 10.232 31.703 21.463 44.156 32.36 7.612 6.66 13.977 13.05 19.074 19.337 5.097-6.288 11.462-12.677 19.074-19.337 12.453-10.897 27.785-22.128 44.156-32.36 28.784-17.99 60.095-33.204 86.27-36.627L392.375 249h-6.25L256 314.063 125.873 249h-6.25z"></path></g></svg>
                        </div>
                        <h1 class="text-white text-lg ">Professional Training</h1>
                    </div>
                    <div class="flex items-center gap-5"> 
                        <div class="bg-[#D6FF40] p-2">
                            <svg height="32px" width="32px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#222222"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#222222;} </style> <g> <path class="st0" d="M504.556,297.257c-4.745-7.638-11.463-13.868-19.446-18.003c-1.687-0.89-3.531-1.694-5.498-2.426h-0.28 c-2.326,0-4.551-0.703-6.424-2.003c-3.504-0.768-7.1-1.156-10.711-1.156c-11.499,0-22.288,3.804-31.211,10.997 c-2.002,1.615-4.515,2.505-7.084,2.505c-3.439,0-6.647-1.529-8.801-4.2c-1.895-2.347-2.764-5.29-2.44-8.291 c0.315-3.008,1.787-5.7,4.134-7.602c12.792-10.322,28.907-16.007,45.381-16.007c5.255,0,10.509,0.574,15.663,1.723 c9.648-7.638,15.749-18.47,17.271-30.759c0.244-1.938,0.366-3.891,0.366-5.822c0-11.255-4.121-22.166-11.607-30.694 c-7.545-8.585-17.946-14.098-29.295-15.506c-1.378-0.172-2.77-0.286-4.156-0.33c-1.02,1.156-2.082,2.297-3.18,3.403 c-4.451,4.479-9.935,8.542-16.775,12.44c-5.154,2.922-10.998,5.678-17.365,8.191c-11.032,4.343-19.675,6.417-19.761,6.432 c-0.833,0.201-1.723,0.302-2.613,0.302c-5.233,0-9.741-3.546-10.982-8.629c-0.711-2.942-0.23-5.972,1.342-8.542 c1.529-2.519,3.919-4.299,6.762-5.046l0.222-0.05l2.053,5.334l-1.414-5.506l2.032-0.553c1.823-0.517,4.407-1.299,7.465-2.332 c5.527-1.888,13.674-5.025,21.097-9.246c4.896-2.778,9.009-5.786,11.88-8.685c1.644-1.666,3.252-3.503,4.788-5.477l0.732-0.905 c7.056-9.324,11.14-21.046,11.133-32.582c-0.014-11.916-4.221-22.92-12.167-31.836c-9.44-10.566-22.985-16.632-37.17-16.632 c-12.239,0-24.012,4.493-33.142,12.648c-2.074,1.852-4.745,2.871-7.523,2.871c-3.223,0-6.296-1.378-8.435-3.782 c-2.002-2.247-3.014-5.147-2.85-8.155c0.173-3.015,1.508-5.779,3.755-7.789c4.895-4.371,10.315-8.033,16.15-10.918 c-1.436-10.789-6.374-20.824-14.141-28.591c-9.411-9.411-21.915-14.587-35.21-14.593c-13.302,0.006-25.806,5.182-35.216,14.593 c-9.404,9.404-14.579,21.916-14.586,35.209v81.187h46.4c6.23,0,11.298,5.075,11.298,11.298c0,6.23-5.068,11.299-11.298,11.299 h-46.4v55.74c13.459,0.631,24.844,2.434,34.685,5.477c11.736,3.61,21.377,9.167,28.634,16.496c4.286,4.328,7.903,9.439,10.76,15.19 c3.712,7.515,5.7,15.167,7.021,20.996c0.725,3.231,1.357,6.424,1.967,9.54c1.048,5.276,2.031,10.258,3.338,14.672 c1.199,4.063,2.562,7.321,4.185,9.97c2.003,3.302,4.422,5.786,7.594,7.839c4.516,2.886,10.473,4.781,18.205,5.786 c2.972,0.373,5.635,1.895,7.486,4.278c1.852,2.398,2.656,5.37,2.276,8.356c-0.732,5.628-5.549,9.863-11.198,9.863l-1.465-0.101 c-9.454-1.214-17.314-3.553-24.04-7.142c-6.403-3.403-11.751-8.026-15.885-13.718c-2.412-3.288-4.422-6.927-6.152-11.098 c-1.788-4.307-3.202-8.951-4.594-15.06c-0.711-3.158-1.328-6.317-1.946-9.447c-0.632-3.187-1.256-6.352-1.974-9.439 c-2.068-9.03-4.516-15.24-7.947-20.135c-2.326-3.338-5.132-6.138-8.592-8.557c-4.695-3.273-10.488-5.778-17.709-7.659 c-6.97-1.816-15.239-2.994-24.65-3.489v207.346c0.007,13.294,5.183,25.806,14.579,35.217c9.418,9.404,21.922,14.579,35.224,14.586 c13.294-0.006,25.798-5.182,35.21-14.586c9.404-9.418,14.586-21.923,14.586-35.217c0.007-7.2-1.967-15.103-5.427-21.686 c-3.934-7.531-9.411-13.086-16.266-16.532c-5.298-2.641-11.162-3.933-17.931-3.948c-6.224,0-11.292-5.061-11.292-11.284 c0-6.239,5.068-11.306,11.298-11.306c7.717,0,15.039,1.228,21.765,3.654c6.295,2.261,12.096,5.584,17.235,9.863 c8.973,7.501,15.786,17.788,19.705,29.746c2.297,7.028,3.503,14.457,3.503,21.492c0.007,5.613-0.639,11.183-1.916,16.625 c5.212,1.78,10.732,2.713,16.187,2.713c12.188-0.007,23.933-4.48,33.049-12.591c10.61-9.44,16.697-23.007,16.704-37.226 c0-6.023-1.077-11.923-3.18-17.544c-2.139-5.693-5.312-10.926-9.411-15.541c-4.135-4.659-3.712-11.809,0.933-15.95 c2.082-1.845,4.745-2.85,7.508-2.85c3.23,0,6.31,1.378,8.456,3.797l0.783,0.897l0.517,0.087c0.352,0.05,0.574,0.071,1.098,0.093 c0.459,0.007,1.098,0.014,1.981,0.014c13.294-0.007,25.806-5.183,35.218-14.586c9.403-9.418,14.579-21.922,14.586-35.217 C511.994,314.169,509.416,305.103,504.556,297.257z"></path> <path class="st0" d="M194.906,11.453c-13.302,0.006-25.806,5.182-35.217,14.593c-7.767,7.767-12.706,17.81-14.141,28.584 c5.822,2.886,11.241,6.539,16.144,10.918l0.797,0.783l0.826,0.947l1.658,1.823c1.5,1.622,3.682,3.948,6.352,6.618 c4.831,4.853,12.232,11.845,20.078,17.637c5.204,3.848,10.078,6.762,14.112,8.435c2.8,1.163,4.752,1.557,5.9,1.687 c3.008,0.337,5.7,1.823,7.58,4.177c1.888,2.355,2.742,5.305,2.404,8.306c-0.639,5.728-5.462,10.05-11.219,10.05l-1.249-0.071 c-3.862-0.431-7.81-1.508-12.074-3.281c-3.546-1.472-7.164-3.366-11.077-5.8c-6.137-3.826-12.763-8.88-19.69-15.01 c-10.142-8.987-17.902-17.587-19.898-19.841c-9.08-7.903-20.674-12.253-32.697-12.253c-14.178,0.007-27.723,6.066-37.155,16.632 c-8.162,9.124-12.648,20.903-12.655,33.142c0,8.312,2.074,16.453,6.022,23.739h0.136c3.726,0,7.473,0.28,11.127,0.847 c6.166,0.962,10.394,6.74,9.446,12.892c-0.869,5.549-5.556,9.576-11.155,9.576c-0.574,0-1.163-0.044-1.751-0.13 c-2.498-0.394-5.083-0.588-7.667-0.588c-0.596,0-1.184,0.007-1.788,0.021c-12.964,0.467-25.081,5.872-34.097,15.225 c-8.987,9.332-13.933,21.592-13.933,34.513c0,0.596,0.007,1.199,0.022,1.802c0.473,13.345,6.324,25.936,16.151,34.944 c4.508-0.861,9.073-1.299,13.603-1.299c16.496,0,32.611,5.685,45.396,16.007l1.12,1.02l0.855,0.962 c0.388,0.423,0.983,1.047,1.766,1.838c2.218,2.239,4.616,4.436,7.121,6.539c5.549,4.652,14.342,11.062,24.773,15.204 c7.113,2.821,14.112,4.25,20.796,4.25c6.23,0,11.298,5.067,11.298,11.298s-5.068,11.299-11.298,11.299 c-9.584-0.008-19.382-1.974-29.13-5.85c-7.581-3.014-15.154-7.179-22.518-12.383c-10.229-7.242-17.25-14.514-19.604-17.092 c-8.807-6.862-19.367-10.494-30.572-10.494c-8.075,0-15.785,1.874-22.913,5.585c-7.975,4.135-14.701,10.365-19.446,18.003 c-4.86,7.846-7.436,16.912-7.444,26.215c0.008,13.287,5.183,25.792,14.586,35.209c9.411,9.404,21.922,14.579,35.217,14.586 c1.644,0,2.434-0.007,3.094-0.078l0.445-0.058l0.84-0.955c2.146-2.419,5.226-3.797,8.456-3.797c2.764,0,5.427,1.005,7.501,2.85 c2.254,2.002,3.597,4.766,3.776,7.788c0.172,3.008-0.833,5.908-2.842,8.162c-4.092,4.615-7.264,9.856-9.404,15.548 c-2.11,5.621-3.18,11.514-3.18,17.537c0.006,14.213,6.094,27.78,16.696,37.226c9.124,8.111,20.868,12.584,33.056,12.591 c5.456,0,10.976-0.933,16.187-2.713c-1.278-5.427-1.917-10.997-1.917-16.625c0-8.995,1.91-18.276,5.513-26.868 c4.049-9.662,10.164-18.083,17.688-24.356c2.031-1.694,4.601-2.627,7.235-2.627c3.368,0,6.525,1.479,8.679,4.063 c3.977,4.781,3.338,11.916-1.435,15.908c-4.76,3.962-8.679,9.404-11.342,15.756c-2.419,5.764-3.754,12.203-3.747,18.126 c0,13.294,5.182,25.798,14.586,35.217c9.411,9.404,21.916,14.579,35.217,14.586c13.294-0.006,25.806-5.182,35.217-14.586 c9.396-9.411,14.572-21.923,14.579-35.217v-90.54h-42.166c-6.223,0-11.291-5.061-11.291-11.292c0-6.23,5.068-11.299,11.291-11.299 h42.166v-68.668c-4.796-2.21-10.036-3.374-15.334-3.38c-3.718,0-7.436,0.574-11.047,1.694c-9.447,3.266-18.972,4.96-28.139,4.96 c-17.45,0-33.35-6.202-44.864-17.458c-10.948-10.681-17.236-25.411-17.242-40.421c-0.007-13.344,4.751-26.1,13.782-36.889 c2.153-2.585,5.312-4.056,8.671-4.056c2.642,0,5.212,0.934,7.236,2.627c4.781,3.999,5.42,11.127,1.436,15.908 c-5.642,6.776-8.513,14.32-8.52,22.418c0,8.937,3.797,17.78,10.422,24.248c7.408,7.2,17.465,11.012,29.087,11.026 c6.676,0,13.76-1.285,21.046-3.811c6.123-1.924,12.11-2.836,18.14-2.836c5.204,0,10.33,0.675,15.326,2.032V61.256 c-0.008-13.294-5.183-25.806-14.579-35.209C220.712,16.635,208.2,11.46,194.906,11.453z"></path> </g> </g></svg>
                        </div>
                        <h1 class="text-white text-lg ">Support to Overcome Your Challenges</h1>
                    </div>
                    <div class="flex items-center gap-5"> 
                        <div class="bg-[#D6FF40] p-2">
                            <svg height="32px" width="32px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#222222"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#222222;} </style> <g> <path class="st0" d="M326.527,171.735c-15.637-2.602-55.941-2.43-82.686,7.296c-26.752,9.725-75.397,40.124-89.988,44.997 c-14.591,4.859-15.81,24.322,17.02,27.964c32.836,3.654,62.018-17.028,69.313-20.669c7.296-3.654,77.826,7.296,77.826,7.296 l22.19,5.468l51.161,69.154c8.977-7.798,26.732-24.349,31.228-36.927c1.641-4.581,4.078-8.792,6.752-12.532l-72.49-99.977 C347.605,169.047,336.444,173.39,326.527,171.735z"></path> <path class="st0" d="M326.527,254.123l-10.752-1.085c-14.107-2.185-54-7.865-68.975-7.865c-0.662,0-1.185,0.007-1.576,0.026 c-0.602,0.344-1.298,0.742-1.98,1.139c-10.625,6.19-35.524,20.681-64.52,20.681c-3.178,0-6.362-0.179-9.46-0.523 c-4.7-0.523-8.832-1.331-12.486-2.35c3.462,1.516,6.653,3.688,9.381,6.475c4.29,4.383,6.944,9.758,7.997,15.379 c2.496-0.669,5.084-1.04,7.732-1.04c8.116,0,15.71,3.191,21.376,8.99c5.588,5.707,8.613,13.254,8.527,21.238 c0,0.079-0.013,0.159-0.013,0.238c8.083,0.026,15.644,3.218,21.297,8.99c5.587,5.707,8.613,13.253,8.527,21.238 c-0.027,2.754-0.45,5.441-1.198,8.024c5.733,1.198,10.983,4.051,15.18,8.341c11.532,11.791,11.327,30.757-0.457,42.29l-5.898,5.773 c0.026,0,0.053,0,0.079,0c9.917-0.715,18.265-6.832,20.602-16.048c4.038,3.184,9.122,5.097,14.664,5.097 c13.095,0,23.713-10.612,23.713-23.713c0-1.377-0.139-2.714-0.371-4.026c4.171,3.635,9.606,5.852,15.571,5.852 c13.095,0,23.714-10.619,23.714-23.713c2.807,1.172,5.885,1.827,9.116,1.827c13.101,0,23.713-10.619,23.713-23.713 c0-9.944-4.859-16.418-16.418-29.791L326.527,254.123z"></path> <path class="st0" d="M155.734,280.829c-5.918-6.044-15.61-6.15-21.654-0.238l-21.88,21.416c-6.044,5.912-6.15,15.604-0.238,21.648 c5.918,6.044,15.61,6.15,21.654,0.231l21.886-21.41C161.539,296.565,161.645,286.873,155.734,280.829z"></path> <path class="st0" d="M192.833,304.158c-5.912-6.051-15.604-6.157-21.648-0.239l-29.175,28.546 c-6.051,5.918-6.15,15.61-0.239,21.648c5.912,6.051,15.611,6.157,21.655,0.239l29.175-28.547 C198.645,319.894,198.751,310.202,192.833,304.158z"></path> <path class="st0" d="M222.643,334.624c-5.912-6.044-15.604-6.157-21.648-0.238l-29.175,28.553 c-6.044,5.911-6.15,15.603-0.238,21.654c5.912,6.038,15.604,6.144,21.655,0.225l29.175-28.546 C228.456,350.353,228.562,340.661,222.643,334.624z"></path> <path class="st0" d="M245.158,372.226c-5.912-6.044-15.604-6.156-21.648-0.238l-17.02,16.657 c-6.044,5.911-6.15,15.603-0.238,21.648c5.918,6.044,15.61,6.144,21.654,0.238l17.02-16.656 C250.971,387.963,251.07,378.271,245.158,372.226z"></path> <path class="st0" d="M510.606,234.991l-97.792-134.866c-2.364-3.27-6.925-3.991-10.189-1.628l-43.315,31.412 c-3.264,2.363-3.992,6.925-1.622,10.188L455.48,274.97c2.363,3.264,6.925,3.992,10.188,1.622l43.323-31.406 C512.248,242.815,512.977,238.254,510.606,234.991z M477.334,247.106c-5.435,3.945-13.042,2.727-16.987-2.708 c-3.939-5.435-2.728-13.035,2.714-16.98c5.435-3.946,13.035-2.728,16.981,2.701C483.98,235.56,482.769,243.167,477.334,247.106z"></path> <path class="st0" d="M144.784,261.63c2.304,0,4.555,0.292,6.739,0.788c-18.384-7.05-21.429-19.946-21.906-24.494 c-1.298-12.248,6.587-23.402,19.622-27.745c5.243-1.748,18.986-9.242,32.28-16.484c14.26-7.779,29.91-16.312,43.521-22.589 c-17.252-1.396-33.419-0.807-42.051,0.629c-9.295,1.549-19.675-2.164-28.553-6.944l-73.06,100.752 c2.191,3.29,4.157,6.892,5.54,10.771c2.046,5.72,6.839,12.26,12.3,18.43c0.854-1.099,1.761-2.172,2.781-3.171l21.879-21.416 C129.498,264.662,136.926,261.63,144.784,261.63z"></path> <path class="st0" d="M152.695,129.902l-43.323-31.406c-3.257-2.363-7.818-1.642-10.188,1.628L1.391,234.991 c-2.37,3.263-1.635,7.824,1.622,10.195l43.316,31.406c3.264,2.37,7.825,1.642,10.189-1.629l97.793-134.866 C156.68,136.834,155.952,132.272,152.695,129.902z M123.745,144.97c-3.939,5.428-11.546,6.646-16.981,2.701 c-5.442-3.94-6.654-11.546-2.708-16.981c3.939-5.435,11.546-6.653,16.981-2.708C126.479,131.928,127.684,139.528,123.745,144.97z"></path> </g> </g></svg>
                        </div>
                        <h1 class="text-white text-lg ">Valuing Diversity</h1>
                    </div>
                    <div class="flex items-center gap-5"> 
                        <div class="bg-[#D6FF40] p-2">
                            <svg fill="#222222" width="32px" height="32px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m24 12c0-.002 0-.004 0-.006 0-3.551-1.546-6.74-4.001-8.933l-.012-.01c-.031-.033-.064-.062-.101-.087l-.002-.001c-2.095-1.84-4.859-2.962-7.886-2.962-3.032 0-5.8 1.126-7.91 2.984l.013-.011c-.026.02-.049.041-.07.065v.001c-2.478 2.205-4.031 5.403-4.031 8.963 0 3.55 1.544 6.739 3.997 8.933l.012.01c0 .003.002.005.005.005.031.035.065.065.101.092l.002.001c2.094 1.837 4.857 2.958 7.881 2.958 3.032 0 5.801-1.126 7.911-2.984l-.013.011c.03-.022.056-.045.08-.07 2.475-2.202 4.026-5.395 4.026-8.951 0-.002 0-.005 0-.007zm-4.462 7.805c-.576-.468-1.223-.897-1.909-1.262l-.065-.032c.613-1.767.982-3.804 1.017-5.923v-.016h4.261c-.156 2.852-1.391 5.388-3.301 7.23zm-6.966-1.505c1.283.069 2.482.351 3.588.81l-.072-.026c-.886 2.02-2.133 3.408-3.516 3.713zm0-1.144v-4.584h4.868c-.043 1.961-.383 3.828-.976 5.578l.039-.131c-1.157-.484-2.498-.795-3.903-.862l-.027-.001zm0-5.728v-4.584c1.431-.069 2.772-.379 4.007-.891l-.079.029c.555 1.619.896 3.485.94 5.425v.021zm0-5.728v-4.495c1.383.305 2.63 1.687 3.516 3.713-1.034.43-2.233.711-3.487.781zm2.854-4c1.238.419 2.312 1.009 3.258 1.752l-.023-.018c-.443.348-.94.676-1.464.961l-.056.028c-.449-1.047-1.025-1.947-1.724-2.737l.009.011zm-4-.492v4.492c-1.283-.069-2.482-.35-3.588-.81l.072.026c.89-2.02 2.135-3.407 3.518-3.712zm-4.568 3.212c-.58-.315-1.077-.642-1.544-1.007l.024.018c.923-.726 1.996-1.315 3.158-1.712l.076-.023c-.689.778-1.265 1.678-1.689 2.658l-.025.065zm4.57 2.423v4.584h-4.868c.044-1.961.385-3.827.979-5.577l-.039.131c1.156.483 2.497.794 3.901.861zm0 5.728v4.584c-1.431.069-2.772.379-4.007.891l.079-.029c-.555-1.618-.896-3.485-.94-5.425v-.021zm0 5.728v4.495c-1.383-.305-2.63-1.687-3.516-3.713 1.034-.43 2.233-.71 3.487-.78l.029-.001zm-2.85 4c-1.238-.418-2.311-1.006-3.258-1.748l.024.018c.443-.348.94-.676 1.464-.961l.056-.028c.445 1.047 1.022 1.947 1.723 2.733l-.009-.01zm8.564-2.72c.58.315 1.077.642 1.544 1.007l-.024-.018c-.923.726-1.996 1.315-3.158 1.712l-.076.023c.689-.778 1.265-1.677 1.689-2.657l.025-.065zm5.7-8.151h-4.261c-.035-2.135-.404-4.172-1.058-6.078l.041.138c.751-.399 1.397-.828 1.997-1.312l-.024.018c1.913 1.845 3.148 4.381 3.303 7.205l.001.028zm-18.38-7.233c.576.468 1.223.897 1.909 1.262l.065.032c-.613 1.767-.982 3.804-1.017 5.923v.016h-4.262c.156-2.852 1.391-5.388 3.301-7.23l.003-.003zm-3.304 8.377h4.261c.035 2.135.404 4.172 1.058 6.078l-.041-.138c-.751.399-1.397.828-1.997 1.312l.024-.018c-1.913-1.845-3.148-4.381-3.303-7.205l-.001-.028z"></path></g></svg>
                        </div>
                        <h1 class="text-white text-lg ">Quick and Easy Access to your Resources</h1>
                    </div>
                </div>
            </div>
            <div class="col-span-2 mt-5 flex flex-col gap-5">
                <h1 class="text-[#D6FF40] text-3xl font-semibold">How it Works ?</h1>
                <p class="text-white text-justify font-light">A simple and effective journey to help you reintegrate into the workforce!</p>
                <div class="grid grid-cols-4 gap-5">
                    <div class="col-span-1 row-span-2 bg-[#D6FF40] px-5 pt-10 pb-3 flex flex-col gap-7 rounded-xl">
                        <div class="">
                            <img src="{{ asset('storage/images/how-1.png') }}"  alt="Step 1">
                        </div>
                        <h1 class="font-semibold text-lg">Sign Up</h1>
                        <p>Create a free account in just a few clicks and access all available resources.</p>
                        <a href="#">
                            <button class="text-white py-2 w-full bg-[#222222] font-medium rounded-md hover:bg-[#363636] cursor-pointer transition-all ease-in-out duration-300">START NOW</button>
                        </a>
                    </div>
                    <div class="bg-[#EDF7F1] px-5 pt-10 pb-3 flex flex-col gap-7 rounded-xl">
                        <div class="">
                            <img src="{{ asset('storage/images/how-2.png') }}"  alt="Step 1">
                        </div>
                        <h1 class="font-semibold text-lg">Take a Course</h1>
                        <p>Choose from our certified training programs tailored to your needs and develop your professional skills.</p>
                    </div>
                    <div class="bg-[#EDF7F1] px-5 pt-10 pb-3 flex flex-col gap-7 rounded-xl">
                        <div class="">
                            <img src="{{ asset('storage/images/how-3.png') }}"  alt="Step 1">
                        </div>
                        <h1 class="font-semibold text-lg">Get Certified</h1>
                        <p>Complete your training and receive a recognized certificate to enhance your resume.</p>
                    </div>
                    <div class="bg-[#EDF7F1] px-5 pt-10 pb-3 flex flex-col gap-7 rounded-xl">
                        <div class="">
                            <img src="{{ asset('storage/images/how-4.png') }}"  alt="Step 1">
                        </div>
                        <h1 class="font-semibold text-lg">Find a Job</h1>
                        <p>Apply for job opportunities with our partner companies and start a new career with confidence!</p>
                    </div>
                    <p class="col-span-3 text-white text-justify font-light">We support you every step of the way with personalized guidance and tailored resources for your success.</p>
                </div>
            </div>
        </div>
        <div class="absolute bottom-[-150px] pt-20 pb-10 px-20 bg-[#D6FF40] rounded-2xl grid grid-cols-2 gap-10">
            <div class="flex flex-col justify-between">
                <h1 class="text-4xl font-semibold leading-[50px]">Get to Know<br>Yourself Better !</h1>
                <p>Discover your career strenghts & weaknesses</p>
                <a href="#">
                    <button class="border rounded-full py-3 w-2/3 font-medium cursor-pointer hover:border-[#222] hover:bg-[#222] hover:text-white transition-all ease-in-out duration-300">Discover Our Services</button>
                </a>
            </div>
            <div class="relative">
                <img src="{{ asset('storage/images/discover.png') }}" class="">
                <div class="absolute h-20 w-20 p-5 bg-[#222222] top-[-40px] right-[-40px] rounded-xl "></div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="pt-60 pb-20 px-20 flex flex-col gap-10">
        <h1 class="text-center font-semibold text-3xl">Frequently Asked Questions</h1>
        <div class="flex flex-col gap-5">
            <div class="flex flex-col gap-3 px-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-5">
                        <div>
                            <img src="{{ asset('storage/images/faq.png') }}" class="w-2/3">
                        </div>
                        <h1>Who can join this platform?</h1>
                    </div>
                    <svg class="faq-arrow cursor-pointer" width="20px" height="20px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M104.704 338.752a64 64 0 0 1 90.496 0l316.8 316.8 316.8-316.8a64 64 0 0 1 90.496 90.496L557.248 791.296a64 64 0 0 1-90.496 0L104.704 429.248a64 64 0 0 1 0-90.496z"></path></g></svg>
                </div>
                
                <div class="hidden pl-12 font-light faq-answer">
                    <p>Anyone looking for career opportunities and skill development can join, especially those seeking a second chance after incarceration.</p>
                </div>
            </div>
            <hr class="text-gray-600">
            <div class="flex flex-col gap-3 px-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-5">
                        <div>
                            <img src="{{ asset('storage/images/faq.png') }}" class="w-2/3">
                        </div>
                        <h1>What kind of jobs are available?</h1>
                    </div>
                    <svg class="faq-arrow cursor-pointer" width="20px" height="20px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M104.704 338.752a64 64 0 0 1 90.496 0l316.8 316.8 316.8-316.8a64 64 0 0 1 90.496 90.496L557.248 791.296a64 64 0 0 1-90.496 0L104.704 429.248a64 64 0 0 1 0-90.496z"></path></g></svg>
                </div>
                
                <div class="hidden pl-12 font-light faq-answer">
                    <p>Anyone looking for career opportunities and skill development can join, especially those seeking a second chance after incarceration.</p>
                </div>
            </div>
            <hr class="text-gray-600">
            <div class="flex flex-col gap-3 px-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-5">
                        <div>
                            <img src="{{ asset('storage/images/faq.png') }}" class="w-2/3">
                        </div>
                        <h1>How can employers collaborate with us?</h1>
                    </div>
                    <svg class="faq-arrow cursor-pointer" width="20px" height="20px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M104.704 338.752a64 64 0 0 1 90.496 0l316.8 316.8 316.8-316.8a64 64 0 0 1 90.496 90.496L557.248 791.296a64 64 0 0 1-90.496 0L104.704 429.248a64 64 0 0 1 0-90.496z"></path></g></svg>
                </div>
                
                <div class="hidden pl-12 font-light faq-answer">
                    <p>Anyone looking for career opportunities and skill development can join, especially those seeking a second chance after incarceration.</p>
                </div>
            </div>
            <hr class="text-gray-600">
            <div class="flex flex-col gap-3 px-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-5">
                        <div>
                            <img src="{{ asset('storage/images/faq.png') }}" class="w-2/3">
                        </div>
                        <h1>What support is available for job seekers?</h1>
                    </div>
                    <svg class="faq-arrow cursor-pointer" width="20px" height="20px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M104.704 338.752a64 64 0 0 1 90.496 0l316.8 316.8 316.8-316.8a64 64 0 0 1 90.496 90.496L557.248 791.296a64 64 0 0 1-90.496 0L104.704 429.248a64 64 0 0 1 0-90.496z"></path></g></svg>
                </div>
                
                <div class="hidden pl-12 font-light faq-answer">
                    <p>Anyone looking for career opportunities and skill development can join, especially those seeking a second chance after incarceration.</p>
                </div>
            </div>
        </div>
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