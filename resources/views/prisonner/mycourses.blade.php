@extends('layouts.prisonner')


@section('main')
    @if (count($courses) == 0)
        <div class="flex items-center justify-center py-10 h-64">
            <h1 class="text-xl font-light text-gray-500">No courses available at the moment.</h1>
        </div>
    @else
        <section class="py-10 px-20 grid grid-cols-3 gap-5">
            @foreach ($courses as $course)
                <div class="flex flex-col gap-3 p-3  rounded-md shadow-sm bg-white">
                    <div class="relative">
                        <img src="{{ asset('storage/'. $course->cover) }}" class="rounded-md">
                        <span class="absolute top-2 right-2 bg-[#D6FF40] text-[#222] text-xs font-medium px-2 py-1 rounded-md">{{ $course->category_name }}</span>
                    </div>
                    <a href="{{ route('prisonner.course', $course->id) }}" class="font-medium text-xl text-center transition-all ease-in-out duration-300 hover:text-[#E19219] hover:underline">{{ $course->title }}</a>
                    <p class="text-gray-500 text-sm text-center font6light">{{ substr($course->description, 0, 100).'...' }}</p>
                    <form method="POST" action="{{ route('prisonner.course.unenroll') }}" class="flex ">
                        @csrf
                        <input type="hidden" name="id_course" value="{{ $course->id }}">
                        <button class="flex-1 cursor-pointer py-1 text-sm text-white font-medium bg-[#222] rounded-md  transition-all ease-in-out duration-300 hover:bg-[#D6FF40] hover:text-[#222]">Unsubscribe</button>
                    </form>
                </div>
            @endforeach
        </section>
    @endif
@endsection