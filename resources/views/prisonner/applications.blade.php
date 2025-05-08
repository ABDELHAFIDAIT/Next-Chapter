@extends('layouts.prisonner')


@section('main')
    <div class="p-20">
        <h1 class="font-medium text-xl ml-3 mb-10 text-gray-500">There is The List of Your Offers Applications</h1>
        <div class="">
            <div class="grid grid-cols-2 gap-5">
                @if (count($applications) == 0)
                    <div class="col-span-2 flex items-center justify-center h-96">
                        <h1 class="text-xl font-medium text-gray-400">No Offers Found for The Moment !</h1>
                    </div>
                @else
                    @foreach ($applications as $application)
                        <div class="relative rounded-md shadow-md border bg-white border-gray-200 p-5">
                            @switch($application->status)
                                @case('pending')
                                    <span class="absolute top-3 right-3 py-1 px-5 text-xs text-yellow-800 bg-yellow-200 rounded-full">Pending</span>
                                    @break
                                @case('accepted')
                                    <span class="absolute top-3 right-3 py-1 px-5 text-xs text-green-800 bg-green-200 rounded-full">Accepted</span>
                                    @break
                                @case('interview')
                                    <span class="absolute top-3 right-3 py-1 px-5 text-xs text-blue-800 bg-blue-200 rounded-full">Interview</span>
                                    @break
                                @case('rejected')
                                    <span class="absolute top-3 right-3 py-1 px-5 text-xs text-red-800 bg-red-200 rounded-full">Rejected</span>
                                    @break    
                            @endswitch
                            <h2 class="text-semibold text-2xl mb-1">
                                <a href="{{ route('prisonner.application', $application->id) }}" class="hover:text-blue-500 transition">{{ $application->offer->title }}</a>
                            </h2>
                            <div class="mb-5">
                                <span class="py-1 px-5 bg-[#D6FF40] text-xs rounded-full font-medium">{{ $application->offer->type }}</span>
                            </div>
                            <p class="">{!! substr($application->offer->description,0,200) !!} ...</p>
                            <div class="mt-3">
                                @if($application->offer->status == 'closed') 
                                    <span class="text-red-500">Closed</span>
                                @else
                                    <span class="text-green-500">Opened</span>
                                @endif
                            </div>
                            <div class="flex items-center justify-between mt-5">
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('storage/'. $application->offer->recruiter->recruiter->logo)}}" class="w-8 h-8">
                                    <div class="flex flex-col gap-1 text-sm">
                                        <h1 class="font-medium ">{{ $application->offer->recruiter->recruiter->company_name }}</h1>
                                        <span class="font-light text-xs">{{ $application->offer->recruiter->recruiter->sector }}</span>
                                    </div>
                                </div>
                                <a href="{{ route('prisonner.application', $application->id) }}">
                                    <button class="curs mt-4 px-6 py-2 text-xs rounded-md text-white font-medium bg-[#222] transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-black cursor-pointer">View Details</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection