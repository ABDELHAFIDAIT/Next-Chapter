@extends('layouts.app')


@section('main')
    <main class="p-20 grid grid-cols-2 gap-10">
        <section class="flex flex-col gap-10">
            <!-- Map Card -->
            <div class="flex flex-col gap-5">
                <h1 class="col-span-2 text-2xl font-medium">Contact Informations</h1>
                <iframe class="w-full h-[300px] rounded-md"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26461.924737328645!2d-6.8669894050104405!3d33.99919626263372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76c8f7837968b%3A0x6eb7a868063bb38b!2sAgdal-Ryad%2C%20Rabat!5e0!3m2!1sen!2sma!4v1745425544885!5m2!1sen!2sma"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!-- Contact Informations -->
            <div class="grid grid-cols-7 gap-2">
                <div class="col-span-6 flex flex-col gap-5">
                    <div class="flex items-center gap-3">
                        <svg fill="#222" height="35px" width="45px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                            <path
                                d="M256,0C149.3,0,64,85.3,64,192c0,36.9,11,65.4,30.1,94.3l141.7,215v0c4.3,6.5,11.7,10.7,20.2,10.7c8.5,0,16-4.3,20.2-10.7
                                        l141.7-215C437,257.4,448,228.9,448,192C448,85.3,362.7,0,256,0z M256,298.6c-58.9,0-106.7-47.8-106.7-106.8
                                        c0-59,47.8-106.8,106.7-106.8c58.9,0,106.7,47.8,106.7,106.8C362.7,250.8,314.9,298.6,256,298.6z" />
                        </svg>
                        <div class="flex flex-col gap-2">
                            <span class="font-medium text-lg">Email</span>
                            <span class="text-sm font-light">123 Business Avenue, Suite 100 New York, NY 10001</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg fill="#222" width="45px" height="45px" viewBox="-4 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>mail</title>
                            <path
                                d="M24 8.375l-12 10.281-12-10.281v-0.594h24v0.594zM24 22.875l-7.938-5.719 7.938-6.875v12.594zM0 10.281l7.938 6.875-7.938 5.719v-12.594zM12 20.688l3.281-2.875 8.719 6.281v0.125h-24v-0.125l8.719-6.281z">
                            </path>
                        </svg>
                        <div class="flex flex-col gap-2">
                            <span class="font-medium text-lg">Address</span>
                            <span class="text-sm font-light">next-chapter@contact.com</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <svg version="1.1"id="svg2" xmlns:dc="http://purl.org/dc/elements/1.1/"
                            xmlns:cc="http://creativecommons.org/ns#"
                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg"
                            xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                            xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" sodipodi:docname="phone.svg"
                            inkscape:version="0.48.4 r9939"xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="45px" height="30px"viewBox="0 0 1200 1200"
                            enable-background="new 0 0 1200 1200" xml:space="preserve">
                            <path id="path16102" inkscape:connector-curvature="0" d="M1183.326,997.842l-169.187,167.83
                                    c-24.974,25.612-58.077,34.289-90.316,34.328c-142.571-4.271-277.333-74.304-387.981-146.215
                                    C354.22,921.655,187.574,757.82,82.984,559.832C42.87,476.809-4.198,370.878,0.299,278.209c0.401-34.86,9.795-69.073,34.346-91.543
                                    L203.831,17.565c35.132-29.883,69.107-19.551,91.589,15.257l136.111,258.102c14.326,30.577,6.108,63.339-15.266,85.188l-62.332,62.3
                                    c-3.848,5.271-6.298,11.271-6.36,17.801c23.902,92.522,96.313,177.799,160.281,236.486
                                    c63.967,58.688,132.725,138.198,221.977,157.021c11.032,3.077,24.545,4.158,32.438-3.179l72.51-73.743
                                    c24.996-18.945,61.086-28.205,87.771-12.714h1.272l245.51,144.943C1205.373,927.619,1209.131,971.279,1183.326,997.842
                                    L1183.326,997.842z" />
                        </svg>
                        <div class="flex flex-col gap-2">
                            <span class="font-medium text-lg">Phone</span>
                            <span class="text-sm font-light">+1 (555) 123-4567</span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-center gap-5">
                    <a href="#">
                        <svg width="25px" height="25px" viewBox="0 0 48 48" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="24" cy="24" r="20" fill="#222" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M18.7747 14.2839C18.7747 15.529 17.8267 16.5366 16.3442 16.5366C14.9194 16.5366 13.9713 15.529 14.0007 14.2839C13.9713 12.9783 14.9193 12 16.3726 12C17.8267 12 18.7463 12.9783 18.7747 14.2839ZM14.1199 32.8191V18.3162H18.6271V32.8181H14.1199V32.8191Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M22.2393 22.9446C22.2393 21.1357 22.1797 19.5935 22.1201 18.3182H26.0351L26.2432 20.305H26.3322C26.9254 19.3854 28.4079 17.9927 30.8101 17.9927C33.7752 17.9927 35.9995 19.9502 35.9995 24.219V32.821H31.4922V24.7838C31.4922 22.9144 30.8404 21.6399 29.2093 21.6399C27.9633 21.6399 27.2224 22.4999 26.9263 23.3297C26.8071 23.6268 26.7484 24.0412 26.7484 24.4574V32.821H22.2411V22.9446H22.2393Z"
                                fill="white" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="20px" height="20px" viewBox="0 0 2500 2500" xmlns="http://www.w3.org/2000/svg"
                            fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <defs>
                                    <radialGradient id="0" cx="332.14" cy="2511.81" r="3263.54"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset=".09" stop-color="#222"></stop>
                                        <stop offset=".78" stop-color="#222"></stop>
                                    </radialGradient>
                                    <radialGradient id="1" cx="1516.14" cy="2623.81" r="2572.12"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset=".64" stop-color="#222" stop-opacity="0"></stop>
                                        <stop offset="1" stop-color="#222"></stop>
                                    </radialGradient>
                                </defs>
                                <path
                                    d="M833.4,1250c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7S833.4,1480.11,833.4,1250m-225.26,0c0,354.5,287.36,641.86,641.86,641.86S1891.86,1604.5,1891.86,1250,1604.5,608.14,1250,608.14,608.14,895.5,608.14,1250M1767.27,582.69a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M745,2267.47c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27s373.28,1.31,505.15,7.27c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M734.65,7.57c-133.07,6.06-224,27.16-303.41,58.06C349,97.54,279.38,140.35,209.81,209.81S97.54,349,65.63,431.24c-30.9,79.46-52,170.34-58.06,303.41C1.41,867.93,0,910.54,0,1250s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43S349,2402.37,431.24,2434.37c79.56,30.9,170.34,52,303.41,58.06C868,2498.49,910.54,2500,1250,2500s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2150.95,97.54,2068.86,65.63c-79.56-30.9-170.44-52.1-303.41-58.06C1632.17,1.51,1589.56,0,1250.1,0S868,1.41,734.65,7.57"
                                    fill="url(#0)"></path>
                                <path
                                    d="M833.4,1250c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7S833.4,1480.11,833.4,1250m-225.26,0c0,354.5,287.36,641.86,641.86,641.86S1891.86,1604.5,1891.86,1250,1604.5,608.14,1250,608.14,608.14,895.5,608.14,1250M1767.27,582.69a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M745,2267.47c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27s373.28,1.31,505.15,7.27c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M734.65,7.57c-133.07,6.06-224,27.16-303.41,58.06C349,97.54,279.38,140.35,209.81,209.81S97.54,349,65.63,431.24c-30.9,79.46-52,170.34-58.06,303.41C1.41,867.93,0,910.54,0,1250s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43S349,2402.37,431.24,2434.37c79.56,30.9,170.34,52,303.41,58.06C868,2498.49,910.54,2500,1250,2500s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2150.95,97.54,2068.86,65.63c-79.56-30.9-170.44-52.1-303.41-58.06C1632.17,1.51,1589.56,0,1250.1,0S868,1.41,734.65,7.57"
                                    fill="url(#1)">
                                </path>
                            </g>
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="25px" height="25px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                            fill="none">
                            <path fill="#222"
                                d="M15 8a7 7 0 00-7-7 7 7 0 00-1.094 13.915v-4.892H5.13V8h1.777V6.458c0-1.754 1.045-2.724 2.644-2.724.766 0 1.567.137 1.567.137v1.723h-.883c-.87 0-1.14.54-1.14 1.093V8h1.941l-.31 2.023H9.094v4.892A7.001 7.001 0 0015 8z" />
                            <path fill="#ffffff"
                                d="M10.725 10.023L11.035 8H9.094V6.687c0-.553.27-1.093 1.14-1.093h.883V3.87s-.801-.137-1.567-.137c-1.6 0-2.644.97-2.644 2.724V8H5.13v2.023h1.777v4.892a7.037 7.037 0 002.188 0v-4.892h1.63z" />
                        </svg>
                    </a>
                    <a href="#">
                        <svg width="25px" height="25px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.032 14.286c6.037 0 9.34-4.837 9.34-9.032 0-.137 0-.274-.01-.41A6.56 6.56 0 0016 3.2c-.6.256-1.235.425-1.885.5a3.207 3.207 0 001.443-1.757c-.645.37-1.35.63-2.085.77a3.322 3.322 0 00-1.862-.958 3.384 3.384 0 00-2.082.334 3.223 3.223 0 00-1.442 1.49 3.08 3.08 0 00-.208 2.03 9.57 9.57 0 01-3.747-.963 9.269 9.269 0 01-3.018-2.354 3.086 3.086 0 00-.36 2.314c.189.787.68 1.475 1.376 1.924a3.344 3.344 0 01-1.49-.398v.04c0 .734.263 1.444.743 2.01a3.3 3.3 0 001.89 1.102c-.483.128-.99.146-1.482.055a3.19 3.19 0 001.168 1.577 3.36 3.36 0 001.9.627A6.732 6.732 0 010 12.86a9.527 9.527 0 005.032 1.423"
                                fill="#222" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        <section class="flex flex-col gap-5">
            <h1 class="text-2xl font-medium">Get in Touch</h1>
            <form method="POST" action="{{ route('contact') }}" class="flex flex-col gap-3">
                @csrf
                <div class="flex items-center gap-5">
                    <div class="flex flex-col gap-1 flex-1">
                        <label class="pl-3 text-sm" for="f_name">First Name</label>
                        @error('f_name')
                            <span class="text-xs text-red-500 pl-3">
                                {{$message}}
                            </span>
                        @enderror
                        <input required
                            class="text-sm bg-white text-black px-5 py-2 rounded-md border border-gray-200 outline-none focus:border-black"
                            type="text" id="f_name" name="f_name" placeholder="Enter Your First Name">
                    </div>
                    <div class="flex flex-col gap-1 flex-1">
                        <label class="pl-3 text-sm" for="l_name">Last Name</label>
                        @error('l_name')
                            <span class="text-xs text-red-500 pl-3">
                                {{$message}}
                            </span>
                        @enderror
                        <input required
                            class="text-sm bg-white text-black px-5 py-2 rounded-md border border-gray-200 outline-none focus:border-black"
                            type="text" id="l_name" name="l_name" placeholder="Enter Your Last Name">
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="pl-3 text-sm" for="email">Email Adress</label>
                    @error('email')
                        <span class="text-xs text-red-500 pl-3">
                            {{$message}}
                        </span>
                    @enderror
                    <input required
                        class="text-sm bg-white text-black px-5 py-2 rounded-md border border-gray-200 outline-none focus:border-black"
                        type="text" id="email" name="email" placeholder="Enter Your Email Adress">
                </div>
                <div class="flex flex-col gap-1">
                    <label class="pl-3 text-sm" for="phone">Phone Number</label>
                    @error('phone')
                        <span class="text-xs text-red-500 pl-3">
                            {{$message}}
                        </span>
                    @enderror
                    <input required
                        class="text-sm bg-white text-black px-5 py-2 rounded-md border border-gray-200 outline-none focus:border-black"
                        type="text" id="phone" name="phone" placeholder="Enter Your Phone Number">
                </div>
                <div class="flex flex-col gap-1">
                    <label class="pl-3 text-sm" for="profession">Profession</label>
                    <select
                        class="text-sm bg-white text-black px-5 py-2 rounded-md border border-gray-200 outline-none focus:border-black"
                        type="text" id="profession" name="profession">
                        <option>Ex-Prisonner</option>
                        <option>Teacher</option>
                        <option>Recruiter</option>
                    </select>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="pl-3 text-sm" for="message">Message</label>
                    @error('message')
                        <span class="text-xs text-red-500 pl-3">
                            {{$message}}
                        </span>
                    @enderror
                    <textarea required
                        class="h-40 text-sm bg-white text-black px-5 py-2 rounded-md border border-gray-200 outline-none focus:border-black"
                        type="text" id="message" name="message" placeholder="Enter Your Message Here"></textarea>
                </div>
                <div class="mt-3">
                    <button
                        class="cursor-pointer bg-[#D6FF40] py-2 text-sm w-full font-medium rounded-md transition-all ease-in-out duration-300 hover:bg-[#222] hover:text-white">Send
                        Message</button>
                </div>
            </form>
        </section>
    </main>
@endsection
