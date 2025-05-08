@extends('layouts.prisonner')

@section('main')
    <section class="grid grid-cols-3 gap-5 p-20">
        <a href="{{ route('prisonner.applications') }}" class="col-span-3 flex items-center gap-3 pb-10 font-semibold text-lg">
            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M4 12L8 8M4 12L8 16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            <span>Return Back</span>
        </a>
        <div class="flex flex-col gap-5 bg-[#222] p-5 rounded-md h-min shadow-sm sticky top-20">
            <div class="flex items-center gap-3 text-white">
                <img src="{{ asset('storage/'. $application->offer->recruiter->recruiter->logo)}}" class="w-8 h-8">
                <div class="flex flex-col gap-1 text-sm">
                    <h1 class="font-medium ">{{ $application->offer->recruiter->recruiter->company_name }}</h1>
                    <span class="font-light text-xs">{{ $application->offer->recruiter->recruiter->sector }}</span>
                </div>
            </div>
            <p class="text-gray-400 text-xs font-light ">Published at {{ \Carbon\Carbon::parse($application->offer->created_at)->format('F d, Y') }}</p>
            <ul class="text-sm pl-3 flex flex-col gap-3 font-medium text-white">
                <li>{{ $application->offer->recruiter->recruiter->city->name }}</li>
                <li class="text-white">{{ $application->offer->type }}</li>
                @if ($application->offer->status == 'closed')
                    <li class="text-red-400">{{ ucfirst($application->offer->status) }}</li>
                @else
                    <li class="text-green-500">{{ ucfirst($application->offer->status) }}</li>
                @endif
            </ul>
            @if($application->offer->status == 'closed')
                <p class="text-gray-300 text-xs font-light">Closed At : {{ \Carbon\Carbon::parse($application->offer->closed_at)->format('F d, Y') }}</p>
            @else
                <p class="text-gray-300 text-xs font-light">Will Close At : {{ \Carbon\Carbon::parse($application->offer->closed_at)->format('F d, Y') }}</p>
            @endif
        </div>
        <div class="relative col-span-2 bg-white p-5 rounded-md flex flex-col gap-2 shadow">
            @switch($application->status)
                @case('pending')
                    <span class="absolute top-3 right-3 py-1 px-5 text-xs text-yellow-800 bg-yellow-200 rounded-full">Pending</span>
                    @break
                @case('accepted')
                    <span class="absolute top-3 right-3 py-1 px-5 text-xs text-green-800 bg-green-200 rounded-full">Pending</span>
                    @break
                @case('interview')
                    <span class="absolute top-3 right-3 py-1 px-5 text-xs text-blue-800 bg-blue-200 rounded-full">Pending</span>
                    @break
                @case('rejected')
                    <span class="absolute top-3 right-3 py-1 px-5 text-xs text-red-800 bg-red-200 rounded-full">Pending</span>
                    @break    
            @endswitch
            <h1 class="font-semibold text-2xl text-blue-600">{{ $application->offer->title }}</h1>
            <p class="text-xs text-gray-500">Applyed At : <span class="ml-2">{{ \Carbon\Carbon::parse($application->created_at)->format('F d, Y') }}</span></p>
            <div class="mt-3">
                {!!  $application->offer->description !!}
            </div>
            <div class="m-5 bg-[#EDF2F7] p-5 rounded-md">
                <h1 class="font-medium mb-3">Message Sent</h1>
                <p class="font-light text-sm text-justify">{{ $application->message }}</p>
            </div>
            <div class="flex items-center justify-end gap-3">
                <span class="font-medium text-sm">Pièces Jointes :</span> 
                <a href="{{ asset('storage/'.$application->cv) }}" download="{{ 'CV-'.Auth::user()->f_name.'-'.Auth::user()->l_name}}.pdf">
                    <svg fill="#E7000B" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="0 0 45.057 45.057" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g id="_x35_8_24_"> <g> <path d="M19.558,25.389c-0.067,0.176-0.155,0.328-0.264,0.455c-0.108,0.129-0.24,0.229-0.396,0.301 c-0.156,0.072-0.347,0.107-0.57,0.107c-0.313,0-0.572-0.068-0.78-0.203c-0.208-0.137-0.374-0.316-0.498-0.541 c-0.124-0.223-0.214-0.477-0.27-0.756c-0.057-0.279-0.084-0.564-0.084-0.852c0-0.289,0.027-0.572,0.084-0.853 c0.056-0.281,0.146-0.533,0.27-0.756c0.124-0.225,0.29-0.404,0.498-0.541c0.208-0.137,0.468-0.203,0.78-0.203 c0.271,0,0.494,0.051,0.666,0.154c0.172,0.105,0.31,0.225,0.414,0.361c0.104,0.137,0.176,0.273,0.216,0.414 c0.04,0.139,0.068,0.25,0.084,0.33h2.568c-0.112-1.08-0.49-1.914-1.135-2.502c-0.644-0.588-1.558-0.887-2.741-0.895 c-0.664,0-1.263,0.107-1.794,0.324c-0.532,0.215-0.988,0.52-1.368,0.912c-0.38,0.392-0.672,0.863-0.876,1.416 c-0.204,0.551-0.307,1.165-0.307,1.836c0,0.631,0.097,1.223,0.288,1.77c0.192,0.549,0.475,1.021,0.847,1.422 s0.825,0.717,1.361,0.949c0.536,0.23,1.152,0.348,1.849,0.348c0.624,0,1.18-0.105,1.668-0.312 c0.487-0.209,0.897-0.482,1.229-0.822s0.584-0.723,0.756-1.146c0.172-0.422,0.259-0.852,0.259-1.283h-2.593 C19.68,25.023,19.627,25.214,19.558,25.389z"></path> <polygon points="26.62,24.812 26.596,24.812 25.192,19.616 22.528,19.616 25.084,28.184 28.036,28.184 30.713,19.616 28,19.616 "></polygon> <path d="M33.431,0H5.179v45.057h34.699V6.251L33.431,0z M36.878,42.056H8.179V3h23.706v4.76h4.992L36.878,42.056L36.878,42.056z"></path> </g> </g> </g> </g></svg>
                </a>
                <a href="{{ asset('storage/'.$application->motivation_letter) }}" download="{{ 'Lettre-Motivation-'.Auth::user()->f_name.'-'.Auth::user()->l_name}}.pdf">    
                    <svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 309.267 309.267" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path style="fill:#E2574C;" d="M38.658,0h164.23l87.049,86.711v203.227c0,10.679-8.659,19.329-19.329,19.329H38.658 c-10.67,0-19.329-8.65-19.329-19.329V19.329C19.329,8.65,27.989,0,38.658,0z"></path> <path style="fill:#B53629;" d="M289.658,86.981h-67.372c-10.67,0-19.329-8.659-19.329-19.329V0.193L289.658,86.981z"></path> <path style="fill:#FFFFFF;" d="M217.434,146.544c3.238,0,4.823-2.822,4.823-5.557c0-2.832-1.653-5.567-4.823-5.567h-18.44 c-3.605,0-5.615,2.986-5.615,6.282v45.317c0,4.04,2.3,6.282,5.412,6.282c3.093,0,5.403-2.242,5.403-6.282v-12.438h11.153 c3.46,0,5.19-2.832,5.19-5.644c0-2.754-1.73-5.49-5.19-5.49h-11.153v-16.903C204.194,146.544,217.434,146.544,217.434,146.544z M155.107,135.42h-13.492c-3.663,0-6.263,2.513-6.263,6.243v45.395c0,4.629,3.74,6.079,6.417,6.079h14.159 c16.758,0,27.824-11.027,27.824-28.047C183.743,147.095,173.325,135.42,155.107,135.42z M155.755,181.946h-8.225v-35.334h7.413 c11.221,0,16.101,7.529,16.101,17.918C171.044,174.253,166.25,181.946,155.755,181.946z M106.33,135.42H92.964 c-3.779,0-5.886,2.493-5.886,6.282v45.317c0,4.04,2.416,6.282,5.663,6.282s5.663-2.242,5.663-6.282v-13.231h8.379 c10.341,0,18.875-7.326,18.875-19.107C125.659,143.152,117.425,135.42,106.33,135.42z M106.108,163.158h-7.703v-17.097h7.703 c4.755,0,7.78,3.711,7.78,8.553C113.878,159.447,110.863,163.158,106.108,163.158z"></path> </g> </g></svg>
                </a>
            </div>
        </div>
    </section>
@endsection