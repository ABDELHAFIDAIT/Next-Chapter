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
    <body>

        <header class="px-20">
            <!-- Navigation links -->
            <nav class="flex items-center justify-between py-10">
                <a href="{{ route('prisonner.index') }}"><img src="{{ asset('storage/images/logo-black.png') }}" class="w-16"></a>
                <ul class="flex items-center gap-10">
                    <a href="{{ route('prisonner.index') }}"><li>Home</li></a>
                    <a href="{{ route('prisonner.courses') }}"><li>Courses</li></a>
                    <a href="#"><li>Jobs</li></a>
                </ul>
                <div id="toggle-menu" class="flex items-center gap-5 p-1 border border-gray-400 rounded-full cursor-pointer">
                    <img src="{{ asset('storage/'.Auth::user()->photo) }}" class="w-10 rounded-full">
                    <svg width="24px" height="24px" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg" fill="none"
                        stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-chevron-down"><polyline
                            points="6 9 12 15 18 9"></polyline></svg>
                </div>
                <div id="menu"
                    class="absolute hidden bg-[#222] text-sm flex flex-col w-42 text-white rounded-sm top-[90px] right-[80px]">
                    <a href="dashboard.html"
                        class="px-5 flex items-center gap-2 hover:bg-[#D6FF40] hover:text-[#222222] rounded-t-sm py-3 border-b border-b-[#303030] transition-all ease-in-out duration-300">
                        <svg width="16px" height="16px" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" fill="none"
                            stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-grid"><rect x="3" y="3"
                                width="7" height="7"></rect><rect x="14" y="3"
                                width="7" height="7"></rect><rect x="14" y="14"
                                width="7" height="7"></rect><rect x="3" y="14"
                                width="7" height="7"></rect></svg>
                        <span>Dashboard</span>
                    </a>
                    <a href="{{ route('prisonner.profile') }}"
                        class="px-5 flex items-center gap-2 hover:bg-[#D6FF40] hover:text-[#222222] py-3 border-b border-b-[#303030] transition-all ease-in-out duration-300">
                        <svg width="16px" height="16px" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" fill="none"
                            stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-user"><path
                                d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle
                                cx="12" cy="7" r="4"></circle></svg>
                        <span>Profile</span>
                    </a>
                    <form method="post" action="{{ route('logout') }}"
                        class="px-5 hover:bg-[#D6FF40] hover:text-[#222222] py-3 transition-all ease-in-out duration-300 rounded-b-sm cursor-pointer">
                        @csrf
                        <button class="cursor-pointer flex items-center gap-2">
                            <svg width="16px" height="16px" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-log-out"><path
                                    d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline
                                    points="16 17 21 12 16 7"></polyline><line
                                    x1="21" y1="12" x2="9" y2="12"></line></svg>
                            <span>Logout</span>
                        </button>
                    </form>
                </div>
            </nav>

            @yield('hero')
        </header>

        <main>
            @yield('main')
        </main>

        <!-- Footer -->
        <footer class="relative bg-[#222222] px-20 py-14 grid grid-cols-5 gap-y-24">
            <div class="col-span-2 flex flex-col gap-3">
                <img src="{{ asset('storage/images/logo-white.png') }}" alt="Logo White de Next Chapter" class="w-1/4">
                <p class="text-white text-sm font-light">Every Journey Starts with a First Step</p>
                <span class="text-[#FFE500] text-sm font-light">Take Yours Now!</span>
            </div>
            <div class="text-white flex flex-col gap-5">
                <h1 class="font-medium text-lg">PAGES</h1>
                <ul class="text-sm font-light flex flex-col gap-5">
                    <a href="{{ route('home') }}"><li>Home</li></a>
                    <a href="#"><li>About Us</li></a>
                    <a href="#"><li>Services</li></a>
                    <a href="#"><li>Blog</li></a>
                    <a href="#"><li>Contact</li></a>
                </ul>
            </div>
            <div class="text-white flex flex-col gap-5">
                <h1 class="font-medium text-lg">SUPPORT</h1>
                <ul class="text-sm font-light flex flex-col gap-5">
                    <a href="#"><li>Help</li></a>
                    <a href="#"><li>Feedbacks</li></a>
                    <a href="#"><li>Licence</li></a>
                    <a href="#"><li>Terms & Conditions</li></a>
                    <a href="#"><li>Privacy Policy</li></a>
                </ul>
            </div>
            <div class="text-white flex flex-col gap-5">
                <h1 class="font-medium text-lg">CONTACT INFOS</h1>
                <ul class="flex flex-col gap-5">
                    <li class="flex items-center gap-3">
                        <svg width="14px" height="14px" viewBox="0 0 15 15" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>call [#ffffff]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-103.000000, -7321.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M61.7302966,7173.99596 C61.2672966,7175.40296 59.4532966,7176.10496 58.1572966,7175.98796 C56.3872966,7175.82796 54.4612966,7174.88896 52.9992966,7173.85496 C50.8502966,7172.33496 48.8372966,7169.98396 47.6642966,7167.48896 C46.8352966,7165.72596 46.6492966,7163.55796 47.8822966,7161.95096 C48.3382966,7161.35696 48.8312966,7161.03996 49.5722966,7161.00296 C50.6002966,7160.95296 50.7442966,7161.54096 51.0972966,7162.45696 C51.3602966,7163.14196 51.7112966,7163.84096 51.9072966,7164.55096 C52.2742966,7165.87596 50.9912966,7165.93096 50.8292966,7167.01396 C50.7282966,7167.69696 51.5562966,7168.61296 51.9302966,7169.09996 C52.6632966,7170.05396 53.5442966,7170.87696 54.5382966,7171.50296 C55.1072966,7171.86196 56.0262966,7172.50896 56.6782966,7172.15196 C57.6822966,7171.60196 57.5872966,7169.90896 58.9912966,7170.48196 C59.7182966,7170.77796 60.4222966,7171.20496 61.1162966,7171.57896 C62.1892966,7172.15596 62.1392966,7172.75396 61.7302966,7173.99596 C61.4242966,7174.92396 62.0362966,7173.06796 61.7302966,7173.99596" id="call-[#ffffff]"> </path> </g> </g> </g> </g></svg>
                        <a href="tel:+212 504658800" class="font-light text-sm">+212 504658800</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg fill="#ffffff" height="14px" width="14px" version="1.1" id="Filled_Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="mail-filled"> <path d="M24,5.7V21H0V5.7l12,10L24,5.7z M12,13l12-9.9V3H0v0.1L12,13z"></path> </g> </g></svg>
                        <a href="tel:+212 504658800" class="font-light text-sm">next-chapter@contact.com</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg width="14px" height="14px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M3.37892 10.2236L8 16L12.6211 10.2236C13.5137 9.10788 14 7.72154 14 6.29266V6C14 2.68629 11.3137 0 8 0C4.68629 0 2 2.68629 2 6V6.29266C2 7.72154 2.4863 9.10788 3.37892 10.2236ZM8 8C9.10457 8 10 7.10457 10 6C10 4.89543 9.10457 4 8 4C6.89543 4 6 4.89543 6 6C6 7.10457 6.89543 8 8 8Z" fill="#ffffff"></path> </g></svg>
                        <a href="https://maps.app.goo.gl/fB78cjaLP5da3k526" class="font-light text-sm">Safi, Morocco</a>
                    </li>
                </ul>
            </div>
            <div class="col-span-2 flex items-center gap-10">
                <svg width="20px" height="20px" viewBox="-5 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>facebook [#ffffff]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-385.000000, -7399.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M335.821282,7259 L335.821282,7250 L338.553693,7250 L339,7246 L335.821282,7246 L335.821282,7244.052 C335.821282,7243.022 335.847593,7242 337.286884,7242 L338.744689,7242 L338.744689,7239.14 C338.744689,7239.097 337.492497,7239 336.225687,7239 C333.580004,7239 331.923407,7240.657 331.923407,7243.7 L331.923407,7246 L329,7246 L329,7250 L331.923407,7250 L331.923407,7259 L335.821282,7259 Z" id="facebook-[#ffffff]"> </path> </g> </g> </g> </g></svg>
                <svg width="20px" height="20px" viewBox="0 -2 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>twitter [#ffffff]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-60.000000, -7521.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M10.29,7377 C17.837,7377 21.965,7370.84365 21.965,7365.50546 C21.965,7365.33021 21.965,7365.15595 21.953,7364.98267 C22.756,7364.41163 23.449,7363.70276 24,7362.8915 C23.252,7363.21837 22.457,7363.433 21.644,7363.52751 C22.5,7363.02244 23.141,7362.2289 23.448,7361.2926 C22.642,7361.76321 21.761,7362.095 20.842,7362.27321 C19.288,7360.64674 16.689,7360.56798 15.036,7362.09796 C13.971,7363.08447 13.518,7364.55538 13.849,7365.95835 C10.55,7365.79492 7.476,7364.261 5.392,7361.73762 C4.303,7363.58363 4.86,7365.94457 6.663,7367.12996 C6.01,7367.11125 5.371,7366.93797 4.8,7366.62489 L4.8,7366.67608 C4.801,7368.5989 6.178,7370.2549 8.092,7370.63591 C7.488,7370.79836 6.854,7370.82199 6.24,7370.70483 C6.777,7372.35099 8.318,7373.47829 10.073,7373.51078 C8.62,7374.63513 6.825,7375.24554 4.977,7375.24358 C4.651,7375.24259 4.325,7375.22388 4,7375.18549 C5.877,7376.37088 8.06,7377 10.29,7376.99705" id="twitter-[#ffffff]"> </path> </g> </g> </g> </g></svg>
                <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>linkedin [#ffffff]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-180.000000, -7479.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M144,7339 L140,7339 L140,7332.001 C140,7330.081 139.153,7329.01 137.634,7329.01 C135.981,7329.01 135,7330.126 135,7332.001 L135,7339 L131,7339 L131,7326 L135,7326 L135,7327.462 C135,7327.462 136.255,7325.26 139.083,7325.26 C141.912,7325.26 144,7326.986 144,7330.558 L144,7339 L144,7339 Z M126.442,7323.921 C125.093,7323.921 124,7322.819 124,7321.46 C124,7320.102 125.093,7319 126.442,7319 C127.79,7319 128.883,7320.102 128.883,7321.46 C128.884,7322.819 127.79,7323.921 126.442,7323.921 L126.442,7323.921 Z M124,7339 L129,7339 L129,7326 L124,7326 L124,7339 Z" id="linkedin-[#ffffff]"> </path> </g> </g> </g> </g></svg>
                <svg width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>instagram [#167]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -7439.000000)" fill="#ffffff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M289.869652,7279.12273 C288.241769,7279.19618 286.830805,7279.5942 285.691486,7280.72871 C284.548187,7281.86918 284.155147,7283.28558 284.081514,7284.89653 C284.035742,7285.90201 283.768077,7293.49818 284.544207,7295.49028 C285.067597,7296.83422 286.098457,7297.86749 287.454694,7298.39256 C288.087538,7298.63872 288.809936,7298.80547 289.869652,7298.85411 C298.730467,7299.25511 302.015089,7299.03674 303.400182,7295.49028 C303.645956,7294.859 303.815113,7294.1374 303.86188,7293.08031 C304.26686,7284.19677 303.796207,7282.27117 302.251908,7280.72871 C301.027016,7279.50685 299.5862,7278.67508 289.869652,7279.12273 M289.951245,7297.06748 C288.981083,7297.0238 288.454707,7296.86201 288.103459,7296.72603 C287.219865,7296.3826 286.556174,7295.72155 286.214876,7294.84312 C285.623823,7293.32944 285.819846,7286.14023 285.872583,7284.97693 C285.924325,7283.83745 286.155174,7282.79624 286.959165,7281.99226 C287.954203,7280.99968 289.239792,7280.51332 297.993144,7280.90837 C299.135448,7280.95998 300.179243,7281.19026 300.985224,7281.99226 C301.980262,7282.98483 302.473801,7284.28014 302.071806,7292.99991 C302.028024,7293.96767 301.865833,7294.49274 301.729513,7294.84312 C300.829003,7297.15085 298.757333,7297.47145 289.951245,7297.06748 M298.089663,7283.68956 C298.089663,7284.34665 298.623998,7284.88065 299.283709,7284.88065 C299.943419,7284.88065 300.47875,7284.34665 300.47875,7283.68956 C300.47875,7283.03248 299.943419,7282.49847 299.283709,7282.49847 C298.623998,7282.49847 298.089663,7283.03248 298.089663,7283.68956 M288.862673,7288.98792 C288.862673,7291.80286 291.150266,7294.08479 293.972194,7294.08479 C296.794123,7294.08479 299.081716,7291.80286 299.081716,7288.98792 C299.081716,7286.17298 296.794123,7283.89205 293.972194,7283.89205 C291.150266,7283.89205 288.862673,7286.17298 288.862673,7288.98792 M290.655732,7288.98792 C290.655732,7287.16159 292.140329,7285.67967 293.972194,7285.67967 C295.80406,7285.67967 297.288657,7287.16159 297.288657,7288.98792 C297.288657,7290.81525 295.80406,7292.29716 293.972194,7292.29716 C292.140329,7292.29716 290.655732,7290.81525 290.655732,7288.98792" id="instagram-[#167]"> </path> </g> </g> </g> </g></svg>
            </div>
            <div class="col-span-2">
                <p class="text-sm font-extralight text-white">NEXT CHAPTER 2025 © All Rights Reserved</p>
            </div>
            <div class="flex justify-end">
                <svg fill="#FFFFFF" width="16px" height="16px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="m24 12c0-.002 0-.004 0-.006 0-3.551-1.546-6.74-4.001-8.933l-.012-.01c-.031-.033-.064-.062-.101-.087l-.002-.001c-2.095-1.84-4.859-2.962-7.886-2.962-3.032 0-5.8 1.126-7.91 2.984l.013-.011c-.026.02-.049.041-.07.065v.001c-2.478 2.205-4.031 5.403-4.031 8.963 0 3.55 1.544 6.739 3.997 8.933l.012.01c0 .003.002.005.005.005.031.035.065.065.101.092l.002.001c2.094 1.837 4.857 2.958 7.881 2.958 3.032 0 5.801-1.126 7.911-2.984l-.013.011c.03-.022.056-.045.08-.07 2.475-2.202 4.026-5.395 4.026-8.951 0-.002 0-.005 0-.007zm-4.462 7.805c-.576-.468-1.223-.897-1.909-1.262l-.065-.032c.613-1.767.982-3.804 1.017-5.923v-.016h4.261c-.156 2.852-1.391 5.388-3.301 7.23zm-6.966-1.505c1.283.069 2.482.351 3.588.81l-.072-.026c-.886 2.02-2.133 3.408-3.516 3.713zm0-1.144v-4.584h4.868c-.043 1.961-.383 3.828-.976 5.578l.039-.131c-1.157-.484-2.498-.795-3.903-.862l-.027-.001zm0-5.728v-4.584c1.431-.069 2.772-.379 4.007-.891l-.079.029c.555 1.619.896 3.485.94 5.425v.021zm0-5.728v-4.495c1.383.305 2.63 1.687 3.516 3.713-1.034.43-2.233.711-3.487.781zm2.854-4c1.238.419 2.312 1.009 3.258 1.752l-.023-.018c-.443.348-.94.676-1.464.961l-.056.028c-.449-1.047-1.025-1.947-1.724-2.737l.009.011zm-4-.492v4.492c-1.283-.069-2.482-.35-3.588-.81l.072.026c.89-2.02 2.135-3.407 3.518-3.712zm-4.568 3.212c-.58-.315-1.077-.642-1.544-1.007l.024.018c.923-.726 1.996-1.315 3.158-1.712l.076-.023c-.689.778-1.265 1.678-1.689 2.658l-.025.065zm4.57 2.423v4.584h-4.868c.044-1.961.385-3.827.979-5.577l-.039.131c1.156.483 2.497.794 3.901.861zm0 5.728v4.584c-1.431.069-2.772.379-4.007.891l.079-.029c-.555-1.618-.896-3.485-.94-5.425v-.021zm0 5.728v4.495c-1.383-.305-2.63-1.687-3.516-3.713 1.034-.43 2.233-.71 3.487-.78l.029-.001zm-2.85 4c-1.238-.418-2.311-1.006-3.258-1.748l.024.018c.443-.348.94-.676 1.464-.961l.056-.028c.445 1.047 1.022 1.947 1.723 2.733l-.009-.01zm8.564-2.72c.58.315 1.077.642 1.544 1.007l-.024-.018c-.923.726-1.996 1.315-3.158 1.712l-.076.023c.689-.778 1.265-1.677 1.689-2.657l.025-.065zm5.7-8.151h-4.261c-.035-2.135-.404-4.172-1.058-6.078l.041.138c.751-.399 1.397-.828 1.997-1.312l-.024.018c1.913 1.845 3.148 4.381 3.303 7.205l.001.028zm-18.38-7.233c.576.468 1.223.897 1.909 1.262l.065.032c-.613 1.767-.982 3.804-1.017 5.923v.016h-4.262c.156-2.852 1.391-5.388 3.301-7.23l.003-.003zm-3.304 8.377h4.261c.035 2.135.404 4.172 1.058 6.078l-.041-.138c-.751.399-1.397.828-1.997 1.312l.024-.018c-1.913-1.845-3.148-4.381-3.303-7.205l-.001-.028z"></path></g></svg>
            </div>
            <div class="absolute h-14 w-20 bg-[#D6FF40] bottom-36 right-0"></div>
        </footer>
    </body>
</html>