@extends('layouts.prisonner')


@section('main')
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    <section class="container px-20 py-16">
        <div class="grid grid-cols-[350px_1fr]">
            <div class="bg-[#222] text-white rounded-md shadow-md border border-gray-200 px-6 py-5 h-min">
                <h2 class="text-lg mb-7 font-semibold text-[#D6FF40]">Offer Details</h2>
                <div class="mb-3 flex items-center gap-5">
                    <h3 class="font-medium mb-1">Type :</h3>
                    <span class="font-light">{{ $offer->type }}</span>
                </div>
                <div class="mb-3 flex items-center gap-5">
                    <h3 class="font-medium mb-1">Sector :</h3>
                    <span class="font-light">{{ $offer->recruiter->recruiter->sector }}</span>
                </div>
                <div class="mb-3 flex items-center gap-5">
                    <h3 class="font-medium mb-1">Status :</h3>
                    @if ($offer->status == 'closed')
                        <span class="text-red-500">Closed</span>
                    @else
                        <span class="text-green-400">Opened</span>
                    @endif
                </div>
                <div class="mb-3 flex items-center gap-5">
                    @if ($offer->status == 'closed')
                        <h3 class="font-medium">Closed At :</h3>
                    @else
                        <h3 class="font-medium">Will Close At :</h3>
                    @endif
                    <span class="font-light">April 25, 2025</span>
                </div>
            </div>
            <div class="px-8 py-5">
                <div class="mb-4">
                    <h1 class="font-semibold text-3xl text-blue-600">{{ $offer->title }}</h1>
                    <span class="text-gray-500">{{ \Carbon\Carbon::parse($offer->created_at)->format('F d, Y') }}</span>
                </div>
                <div class="flex gap-3">
                    <img src="{{ asset('storage/'. $offer->recruiter->recruiter->logo) }}" class="w-6" />
                    <span>{{ $offer->recruiter->recruiter->company_name }}</span>
                </div>
                <p class="mb-5">{!! $offer->description !!}</p>
                @if ($offer->status == 'opened')
                    <button type="button" class="cursor-pointer font-medium text-sm text-white items-center flex gap-3 rounded-md px-6 py-3 bg-blue-500 mt-5" id="apply-btn">
                        <svg class="w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc. --><path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l82.7 0L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3l0 82.7c0 17.7 14.3 32 32 32s32-14.3 32-32l0-160c0-17.7-14.3-32-32-32L320 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                        Apply Now
                    </button>
                @else
                    <button disabled type="button" class="cursor-pointer font-medium text-sm text-white items-center flex gap-3 rounded-md px-6 py-3 bg-gray-300 mt-5" id="apply-btn">
                        <svg class="w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc. --><path d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l82.7 0L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3l0 82.7c0 17.7 14.3 32 32 32s32-14.3 32-32l0-160c0-17.7-14.3-32-32-32L320 0zM80 32C35.8 32 0 67.8 0 112L0 432c0 44.2 35.8 80 80 80l320 0c44.2 0 80-35.8 80-80l0-112c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 112c0 8.8-7.2 16-16 16L80 448c-8.8 0-16-7.2-16-16l0-320c0-8.8 7.2-16 16-16l112 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L80 32z"/></svg>
                        Apply Now
                    </button>
                @endif
            </div>
        </div>
    </section>

    <section class="fixed inset-0 bg-black/70 hidden items-center justify-center z-50" id="apply-modal">
        <div class="bg-[#EDF7F1] rounded-md w-1/2 flex flex-col gap-5">
            <div class="bg-[#222] text-white flex items-center justify-between py-5 px-10 rounded-t-md">
                <h1 class="font-medium text-white text-2xl">Apply For Offer</h1>
                <button id="modal-close-btn" class="cursor-pointer transition-all ease-in-out duration-300 hover:text-red-500">
                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 18L18 6M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            <div class="pb-5 px-5">
                <form id="apply-form" method="POST" action="{{ route('prisonner.offer.apply') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_offer" value="{{ $offer->id }}">
                    <div class="flex-1 mb-3">
                        <label class="bg-white flex cursor-pointer h-28 rounded border border-gray-200 items-center gap-3 justify-center" for="motivation-letter">
                            <svg class="h-5 w-5 fill-red-600"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0L224 0l0 128c0 17.7 14.3 32 32 32l128 0 0 144-208 0c-35.3 0-64 28.7-64 64l0 144-48 0c-35.3 0-64-28.7-64-64L0 64zm384 64l-128 0L256 0 384 128zM176 352l32 0c30.9 0 56 25.1 56 56s-25.1 56-56 56l-16 0 0 32c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-48 0-80c0-8.8 7.2-16 16-16zm32 80c13.3 0 24-10.7 24-24s-10.7-24-24-24l-16 0 0 48 16 0zm96-80l32 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-32 0c-8.8 0-16-7.2-16-16l0-128c0-8.8 7.2-16 16-16zm32 128c8.8 0 16-7.2 16-16l0-64c0-8.8-7.2-16-16-16l-16 0 0 96 16 0zm80-112c0-8.8 7.2-16 16-16l48 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 32 32 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-32 0 0 48c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-64 0-64z"/></svg>
                            Letter of motivation
                        </label>
                        <input name="motivation_letter" accept=".pdf" type="file" class="hidden" id="motivation-letter">
                    </div>
                    <div class="flex-1">
                        <label class="mb-1 block ml-5">Message</label>
                        <textarea name="message" class="bg-white w-full py-2 px-3 rounded border outline-none border-gray-200 resize-none h-32" placeholder="Short message showing your disponibility for an interview"></textarea>
                    </div>
                    <button type="submit" class="py-2 px-7 mt-1 rounded cursor-pointer bg-[#222] text-white flex gap-2 items-center transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-black">
                        <svg fill="currentColor" class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc. --><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                        Apply
                    </button>
                </form>
            </div>
        </div>
    </section>
    
@endsection

@section('script')
    <script>
        const applyModal = document.getElementById('apply-modal');
        const applyForm = document.getElementById('apply-form');

        document.getElementById('modal-close-btn').onclick = function () {
            applyModal.classList.add('hidden');
            applyModal.classList.remove('flex');
            applyForm.reset()
        }

        document.getElementById('apply-btn').onclick = () => {
            applyModal.classList.remove('hidden');
            applyModal.classList.add('flex');
        }
    </script>
@endsection