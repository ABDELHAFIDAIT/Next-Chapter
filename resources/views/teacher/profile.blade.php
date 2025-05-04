<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="{{ asset('storage/images/logo-white.png') }}">
        <title>Next Chapter</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body class="grid grid-cols-20">
        <nav class="flex flex-col justify-between items-center bg-[#222] w-full h-screen py-5 shadow-sm ">
            <div class="flex flex-col gap-2 w-full items-center justify-center">
                <div class="mb-8">
                    <img src="{{ asset('storage/images/logo-white.png') }}" class="h-10">
                </div>
                <a href="{{ route('teacher.dashboard') }}" class="flex justify-center w-full  py-2">
                    <svg height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                            viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                        <path fill="#FFF" d="M9.037,40.763h4.286c0.552,0,1-0.447,1-1v-7.314c0-0.553-0.448-1-1-1H9.037c-0.552,0-1,0.447-1,1v7.314
                            C8.037,40.315,8.485,40.763,9.037,40.763z M10.037,33.448h2.286v5.314h-2.286V33.448z"/>
                        <path fill="#FFF" d="M21.894,40.763c0.552,0,1-0.447,1-1v-20.64c0-0.553-0.448-1-1-1h-4.286c-0.552,0-1,0.447-1,1v20.64
                            c0,0.553,0.448,1,1,1H21.894z M18.608,20.123h2.286v18.64h-2.286V20.123z"/>
                        <path fill="#FFF" d="M30.465,40.763c0.552,0,1-0.447,1-1V25.96c0-0.553-0.448-1-1-1H26.18c-0.552,0-1,0.447-1,1v13.803
                            c0,0.553,0.448,1,1,1H30.465z M27.18,26.96h2.286v11.803H27.18V26.96z"/>
                        <path fill="#FFF" d="M33.751,9.763v30c0,0.553,0.448,1,1,1h4.286c0.552,0,1-0.447,1-1v-30c0-0.553-0.448-1-1-1h-4.286
                            C34.199,8.763,33.751,9.21,33.751,9.763z M35.751,10.763h2.286v28h-2.286V10.763z"/>
                    </svg>
                </a>
                <a href="{{ route('teacher.courses') }}" class="flex justify-center rounded-none py-2 flex-1 w-full">
                    <svg fill="#FFF" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
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
                <a href="{{ route('teacher.students') }}" class="flex justify-center rounded-none py-2 flex-1 w-full">
                    <svg fill="#FFF" width="30px" height="30px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg">
                        <path d="M226.52979,56.41016l-96-32a8.00672,8.00672,0,0,0-5.05958,0L29.6239,56.35889l-.00976.00341-.14393.04786c-.02819.00927-.053.02465-.08105.03442a7.91407,7.91407,0,0,0-1.01074.42871c-.03748.019-.07642.03516-.11353.05469a7.97333,7.97333,0,0,0-.93139.58325c-.06543.04688-.129.09522-.19288.144a8.08459,8.08459,0,0,0-.81872.71119c-.0238.02416-.04443.05053-.06787.0747a8.0222,8.0222,0,0,0-.661.783c-.04163.05567-.08472.10986-.12476.16675a8.00177,8.00177,0,0,0-.56714.92993c-.02588.04981-.04809.10083-.073.15112a7.97024,7.97024,0,0,0-.40515.97608c-.01062.03149-.0238.06128-.03405.093a7.95058,7.95058,0,0,0-.26282,1.08544c-.01331.07666-.02405.15308-.035.23A8.02888,8.02888,0,0,0,24,64v80a8,8,0,0,0,16,0V75.09985L73.58521,86.29492a63.9717,63.9717,0,0,0,20.42944,87.89746,95.88087,95.88087,0,0,0-46.48389,37.4375,7.9997,7.9997,0,1,0,13.40235,8.73828,80.023,80.023,0,0,1,134.1333,0,7.99969,7.99969,0,1,0,13.40234-8.73828,95.87941,95.87941,0,0,0-46.4834-37.43725,63.972,63.972,0,0,0,20.42944-87.89771l44.115-14.70508a8.0005,8.0005,0,0,0,0-15.17968ZM128,168A47.99154,47.99154,0,0,1,89.34875,91.54932l36.12146,12.04052a8.00672,8.00672,0,0,0,5.05958,0l36.12146-12.04052A47.99154,47.99154,0,0,1,128,168Z"/>
                    </svg>
                </a>
                <a href="{{ route('teacher.profile') }}" class="flex justify-center bg-[#D6FF40] rounded-none py-2 flex-1 w-full">
                    <svg fill="#222" width="30px" height="30px" viewBox="0 0 512 512" id="_x30_1" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M256,90  c37.02,0,67.031,35.468,67.031,79.219S293.02,248.438,256,248.438s-67.031-35.468-67.031-79.219S218.98,90,256,90z M369.46,402  H142.54c-11.378,0-20.602-9.224-20.602-20.602C121.938,328.159,181.959,285,256,285s134.062,43.159,134.062,96.398  C390.062,392.776,380.839,402,369.46,402z"/></svg>
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
        <section class="col-span-19 h-screen overflow-auto px-10">
            <section class="py-10 px-20 flex items-center justify-between">
                <h1 class="text-2xl font-semibold">Welcome To Your Profile</h1>
            </section>
            <section class="flex flex-col gap-5 py-10 px-56">
                <div class="flex items-center gap-10 py-5 border-b border-b-gray-400">
                    <div class="flex items-center gap-10 px-10">
                        <div>
                            <img src="{{ asset('storage/'.Auth::user()->photo) }}" class="h-36 w-36 rounded-full ">
                        </div>
                        <div class="flex flex-col gap-10">
                            <h1 class="text-3xl font-semibold">{{ Auth::user()->f_name.' '.Auth::user()->l_name }}</h1>
                            <div class="flex items-center gap-5">
                                <div class="flex items-center gap-2">
                                    <svg fill="#000000" width="25px" height="25px" viewBox="-4 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                        <title>mail</title>
                                        <path d="M24 8.375l-12 10.281-12-10.281v-0.594h24v0.594zM24 22.875l-7.938-5.719 7.938-6.875v12.594zM0 10.281l7.938 6.875-7.938 5.719v-12.594zM12 20.688l3.281-2.875 8.719 6.281v0.125h-24v-0.125l8.719-6.281z"></path>
                                        </svg>
                                    <a href="mailto:abdelhafid02002@gmail.com">{{ Auth::user()->email }}</a>
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
                                    <a href="tel:+212 504658800">{{ Auth::user()->phone }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-10 pb-5 px-10 border-b border-b-gray-400">
                    <h1 class="font-medium text-lg">Biography </h1>
                    <p class="col-span-2 font-light text-justify">{{ $teacher->bio }}</p>
                </div>
                @if (count($links) > 0)
                    <div class="grid grid-cols-3 gap-10 pb-5 px-10 border-b border-b-gray-400">
                        <h1 class="font-medium text-lg">External Links </h1>
                        <div class="col-span-2 flex items-center gap-5">
                            @foreach ($links as $link)
                                <a href="{{ $link->link }}" class="flex items-center">
                                    @switch($link->type)
                                        @case('linkedin')
                                            <svg width="30px" height="30px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#0A66C2" d="M12.225 12.225h-1.778V9.44c0-.664-.012-1.519-.925-1.519-.926 0-1.068.724-1.068 1.47v2.834H6.676V6.498h1.707v.783h.024c.348-.594.996-.95 1.684-.925 1.802 0 2.135 1.185 2.135 2.728l-.001 3.14zM4.67 5.715a1.037 1.037 0 01-1.032-1.031c0-.566.466-1.032 1.032-1.032.566 0 1.031.466 1.032 1.032 0 .566-.466 1.032-1.032 1.032zm.889 6.51h-1.78V6.498h1.78v5.727zM13.11 2H2.885A.88.88 0 002 2.866v10.268a.88.88 0 00.885.866h10.226a.882.882 0 00.889-.866V2.865a.88.88 0 00-.889-.864z"></path></g></svg>
                                            @break
                                        @case('github')
                                            <svg fill="#000000" width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12,2.2467A10.00042,10.00042,0,0,0,8.83752,21.73419c.5.08752.6875-.21247.6875-.475,0-.23749-.01251-1.025-.01251-1.86249C7,19.85919,6.35,18.78423,6.15,18.22173A3.636,3.636,0,0,0,5.125,16.8092c-.35-.1875-.85-.65-.01251-.66248A2.00117,2.00117,0,0,1,6.65,17.17169a2.13742,2.13742,0,0,0,2.91248.825A2.10376,2.10376,0,0,1,10.2,16.65923c-2.225-.25-4.55-1.11254-4.55-4.9375a3.89187,3.89187,0,0,1,1.025-2.6875,3.59373,3.59373,0,0,1,.1-2.65s.83747-.26251,2.75,1.025a9.42747,9.42747,0,0,1,5,0c1.91248-1.3,2.75-1.025,2.75-1.025a3.59323,3.59323,0,0,1,.1,2.65,3.869,3.869,0,0,1,1.025,2.6875c0,3.83747-2.33752,4.6875-4.5625,4.9375a2.36814,2.36814,0,0,1,.675,1.85c0,1.33752-.01251,2.41248-.01251,2.75,0,.26251.1875.575.6875.475A10.0053,10.0053,0,0,0,12,2.2467Z"></path></g></svg>
                                            @break
                                        @case('website')
                                            <svg width="30px" height="30px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M20.501 6.028V6h-.02A10.28 10.28 0 0 0 4.519 6H4.5v.028a10.262 10.262 0 0 0 0 12.944V19h.02a10.28 10.28 0 0 0 15.962 0h.021v-.028a10.262 10.262 0 0 0 0-12.944zM13 6V3.272A4.533 4.533 0 0 1 15.54 6zm2.935 1a16.827 16.827 0 0 1 .853 5H13V7zM12 3.272V6H9.46A4.533 4.533 0 0 1 12 3.272zM12 7v5H8.212a16.827 16.827 0 0 1 .853-5zm-4.787 5H3.226a9.234 9.234 0 0 1 1.792-5h2.984a17.952 17.952 0 0 0-.79 5zm0 1a17.952 17.952 0 0 0 .789 5H5.018a9.234 9.234 0 0 1-1.792-5zm1 0H12v5H9.065a16.827 16.827 0 0 1-.853-5zM12 19v2.728A4.533 4.533 0 0 1 9.46 19zm1 2.728V19h2.54A4.533 4.533 0 0 1 13 21.728zM13 18v-5h3.788a16.827 16.827 0 0 1-.853 5zm4.787-5h3.987a9.234 9.234 0 0 1-1.792 5h-2.984a17.952 17.952 0 0 0 .79-5zm0-1a17.952 17.952 0 0 0-.789-5h2.984a9.234 9.234 0 0 1 1.792 5zm1.352-6h-2.501a8.524 8.524 0 0 0-1.441-2.398A9.306 9.306 0 0 1 19.139 6zM9.803 3.602A8.524 8.524 0 0 0 8.363 6H5.86a9.306 9.306 0 0 1 3.942-2.398zM5.861 19h2.501a8.524 8.524 0 0 0 1.441 2.398A9.306 9.306 0 0 1 5.861 19zm9.336 2.398A8.524 8.524 0 0 0 16.637 19h2.502a9.306 9.306 0 0 1-3.942 2.398z"></path><path fill="none" d="M0 0h24v24H0z"></path></g></svg>
                                            @break
                                        @case('twitter')
                                            <svg width="30px" height="30px" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="24" cy="24" r="20" fill="#1DA1F2"></circle> <path fill-rule="evenodd" clip-rule="evenodd" d="M36 16.3086C35.1177 16.7006 34.1681 16.9646 33.1722 17.0838C34.1889 16.4742 34.9697 15.5095 35.3368 14.36C34.3865 14.9247 33.3314 15.3335 32.2107 15.5551C31.3123 14.5984 30.0316 14 28.6165 14C25.8975 14 23.6928 16.2047 23.6928 18.9237C23.6928 19.3092 23.7368 19.6852 23.8208 20.046C19.7283 19.8412 16.1005 17.8805 13.6719 14.9015C13.2479 15.6287 13.0055 16.4742 13.0055 17.3766C13.0055 19.0845 13.8735 20.5916 15.1958 21.4747C14.3878 21.4491 13.6295 21.2275 12.9647 20.8587V20.9203C12.9647 23.3066 14.663 25.296 16.9141 25.7496C16.5013 25.8616 16.0661 25.9224 15.6174 25.9224C15.2998 25.9224 14.991 25.8912 14.6902 25.8336C15.3166 27.7895 17.1357 29.2134 19.2899 29.2534C17.6052 30.5733 15.4822 31.3612 13.1751 31.3612C12.7767 31.3612 12.3848 31.338 12 31.2916C14.1791 32.6884 16.7669 33.5043 19.5475 33.5043C28.6037 33.5043 33.5562 26.0016 33.5562 19.4956C33.5562 19.282 33.5522 19.0693 33.5418 18.8589C34.5049 18.1629 35.34 17.2958 36 16.3086Z" fill="white"></path> </g></svg>
                                            @break
                                        @case('facebook')
                                            <svg width="30px" height="30px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#1877F2" d="M15 8a7 7 0 00-7-7 7 7 0 00-1.094 13.915v-4.892H5.13V8h1.777V6.458c0-1.754 1.045-2.724 2.644-2.724.766 0 1.567.137 1.567.137v1.723h-.883c-.87 0-1.14.54-1.14 1.093V8h1.941l-.31 2.023H9.094v4.892A7.001 7.001 0 0015 8z"></path><path fill="#ffffff" d="M10.725 10.023L11.035 8H9.094V6.687c0-.553.27-1.093 1.14-1.093h.883V3.87s-.801-.137-1.567-.137c-1.6 0-2.644.97-2.644 2.724V8H5.13v2.023h1.777v4.892a7.037 7.037 0 002.188 0v-4.892h1.63z"></path></g></svg>
                                            @break
                                        @case('instagram')
                                            <svg width="30px" height="30px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint0_radial_87_7153)"></rect> <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint1_radial_87_7153)"></rect> <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint2_radial_87_7153)"></rect> <path d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z" fill="white"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z" fill="white"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z" fill="white"></path> <defs> <radialGradient id="paint0_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)"> <stop stop-color="#B13589"></stop> <stop offset="0.79309" stop-color="#C62F94"></stop> <stop offset="1" stop-color="#8A3AC8"></stop> </radialGradient> <radialGradient id="paint1_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)"> <stop stop-color="#E0E8B7"></stop> <stop offset="0.444662" stop-color="#FB8A2E"></stop> <stop offset="0.71474" stop-color="#E2425C"></stop> <stop offset="1" stop-color="#E2425C" stop-opacity="0"></stop> </radialGradient> <radialGradient id="paint2_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)"> <stop offset="0.156701" stop-color="#406ADC"></stop> <stop offset="0.467799" stop-color="#6A45BE"></stop> <stop offset="1" stop-color="#6A45BE" stop-opacity="0"></stop> </radialGradient> </defs> </g></svg>
                                            @break
                                    @endswitch
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
                <div class="flex items-center justify-between pb-5">
                    <h1 class="font-medium">Would you like to change your informations?</h1>
                    <a href="{{ route('teacher.update') }}" class="font-semibold text-[#1275B1]">Upadte</a>
                </div>
            </section>
        </section>
    </body>
</html>