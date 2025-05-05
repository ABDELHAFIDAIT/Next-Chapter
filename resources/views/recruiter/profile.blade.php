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
                <a href="{{ route('recruiter.offers') }}" class="flex justify-center w-full py-2 text-white transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-[#222] rounded-none">
                    <svg fill="currentColor" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 201.917 201.917" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M104.809,175.836c0-2.052,1.65-3.708,3.702-3.708h12.732c5.353,3.593,11.399,6.083,17.823,7.246 c-0.269,0.062-0.512,0.158-0.792,0.158h-29.764C106.459,179.539,104.809,177.876,104.809,175.836z M95.76,146.2h6.597 c-0.7-2.436-1.212-4.901-1.504-7.41H95.76c-2.046,0-3.706,1.662-3.706,3.708S93.714,146.2,95.76,146.2z M68.499,52.632 c-4.545-3.054-7.675-9.104-7.675-14.541c0-7.676,6.217-13.905,13.898-13.905c7.681,0,13.898,6.229,13.898,13.905 c0,5.438-3.136,11.487-7.688,14.541c10.894,2.761,18.961,12.227,18.961,19.229c0,8.281-50.339,8.281-50.339,0 C49.55,64.858,57.624,55.399,68.499,52.632z M67.659,71.027l7.057,7.045l7.063-7.045l-5.94-14.355h0.055l2.308-2.637 c-1.124,0.393-2.265,0.636-3.486,0.636c-1.208,0-2.362-0.244-3.486-0.648l2.302,2.649h0.061L67.659,71.027z M160.688,193.836 l0.013-0.012l-0.177-0.311c-0.092,0-0.171,0.023-0.256,0.023H31.249c-6.67,0-12.096-5.425-12.096-12.093V20.152 c0-6.665,5.426-12.09,12.096-12.09h129.02c6.668,0,12.093,5.425,12.093,12.09v73.822c2.893,1.827,5.627,3.903,8.068,6.333V20.152 C180.43,9.036,171.388,0,160.269,0H31.249C20.127,0,11.084,9.036,11.084,20.152v161.292c0,11.112,9.042,20.149,20.164,20.149 h129.02c1.571,0,3.094-0.226,4.573-0.572L160.688,193.836z M53.249,129.315h47.511c0.225-2.479,0.636-4.95,1.26-7.411H53.255 c-2.046,0-3.699,1.656-3.699,3.703C49.55,127.665,51.203,129.315,53.249,129.315z M53.249,95.551h66.576 c1.315-0.956,2.686-1.86,4.116-2.688c3.63-2.095,7.526-3.672,11.552-4.728H53.249c-2.046,0-3.699,1.66-3.699,3.711 S51.203,95.551,53.249,95.551z M53.249,112.43h52.266c1.304-2.618,2.838-5.096,4.592-7.41H53.249c-2.046,0-3.699,1.662-3.699,3.708 S51.203,112.43,53.249,112.43z M179.803,114.684c10.327,17.89,4.177,40.857-13.725,51.173 c-17.884,10.321-40.847,4.201-51.174-13.713c-10.333-17.884-4.177-40.847,13.701-51.176 C146.507,90.637,169.476,96.784,179.803,114.684z M174.438,117.789c-8.629-14.931-27.791-20.064-42.716-11.461 c-14.937,8.635-20.082,27.773-11.436,42.723c8.61,14.93,27.767,20.075,42.703,11.453 C177.921,151.863,183.048,132.719,174.438,117.789z M175.504,163.555l-16.106,9.305l12.404,21.47l16.1-9.292L175.504,163.555z M189.582,187.96l-16.118,9.298c2.582,4.464,8.27,5.974,12.714,3.416C190.629,198.104,192.157,192.405,189.582,187.96z"></path> </g> </g></svg>
                </a>
                <a href="{{ route('recruiter.applications') }}" class="flex justify-center rounded-none py-2 flex-1 w-full text-white transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-[#222]">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 487 487" xml:space="preserve" width="30px" height="30px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path style="fill:currentColor;" d="M171.984,255.096c26.698,11.924,68.619,14.04,68.619,14.04c0.937,0.021,1.854,0.025,2.774,0.03 v0.003c0.041,0,0.082-0.001,0.123-0.001s0.084,0.001,0.125,0.001v-0.003c0.92-0.005,1.842-0.012,2.774-0.03 c0,0,41.92-2.116,68.617-14.041c0,0,3.815-0.896,3.938-9.646c0,0-1.373-38.339-12.982-55.576c0,0-2.909-4.467-11.15-7.54 c0,0-26.882-8.191-28.693-15.15c0,0-8.905,23.057-22.627,22.798c-13.721,0.259-22.628-22.797-22.628-22.797 c-1.812,6.959-28.692,15.15-28.692,15.15c-8.181,2.947-11.152,7.54-11.152,7.54c-11.609,17.236-12.982,55.575-12.982,55.575 C168.17,254.199,171.984,255.096,171.984,255.096z"></path> <path style="fill:currentColor;" d="M213.896,139.823c1.975,16.585,16.229,33.761,29.152,33.761c14.865,0,28.969-18.091,31.187-33.76 c0.813-0.58,2.22-2.025,2.688-5.291c0,0,3.154-11.335-1.06-10.124c1.507-4.355,6.351-21.408-3.032-31.99 c0,0-4.375-6.044-15.119-9.249c-0.428-0.295-0.771-0.61-1.221-0.926c0,0,0.243,0.295,0.527,0.753 c-0.568-0.143-1.2-0.285-1.832-0.438c-0.59-0.641-1.28-1.272-1.993-1.933c0,0,0.673,0.661,1.425,1.811 c-0.324-0.082-0.55-0.193-0.834-0.214c-0.471-0.763-1.078-1.496-1.854-2.249c0,0,0.326,0.57,0.773,1.485 c-2.035-1.445-5.976-4.792-5.976-8.526c0,0-2.515,1.15-3.918,3.256c-0.603-0.939-0.082-2.045-0.082-2.045 c-1.14,0.641-4.104,3.032-5.041,6.278l-0.85-1.15c-1.729-1.984-4.772-0.458-4.772-0.458s-15.688,6.787-20.236,20.859 c0,0-2.625,6.329,0.875,24.959c-4.996-2.351-1.588,9.9-1.588,9.9C211.646,137.819,213.001,139.264,213.896,139.823z"></path> <path style="fill:currentColor;" d="M351.355,19.76V0h-31.581v19.76H167.23V0h-31.563v19.76H69.732V487h347.535V19.76H351.355z M87.867,468.93V37.841h47.802v25.274h31.563V37.841h152.584v25.274h31.541V37.841h47.82l0.002,431.089H87.867z"></path> <rect x="129.797" y="407.922" style="fill:currentColor;" width="184.038" height="18.314"></rect> <rect x="129.768" y="300.658" style="fill:currentColor;" width="238.194" height="18.231"></rect> <rect x="129.769" y="337.309" style="fill:currentColor;" width="220.165" height="18.334"></rect> <rect x="129.769" y="372.92" style="fill:currentColor;" width="202.096" height="18.213"></rect> </g> </g> </g></svg>
                </a>
                <a href="{{ route('recruiter.profile') }}" class="flex justify-center bg-[#D6FF40] text-[#222] rounded-none py-2 flex-1 w-full">
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
        <section class="col-span-19 h-screen overflow-auto px-10">

        </section>
    </body>
</html>