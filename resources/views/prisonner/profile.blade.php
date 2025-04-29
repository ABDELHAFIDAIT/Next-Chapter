@extends('layouts.prisonner')

@section('main')
    <section class="py-10 px-20 flex items-center justify-between">
        <h1 class="text-2xl font-semibold">Welcome To Your Profile</h1>
        <a href="#" class="py-2 px-12 text-lg font-medium bg-[rgba(225,146,25,0.09)] text-[#E19219] rounded-md">Acess My Student Space</a>
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
                        <div class="flex items-center gap-2">
                            <svg fill="#000000" height="18px" width="18px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                            <path d="M256,0C149.3,0,64,85.3,64,192c0,36.9,11,65.4,30.1,94.3l141.7,215v0c4.3,6.5,11.7,10.7,20.2,10.7c8.5,0,16-4.3,20.2-10.7
                                l141.7-215C437,257.4,448,228.9,448,192C448,85.3,362.7,0,256,0z M256,298.6c-58.9,0-106.7-47.8-106.7-106.8
                                c0-59,47.8-106.8,106.7-106.8c58.9,0,106.7,47.8,106.7,106.8C362.7,250.8,314.9,298.6,256,298.6z"/>
                            </svg>
                            <p>{{ $prisonner->city->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-10 pb-5 px-10 border-b border-b-gray-400">
            <h1 class="font-medium text-lg">About </h1>
            <p class="col-span-2 font-light text-justify">{{ $prisonner->about }}</p>
        </div>
        <div class="grid grid-cols-3 gap-10 pb-5 px-10 border-b border-b-gray-400">
            <h1 class="font-medium text-lg">CV </h1>
            <a href="{{ asset('storage/'.$prisonner->cv) }}" download="{{ 'CV-'.Auth::user()->f_name.'-'.Auth::user()->l_name}}.pdf" class="col-span-2 font-light text-justify">CurriculumVitae.pdf</a>
        </div>
        <div class="grid grid-cols-3 gap-10 pb-5 px-10 border-b border-b-gray-400">
            <h1 class="font-medium text-lg">External Links </h1>
            <div class=" col-span-2 flex flex-col gap-5">
                <a href="https://www.linkedin.com/in/abdelhafid-ait-el-mokhtar-670491245/" class="flex items-center gap-5">
                    <svg fill="#0040ff" height="20px" width="20px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-143 145 512 512" xml:space="preserve" stroke="#0040ff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier"> 
                            <path d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M41.4,508.1H-8.5V348.4h49.9 V508.1z M15.1,328.4h-0.4c-18.1,0-29.8-12.2-29.8-27.7c0-15.8,12.1-27.7,30.5-27.7c18.4,0,29.7,11.9,30.1,27.7 C45.6,316.1,33.9,328.4,15.1,328.4z M241,508.1h-56.6v-82.6c0-21.6-8.8-36.4-28.3-36.4c-14.9,0-23.2,10-27,19.6 c-1.4,3.4-1.2,8.2-1.2,13.1v86.3H71.8c0,0,0.7-146.4,0-159.7h56.1v25.1c3.3-11,21.2-26.6,49.8-26.6c35.5,0,63.3,23,63.3,72.4V508.1z "></path> 
                        </g>
                    </svg>
                    <span>Abdelhafid AIT EL MOKHTAR</span>
                </a>
                <a href="https://github.com/ABDELHAFIDAIT" class="flex items-center gap-5">
                    <svg fill="#000000" width="22px" height="22px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="M12,2.2467A10.00042,10.00042,0,0,0,8.83752,21.73419c.5.08752.6875-.21247.6875-.475,0-.23749-.01251-1.025-.01251-1.86249C7,19.85919,6.35,18.78423,6.15,18.22173A3.636,3.636,0,0,0,5.125,16.8092c-.35-.1875-.85-.65-.01251-.66248A2.00117,2.00117,0,0,1,6.65,17.17169a2.13742,2.13742,0,0,0,2.91248.825A2.10376,2.10376,0,0,1,10.2,16.65923c-2.225-.25-4.55-1.11254-4.55-4.9375a3.89187,3.89187,0,0,1,1.025-2.6875,3.59373,3.59373,0,0,1,.1-2.65s.83747-.26251,2.75,1.025a9.42747,9.42747,0,0,1,5,0c1.91248-1.3,2.75-1.025,2.75-1.025a3.59323,3.59323,0,0,1,.1,2.65,3.869,3.869,0,0,1,1.025,2.6875c0,3.83747-2.33752,4.6875-4.5625,4.9375a2.36814,2.36814,0,0,1,.675,1.85c0,1.33752-.01251,2.41248-.01251,2.75,0,.26251.1875.575.6875.475A10.0053,10.0053,0,0,0,12,2.2467Z"/></svg>
                    <span>ABDELHAFIDAIT</span>
                </a>
            </div>
        </div>
        <div class="flex items-center justify-between pb-5">
            <h1 class="font-medium">Would you like to change your informations?</h1>
            <a href="{{ route('prisonner.update') }}" class="font-semibold text-[#1275B1]">Upadte</a>
        </div>
    </section>
@endsection